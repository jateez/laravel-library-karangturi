<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\EducationalArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class EducationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = EducationalArticle::paginate(12);
        // Pass the articles data to the view
        return view('educational.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('educational.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:5120',
        ], [
            'image.image' => 'The selected file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image must not exceed 2048 kilobytes.',
        ]);

        // Get the current authenticated user
        $user = Auth::user();

        // Upload the image file if present
        if ($request->hasFile('image')) {
            $imageName = $request->file('image')->store('images', 'public');
        } else {
            $imageName = null;
        }

        // Create a new news article record in the database
        $article = EducationalArticle::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => $imageName, // Save only the image name without the 'public/images' path
            'slug' => Str::slug($request->title),
            'author' => $user->name, // Set the author field to the user's name
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('educational.index')->with('success', 'Educational article created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id, $slug)
    {
        // Find the educational article by its ID
        $article = EducationalArticle::findOrFail($id);

        // Check if the provided slug matches the article's slug
        if ($slug !== $article->slug) {
            return redirect()->route('educational.show', [$id, $article->slug]);
        }

        // Pass the article data to the view
        return view('educational.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the educational article by its ID
        $article = EducationalArticle::findOrFail($id);

        // Pass the article data to the view
        return view('educational.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ], [
            'image.image' => 'The selected file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif.',
            'image.max' => 'The image must not exceed 2048 kilobytes.',
        ]);

        // Find the educational article by its ID
        $article = EducationalArticle::findOrFail($id);

        // Upload the image file if present
        if ($request->hasFile('image')) {
            // Generate a unique file name for the image
            $imageName = $request->file('image')->store('images', 'public');

            // Delete the old image file if exists
            if ($article->image) {
                Storage::delete('public/' . $article->image);
            }

            // Save the image name without the 'public/images' path
            $article->image = $imageName;
        }

        // Update the educational article record in the database
        $article->title = $request->title;
        $article->content = $request->content;
        $article->slug = Str::slug($request->title);
        $article->save();

        // Redirect to the index page with a success message
        return redirect()->route('educational.index')->with('success', 'Educational article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the educational article by its ID
        $article = EducationalArticle::findOrFail($id);

        // Delete the image file if exists
        if ($article->image) {
            $imagePath = public_path('images') . '/' . $article->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the educational article record from the database
        $article->delete();

        // Redirect to the index page with a success message
        return redirect()->route('educational.index')->with('success', 'Educational article deleted successfully.');
    }

    public function search(Request $request)
    {
        $searchQuery = $request->input('search_query');

        // Get the educational articles that match the search query
        $articles = EducationalArticle::where('title', 'like', '%' . $searchQuery . '%')
            ->orWhere('content', 'like', '%' . $searchQuery . '%')
            ->paginate(12);

        // Pass the articles data and search query to the view
        return view('educational.index', compact('articles', 'searchQuery'));
    }
}

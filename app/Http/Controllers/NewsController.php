<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\NewsArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all news articles from the database
        $articles = NewsArticle::all();

        // Pass the articles data to the view
        return view('news.index', compact('articles'));
        // return view('news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
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
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the current authenticated user
        $user = Auth::user();

        // Upload the image file if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
        }

        // Create a new news article record in the database
        $article = NewsArticle::create([
            'title' => $request->title,
            'content' => $request->content,
            'image' => isset($imageName) ? $imageName : null,
            'slug' => Str::slug($request->title),
            'author' => $user->name, // Set the author field to the user's name
        ]);

        // Redirect to the index page with a success message
        return redirect()->route('news.index')->with('success', 'News article created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, $slug)
    {
        // Find the news article by its ID
        $article = NewsArticle::findOrFail($id);

        // Check if the provided slug matches the article's slug
        if ($slug !== $article->slug) {
            return redirect()->route('news.show', [$id, $article->slug]);
        }

        // Pass the article data to the view
        return view('news.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the news article by its ID
        $article = NewsArticle::findOrFail($id);

        // Pass the article data to the view
        return view('news.edit', compact('article'));
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
        ]);

        // Find the news article by its ID
        $article = NewsArticle::findOrFail($id);

        // Upload the image file if present
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);

            // Delete the old image file if exists
            if ($article->image) {
                $oldImagePath = public_path('images') . '/' . $article->image;
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
            }

            $article->image = $imageName;
        }

        // Update the news article record in the database
        $article->title = $request->title;
        $article->content = $request->content;
        $article->slug = Str::slug($request->title);
        $article->save();

        // Redirect to the index page with a success message
        return redirect()->route('news.index')->with('success', 'News article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the news article by its ID
        $article = NewsArticle::findOrFail($id);

        // Delete the image file if exists
        if ($article->image) {
            $imagePath = public_path('images') . '/' . $article->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the news article record from the database
        $article->delete();

        // Redirect to the index page with a success message
        return redirect()->route('news.index')->with('success', 'News article deleted successfully.');
    }
}

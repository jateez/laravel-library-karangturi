<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book; // Import the Book model

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Get all books from the database
        $books = Book::all();

        // Return the view and pass the books data to it
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Return the view for creating a new book
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_year' => 'required|numeric',
            'publisher' => 'required',
            'stock' => 'required|numeric',
        ]);

        // Create a new book record in the database
        Book::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('books.index')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Find the book by its ID
        $book = Book::findOrFail($id);

        // Return the view and pass the book data to it
        return view('books.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Find the book by its ID
        $book = Book::findOrFail($id);

        // Return the view for editing the book and pass the book data to it
        return view('books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the request data
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'publication_year' => 'required|numeric',
            'publisher' => 'required',
            'stock' => 'required|numeric',
        ]);

        // Find the book by its ID
        $book = Book::findOrFail($id);

        // Update the book record in the database
        $book->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the book by its ID
        $book = Book::findOrFail($id);

        // Delete the book record from the database
        $book->delete();

        // Redirect to the index page with a success message
        return redirect()->route('books.index')->with('success', 'Book deleted successfully.');
    }
}

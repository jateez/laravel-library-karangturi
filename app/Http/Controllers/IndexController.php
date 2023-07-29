<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        // Your logic to fetch data or perform any other actions for the index page
        // For example, if you want to get recent news articles, you can do the following:
        $recentNewsArticles = \App\Models\NewsArticle::latest()->take(5)->get();
        $totalBooksCount = \App\Models\Book::sum('stock');
        $totalBooksTitle = \App\Models\Book::distinct()->count('title');



        return view('index', compact('recentNewsArticles', 'totalBooksCount', 'totalBooksTitle'));
    }
}

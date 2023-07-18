<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrixController extends Controller
{
    public function index()
    {
        return view('trix');
    }

    public function store(Request $request)
    {
    }

    public function upload(Request $request)
    {
    }
}

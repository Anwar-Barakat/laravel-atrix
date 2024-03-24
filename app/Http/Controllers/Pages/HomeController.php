<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $latestArticles = Post::latest()->take(3)->get();
        return view('pages.home', compact('latestArticles'));
    }
}

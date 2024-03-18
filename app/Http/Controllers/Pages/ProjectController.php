<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('pages.projects.index');
    }

    public function show()
    {
        return view('pages.projects.show');
    }
}

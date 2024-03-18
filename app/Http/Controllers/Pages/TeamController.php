<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        return view('pages.teams.index');
    }

    public function show()
    {
        return view('pages.teams.show');
    }
}

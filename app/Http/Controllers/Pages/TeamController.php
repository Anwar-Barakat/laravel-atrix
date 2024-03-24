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

    public function show1()
    {
        return view('pages.teams.show1');
    }
    public function show2()
    {
        return view('pages.teams.show2');
    }
    public function show3()
    {
        return view('pages.teams.show3');
    }
    public function show4()
    {
        return view('pages.teams.show4');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 'seclect * from movies'
        $movies = Movie::all();

        // dd($movies);

        return view('welcome', compact('movies'));
    }
}

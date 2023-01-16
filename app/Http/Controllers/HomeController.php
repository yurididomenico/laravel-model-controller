<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // 'seclect * from movies'
        $movie = Movie::all();



        return view('welcome');
    }
}

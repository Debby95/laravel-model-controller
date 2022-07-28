<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller 
{
    function index()
    {
        $movies = Movie::all();
        return view('home', compact('movies'));
    }
}
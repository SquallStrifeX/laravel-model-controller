<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index(){
        $movies = Movie::orderBy('title')->get();
        return view('welcome', compact('movies'));
    }

public function show($id){
$movies = Movie::all();
$movie = $movies->find($id);
return view("/welcome.show", compact("movie"));
}
}

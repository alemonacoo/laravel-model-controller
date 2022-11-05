<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Movies;

class PageController extends Controller
{
    public function index(){
        $movies = Movies::all();
        return view('Homepage', compact('movies'));
    }
}

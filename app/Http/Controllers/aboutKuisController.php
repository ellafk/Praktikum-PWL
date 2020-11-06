<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class aboutKuisController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function aboutKuis(){
    	return view('aboutKuis');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class aboutKuisController extends Controller
{
    public function aboutKuis(){
    	return view('aboutKuis');
    }
}

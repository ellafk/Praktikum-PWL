<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class tentangKuisController extends Controller
{
    public function tentangKuis(){
    	return view('tentangKuis');
    }
}

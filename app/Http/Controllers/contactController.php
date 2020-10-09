<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;


class contactController extends Controller
{
    public function contactKuis(){
    	return view ('contactKuis');
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;
class aboutController extends Controller
{
    public function about(){
    	return view('about');
    }
}

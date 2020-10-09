<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class kuisController extends Controller
{
    public function kuis(){
    	$hasil = Article::all();
 		return view('hp',['lihat'=> $hasil]);
    }
}

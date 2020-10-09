<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use \Cache;

class articleKuisController extends Controller
{
    public function articleKuis($id){
    	$id=2;
    	$value=Cache::remember('lihat', now()->addMinutes(5), function()use($id){

    	});
    	$li=Article::find($id);
    	return view ('articleKuis',['lihat'=>$li]);
}
}

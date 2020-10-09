<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\article;

class articlesController extends Controller
{
    public function article(){
    	return view ('article');
    	$hasil = article::find($id);
    	$articles = json_decode(json_encode($articles));
    	return view('modif', ['hasil' => $hasil]);//, ['id'=>$id]);
    	$value = Cache::rememberForever('articles',function(){
    		return \app\articles::all();
    	});
    }
}

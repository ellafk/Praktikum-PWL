<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Article;
class homeController extends Controller
 {
	// public function home(){
	// 	$article = Article::all();
	// 	return view ('home',['article'=>$article]);
	// }
	// public function home1($id){
	// 	$article = Article::find($id){
	// 	return view('home',['article'=>$article],['id'=>$id]);
	// 	}
	// }
 //    public function __invoke(){
 //    	$articlesAll = article::all();
 //    	$articles = json_decode(json_encode($articlesAll));
 //    	return view('home')->with(compact('articlesAll'));

 //    	$value = Cache::rememberForever('articles',function(){
 //    		return articles::all();
 //    	});
 //    }

 //    public function home1($id){
 //    	$article=Article::find($id);
 //    	return view ('database.blade',['article'=>$article],['id'=>$id]);
 //    }


    // public function home(){
    // return view('home');
    public function hp(){
        $li=article::all();
        return view('hp', ['lihat'=>$li]);
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use \Cache;

class ArticleController extends Controller
{
    public function index(){
 $article = Article::all();
 return view('manage',['article' => $article]);
 }
 public function add(){
 return view('addarticle');
 }

 public function create(Request $request){
 Article::create([
 'title' => $request->title,
 'content' => $request->content,
 'imageUrl' => $request->image
 ]);
 return redirect('/manage');
 }

 public function edit($id){
 $article = Article::find($id);
 return view('editarticle',['article'=>$article]);
 }

 public function update($id, Request $request){
 $article = Article::find($id);
 $article->title = $request->title;
 $article->content = $request->content;
 $article->imageUrl = $request->image;
 $article->save();
 return redirect('/manage');
 }

 public function delete($id)
 {
 $article = Article::find($id);
 $article->delete();
 return redirect('/manage');
 }
}

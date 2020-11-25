<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use PDF;


class ArticleController extends Controller
{
    public function __construct()
    {
     //$this->middleware('auth');
     $this->middleware(function($request, $next){
     if(Gate::allows('manage')) return $next($request);
     abort(403, 'Anda tidak memiliki cukup hak akses');
     });
    }
    
    public function index(){
    $article = Article::all();
    return view('manage',['article' => $article]);
    }
    public function add(){
    return view('addarticle');
    }

 public function create(Request $request)
{
 if($request->file('image')){
 $image_name = $request->file('image')->store('images','public');
 }
 Article::create([
 'title' => $request->title,
 'content' => $request->content,
 'imageUrl' => $image_name,
 ]);
 return redirect('/manage');
}


 public function edit($id){
 $article = Article::find($id);
 return view('editarticle',['article'=>$article]);
 }
//p10
 public function update($id, Request $request)
{
 $article = Article::find($id);
 $article->title = $request->title;
 $article->content = $request->content;

 if($article->imageUrl && file_exists(storage_path('app/public/' . $article->imageUrl)))
 {
 \Storage::delete('public/'.$article->imageUrl);
 }
 $image_name = $request->file('image')->store('images', 'public');
 $article->imageUrl = $image_name;

 $article->save();
 return redirect('/manage');
}

public function cetak_pdf(){
    $article = Article::all();
    $pdf = PDF::loadview('articles_pdf',['article'=>$article]);
    return $pdf->stream();
   }  

 public function delete($id)
 {
 $article = Article::find($id);
 $article->delete();
 return redirect('/manage');
 }
}

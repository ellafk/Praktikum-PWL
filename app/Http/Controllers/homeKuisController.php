<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use \Cache;
class homeKuisController extends Controller
{
     public function index(){
     		 return view('homeKuis');
    }
}

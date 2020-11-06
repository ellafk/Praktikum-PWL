<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use \Cache;
use Illuminate\Support\Facades\Gate;

class homeKuisController extends Controller
{
    public function __construct(){
        $this->middleware('auth');

    }
     public function index(){
     		 return view('homeKuis');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
    	return "selamat datang";
    }
    public function about(){
    	return "NAMA : ELLA FITRI K <br> NIM : 1931710023";
    }
    public function articles($id){
    	return "artikel dengan ID : ".$id;
    }
}

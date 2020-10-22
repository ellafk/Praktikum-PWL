<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use \Cache;

class article extends Model
{
    protected $fillable = ['title','content','featured_image'];   
}

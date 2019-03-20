<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index(){
    	$quotes = Post::quotes()->paginate(20);
    }
}

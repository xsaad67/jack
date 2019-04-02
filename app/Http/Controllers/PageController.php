<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index(){

        // dd(\App\Tag::templateTags()->take(30));
    	$quotes = Post::quotes()->where(\DB::raw(' length(body)'),'<=',200)->inRandomOrder()->paginate(20);
        return view('pages.index',compact("quotes","imagesArray"));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Faker\Factory  as Faker;

class PageController extends Controller
{
    public function index(){

        $quotes = Post::quotes()->where(\DB::raw(' length(body)'),'<=',200)->paginate(20);
        return view('pages.index',compact("quotes","imagesArray"));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	
    }

}

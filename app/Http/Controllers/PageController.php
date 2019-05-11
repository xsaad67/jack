<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Faker\Factory as Faker;

class PageController extends Controller
{
    public function index(Request $request){
        $quotes= Post::displayMainQuotes();
        return view('pages.index',compact("quotes","imagesArray"));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	
    }

}

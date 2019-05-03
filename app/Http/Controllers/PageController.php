<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Faker\Factory  as Faker;

class PageController extends Controller
{
    public function index(Request $request){

        $quotes = Post::quotes()->where(\DB::raw(' length(body)'),'<=',200)->paginate(20);
        // if ($request->ajax()) {
        //     $view = view('quotes.index',compact('quotes'))->render();
        //     return response()->json(['html'=>$view]);
        // }

        
        return view('pages.index',compact("quotes","imagesArray"));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	
    }

}

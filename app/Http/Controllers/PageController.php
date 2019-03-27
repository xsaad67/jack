<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PageController extends Controller
{
    public function index(){
    	$quotes = Post::quotes()->where(\DB::raw(' length(body)'),'<=',200)->inRandomOrder()->paginate(20);

        // return $quotes;

        $imagesArray = [
                        '/assets/img/prv/img-2-800x600.jpg',
                        '/assets/img/prv/img-3-800x600.jpg',
                        null
                    ];


        return view('pages.index',compact("quotes","imagesArray"));
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	
    }

}

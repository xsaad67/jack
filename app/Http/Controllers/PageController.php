<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Faker\Factory  as Faker;

class PageController extends Controller
{
    public function index(){
        // return rand(100,300) / 10;
        // $array = ['NSW','QLD','NT','VIC','SA','ACT','WA','TAS'];
        // $faker = Faker::create();
        // foreach($array as $arr){
        //     $address = $faker->address.", ".$arr;
        //     $reply = new \App\Reply();
        //     $reply->name = $faker->name;
        //     $reply->email = $faker->email;
        //     $reply->location =$address;
        //     $reply->start_date = $faker->date;
        //     $reply->delivery_address = $address;
        //     $reply->state=$arr;
        //     $reply->save();
        // }

        // dd(\App\Tag::templateTags()->take(30));
    	// $quotes = Post::quotes()->where(\DB::raw(' length(body)'),'<=',200)->inRandomOrder()->paginate(20);
        // return view('pages.index',compact("quotes","imagesArray"));
        
    }

    public function create(){
    	return view('posts.create');
    }

    public function store(){
    	
    }

}

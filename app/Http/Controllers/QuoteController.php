<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Goutte;
use Illuminate\Database\Eloquent\Builder;

use GDText\Box;
use GDText\Color;

use App\ImageTemplates;

ini_set('max_execution_time', 6890);


class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $font = randomFont();  
        $posts = Post::quotes()
                    ->where(\DB::raw(' length(body)'),'<',100)
                    ->whereDoesntHave('media')
                    ->inRandomOrder()->take(1)->get();

        foreach($posts as $post){
            $str = $post->body;
            $templateName = storage_path('app/public/templates/'.ImageTemplates::inRandomOrder()->first()->imageName);
            dd(createQuote($templateName,$str,$post->author->name));
        }

     

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // \Debugbar::debugJSON();
        $quote = Post::where('slug',$slug)->firstOrFail();
        $navigation = Post::disableRelationships()->where('author_id',$quote->author_id)->where('id','!=',$quote->id)->take(2)->get();
        return view('quotes.show',compact('quote','navigation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}

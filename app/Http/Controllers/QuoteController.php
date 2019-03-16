<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Goutte;
use Illuminate\Database\Eloquent\Builder;

use GDText\Box;
use GDText\Color;

ini_set('max_execution_time', 6890);

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // return Post::count();
         // return Post::quotes()->where(\DB::raw(' length(body)'),'<=',200)->count();

        $post = Post::quotes()
                    ->where(\DB::raw(' length(body)'),'<=',200)
                    ->whereDoesntHave('media')
                    ->inRandomOrder()->first();
        
        $str = $post->body;
        $im = imagecreatefromjpeg(public_path("images/templates/4.jpg"));
        $box = new Box($im);
        $fontLocation=storage_path('app\public\fonts\quantify.ttf');
        $box->setFontFace($fontLocation); 
        $box->setFontColor(new Color(255, 255, 255));
        $box->setTextShadow(new Color(0, 0, 0, 50), 1,1);
        $box->setFontSize(60);
        $box->setBox(250, 200, 700, 400);
        $box->setBackgroundColor(new Color(21, 20, 20, 35));
        $box->setTextAlign('center', 'center');
        $box->draw($str."\n ~ Nothing \n Mynameofcompany.com");
        header("Content-type: image/png");
        imagepng($im);

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
    public function show(Quote $quote)
    {
        //
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

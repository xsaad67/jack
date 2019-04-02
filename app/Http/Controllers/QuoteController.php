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

        $fontsArray = [];
        $files = \File::files(storage_path('app/public/fonts'));

        foreach($files as $file){
            $fontsArray[]=$file->getFileName();
        }

        $fontName = $fontsArray[array_rand($fontsArray)];


        // dd("yes");
        
        $templateName = storage_path('app/public/templates/'.ImageTemplates::inRandomOrder()->first()->imageName);

        $post = Post::quotes()
                    ->where(\DB::raw(' length(body)'),'<=',200)
                    ->whereDoesntHave('media')
                    ->inRandomOrder()->first();
        
        $str = $post->body;
        $im = imagecreatefrompng($templateName);
        $box = new Box($im);
        $fontLocation=storage_path("app/public/fonts/".$fontName);
        $box->setFontFace($fontLocation); 
        $box->setFontColor(new Color(255, 255, 255));
        $box->setTextShadow(new Color(0, 0, 0, 50), 1,1);
        $box->setFontSize(50);
        $box->setBox(240, 200, 700, 400);
        $box->setBackgroundColor(new Color(21, 20, 20, 30));
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
    public function show($slug)
    {
        \Debugbar::debugJSON();
        $quote = Post::where('slug',$slug)->firstOrFail();
        $navigation = Post::disableRelationships()->where('author_id',$quote->author->id)->where('id','!=',$quote->id)->take(2)->get();
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

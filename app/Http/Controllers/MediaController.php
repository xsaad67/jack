<?php

namespace App\Http\Controllers;

use App\Media;
use App\Post;
use App\ImageTemplates;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $font = randomFont();  

        $posts = Post::quotes()
                    ->where(\DB::raw(' length(body)'),'<',100)
                    ->whereDoesntHave('media')
                    ->inRandomOrder()->take(1)->get();

        foreach($posts as $post){

            //Creating quote with template
            $template = ImageTemplates::inRandomOrder()->first();
            $templateName = public_path('temp/templates/'.$template->imageName);
            $quoteArray = createQuote($templateName,$post->body,$post->author->name);

            $media = new Media();
            $media->fileName = $quoteArray['fileName'];
            $media->templateId = $template->id;
            $media->post_id = $post->id;
            $media->size = $quoteArray['imageSize'];
            $media->fontSize = $quoteArray['fontSize'];
            $media->save();

            $post->featuredImage = $quoteArray['fileName'];
            $post->save();

        }

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
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Media $media)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Media  $media
     * @return \Illuminate\Http\Response
     */
    public function destroy(Media $media)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use App\Thread;

class CommentController extends Controller
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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comment = new Comment();
        $comment->body = $request->get('comment_body');
        $comment->user_id=1;
        $thread = Thread::find($request->get('post_id'));
        
        $comment  = $thread->comments()->save($comment);
        
        if($request->wantsJson()){
            $html = view("comments.singleComment",["comment"=>$comment,'post_id'=>$thread->id])->render();
            return response()->json(['html'=>$html,'success'=>true]);  
        }else{
            return redirect()->back();
        }
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();
        
        $reply->body = $request->get('comment_body');
        $reply->user_id = auth()->id();
        $reply->parent_id = $request->get('comment_id');
        $thread = Thread::find($request->get('post_id'));

        $comment  = $post->comments()->save($reply);

        if($request->wantsJson()){
            $html = view("partials._single_comment",["comment"=>$comment,'post_id'=>$post->id])->render();
            return response()->json(['html'=>$html,'success'=>true]);
        }else{
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Thread;

class ThreadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $threads = Thread::with('user')->paginate(5);
        return view("threads.index",compact('threads'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('threads.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $thread = new Thread();
        $thread->category_id = $request->category;
        $thread->title = $request->title;
        $thread->body = $request->body;
        $thread->user_id = auth()->id();
        $isSave = $thread->save();
    }

    /**
    * Display the specified resource.
    *
    * @param  Thread  $thread
    * @return \Illuminate\Http\Response
    */
    public function show($slug)
    {
        $thread = Thread::where('slug',$slug)->firstOrFail();
        $comments = $thread->comments;
       
        return view('threads.show',compact('thread','comments'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

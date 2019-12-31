<?php

namespace App\Http\Controllers;

use App\Http\Resources\ReplyResource;
use App\posts;
use App\Reply;
use Illuminate\Http\Request;


class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post)
    {
        $post=posts::where('slug',$post)->first();
        $reply=ReplyResource::collection(Reply::where('posts_id',$post->id)->orderBy('id','desc')->get());
      return response($reply);
    //  return ReplyResource::collection($post->replies());
        
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
public function reply($id)
{
$reply=ReplyResource::collection(Reply::where('child_id',$id)->get());
return response($reply);
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($posts,Request $request,posts $post)
    {
        $post=posts::where('slug',$posts)->first();
        $request->posts_id=$post->id;
        $reply=$post->replies()->create($request->all());
        return response(new ReplyResource($reply));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(Reply $reply)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(Reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reply $reply)
    {
        //
    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PostResource;

use App\Post;

class PostController extends Controller
{
public function __construct()
    {
        $this->middleware('auth:api',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //main
            $posts=Post::all();
            return PostResource::collection($posts);

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

        $request->validate([
                'title'=>'
                required|min:10|max:10',
                'body'=>'required|min:10',
                'image'=>'required|mimes:jpeg,jpg,png|max:5000',
                'category'=>'required'
        ]);
        if($request->hasfile('image')){
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $image='/image/'.$name;
        }
        //Data insert here
         $post=Post::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'image'=>$image,
            'category_id'=>request('category'),
            'user_id'=>auth('api')->user()->id,
        ]);
        return new PostResource($post);
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $posts=Post::find($id);
        return new PostResource($posts);
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

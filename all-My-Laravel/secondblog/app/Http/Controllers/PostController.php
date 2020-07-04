<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Post;
use Validator;
use Auth;

class PostController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()


    {  
         $categories=Category::all();    

        $posts=Post::paginate(1);
        //Post== model name
        if($user_id=request('user_id')){

            $posts=Post::where('user_id',$user_id)->paginate(1);//call and get the same data item from table in comment
        }

         if($category_id=request('category_id')){

            $posts=Post::where('category_id',$category_id)->paginate(1);//call and get the same data item from table in comment
        }
       
        return view('post.main',compact('posts','categories'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories=Category::all();
        //dd($categories);

        return view ('post.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //insert data
    public function store(Request $request)
    {
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
        
        Post::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'image'=>$image,
            'category_id'=>request('category'),
            'user_id'=>Auth::user()->id,
        ]);
        return redirect()->route('post.index');
        //dd($request);
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

         $categories=Category::all();
        $post=Post::find($id);
        return view('post.index',compact('post','categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {


        $post= Post::find($id);
        $categories=Category::all();

        return view('post.edit',compact('categories','post'));
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

        if($request->hasfile('image')){
            $image=$request->file('image');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image/',$name);
            $image='/image/'.$name;
        }
        else {
            $image=request('oldimage');
        }
        $post=Post::find($id);
        $post->title=request('title');
        $post->body=request('body');     
        $post->image=$image;
        $post->category_id=request('category');
        $post->user_id=Auth::user()->id;      
        $post->save();
        return redirect()->route('post.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $post=Post::find($id);
        $post->delete();
        return redirect()->route('post.index');
    }
}

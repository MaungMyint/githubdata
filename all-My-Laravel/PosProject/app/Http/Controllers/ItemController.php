<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;

class ItemController extends Controller
{
    public function __construct($foo = null)
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $items=Item::all();
        return view('data.item',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('data.additem',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'barcode' => 'required',
            'name' => 'required|unique:items',
            'price' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:5000',
            'cost' => 'required',
            'qty' => 'required', 
        ]);

     if($request->hasfile('image'))
     {
        $image = $request->file('image');
        $name = $image->getClientOriginalName();
        $image ->move(public_path().'/image/',$name);
        $photo = '/image/'.$name;
     }
        
        
        Item::create([
            'codeno' => request('barcode'),
            'name' => request('name'),
            'price' =>  request('price'),
            'image' => $photo,
            'cost'=> request('cost'),
            'qty' => request('qty'),
            'category_id' => request('category'),
        ]);
        return redirect()->route('item.index');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items=Item::find($id);
        $categories=Category::all();
        return view('data.itemedit',compact('items','categories'));
  
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

        //photo ka itemedit ka input name
        if($request->hasfile('photo')){
            $image=$request->file('photo');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/image',$name);
            $image='/image/'.$name;
        }else{
            $image=request('oldimg');
        }
        //table column name request ka edit yae inputtype name
        $items=Item::find($id);
        $items->codeno=request('barcode');
        $items->name=request('name');
        $items->price=request('price');
        $items->image=$image;
        $items->cost=request('cost');
        $items->qty=request('qty');
        $items->category_id=request('category');
        $items->save();
        return redirect()->route('item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /*dd($id);*/
        $item=Item::find($id);
        $item->delete();
        return redirect()->route('item.index');

    }
     public function getcode(Request $request){

            $category_id=request('category_id');
            $latestItem = Item::where('category_id',$category_id)
                            ->orderBy('id', 'desc')
                            ->first();
            // return $latestItem;
            if ($latestItem) {
                $newcodeno = ++$latestItem->codeno;
            }else{
                $newcodeno = $category_id.'001';
            }

        return $newcodeno;
    }
}


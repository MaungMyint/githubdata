<?php

namespace App\Http\Controllers\Head;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\OrderReturn;
use DB;
use Auth;
class OrderReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $orders = OrderReturn::all();
        $orders = DB::table('order_returns')
                            ->join('orders','order_returns.order_id','=','orders.id')
                            ->where('orders.head_id',Auth::user()->id)
                            ->select('order_returns.*')
                            ->get();
        #dd($orders);
        return view('head.orderReturn.read',compact('orders'));
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


    public function returnDetail(Request $request)
    {
        $id = request('id');
        $returnDetail = OrderReturn::where('order_id',$id)->get();

        return $returnDetail;
    }
}

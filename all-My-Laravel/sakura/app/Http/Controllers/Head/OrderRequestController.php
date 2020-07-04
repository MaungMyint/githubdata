<?php

namespace App\Http\Controllers\Head;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use Auth;
use App\OrderReturn;
use DB;

class OrderRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $orders = Order::all();
        $orders = Order::where('head_id',Auth::user()->id)->get();
        return view('head.orderRequest.read',compact('orders'));

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

        $qty = request('qty');

       
       
        OrderReturn::create([
          'order_id' =>  $id,
          'qty'     => $qty,
          'return_date' => date('d-m-Y'), 
          
        ]);

        
     
      
        return redirect()->route('orderRequest.index');
        
        
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

    public function getItemCount(Request $request)
    {
        # code...
        $product_id = request('pid');
        $addcount = DB::table('orders')
                ->join('order_returns','order_returns.order_id','=','orders.id')
                ->where([
                    ['orders.agent_id', '=', Auth::user()->id],
                    ['orders.product_id', '=', $product_id],
                ])
                ->groupBy('order_returns.order_id')
                ->selectRaw('sum(order_returns.qty) as total')
                ->get();

        $subcount = DB::table('orders')
                ->join('order_returns','order_returns.order_id','=','orders.id')
                ->where([
                    ['orders.head_id', '=', Auth::user()->id],
                    ['orders.product_id', '=', $product_id],
                ])
                ->groupBy('order_returns.order_id')
                ->selectRaw('sum(order_returns.qty) as total')
                ->get();

        $diffcount = $addcount[0]->total-$subcount[0]->total;
        return $diffcount;
    }
}

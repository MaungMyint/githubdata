<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Carbon;
use App\Sale;
use Auth;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('sale',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('');
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
        $mycard = request('mycartarr');
        $finaltotal = request('finaltotal');
        $discount = request('discount');
        $paidmoney = request('paidmoney');
        $charge = request('charge');

        $jsonData = json_decode($mycard);


        $mycard = $jsonData->cart;

        $voucherno = uniqid();

        foreach ($mycard as $card) {
            $sales = Sale::create([
                'item_codeno'   =>  $card->codeno,
                'qty'           =>  $card->qty,
                'receipt_voucher_no' => $voucherno,
            ]);
        }
        
        $voucherno = $sales->receipt_voucher_no;


        // $sale = Sale::where('receipt_voucher_no',$voucherno)->get();

        $sale = DB::table('sales')
            ->join('items', 'items.codeno', '=', 'sales.item_codeno')
            ->where('sales.receipt_voucher_no',$voucherno)
            ->select('sales.qty as qty', 'items.name as name', 'items.price as price')
            ->get();


        $carbon_today = Carbon\Carbon::now();
        $today = $carbon_today->toFormattedDateString();
        $html='';

        $html.='<div class="col-md-12 border" id="receipt">
                <p class=" text-center">
                    <span>Shop</span><br>
                    <span> Shop Address </span><br>
                    <span> Shop Phone NoS </span>
                </p>
            
                <p class="float-left"> Voucher No: <span> '.$voucherno.' </span></p>
                <p class="float-right"> Sale Date: <span> '.$carbon_today.' </span><br>
                          Casher ID: <span> Ma Ma </span></p>
                <br class="clear">
              
                <table class="table">
                    <thead>
                        <tr>
                            <th> &nbsp;&nbsp;&nbsp; Item </th>
                            <th colspan="4">  </th>
                            <th> Qty </th>
                            <th> Amount(MMK) </th>
                        </tr>
                    </thead>
                    
                    <tbody>'; 

                    $total = 0; $totalqty = 0;
                    foreach($sale as $receipt)
                    {
                        $qty = $receipt->qty;
                        $price = $receipt->price;

                        $total += $qty * $price;

                        $html.='<tr>
                            <td> &nbsp;&nbsp;&nbsp; '.$receipt->name.' </td>
                            <td colspan="4">  </td>
                            <td> '.$qty.'  </td>
                            <td> '.$price.' </td>
                        </tr>';

                    $totalqty += $qty++;

                    }
                $html.='<tr>
                            <td colspan="8" class="hr"> <hr></td>
                        </tr>
                  
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; Subtotal </td>
                            <td colspan="4">  </td>
                            <td> '.$totalqty.' </td>
                            <td> '.$finaltotal.' </td>
                        </tr>
                  
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; Discount: </td>
                            <td colspan="4">  </td>
                            <td> &nbsp;  </td>
                            <td> '. $discount.' </td>
                        </tr>
                        
                        <tr>
                            <td colspan="8"><hr></td>
                        </tr>
                        
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; Paid: </td>
                            <td colspan="4">  </td>
                            <td> &nbsp;  </td>
                            <td> '.$paidmoney.' </td>
                        </tr>
                
                        <tr>
                            <td> &nbsp;&nbsp;&nbsp; Change: </td>
                            <td colspan="4">  </td>
                            <td> &nbsp;  </td>
                            <td> '.$charge.' </td>
                        </tr>
                        
                        <tr>
                            <td colspan="8"><hr></td>
                        </tr>
                    </tbody>
                
                    <tfoot>
                        <tr>
                            <td colspan="8">
                                <p> Items Sold are not refundable. </p><br>
                                <p> "Thank You and Please come again!"</p>
                            </td>
                        </tr>

                    </tfoot>



                </table>
            </div>';

        return response()->json(['success'=> $html],200);
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
}

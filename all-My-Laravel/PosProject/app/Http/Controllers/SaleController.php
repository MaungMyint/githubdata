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

        //dd($mycard);

        $jsonData = json_decode($mycard);


        $mycard = $jsonData->cart;

        $voucherno = uniqid();

        $mytime = date('Y-m-d');


        foreach ($mycard as $card) {
            $sales = Sale::create([
                'item_codeno'   =>  $card->codeno,
                'qty'           =>  $card->qty,
                'receipt_voucher_no' => $voucherno,
                'date'      => $mytime
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

        $html.='<div class="col-md-8 border" id="receipt">
                <p class=" text-center">
                    <span> The Little Pos </span><br>
                    <span> No(16),Insein Road,Near Thanlan Street,Hlaing Tsp</span><br>
                    <span> ph-092345566 </span>
                </p>
            
                <p class="float-left"> Voucher No: <span> '.$voucherno.' </span></p>
                <p class="float-right"> Sale Date: <span> '.$carbon_today.' </span><br>
                          Casher ID: <span>'.Auth::user()->name.'</span></p>
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
                        <tr>
                            <td colspan="8">
                                <center><p> Items Sold are not refundable.<br>
                                 "Thank You and Please come again!"</p></center>
                            </td>
                        </tr>
                    </tbody>
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
    public function profit(Request $request){
        //report
     $startdate = request('startdate');
        $enddate = request('enddate');
        $profit = DB::table('sales')
            ->where([
                    ['sales.date', '>=', $startdate],
                    ['sales.date', '<=', $enddate],
                ])
            ->groupBy('sales.item_codeno','items.name','items.cost','items.price')
            ->join('items', 'items.codeno', '=', 'sales.item_codeno')
            ->selectRaw('items.name,items.cost,items.price,sales.item_codeno,sum(sales.qty) as total')
            ->get();
         $html='';
         $html.='<p><pre class=" text-center">
                    From:  <span>'.$startdate.'</span>  To:  <span> '.$enddate.' </span> 
                </pre></p>';
          $html.='<table class="table mytable">
                     <thead>
                    <tr>    
                        <th>NO</th>
                        <th>Barcode</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>cost per unit</th>
                        <th>Price  Per Unit</th>
                        <th>Sub cost</th>
                        <th>Sub Price</th>
                        <th>Total Profit/Loss</th> 
                    </tr>       
                    </thead>
                    <tbody>';
                    $i=1; $subprice =0; $subcost =0;$totalprofit=0;$totalloss=0;$ctotal=0;$ptotal=0;$alltotal=0;
                      foreach($profit as $pro)
                    {
                        $barcode= $pro->item_codeno;
                        $name=$pro->name;
                        $qty=$pro->total;
                        $price=$pro->price;
                        $cost=$pro->cost;
                        $subprice=$qty*$price;
                        $subcost=$qty*$cost;
                        $totalprofit= $subprice- $subcost;
                        $ctotal +=$subcost;
                        $ptotal += $subprice;
                        $alltotal += $totalprofit;

                         $html.='<tr>
                            <td> '.$i.'</td>
                            <td >'.$barcode.' </td>
                            <td >'.$name.' </td>
                            <td> '.$qty.'  </td>
                            <td> '.$cost.' </td>
                            <td> '.$price.' </td>
                             <td> '.$subcost.' </td>
                             <td> '.$subprice.' </td>
                            <td> '.$totalprofit.' </td>
                            
                        </tr>';
        
     
     $i++;
 }

    $html.='<tr class="my-5"><td colspan=6 >All Total</td><td>'.$ctotal.'</td><td>'.$ptotal.'</td><td>'.$alltotal.'</td></tr>';
    $html.='</tbody>
    </table>';
return response()->json(['profitsuccess'=> $html],200);
}

}

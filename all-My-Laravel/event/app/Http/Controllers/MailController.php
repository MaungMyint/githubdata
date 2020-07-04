<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\SendEmail;
use App\Eventdetail;
use Illuminate\Support\Facades\DB;
class MailController extends Controller
{
    //
    public function index()
    {
    	return view('mail');
    }
    public function sendemail(Request $get)
    {
    	$this->validate($get,[
    		"potientail"=>"required",
    	]);
    	$voucherno=$get->voucherno;
    	$potientail=$get->potientail;
    	$extra=$get->extra;
        $voucherno=$get->voucherno;
        $packagenameString=$get->package;
        $amountString = $get->amount;
        $qtyString = $get->qty;
        $date = $get->date;

        $bookingusername = $get->bookingusername;
        $bookingph = $get->bookingph;
        $bookingemail = $get->bookingemail;
        $username = $get->username;
        $useremail = $get->useremail;

        $packageArray = explode(',', $packagenameString);
        $amountArray = explode(',', $amountString);
        $qtyArray = explode(',', $qtyString);
        $packages = array_merge($amountArray, $packageArray, $qtyArray);
        $amountTotal = 0;
              foreach ($amountArray as $value) 
              {
                $amountTotal += $value;
              }
        
        $html='';

        $html.='
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <img src="'.asset("frontend/images/logo.jpg").'" class="img-fluid">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 pt-4">
                    <div class="float-right">
                        <h1> Invoice No. '.$voucherno.' </h1>
                        <h3> '.$date.' </h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p> Booking User Name : '. $bookingusername .' </p>
                    <p> Booking User Phone : '. $bookingph.' </p>
                    <p> Booking User Email : '. $bookingemail.' </p>

                </div>


                <table class="table mt-5">
                    <thead style="border-bottom: 2px solid #fa0978">
                        <tr>
                            <td> Description </td>
                            <td> Unit Purchase </td>
                            <td> Unit Price </td>
                            <td> Amount </td>
                        </tr>
                    </thead>

                    <tbody>';
                        $subtotal = 0; $total = 0;
                        foreach($packageArray as $key=> $row):

                            $amount = $amountArray[$key];
                            $qty = $qtyArray[$key];

                            $subtotal = $amount * $qty;
                            
                $html.= '<tr>
                            <td> '.$row.' </td>
                            <td> '.$amount.'</td>
                            <td> '.$qty.' </td>
                            <td> '.$subtotal.'</td>
                        </tr>';
                        $total += $subtotal++;
                        endforeach;
                        
                $html.='<tr>
                            <td colspan="3"> Total </td>
                            <td> '.$total.' </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>';
        $amount_paid = $extra + $total;

    	Mail::to($bookingemail)->send(new SendEmail($html));

         DB::table('eventdetails')
            ->where('voucherno', $voucherno)
            ->update(
            ['potential_cost' => $potientail, 'amount_paid' => $amount_paid, 'extra_paid' => $extra, 'status' => 1]);
         return redirect()->route('admin.event.store');
    }
}

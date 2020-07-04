<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Organizer;
use App\Service;
use App\Eventdetail;
use App\Event;
use App\Package;
use App\User;
use App\Venue;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $events=DB::table("events")
                ->select(
                    DB::raw('GROUP_CONCAT(package_id) AS package'),
                    DB::raw('GROUP_CONCAT(packages.name) AS packagename'),
                    DB::raw('GROUP_CONCAT(events.amount) AS amount'),

                    'codeno as codeno',
                    'date as date',
                    'time as time',
                    'bookinguser as bookinguser',
                    'bookingph as bookingph',
                    'bookingemail as bookingemail',
                    'specialrequest as specialrequest',
                    'status as status',
                    'users.name as username',
                    'users.email as useremail'
                )->distinct()
                ->join('packages','packages.id', 'events.package_id')
                ->join('users','users.id','events.user_id')
                ->groupBy('events.codeno')
                ->get();

        // dd($events);
        $eventscoms=Event::where('status', '=', 1)->get();
         return view('backend.event.read',compact('events','eventscoms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $events=Event::all();
         return view('backend.event.read',compact('events'));
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
          Event::create([
            'codeno'=>request('codeno'),
            'package_id'=>request('package'),
            'organizer_id'=>request('organizer'),
            'venues_id'=>request('venue'),
            'service_id'=>request('service'),
            'start_date'=>request('start'),
            'end_date'=>request('end'),
            'amount'=>request('eamount'),
            'specialrequest'=>request('special'),
            'status'=>request('status'),
        ]);
        return redirect()->route('admin.event.index');
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
        $dt = Carbon::now();
        $date = $dt->toFormattedDateString(); 
        $codeno = $id;

        $event=DB::table("events")
                ->select(
                    DB::raw('GROUP_CONCAT(package_id) AS package'),
                    DB::raw('GROUP_CONCAT(packages.name) AS packagename'),
                    DB::raw('GROUP_CONCAT(events.amount) AS amount'),
                    DB::raw('GROUP_CONCAT(events.qty) AS qty'),

                    'codeno as codeno',
                    'date as date',
                    'time as time',
                    'bookinguser as bookinguser',
                    'bookingph as bookingph',
                    'bookingemail as bookingemail',
                    'specialrequest as specialrequest',
                    'status as status',
                    'users.name as username',
                    'users.email as useremail'
                )
                ->distinct()
                ->join('packages','packages.id', 'events.package_id')
                ->join('users','users.id','events.user_id')
                ->where('codeno',$codeno)
                ->groupBy('events.codeno')
                ->first();

            // dd($event);
        return view('backend.event.confirm',compact('event','date'));
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
         $events=Event::find($id);
        $events->codeno=request('codeno');
        $events->package_id=request('package');
        $events->venues_id=request('venue');
        $events->organizer_id=request('organizer');
        $events->service_id=request('service');
        $events->start_date=request('start');
        $events->end_date=request('end');
        $events->amount=request('eamount');
         $events->specialrequest=request('special');
        $events->status=request('status');
        $events->update();
        return redirect()->route('admin.event.index');
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
        $events=Event::find($id);
         $events->delete();
        return redirect()->route('admin.event.index');
     
    }


}

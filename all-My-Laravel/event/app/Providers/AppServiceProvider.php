<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Category;
use App\Organizer;
use App\Service;
use App\Eventdetail;
use App\Event;
use App\Package;
use App\User;
use App\Venue;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //


        Schema::defaultStringLength(191);

        $categories=Category::all();
        View::share('categories',$categories);

        $organizers=Organizer::all();
        View::share('organizers',$organizers);

        $events=Event::all();
        View::share('events',$events);

        $eventdetails=Eventdetail::all();
        View::share('eventdetails',$eventdetails);

        $packages=Package::all();
        View::share('packages',$packages);

        $services=Service::all();
        View::share('services',$services);

        $venues=Venue::all();
        View::share('venues',$venues);
    }
}
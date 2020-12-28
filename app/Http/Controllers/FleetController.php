<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FleetController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		return view('home');
    }

    public function temp()
    {
		return view('temp');
    }

    public function sodigaz()
    {
        return view('fleets.sodigaz');
    }

    public function location()
    {
        return view('fleets.location');
    }
    
    public function overview()
    {
        return view('fleets.overview');
    }

    public function realtime()
    {
        return view('fleets.realtime');
    }

}

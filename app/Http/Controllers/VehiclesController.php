<?php

namespace App\Http\Controllers;

use App\Vehicle;
use App\Company;
use App\User;
use App\Loading;
use App\Event;
use Illuminate\Http\Request;

use DateTime;
use Jenssegers\Date\Date;
use Carbon\Carbon;
use Mail;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use GuzzleHttp\Exception\RequestException;

class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$email = 'ppestime@dinasa.ht';
		$vehicle = 'Toyota rav4';
		 
		//VehiclesController::emailTransporter($email, $vehicle); 
		//VehiclesController::emailClient($email); 
		//return 1;
		
		$vehicles = Vehicle::all();
        $companies = Company::all();
		
		return view('vehicles.index')->with([
			'companies' => $companies, 'vehicles' => $vehicles
		]); 
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
		
		return view('vehicles.createVehicle')->with([
			'companies' => $companies,
		]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$vehicle = Vehicle::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'code' => $request->code,
			'immat' => $request->immat,
			'year' => $request->year,
			'vin' => $request->vin,
			'odometer' => $request->odometer,
			'color' => $request->color,
			'type' => $request->type,
            'n_citerne' => $request->n_citerne,           
            'capacity' => $request->capacity,
            'is_new' => $request->is_new,
            'affiliate' => $request->affiliate,
            'status' => 'Out Of Service',
        ]);		
		
		$vehicle->company()->associate($request->company);
		$vehicle->save();
					
		if($vehicle->save()){
			$request->session()->flash('success', $vehicle->code.' has been created');	
		}else{
			$request->session()->flash('error', 'There was an error creating the vehicle');
		}
						
		return redirect()->route('vehicle.vehicles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
        $company = Company::all();
		
		return view('vehicles.showVehicle')->with([
			'vehicle' => $vehicle,
			'company' => $company
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
		$company = Company::all();
		
		return view('vehicles.editVehicle')->with([
			'vehicle' => $vehicle,
			'company' => $company
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
		  $vehicle->brand = $request->brand;
		  $vehicle->model = $request->model;
		  $vehicle->code = $request->code;
		  $vehicle->immat = $request->immat;
		  $vehicle->year = $request->year;
		  $vehicle->vin = $request->vin;
		  $vehicle->odometer = $request->odometer;
		  $vehicle->color = $request->color;
		  $vehicle->type = $request->type;
		  $vehicle->n_citerne = $request->n_citerne;
		  $vehicle->capacity = $request->capacity;
		  $vehicle->is_new = $request->is_new;	
		  $vehicle->affiliate = $request->affiliate;
		  $vehicle->status = $request->status;	
		  
          $vehicle->company()->associate($request->company);
		  $vehicle->save();
		
		if($vehicle->save()){
			$request->session()->flash('success', $vehicle->code.' has been update');	
		}else{
			$request->session()->flash('error', 'There was an error updating the vehicle');
		}
						
		return redirect()->route('vehicle.vehicles.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->company()->dissociate();
        $vehicle->delete();
		
		return redirect()->route('vehicle.vehicles.index');
    }
}

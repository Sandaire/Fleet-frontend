<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehicle;
use App\Location;
use App\Loading;
use App\Delivery;

class DeliveriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$vehicles = Vehicle::all();
        $locations = Location::all();
        $deliveries = Delivery::all();
        $loadings = Loading::all();
		
		return view('deliveries.index')->with([
			'locations' => $locations, 'vehicles' => $vehicles,
			'deliveries' => $deliveries, 'loadings' => $loadings
		]);
	}
	
	public function edit(Delivery $delivery)
    {
		$vehicles = Vehicle::all();
        $locations = Location::all();
        $loadings = Loading::all();
		
		return view('deliveries.editDelivery')->with([
			'locations' => $locations, 'vehicles' => $vehicles,
			'delivery' => $delivery, 'loadings' => $loadings
		]);
    }
	
	public function update(Request $request, Delivery $delivery)
    {
		  $delivery->quantity = $request->quantity;
		  $delivery->invnumber = $request->invnumber;
		  $delivery->note = $request->note;
		  
		  if(!empty($request->status)){
			$delivery->status = $request->status;  
		  }
		  
          $delivery->location()->associate($request->location);
		  $delivery->save();
		
		if($delivery->save()){
			$request->session()->flash('success', $delivery->id.' has been update');	
		}else{
			$request->session()->flash('error', 'There was an error updating the Delivery');
		}
						
		return redirect()->route('delivery.deliveries.index');

    }
	
	public function show(Delivery $delivery)
    {
        $vehicles = Vehicle::all();
        $locations = Location::all();
        $loadings = Loading::all();
		
		return view('deliveries.showDelivery')->with([
			'locations' => $locations, 'vehicles' => $vehicles,
			'delivery' => $delivery, 'loadings' => $loadings
		]);
    }
	
	public function destroy(Delivery $delivery)
    {
        $delivery->location()->dissociate();
        $delivery->delete();
		
		return redirect()->route('delivery.deliveries.index');
    }
}

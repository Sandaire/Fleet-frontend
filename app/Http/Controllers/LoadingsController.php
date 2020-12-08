<?php

namespace App\Http\Controllers;

use App\Loading;
use App\Delivery;
use App\Vehicle;
use App\Location;
use App\Company;
use App\User;
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

class LoadingsController extends Controller
{
    
	// return Events Place Entry Exit Activity for Vehicle group
	public static function placeEntryExitGrpVhcl()
    {
		//$d1 = new Carbon("2020-10-10");
		//$d2 = new Carbon("2020-10-13");
		$d1 = new Carbon('today');
        $d2 = new Carbon('today');
         
		$start_date = $d1->addHour(8)->format('Ymd\THis');
        $end_date = $d2->addHour(16)->format('Ymd\THis');
        
		//require '../../FMS/vendor/autoload.php';
		$cli = new Client(['headers' => ['Content-Type' => 'application/json']]);
		 
        $req = $cli->get('https://live.mzoneweb.net/api/v2/vehiclegroups/02099c77-090d-4993-b9d6-462ae2fe86ce/placeentryexitactivity/'.$start_date.'/'.$end_date.'.json?',
		['auth' =>  ['Ezechiel', 'Ezechiel#2020@#@#@@##!!@@']]);
       
   	    $req->getStatusCode();
        $req->getHeader('content-type');
        $data = $req->getBody();
        $data_list = json_decode($data);
        collect($data_list);
		
	    $events = array();
		
		foreach ($data_list->Items as $event) {
			$events[] = $event;
        }
		
		return $events;
	}
	
	public static function emailTransporter($email, $vehicle){
		$textMsg = 'The vehicle'. $vehicle. ' is unoccupied. Please change its status to Ready to use';
		
		Mail::raw($textMsg, function ($message)use ($email)
			{
				$message->from('no-reply@dinasa.ht', 'DINASA - Fleet Management System');
				$message->to($email)->subject('Vehicle task completed');
			});
	}
	
	public static function emailClient($email){
		$gpsData = LoadingsController::placeEntryExitGrpVhcl();
		
		if(count($gpsData)!= 0)
			{
				$textMsg = "Your order is out to delivery. Thank you for dealing with us Boyard.";
				
				Mail::raw($textMsg, function ($message) use ($email)
					{
						$message->from('no-reply@dinasa.ht', 'DINASA - Fleet Management System');
						$message->to($email)->subject('Order update');
					});
			}
	}
	
	
	public static function updateLoadingOrder()
    {
		$loadingOrders = Loading::all()->whereIn('status', ['Pending', 'In progress']);		
		if(count($loadingOrders)!= 0)
		{			
			$gpsData = LoadingsController::placeEntryExitGrpVhcl();
			if(count($gpsData)!= 0)
			{
				foreach ($loadingOrders as $loadingOrder)
				{
					$deliveries = Delivery::all()->where('loading_id', $loadingOrder->id);
					$vehicle = Vehicle::all()->where('id', $loadingOrder->vehicle_id)->first();
					
					if(!($loadingOrder->is_outToDelivey)){
					
						foreach ($gpsData as $data){
							if($data->VehicleId == $vehicle->prosecon_vhclId)
							{
								$position = $data->PlaceDescription;
								$placeID = $data->PlaceId;
								$vehicle->position = $position;
								
								if($vehicle->affiliate == 'DINASA')
								{
									// Check Safe to load
									if($data->PlaceId == 'f004a0bd-87b8-4026-adb6-53be56c85c54' || $data->PlaceId == 'ecaee881-c767-425a-8b39-c2ccec72d141' && $data->Duration > 90){
										$loadingOrder->step = "Safe to load";
										$loadingOrder->is_safe_to_load = true;
										$vehicle->status = 'In use';
										$loadingOrder->status = "In progress";
										$loadingOrder->start_date = $data->PlaceEntryLocalTimestamp;
										$loadingOrder->is_safe_to_load_entry = $data->PlaceEntryLocalTimestamp;
										$loadingOrder->is_safe_to_load_exit = $data->PlaceExitLocalTimestamp;
										$loadingOrder->is_safe_to_load_duration = $data->Duration;
									}
									
									// Check Attente de chargement
									if($data->PlaceId == 'd0ae91e5-d219-4d9c-ab19-d20981dd4bba' || $data->PlaceId == 'bb840f72-4db8-4e22-b5de-b41320788515' && $data->Duration > 90){
										$loadingOrder->step = "Attente de chargement";
										$loadingOrder->is_wait_for_loading = true;
										$loadingOrder->is_wait_for_loading_entry = $data->PlaceEntryLocalTimestamp;
										$loadingOrder->is_wait_for_loading_exit = $data->PlaceExitLocalTimestamp;
										$loadingOrder->is_wait_for_loading_duration = $data->Duration;
										
										if($loadingOrder->start_date == '' || empty($loadingOrder->start_date)){
											$vehicle->status = 'In use';
											$loadingOrder->status = "In progress";
											$loadingOrder->start_date = $data->PlaceEntryLocalTimestamp;
										}
									}
									
									// Check Chargement
									if($data->PlaceId == '5f1a5eaf-6b72-4dc4-b226-a0e4c375d126' || $data->PlaceId == '0fd1f9f-1733-4a4b-ba35-b15efcfb2765'|| $data->PlaceId == '66a145da-3e3f-407a-b216-84701ff26620' || $data->PlaceId == '1c81119f-3603-47d7-bfc3-1f88e88f83e3'|| $data->PlaceId == '7fcc4afc-a06f-4fd3-b0cb-9d1b4f384e9d' && $data->Duration > 90){
										$loadingOrder->step = "Chargement";
										$loadingOrder->is_charged = true;	
										$loadingOrder->is_charged_entry = $data->PlaceEntryLocalTimestamp;
										$loadingOrder->is_charged_exit = $data->PlaceExitLocalTimestamp;
										$loadingOrder->is_charged_duration = $data->Duration;
										
										if($loadingOrder->start_date == '' || empty($loadingOrder->start_date)){
											$vehicle->status = 'In use';
											$loadingOrder->status = "In progress";
											$loadingOrder->start_date = $data->PlaceEntryLocalTimestamp;
										}
									}
									
									// Check Scelle
									if($data->PlaceId == 'cb70fd13-8473-412f-943f-9697b67b8387' || $data->PlaceId == '1b709f10-e552-4ec2-9c0d-1d046f866669' && $data->Duration > 90){
										$loadingOrder->step = "Scelle";
										$loadingOrder->is_scelle = true;	
										$loadingOrder->is_scelle_entry = $data->PlaceEntryLocalTimestamp;
										$loadingOrder->is_scelle_exit = $data->PlaceExitLocalTimestamp;
										$loadingOrder->is_scelle_duration = $data->Duration;
										
										if($loadingOrder->start_date == '' || empty($loadingOrder->start_date)){
											$vehicle->status = 'In use';
											$loadingOrder->status = "In progress";
											$loadingOrder->start_date = $data->PlaceEntryLocalTimestamp;
										}
									}
									// Check Sortie
									if($data->PlaceId == 'c6eb9bb39-835b-4919-af67-5a5e95fc610f' || $data->PlaceId == '1b709f10-e552-4ec2-9c0d-1d046f866669'){
										
										$loadingOrder->status = "Ready for delivery";
										$loadingOrder->step = "Out for delivery";
										$loadingOrder->is_outToDelivey = true;
										$loadingOrder->is_outToDelivey_entry = $data->PlaceEntryLocalTimestamp;
										$loadingOrder->is_outToDelivey_exit = $data->PlaceExitLocalTimestamp;
										$loadingOrder->is_outToDelivey_duration = $data->Duration;
										
										if($loadingOrder->start_date == '' || empty($loadingOrder->start_date)){
											$vehicle->status = 'In use';
											$loadingOrder->status = "In progress";
											$loadingOrder->start_date = $data->PlaceEntryLocalTimestamp;
										}
										
										foreach($deliveries as $delivery){
											$delivery->status = 'In progress';
											$delivery->save();
											//$email = $delivery->location->email;
											$email = 'tboyard@dinasa.ht';
											LoadingsController::emailClient($email); 
										}	
									}
									
									
								}elseif($vehicle->affiliate == 'SODIGAZ'){
									
									
								}								
							}							
						}
					}else{
						return 0;
					}
					
					$vehicle->save();
					$loadingOrder->save();
				} 
			}
		}
		  
    } // Fin method
	
	
	public static function closeLoadingOrder()
    {
		$loadingOrders = Loading::all()->where('status', 'Ready for delivery');
		
		if(count($loadingOrders)!= 0){
			
			$gpsData = placeEntryExitGrpVhcl();
			if(count($gpsData)!= 0)
			{
				foreach ($loadingOrders as $loadingOrder)
				{
					$deliveries = Delivery::all()->where('loading_id', $loadingOrder->id);
					$vehicle = Vehicle::all()->where('id', $loadingOrder->vehicle_id)->first();
					//$email = $vehicle->company->email;
					$email = 'tboyard@dinasa.ht';
					$countDelivery = 0;
					
					foreach($deliveries as $delivery)
					{
						if($delivery->status == 'In progress' || $delivery->status == 'Arrive at destination')
						{
							$countDelivery = $countDelivery++;
							$location = Location::all()->where('id', $delivery->location_id)->first();
							
							if($delivery->status == 'In progress'){
								foreach($gpsData as $data)
								{
									if($data->Duration > 90 && $data->PlaceId == $location->PlaceID && $data->VehicleId = $vehicle->prosecon_vhclId){
										$delivery->status = 'Arrive at destination';
										$delivery->delivered_t = PlaceEntryLocalTimestamp;
										$delivery->save();
										$countDelivery = $countDelivery--;
										exit;
									}
									$position = $data->PlaceDescription;
								}
								
							}else{
								$countDelivery = $countDelivery--;
							}
						}
					}
					
					if($countDelivery == 0){
						$loadingOrder->status = 'Completed';
						$vehicle->status = 'Unoccupied';
						$loadingOrder->save();
						$vehicle->save();
						LoadingsController::emailTransporter($email, $vehicle); 
					}
					//$vehicle->position = $position;	
				}		
			}
		}
	} 
	
	public static function trackingProcess(){
		 
		//$email = 'tboyard@dinasa.ht';
		//LoadingsController::emailClient($email);
		
		LoadingsController::updateLoadingOrder();
		LoadingsController::closeLoadingOrder();
	}
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::all();
        $loadings = Loading::all();
		
		return view('loadings.index')->with([
			'loadings' => $loadings, 'vehicles' => $vehicles
		]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $vehicles = Vehicle::all()->where('status', 'Ready to use');
        $locations = Location::all();
		
		if($vehicles->count() < 1){
			return "Pas de vehicule disponible.";
		}else{
			return view('loadings.createLoading')->with([
			'vehicles' => $vehicles,'locations' => $locations,]);
		}
		
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		$loading = Loading::create([
            'terminal' => $request->terminal,
			'status' => 'Pending',			
        ]);	

		$lastid = $loading->id;
		
		$vehicle = Vehicle::all()->where('id',$request->vehicle)->first();
		$loading->vehicle()->associate($request->vehicle);
		$vehicle->status = 'Assigned task';
		$vehicle->save();
		$loading->save();
		
		if(count($request->location_id) > 0)
        {
			foreach($request->location_id as $delivery=>$v){
				$data2=array(
					'loading_id'=>$lastid,
					'location_id'=>$request->location_id[$delivery],
					'quantity'=>$request->quantity[$delivery],
					'invnumber'=>$request->invnumber[$delivery],
					'status'=> 'Pending'
				);
			Delivery::insert($data2);
			
			}
        }
					
		if($loading->save()){
			$request->session()->flash('success', 'New loading has been created');	
		}else{
			$request->session()->flash('error', 'There was an error creating the loading');
		}
						
		return redirect()->route('loading.loadings.index');	
				
    }
	
	
    public function addDelivery(Loading $loading)
    {
		$vehicles = Vehicle::all();
        $locations = Location::all();
				
		return view('loadings.addDelivery')->with([
		'vehicles' => $vehicles,'locations' => $locations,]);
    }
	
	
    public function storeDeliveryToLoading(Request $request)
    {
		$lastid = $request->loading_id;
		$loading = Loading::all()->where('id',$request->loading_id)->first();
		
		if(count($request->location_id) > 0)
        {
			foreach($request->location_id as $delivery=>$v){
				$data2=array(
					'loading_id'=>$lastid,
					'location_id'=>$request->location_id[$delivery],
					'quantity'=>$request->quantity[$delivery],
					'invnumber'=>$request->invnumber[$delivery],
					'status'=> 'Pending'
				);
			Delivery::insert($data2);
			
			}
        }
						
		return redirect()->route('loading.loadings.show',$loading);	
		//return redirect()->route('loading.loadings.addDelivery',$loading);	
				
    } 
	
    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Loading $loading)
    {
        $vehicle = Vehicle::all()->where('id',$loading->vehicle_id)->first();;		
		$deliveries = Delivery::all();
		
		return view('loadings.showLoading')->with([
			'loading' => $loading,
			'vehicle' => $vehicle, 'deliveries' => $deliveries
		]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Loading $loading)
    {
		$vehicle = Vehicle::all();
		
		return view('loadings.editLoading')->with([
			'loading' => $loading,
			'vehicle' => $vehicle
		]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loading $loading)
    {
		  //$loading->destination = $request->destination;
		  $loading->terminal = $request->terminal;
		  $loading->note = $request->note;
		  
		  if(!empty($request->status)){
			$loading->status = $request->status;  
		  }
		  
          $loading->vehicle()->associate($request->vehicle);
		  $loading->save();
		
		if($loading->save()){
			$request->session()->flash('success', 'loading has been update');	
		}else{
			$request->session()->flash('error', 'There was an error updating the loading');
		}
						
		return redirect()->route('loading.loadings.index');
    }
	

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loading $loading)
    {
       if($loading->vehicle->status = 'In use'){
		 $loading->vehicle = 'Unoccupied';
	   }
	   $loading->vehicle()->dissociate();
       $loading->delete();
		
		return redirect()->route('loading.loadings.index');
    }
}

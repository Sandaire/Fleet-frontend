@extends('layouts.admin')

				  @section('panel')
					<!-- Content -->


					<div class="row" style="margin-top:24px">
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-danger">
														<i class="las la-bus"></i>
													</div>
                                                </div>
                                                <!-- <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                         <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
													</div>
                                                </div> -->
                                            </div>
                                            <div class="widget-content-left fsize-1 ">
                                                <!-- <div class="text-muted opacity-6">Income Target</div> -->
												<!-- <a href="{{ route('vehicle.vehicles.create') }}"><button type="button" class="btn btn-primary" style= "float:right"> + New vehicle</button></a> -->
												<img style="width:50px; color:#bb2124" src="{{ asset('images/tags_assign.png') }}">
												<a href="#" style="width:50px; color: #ed028c"> Assigned vehicles  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <!-- <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="widget-content-left fsize-1">
                                                <!-- <div class="text-muted opacity-6">Expenses Target</div> -->
												<img style="width:50px;" src="{{ asset('images/bus_icon.png') }}">
												<a href="#"  style="width:50px; color: #000000"> On route vehicles  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <!-- <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="widget-content-left fsize-1">
                                                <!-- <div class="text-muted opacity-6">Spendings Target</div> -->
												<img style="width:50px;" src="{{ asset('images/icon_truck.png') }}">
												<a href="#"  style="width:50px; color: tomato"> Available vehicles  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <!-- <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div> -->
                                            <div class="widget-content-left fsize-1">
                                                <!-- <div class="text-muted opacity-6">Totals Target</div> -->
												<img style="width:50px; color: blue;" src="{{ asset('images/unnamed.png') }}">
												<!-- <a href="#" > Available vehicles  </a> -->
												<a href="#" style="width:50px; color: blue"> Broken vehicles  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

							<div class="col-md-6 col-lg-3">
                                <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                                    <div class="widget-content">
                                        <div class="widget-content-outer">
                                            <!-- <div class="widget-content-wrapper">
                                                <div class="widget-content-left pr-2 fsize-1">
                                                    <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                                </div>
                                                <div class="widget-content-right w-100">
                                                    <div class="progress-bar-xs progress">
                                                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                                    </div>
                                                </div>
                                            </div> -->

                                            <div class="widget-content-left fsize-1">
                                                <!-- <div class="text-muted opacity-6">Totals Target</div> -->
												<img style="width:60px; color: blue;" src="{{ asset('images/service_vehicule.png') }}">
												<!-- <a href="#" > Available vehicles  </a> -->
												<!-- <a href="#" style="width:50px; color: #22bb33"> Broken vehicles  </a> -->
												<a href="#" style="width:50px; color: mediumaquamarine">Out of service  </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   </div>
				   <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">Vehicules Activities
                                        <div class="btn-actions-pane-right">
											<div role="group" class="btn-group-sm btn-group">
                                                <!-- <button class="btn btn-focus">Today</button>
                                                <button class="active btn btn-focus">Last Week</button>
												<button class="active btn btn-focus">All Month</button> -->
												<nav aria-label="Page navigation example">
													<ul class="pagination">
														<li class="page-item">
														<a class="page-link" href="#" aria-label="Previous">
															<span aria-hidden="true">&laquo;</span>
															<span class="sr-only">Previous</span>
														</a>
														</li>
														<li class="page-item"><a class="page-link" href="#">1</a></li>
														<li class="page-item"><a class="page-link" href="#">2</a></li>
														<li class="page-item"><a class="page-link" href="#">3</a></li>
														<li class="page-item">
														<a class="page-link" href="#" aria-label="Next">
															<span aria-hidden="true">&raquo;</span>
															<span class="sr-only">Next</span>
														</a>
														</li>
													</ul>
												</nav>
                                            </div>
                                        </div>
                                    </div>	
											<!-- <div class="column content">
												<a href="{{ route('vehicle.vehicles.create') }}"><button type="button" class="btn btn-primary" style= "float:right"> + New vehicle</button></a>
												 -->
												<!-- <a href="#"> Assigned vehicles  </a>|
												<a href="#"> On route vehicles  </a>| -->
												<!-- <a href="#"> Available vehicles  </a>| -->
												<!-- <a href="#"> Broken vehicles  </a>| -->
												<!-- <a href="#">Out of service  </a> -->

													<div class="card-body">
													
													<table class = "table table-striped table-bordered" style="width:100%">
													<thead>
														<tr>
														<th scope="col">Vehicle</th>
														<th scope="col">Position</th>
														<th scope="col">Immat</th>
														<th scope="col">Number of tanks</th>
														<th scope="col">Capacity</th>
														<th scope="col">Condition</th>
														<th scope="col">Status</th>
														<th scope="col">Action</th>
														</tr>
													</thead>
													<tbody>
														@foreach($vehicles as $vehicle)
															
														<tr>
															<td><a href="{{ route('vehicle.vehicles.show', $vehicle->id)}}">{{ $vehicle->code }}</a> </td>
															<td>
																	@if( $vehicle->position  == "")
																		{{ 'Not indicated' }}
																	@else
																		{{ $vehicle->position }}
																	@endif
															</td>
															<td>{{ $vehicle->immat }} </td>
															<td>{{ $vehicle->n_citerne }} </td>
															<td>{{ $vehicle->capacity }} </td>
															<td>
																<!-- <i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i> -->
																	@if( $vehicle->is_new == 1)
																		{{ 'Brand new' }}
																	@else
																		{{ 'Used' }}
																	@endif
															</td>
															
															<td class="text-center">
																@if( $vehicle->status == 'In use')
																	<div class="badge badge-primary">{{ $vehicle->status }} </div>
																@elseif( $vehicle->status == 'Ready to use')
																	<div class="badge badge-success">{{ $vehicle->status }} </div>
																@elseif( $vehicle->status == 'Out of service')
																	<div class="badge badge-danger">{{ $vehicle->status }} </div>
																@else
																	<div class="badge badge-warning">{{ $vehicle->status }} </div>
																@endif
																
															</td>

															<td class="text-justify" style="width: 150px">
																@can('edit-users')
																	<a href="{{ route('vehicle.vehicles.edit', $vehicle->id)}}">
																		<button class="mb-2 mr-2 border-0 btn-transition btn btn-outline-warning" style ="float:left">
																			<i class="fa fa-fw" aria-hidden="true" title="Copy to use pencil-square-o"></i>
																		</button>
																	</a>
																@endcan
																
																
																@can('delete-users')
																<form action ="{{ route('vehicle.vehicles.destroy', $vehicle)}}" method = "POST" class="" >
																	@csrf
																	{{ method_field('DELETE') }}
																	<button type="submit" class="mb-2 mr-2 border-0 btn-transition btn btn-outline-danger" style=" margin-left:2px"> 
																		<!-- <i class="pe-7s-trash btn-icon-wrapper"></i> -->
																		<i class="fa fa-fw" aria-hidden="true" title="Copy to use trash"></i>
																	</button> 
																	<!-- <div class="d-flex flex-row">
																		<div class="p-2">Flex item 1</div>
																		<div class="p-2">Flex item 2</div>
																		<div class="p-2">Flex item 3</div>
																	</div> -->
																	
																</form>
																@endcan
															</td>
															</tr>
														@endforeach						
													</tbody>
													</table>


													<!-- <div class="row">
														<div class="col-md-12">
															<div class="main-card mb-3 card">
																<div class="card-header">Activity Vehicules
																	<div class="btn-actions-pane-right">
																		<div role="group" class="btn-group-sm btn-group">
																			<button class="btn btn-focus">Today</button>
																			<button class="active btn btn-focus">Last Week</button>
																			<button class="active btn btn-focus">All Month</button>
																		</div>
																	</div>
																</div>
																<div class="table-responsive">
																	<table class="align-middle mb-0 table table-borderless table-striped table-hover">
																		<thead>
																		<tr>
																			<th class="text-center">ID</th>
																			<th>Name</th>
																			<th class="text-center">Terminal</th>
																			<th class="text-center">Status</th>
																			<th class="text-center">Delivery</th>
																		</tr>
																		</thead>
																		<tbody>
																		<tr>
																			<td class="text-center text-muted">#345</td>
																			<td>
																				<div class="widget-content p-0">
																					<div class="widget-content-wrapper">
																						<div class="widget-content-left mr-3">
																							<div class="widget-content-left">
																								<img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
																							</div>
																						</div>
																						<div class="widget-content-left flex2">
																							<div class="widget-heading">Camion</div>
																							<div class="widget-subheading opacity-7">Nom Chauffeur</div>
																						</div>
																					</div>
																				</div>
																			</td>
																			<td class="text-center">Varreux</td>
																			<td class="text-center">
																				<div class="badge badge-warning">Pending</div>
																			</td>
																			<td class="text-center">
																				<button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-center text-muted">#347</td>
																			<td>
																				<div class="widget-content p-0">
																					<div class="widget-content-wrapper">
																						<div class="widget-content-left mr-3">
																							<div class="widget-content-left">
																								<img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
																							</div>
																						</div>
																						<div class="widget-content-left flex2">
																							<div class="widget-heading">Camion</div>
																							<div class="widget-subheading opacity-7">Nom Chauffeur</div>
																						</div>
																					</div>
																				</div>
																			</td>
																			<td class="text-center">JOA</td>
																			<td class="text-center">
																				<div class="badge badge-success">Completed</div>
																			</td>
																			<td class="text-center">
																				<button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-center text-muted">#321</td>
																			<td>
																				<div class="widget-content p-0">
																					<div class="widget-content-wrapper">
																						<div class="widget-content-left mr-3">
																							<div class="widget-content-left">
																								<img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
																							</div>
																						</div>
																						<div class="widget-content-left flex2">
																							<div class="widget-heading">Camion</div>
																							<div class="widget-subheading opacity-7">Nom Chauffeur</div>
																						</div>
																					</div>
																				</div>
																			</td>
																			<td class="text-center">Thor</td>
																			<td class="text-center">
																				<div class="badge badge-danger">In Progress</div>
																			</td>
																			<td class="text-center">
																				<button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-center text-muted">#55</td>
																			<td>
																				<div class="widget-content p-0">
																					<div class="widget-content-wrapper">
																						<div class="widget-content-left mr-3">
																							<div class="widget-content-left">
																								<img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
																						</div>
																						<div class="widget-content-left flex2">
																							<div class="widget-heading">Camion</div>
																							<div class="widget-subheading opacity-7">Nom Chauffeur</div>
																						</div>
																					</div>
																				</div>
																			</td>
																			<td class="text-center">Aviation</td>
																			<td class="text-center">
																				<div class="badge badge-info">Ready to delivery</div>
																			</td>
																			<td class="text-center">
																				<button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
																			</td>
																		</tr>
																		<tr>
																			<td class="text-center text-muted">#80</td>
																			<td>
																				<div class="widget-content p-0">
																					<div class="widget-content-wrapper">
																						<div class="widget-content-left mr-3">
																							<div class="widget-content-left">
																								<img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
																						</div>
																						<div class="widget-content-left flex2">
																							<div class="widget-heading">Camion</div>
																							<div class="widget-subheading opacity-7">Nom Chauffeur</div>
																						</div>
																					</div>
																				</div>
																			</td>
																			<td class="text-center">Varreux</td>
																			<td class="text-center">
																				<div class="badge badge-secondary">Cancel</div>
																			</td>
																			<td class="text-center">
																				<button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
																			</td>
																		</tr>
																		</tbody>
																	</table>
																</div>
																<div class="d-block text-center card-footer">
																	<button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
																	<button class="btn-wide btn btn-success">Save</button>
																</div>
															</div>
														</div>
													</div> -->
												

												</div>
											</div>  
											
											<!-- end content -->
										</div>
									</div>	
								</div>
							</div>
				   </div>		
					  @endsection
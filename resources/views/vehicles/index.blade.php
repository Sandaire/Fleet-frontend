@extends('layouts.admin')

				  @section('panel')

<!--START:: SECTION TABS NAV-->
  <div class="row">
    <div class="col-lg-12">
      <div class="main-card mb-3 card">
        <div class="card-header">
            <ul class="nav nav-justified">
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">All views</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Assigned vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">On route vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-3" class="nav-link">Available vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-4" class="nav-link"> Broken vehicles</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-5" class="nav-link"> Out of service</a></li>

            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
					@include('tabbar.vehicleViewsAll')
                </div>

                <div class="tab-pane" id="tab-eg7-1" role="tabpanel">
					@include('tabbar.vehicleViewAssgnement')
				</div>

                <div class="tab-pane" id="tab-eg7-2" role="tabpanel">
					@include('tabbar.vehicleViewOnRoute')
				</div>

                <div class="tab-pane" id="tab-eg7-3" role="tabpanel">
					@include('tabbar.vehicleViewAvailable')
				</div>

                <div class="tab-pane" id="tab-eg7-4" role="tabpanel">
					@include('tabbar.vehicleViewBroken')
				</div>

                <div class="tab-pane" id="tab-eg7-5" role="tabpanel">
					@include('tabbar.VehicleViewOutOfServ')
				</div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--END:: SECTION TABS NAV-->

				   		
					  @endsection
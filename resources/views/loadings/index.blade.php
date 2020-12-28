@extends('layouts.admin')

 @section('content')
<!--START:: SECTION TABS NAV-->
<div class="card-header">
	<div  class="row">
		<div class="col-lg-12">
      <h6 style="margin-top:30px"> Loading List</h6>
		<a href="{{ route('loading.loadings.create') }}">
      <button type="button" class="btn" style="background-color:#008a74; color: white; font-size:16px; margin-left:1000px; margin-top:-60px">
      <i class="fa fa-plus" aria-hidden="true" title="Copy to use plus"> </i> Loading order
      </button>
    </a>
    <!-- <a href="('loading.loadings.addDelivery', $loading) " style="color:#008a74" > Advanced search</a>	 -->
    </div>
	</div>
</div>

  <div class="row">
    <div class="col-lg-12">
      <div class="main-card mb-3 card">
        <div class="card-header">
            <ul class="nav nav-justified">
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">All views</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Pending</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">In progress</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-3" class="nav-link">Ready for delivery</a></li>
            </ul>
		</div>
        <div class="card-body" >

            <div class="tab-content ">
                <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
					@include('tabbar.loadingViewAll')
                </div>

                <div class="tab-pane" id="tab-eg7-1" role="tabpanel">
					@include('tabbar.pendingLoading')
				</div>

                <div class="tab-pane" id="tab-eg7-2" role="tabpanel">
					@include('tabbar.inProgressLoading')
				</div>

                <div class="tab-pane" id="tab-eg7-3" role="tabpanel">
					@include('tabbar.readyLoading')
				</div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!--END:: SECTION TABS NAV-->

				   		
@endsection
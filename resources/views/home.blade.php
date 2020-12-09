@extends('layouts.admin')

@section('panel')
  <!--START:: SECTION CARD PERCENTAGE-->
  <div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-info">71%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Income Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Income Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-warning mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-warning">71%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Income Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
            <div class="widget-content">
                <div class="widget-content-outer">
                    <div class="widget-content-wrapper">
                        <div class="widget-content-left pr-2 fsize-1">
                            <div class="widget-numbers mt-0 fsize-3 text-success">71%</div>
                        </div>
                        <div class="widget-content-right w-100">
                            <div class="progress-bar-xs progress">
                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content-left fsize-1">
                        <div class="text-muted opacity-6">Income Target</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <!--END:: SECTION CARD PERCENTAGE-->
  <!--START:: CARD-->
  <div class="row">
    <div class="col-md-6 col-xl-4">
      <div class="card mb-3 widget-content bg-midnight-bloom">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Total Orders</div>
                  <div class="widget-subheading">Last year expenses</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>1896</span></div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="card mb-3 widget-content bg-midnight-bloom">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Total Orders</div>
                  <div class="widget-subheading">Last year expenses</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>1896</span></div>
              </div>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4">
      <div class="card mb-3 widget-content bg-midnight-bloom">
          <div class="widget-content-wrapper text-white">
              <div class="widget-content-left">
                  <div class="widget-heading">Total Orders</div>
                  <div class="widget-subheading">Last year expenses</div>
              </div>
              <div class="widget-content-right">
                  <div class="widget-numbers text-white"><span>1896</span></div>
              </div>
          </div>
      </div>
    </div>
  </div>
  <!--END:: SECTION CARD-->
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
                  <p>
                  <tbody>
                    
                  </tbody>
                  </p>
                </div>

                <div class="tab-pane" id="tab-eg7-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. </p></div>

                <div class="tab-pane" id="tab-eg7-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                    type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>

                <div class="tab-pane" id="tab-eg7-3" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                  essentially unchanged. </p></div>

                <div class="tab-pane" id="tab-eg7-4" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                  essentially unchanged. </p></div>

                <div class="tab-pane" id="tab-eg7-5" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                  essentially unchanged. </p></div>
            </div>

            
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

              
            </table>
        </div>
      </div>
    </div>
  </div>
  <!--END:: SECTION TABS NAV-->
  <!--START:: SECTION CHARTJS-->
  <div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Pie Chart</h5>
                <canvas id="chart-area"></canvas>
            </div>
        </div>
    </div>
    <div class="col-md-6">
      <div class="main-card mb-3 card">
          <div class="card-body">
              <h5 class="card-title">Line Chart</h5>
              <div style="height: 208px">
                  <canvas id="line-chart"></canvas>
              </div>
          </div>
      </div>
    </div>
  </div>
  <!--END:: SECTION CHARTJS-->
  <!--START:: TABLE-->
  <div class="row">
      <div class="col-md-12">
          <div class="main-card mb-3 card">
              <div class="card-header">Active Users
                  <div class="btn-actions-pane-right">
                      <div role="group" class="btn-group-sm btn-group">
                          <button class="active btn btn-focus">Last Week</button>
                          <button class="btn btn-focus">All Month</button>
                      </div>
                  </div>
              </div>
              <div class="table-responsive">
                  <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                      <thead>
                      <tr>
                          <th class="text-center">#</th>
                          <th>Vehicle</th>
                          <th class="text-center">Type</th>
                          <th class="text-center">Status</th>
                          <th class="text-center">HEalth Rate</th>
                          <th class="text-center">Critical errors</th>
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
                                            <div class="widget-heading">John Doe</div>
                                            <div class="widget-subheading opacity-7">Web Developer</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Madrid</td>
                            <td class="text-center">
                              <div class="mb-2 mr-2 btn-transition btn btn-outline-primary">Pending</div>
                            </td>
                            <td class="text-center">
                              <div class="text-center">25%</div>
                              <div class="mb-3 progress">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="25" aria-valuemax="100" style="width: 25%;"></div>
                              </div>
                                <!-- <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button> -->
                            </td>
                            <td class="text-center">
                              <i style="color: red; font-size:large" class="pe-7s-attention btn-icon-wrapper"> </i>
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
                                            <div class="widget-heading">Ruben Tillman</div>
                                            <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Berlin</td>
                            <td class="text-center">
                                <div class="badge badge-success">Completed</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                            </td>
                            <td class="text-center">
                              <i style="color: red; font-size:large" class="pe-7s-attention btn-icon-wrapper"> </i>
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
                                            <div class="widget-heading">Elliot Huber</div>
                                            <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">London</td>
                            <td class="text-center">
                                <div class="badge badge-danger">In Progress</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                            </td>
                            <td class="text-center">
                              <i style="color: red; font-size:large" class="pe-7s-attention btn-icon-wrapper"> </i>
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
                                            <div class="widget-heading">Vinnie Wagstaff</div>
                                            <div class="widget-subheading opacity-7">UI Designer</div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td class="text-center">Amsterdam</td>
                            <td class="text-center">
                                <div class="badge badge-info">On Hold</div>
                            </td>
                            <td class="text-center">
                                <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                            </td>
                            <td class="text-center">
                              <i style="color: red; font-size:large" class="pe-7s-attention btn-icon-wrapper"> </i>
                            </td>
                        </tr>
                      </tbody>
                  </table>
              </div>
              <div class="d-block text-center card-footer">
                  <!-- <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button> -->
                  <button class="btn-wide btn btn-success">View more <i class="pe-7s-arrow btn-icon-wrapper"> </i></button>
              </div>
          </div>
      </div>
  </div>
  <!--END:: TABLE-->
@endsection

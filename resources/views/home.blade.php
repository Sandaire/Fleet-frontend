@extends('layouts.admin')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="/DataTables/datatables.css">
 
<script type="text/javascript" charset="utf8" src="/DataTables/datatables.js"></script>
 
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script>
    npm install datatables.net 
    npm install datatables.net-dt
var $  = require( 'jquery' );
var dt = require( 'datatables.net' )();

</script>
@section('panel')
<!-- <main class="main">
    
<header class="main">
      <h5>Hello <a href="#">James</a>! Check out your latest stats.</h5>
      <form class="input-container">
         <label>Search</label>
         <input type="search">
      </form>
   </header>
</main> -->
  <!--START:: SECTION CARD PERCENTAGE-->
  <div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card-info mb-3 widget-chart widget-chart2 text-left card">
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
        <div class="card-danger mb-3 widget-chart widget-chart2 text-left card">
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
        <div class="card-warning mb-3 widget-chart widget-chart2 text-left card">
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
        <div class="card-success mb-3 widget-chart widget-chart2 text-left card">
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
  
  <!--START:: SECTION TABS NAV-->
  <!-- <div class="row">
    <div class="col-lg-12">
      <div class="main-card mb-3 card">
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-hamburger">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>  
        <div class="card-header">
            <ul class="nav nav-justified">
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">All </a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Drivings</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">Parked</a></li>
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
                lolola lalala
            </table>
        </div>
      </div>
    </div>
  </div> -->
  <!--END:: SECTION TABS NAV-->

  <!--START:: CARD2-->
  <div class="row">
    <div class="col-md-6 col-xl-4">
      <div class="card mb-3 widget-content bg-midnight">
          <div class="widget-content-wrapper text-black">
          <div class="widget-content-outer">
            <p style="color:#F7464A; font-size:36px; font:Arial"> | 
                <h5 style="margin-top:-60px; margin-left: 10px">Trips Perfomence</h5> </br>
                <h6 style="margin-top: -30px; margin-left:10px">Driving Policy Violations</h6>
            </p>

            <div class="progress" style="margin-top:15px">
                <div class="progress-bar  bg-warning" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-primary" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-danger" role="progressbar" style="width: 5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
                </br></br> 
                    <tr>
                        <td style="color:orange; font-size:14px"> 
                            40% / 158
                            <p> Live Trips</p>
                        </td>
                        
                        <td style="color:green; font-size:14px">
                            20% / 158
                            <p>Completed</p></td>
                    </tr>
                            
                    <tr>
                        <td style="color:blue; font-size:14px" >
                            10% / 158
                            <p>Being Late</p>
                        </td> 

                        <td style="color:red, font-size:14px">
                            5% / 158
                            <p>Failed</p></td>
                    </tr>
            </div>
          </div>
      </div>
    </div>

    <div class="col-md-8 col-xl-8" style="height:90%">
      <div class="card mb-3 widget-content bg-midnight">
          <div class="widget-content-wrapper text-yellow">
                <div class="col-lg-18">
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-hamburger">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner">
                                    </span>
                                </span>
                            </button>
                            <p style="margin-top: -25px; margin-left:30px; font-size:18px; color:#008a74">Activities Vehicles</p>
                        </div>
                    </div>  
                    <div class="card-header">
                        <ul class="nav nav-justified">
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">All </a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Drivings</a></li>
                            <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">Parked</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab-eg7-0" role="tabpanel">
                                <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. Like Aldus PageMaker including versions of Lorem. Like Aldus PageMaker including versions of Lorem.</p> 
                                <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged.</p>
                                <p></p>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                essentially unchanged.</p>
                            </div>

                            <div class="tab-pane" id="tab-eg7-1" role="tabpanel"> <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. Like Aldus PageMaker including versions of Lorem. Like Aldus PageMaker including versions of Lorem.</p> 
                                <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged.</p>
                                <p></p>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                essentially unchanged.</p></div>

                            <div class="tab-pane" id="tab-eg7-2" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged. Like Aldus PageMaker including versions of Lorem. Like Aldus PageMaker including versions of Lorem.</p> 
                                <p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                    essentially unchanged.</p>
                                <p></p>
                                <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                                essentially unchanged.</p></div>
                        <table class = "table table-striped table-bordered" style="width:100%">
                        </table>
                    </div>
                </div>
            </div>
          </div>
      </div>
    </div>
    
  </div>
  <!--END:: SECTION CARD2-->


  <!--START:: SECTION CHARTJS-->
  <div class="row">
    <div class="col-md-6">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Total Vehicles</h5>
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
<!-- START Pagination -->
<!-- Table with panel -->
<div class="card card-cascade narrower">

  <!--Card image-->
  <div class="view view-cascade warning-card-header yellow-warning narrower py-2 mx-4 mb-3 d-flex justify-content-between align-items-center">

    <div>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-th-large mt-0"></i>
      </button>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-columns mt-0"></i>
      </button>
    </div>

    <a href="" class="white-text mx-3">Table name</a>

    <div>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-pencil-alt mt-0"></i>
      </button>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="far fa-trash-alt mt-0"></i>
      </button>
      <button type="button" class="btn btn-outline-white btn-rounded btn-sm px-2">
        <i class="fas fa-info-circle mt-0"></i>
      </button>
    </div>

  </div>
  <!--/Card image-->

  <div class="px-4">

    <div class="table-wrapper">
      <!--Table-->
      <table class="table table-hover mb-0">

        <!--Table head-->
        <thead>
          <tr>
            <th>
              <input class="form-check-input" type="checkbox" id="checkbox">
              <label class="form-check-label" for="checkbox" class="mr-2 label-table"></label>
            </th>
            <th class="th-lg">
              <a>First Name
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Last Name
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
            <th class="th-lg">
              <a href="">Username
                <i class="fas fa-sort ml-1"></i>
              </a>
            </th>
          </tr>
        </thead>
        <!--Table head-->

        <!--Table body-->
        <tbody>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox1">
              <label class="form-check-label" for="checkbox1" class="label-table"></label>
            </th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox2">
              <label class="form-check-label" for="checkbox2" class="label-table"></label>
            </th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox3">
              <label class="form-check-label" for="checkbox3" class="label-table"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox4">
              <label class="form-check-label" for="checkbox4" class="label-table"></label>
            </th>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
            <td>Paul</td>
            <td>Topolski</td>
            <td>@P_Topolski</td>
          </tr>
          <tr>
            <th scope="row">
              <input class="form-check-input" type="checkbox" id="checkbox5">
              <label class="form-check-label" for="checkbox5" class="label-table"></label>
            </th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
          </tr>
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>

  </div>

</div>
<!-- Table with panel -->
<!-- End pagination -->
</br>
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

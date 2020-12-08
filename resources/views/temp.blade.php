@extends('layouts.admin')

	@section('panel')
		<div class="main__inner"  style="margin-top:25px">
        
            <div class="row">
                <div class="col-md-6 col-lg-5" >
                    <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                            <h5> Total Vehicles</h5>
                                <canvas id="pieChart"></canvas>
                            <p style="color:#008a74; font-size:36px; font:Arial"> | 
                                <h6 style="margin-top:-45px; margin-left: 10px">On Route </h6> </p>
                            <p style="color:#FDB45C; font-size:36px; font:Arial"> | 
                                <h6 style="margin-top:-45px; margin-left: 10px">Available </h6> </p>
                            <p style="color:#F7464A; font-size:36px; font:Arial;"> | 
                                <h6 style="margin-top:-45px; margin-left: 10px">Out of service </h6> </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-5"  >
                    <script src="https://code.highcharts.com/highcharts.js"></script>
                    <script src="https://code.highcharts.com/highcharts-3d.js"></script>
                    <script src="https://code.highcharts.com/modules/cylinder.js"></script>
                    <script src="https://code.highcharts.com/modules/exporting.js"></script>
                    <script src="https://code.highcharts.com/modules/export-data.js"></script>
                    <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                    <figure class="highcharts-figure">
                        <div id="container"></div>
                        <p class="highcharts-description">
                            <!-- Chart showing basic use of 3D cylindrical columns. A 3D cylinder chart
                            is similar to a 3D column chart, with a different shape. -->
                        </p>
                    </figure>
                </div> 
            </div>


            <div class="row" style="margin-left:258px">
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
                    <div class="card-shadow-success mb-3 widget-chart widget-chart2 text-left card">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pr-2 fsize-1">
                                        <div class="widget-numbers mt-0 fsize-3 text-success">54%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                    <div class="text-muted opacity-6">Expenses Target</div>
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
                                        <div class="widget-numbers mt-0 fsize-3 text-warning">32%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                    <div class="text-muted opacity-6">Spendings Target</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="card-shadow-info mb-3 widget-chart widget-chart2 text-left card">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pr-2 fsize-1">
                                        <div class="widget-numbers mt-0 fsize-3 text-info">89%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                    <div class="text-muted opacity-6">Totals Target</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

                
            <div class="row" style="margin-left:258px">
                    <div class="col-md-6 col-lg-6" >
                        <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                                <div class="widget-content-outer">
                                <p style="color:#FDB45C; font-size:36px; font:Arial"> | 
                                    <h5 style="margin-top:-60px; margin-left: 10px">Warnings</h5> </br>
                                    <h6 style="margin-top: -30px; margin-left:10px">Driving Policy Violations</h6>
                                </p></br></br>

                                <hr style="border:  none;
                                    border-color: red;
                                    border-left: 1px solid hsla(200, 10%, 50%,100);
                                    height:  40vh;
                                    width: 1px;
                                    margin-top:-60px;
                                    margin-left:345px;
                                    "/>
                                
                                </div>
                            </div>
                            <!-- <table>
                                    <style>
                                        table, td, th {
                                        border: 3px solid black;
                                        border-color:	#DCDCDC;
                                        }

                                        table {
                                        width: 100%;
                                        border-collapse: collapse;
                                        
                                        margin-top: -10px;
                                        }
                                    </style>
                                    
                                    <tr>
                                        <td> 
                                        <img style="width:30px; color:#bb2124" src="{{ asset('images/gas.svg') }}">
                                            5 Vehicles
                                            <p>Fuel Consumption
                                            > 30L / 100km</p>
                                        </td>
                                        
                                        <td>
                                        <img style="width:30px; color:#bb2124" src="{{ asset('images/CO2.svg') }}">
                                            15 Vehicles
                                            <p>CO2 Emission
                                                > 450g/km</p></td>
                                    </tr>

                                    <tr>
                                        <td>
                                        <img style="width:30px; color:#bb2124" src="{{ asset('images/speed.svg') }}">    
                                        3 Vehicles
                                            <p>Speed
                                                > 130km / h</p>
                                        </td> </br>

                                        <td>
                                        <img style="width:30px; color:#bb2124" src="{{ asset('images/motor.svg') }}">    
                                        1 Vehicles
                                            <p>Oil Temperature
                                                > 120C</p></td>
                                    </tr>
                                </table> -->
                        </div>
                    </div>


                    <div class="col-md-6 col-lg-3" >
                        <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                                <div class="widget-content-outer">

                                <p style="color:#008a74; font-size:36px; font:Arial"> | 
                                    <h5 style="margin-top:-60px; margin-left: 10px">Trips </h5> </br>
                                    <h6 style="margin-top: -30px; margin-left:10px">24 hours Trips Data</h6>
                                </p></br>
                                                <i class="fa fa-podcast" aria-hidden="true" ></i>
                                                <hr style="width:230px; margin-top:5px"/>
                                                <h6 style="margin-top:-45px; margin-left: 10px">Live Trips </h6> </p>
                                                  </br>     
                                                <i class="fa fa-podcast" aria-hidden="true"></i>
                                                <hr style="width:230px; margin-top:5px"/>
                                                <h6 style="margin-top:-45px; margin-left: 10px">Scheduled </h6> </p>
                                                    </br></br>
                                                <i class="fa fa-podcast" aria-hidden="true"></i>
                                                <hr style="width:230px; margin-top:15px"/>
                                                <h6 style="margin-top:-45px; margin-left: 10px">Completed </h6> 
                                                    </br>
                                                <i class="fa fa-podcast" aria-hidden="true"></i>
                                                <hr style="width:230px; margin-top:15px"/>
                                                <h6 style="margin-top:-45px; margin-left: 10px">Being Late </h6> 
                                                    </br></br>
                                                <i class="fa fa-podcast" aria-hidden="true"></i>
                                                <hr style="width:230px; margin-top:15px"/>
                                                <h6 style="margin-top:-45px; margin-left: 10px">Failed </h6> 
                                           
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" >
                        <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
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

            </div>

            <div class="row" style="margin-left:258px">
                    <div class="col-md-6 col-lg-3" >
                        <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                                <div class="widget-content-outer">
                                <h5>Safe Driving Meter</br>
                                    <!-- <p style="font-size:14px">24 hours Trips Data</p> -->
                                </h5>
                                
                                <img style="width:274px; color:#bb2124; margin-left: -5px" src="{{ asset('images/download.png') }}">    
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3" >
                        <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">
                            <div class="widget-content">
                                <div class="widget-content-outer">
                                <h5>Out Of Service</br>
                                    <p style="font-size:14px">Out of order vehicles</p>
                                </h5>
                                    
                                <p style="color:red; font-size:36px; font:Arial"> | 
                                    <h6 style="margin-top:-45px; margin-left: 10px">24 Vehicules Totals </h6> </p></br>
                                    <i class="fa fa-cogs" aria-hidden="true" ></i>
                                    <hr style="width:230px; margin-top:5px"/>
                                    <h6 style="margin-top:-45px; margin-left: 10px">Maintenance </h6> </p>

                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                    <hr style="width:230px; margin-top:5px"/>
                                    <h6 style="margin-top:-45px; margin-left: 10px">Broken </h6> </p>

                                    <i class="fa fa-exclamation-circle" aria-hidden="true"></i>
                                    <hr style="width:230px; margin-top:5px"/>
                                    <h6 style="margin-top:-45px; margin-left: 10px">In Accident </h6> 
                                </p>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-6" >
                        <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">   
                        <table>
                            <style>
                                table, td, th {
                                border: 1px solid black;
                                border-color:	#DCDCDC;
                                margin-top: -20px;
                                }

                                table {
                                width: 100%;
                                height:290px;
                                border-collapse: collapse;
                                }
                            </style>
                            
                            <tr>
                                <td> &nbsp;
                                <img style="width:30px; color:#bb2124" src="{{ asset('images/gas.svg') }}">
                                    5 Vehicles
                                    <p> &nbsp; Fuel Consumption
                                    > 30L / 100km</p>
                                </td>
                                
                                <td>&nbsp;
                                <img style="width:30px; color:#bb2124" src="{{ asset('images/CO2.svg') }}">
                                    15 Vehicles
                                    <p>&nbsp; CO2 Emission
                                        > 450g/km</p></td>
                            </tr>
                                    
                            <tr>
                                <td>&nbsp;
                                <img style="width:30px; color:#bb2124" src="{{ asset('images/speed.svg') }}">    
                                3 Vehicles
                                    <p>&nbsp;Speed
                                        > 130km / h</p>
                                </td> </br>

                                <td>&nbsp;
                                <img style="width:30px; color:#bb2124" src="{{ asset('images/motor.svg') }}">    
                                1 Vehicles
                                    <p>&nbsp;Oil Temperature
                                        > 120C</p></td>
                            </tr>
                        </table>
                        


            </div>
                        
        </div>

        
<div class="main">

<!-- <style>
ul {
 padding:0;
 margin:0;
 list-style-type:none;
 }
li {
 float:left; /*pour IE*/
 border-left:1px solid black;
 }
ul li a {
 display:block;
 float:left;   
 width:100px;
 line-height:50px; /*hauteur de l'image de fond*/
 background:black url(images/noir-1.png) repeat-x;
 color:#DCDCDC;
 text-decoration:none;
 text-align:center;
 }
ul li a:hover {
 background:black url(images/noir-2.png) repeat-x;
 color:white;
 }  
</style> -->

    <div class="content">
              <div class="row">
                
              <div class="col-md-3 col-lg-7" >
                    <div class="card-shadow-secondary mb-3 widget-chart widget-chart2 text-left card">
                  
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist"
                        style="padding:0;
                                margin:0;
                                list-style-type:none;">

                      <li class="active"
                      style="float:left; /*pour IE*/
                        border-left:1px solid black;">
                          <a href="#activity" role="tab" data-toggle="tab" style="display:block;
                                    float:left;   
                                    width:100px;
                                    line-height:50px; /*hauteur de l'image de fond*/
                                    /* background:orange; */
                                    color:black;
                                    text-decoration:none;
                                    text-align:center;"> ALL</a></li>

                      <li style="float:left; /*pour IE*/
                        border-left:1px solid black; margin-left: -1px" >
                            <a href="#blockedusers" role="tab" data-toggle="tab"
                            style="display:block;
                                    float:left;   
                                    width:100px;
                                    line-height:50px; /*hauteur de l'image de fond*/
                                    /* background:orange; */
                                    color:black;
                                    text-decoration:none;
                                    text-align:center;" > DRIVING</a></li>

                      <li  style="float:left; /*pour IE*/
                        border-left:1px solid black; margin-top:-50px; margin-left: 200px">
                          <a href="#nda" role="tab" data-toggle="tab"style="display:block;
                                    float:left;   
                                    width:100px;
                                    line-height:50px; /*hauteur de l'image de fond*/
                                    /* background:orange; */
                                    color:black;
                                    text-decoration:none;
                                    text-align:center;" > PARKED</a></li>
                    </ul> 

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="activity">
                        <ul>
                          <small class="title">Lorem</small>
                          <li>
                            <h6> 
                                <p> </p>
                                <p> </p>
                                <p> </p>
                            </h6>
                          </li>

                          <li>
                            <h6> 
                            <p> </p>
                            <p> </p>
                            <p> </p>
                            </h6>
                          </li>

                          <li>
                            <p> </p>
                            <p> </p>
                            <p> </p>
                            </h6>
                          </li>
                        </ul>
                        <ul>
                          <small class="title">Lorem</small>
                          <li>
                            <h6>  
                                <p> </p>
                                <p> </p>
                                <p> </p>
                            </h6>
                          </li>
                          <li>
                            <h6>    
                                <p> </p>
                                <p> </p>
                                <p> </p>
                            </h6>
                          </li>
                          <li>
                            <h6>
                                <p> </p>
                                <p> </p>
                                <p> </p>
                            </h6>
                          </li>
                        </ul>
                        <ul>
                          <small class="title">Lorem</small>
                          <li>
                            <h6>
                                <p> </p>
                                <p> </p>
                                <p> </p>
                            </h6>
                          </li>
                        </ul>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="blockedusers">
                        <h4>Blocked users</h4>
                        <hr>
                        <p> </p>
                        <p> </p>
                        <p> </p>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="nda">
                        <h4>NDA</h4>
                        <hr>
                        <p> </p>
                        <p> </p>
                        <p> </p>
                      </div>
                      <div role="tabpanel" class="tab-pane" id="customerinvoices">
                        <h4>Customer Invoices</h4>
                        <hr>
                        <p> </p>
                        <p> </p>
                        <p> </p>
                      </div>
                    </div>
                  </div> 
                </div>
                                       
                </div>
    </div>

 <table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">Name

      </th>
      <th class="th-sm">Position

      </th>
      <th class="th-sm">Office

      </th>
      <th class="th-sm">Age

      </th>
      <th class="th-sm">Start date

      </th>
      <th class="th-sm">Salary

      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011/04/25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009/01/12</td>
      <td>$86,000</td>
    </tr>
    <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012/03/29</td>
      <td>$433,060</td>
    </tr>
    <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008/11/28</td>
      <td>$162,700</td>
    </tr>
    <tr>
      <td>Brielle Williamson</td>
      <td>Integration Specialist</td>
      <td>New York</td>
      <td>61</td>
      <td>2012/12/02</td>
      <td>$372,000</td>
    </tr>
    <tr>
      <td>Herrod Chandler</td>
      <td>Sales Assistant</td>
      <td>San Francisco</td>
      <td>59</td>
      <td>2012/08/06</td>
      <td>$137,500</td>
    </tr>
    <tr>
      <td>Rhona Davidson</td>
      <td>Integration Specialist</td>
      <td>Tokyo</td>
      <td>55</td>
      <td>2010/10/14</td>
      <td>$327,900</td>
    </tr>
    <tr>
      <td>Colleen Hurst</td>
      <td>Javascript Developer</td>
      <td>San Francisco</td>
      <td>39</td>
      <td>2009/09/15</td>
      <td>$205,500</td>
    </tr>
    <tr>
      <td>Sonya Frost</td>
      <td>Software Engineer</td>
      <td>Edinburgh</td>
      <td>23</td>
      <td>2008/12/13</td>
      <td>$103,600</td>
    </tr>
    <tr>
      <td>Jena Gaines</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>30</td>
      <td>2008/12/19</td>
      <td>$90,560</td>
    </tr>
    <tr>
      <td>Quinn Flynn</td>
      <td>Support Lead</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2013/03/03</td>
      <td>$342,000</td>
    </tr>
    <tr>
      <td>Charde Marshall</td>
      <td>Regional Director</td>
      <td>San Francisco</td>
      <td>36</td>
      <td>2008/10/16</td>
      <td>$470,600</td>
    </tr>
    <tr>
      <td>Haley Kennedy</td>
      <td>Senior Marketing Designer</td>
      <td>London</td>
      <td>43</td>
      <td>2012/12/18</td>
      <td>$313,500</td>
    </tr>
    <tr>
      <td>Tatyana Fitzpatrick</td>
      <td>Regional Director</td>
      <td>London</td>
      <td>19</td>
      <td>2010/03/17</td>
      <td>$385,750</td>
    </tr>
    <tr>
      <td>Michael Silva</td>
      <td>Marketing Designer</td>
      <td>London</td>
      <td>66</td>
      <td>2012/11/27</td>
      <td>$198,500</td>
    </tr>
    <tr>
      <td>Paul Byrd</td>
      <td>Chief Financial Officer (CFO)</td>
      <td>New York</td>
      <td>64</td>
      <td>2010/06/09</td>
      <td>$725,000</td>
    </tr>
    <tr>
      <td>Gloria Little</td>
      <td>Systems Administrator</td>
      <td>New York</td>
      <td>59</td>
      <td>2009/04/10</td>
      <td>$237,500</td>
    </tr>
    <tr>
      <td>Bradley Greer</td>
      <td>Software Engineer</td>
      <td>London</td>
      <td>41</td>
      <td>2012/10/13</td>
      <td>$132,000</td>
    </tr>
    <tr>
      <td>Dai Rios</td>
      <td>Personnel Lead</td>
      <td>Edinburgh</td>
      <td>35</td>
      <td>2012/09/26</td>
      <td>$217,500</td>
    </tr>
    <tr>
      <td>Jenette Caldwell</td>
      <td>Development Lead</td>
      <td>New York</td>
      <td>30</td>
      <td>2011/09/03</td>
      <td>$345,000</td>
    </tr>
    <tr>
      <td>Yuri Berry</td>
      <td>Chief Marketing Officer (CMO)</td>
      <td>New York</td>
      <td>40</td>
      <td>2009/06/25</td>
      <td>$675,000</td>
    </tr>
    <tr>
      <td>Caesar Vance</td>
      <td>Pre-Sales Support</td>
      <td>New York</td>
      <td>21</td>
      <td>2011/12/12</td>
      <td>$106,450</td>
    </tr>
    <tr>
      <td>Doris Wilder</td>
      <td>Sales Assistant</td>
      <td>Sidney</td>
      <td>23</td>
      <td>2010/09/20</td>
      <td>$85,600</td>
    </tr>
    <tr>
      <td>Angelica Ramos</td>
      <td>Chief Executive Officer (CEO)</td>
      <td>London</td>
      <td>47</td>
      <td>2009/10/09</td>
      <td>$1,200,000</td>
    </tr>
    <tr>
      <td>Gavin Joyce</td>
      <td>Developer</td>
      <td>Edinburgh</td>
      <td>42</td>
      <td>2010/12/22</td>
      <td>$92,575</td>
    </tr>
    <tr>
      <td>Jennifer Chang</td>
      <td>Regional Director</td>
      <td>Singapore</td>
      <td>28</td>
      <td>2010/11/14</td>
      <td>$357,650</td>
    </tr>
    <tr>
      <td>Brenden Wagner</td>
      <td>Software Engineer</td>
      <td>San Francisco</td>
      <td>28</td>
      <td>2011/06/07</td>
      <td>$206,850</td>
    </tr>
    <tr>
      <td>Fiona Green</td>
      <td>Chief Operating Officer (COO)</td>
      <td>San Francisco</td>
      <td>48</td>
      <td>2010/03/11</td>
      <td>$850,000</td>
    </tr>
    <tr>
      <td>Shou Itou</td>
      <td>Regional Marketing</td>
      <td>Tokyo</td>
      <td>20</td>
      <td>2011/08/14</td>
      <td>$163,000</td>
    </tr>
    <tr>
      <td>Michelle House</td>
      <td>Integration Specialist</td>
      <td>Sidney</td>
      <td>37</td>
      <td>2011/06/02</td>
      <td>$95,400</td>
    </tr>
    <tr>
      <td>Suki Burks</td>
      <td>Developer</td>
      <td>London</td>
      <td>53</td>
      <td>2009/10/22</td>
      <td>$114,500</td>
    </tr>
    <tr>
      <td>Prescott Bartlett</td>
      <td>Technical Author</td>
      <td>London</td>
      <td>27</td>
      <td>2011/05/07</td>
      <td>$145,000</td>
    </tr>
    <tr>
      <td>Gavin Cortez</td>
      <td>Team Leader</td>
      <td>San Francisco</td>
      <td>22</td>
      <td>2008/10/26</td>
      <td>$235,500</td>
    </tr>
    <tr>
      <td>Martena Mccray</td>
      <td>Post-Sales support</td>
      <td>Edinburgh</td>
      <td>46</td>
      <td>2011/03/09</td>
      <td>$324,050</td>
    </tr>
    <tr>
      <td>Unity Butler</td>
      <td>Marketing Designer</td>
      <td>San Francisco</td>
      <td>47</td>
      <td>2009/12/09</td>
      <td>$85,675</td>
    </tr>
    <tr>
      <td>Howard Hatfield</td>
      <td>Office Manager</td>
      <td>San Francisco</td>
      <td>51</td>
      <td>2008/12/16</td>
      <td>$164,500</td>
    </tr>
    <tr>
      <td>Hope Fuentes</td>
      <td>Secretary</td>
      <td>San Francisco</td>
      <td>41</td>
      <td>2010/02/12</td>
      <td>$109,850</td>
    </tr>
    <tr>
      <td>Vivian Harrell</td>
      <td>Financial Controller</td>
      <td>San Francisco</td>
      <td>62</td>
      <td>2009/02/14</td>
      <td>$452,500</td>
    </tr>
    <tr>
      <td>Timothy Mooney</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>37</td>
      <td>2008/12/11</td>
      <td>$136,200</td>
    </tr>
    <tr>
      <td>Jackson Bradshaw</td>
      <td>Director</td>
      <td>New York</td>
      <td>65</td>
      <td>2008/09/26</td>
      <td>$645,750</td>
    </tr>
    <tr>
      <td>Olivia Liang</td>
      <td>Support Engineer</td>
      <td>Singapore</td>
      <td>64</td>
      <td>2011/02/03</td>
      <td>$234,500</td>
    </tr>
    <tr>
      <td>Bruno Nash</td>
      <td>Software Engineer</td>
      <td>London</td>
      <td>38</td>
      <td>2011/05/03</td>
      <td>$163,500</td>
    </tr>
    <tr>
      <td>Sakura Yamamoto</td>
      <td>Support Engineer</td>
      <td>Tokyo</td>
      <td>37</td>
      <td>2009/08/19</td>
      <td>$139,575</td>
    </tr>
    <tr>
      <td>Thor Walton</td>
      <td>Developer</td>
      <td>New York</td>
      <td>61</td>
      <td>2013/08/11</td>
      <td>$98,540</td>
    </tr>
    <tr>
      <td>Finn Camacho</td>
      <td>Support Engineer</td>
      <td>San Francisco</td>
      <td>47</td>
      <td>2009/07/07</td>
      <td>$87,500</td>
    </tr>
    <tr>
      <td>Serge Baldwin</td>
      <td>Data Coordinator</td>
      <td>Singapore</td>
      <td>64</td>
      <td>2012/04/09</td>
      <td>$138,575</td>
    </tr>
    <tr>
      <td>Zenaida Frank</td>
      <td>Software Engineer</td>
      <td>New York</td>
      <td>63</td>
      <td>2010/01/04</td>
      <td>$125,250</td>
    </tr>
    <tr>
      <td>Zorita Serrano</td>
      <td>Software Engineer</td>
      <td>San Francisco</td>
      <td>56</td>
      <td>2012/06/01</td>
      <td>$115,000</td>
    </tr>
    <tr>
      <td>Jennifer Acosta</td>
      <td>Junior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>43</td>
      <td>2013/02/01</td>
      <td>$75,650</td>
    </tr>
    <tr>
      <td>Cara Stevens</td>
      <td>Sales Assistant</td>
      <td>New York</td>
      <td>46</td>
      <td>2011/12/06</td>
      <td>$145,600</td>
    </tr>
    <tr>
      <td>Hermione Butler</td>
      <td>Regional Director</td>
      <td>London</td>
      <td>47</td>
      <td>2011/03/21</td>
      <td>$356,250</td>
    </tr>
    <tr>
      <td>Lael Greer</td>
      <td>Systems Administrator</td>
      <td>London</td>
      <td>21</td>
      <td>2009/02/27</td>
      <td>$103,500</td>
    </tr>
    <tr>
      <td>Jonas Alexander</td>
      <td>Developer</td>
      <td>San Francisco</td>
      <td>30</td>
      <td>2010/07/14</td>
      <td>$86,500</td>
    </tr>
    <tr>
      <td>Shad Decker</td>
      <td>Regional Director</td>
      <td>Edinburgh</td>
      <td>51</td>
      <td>2008/11/13</td>
      <td>$183,000</td>
    </tr>
    <tr>
      <td>Michael Bruce</td>
      <td>Javascript Developer</td>
      <td>Singapore</td>
      <td>29</td>
      <td>2011/06/27</td>
      <td>$183,000</td>
    </tr>
    <tr>
      <td>Donna Snider</td>
      <td>Customer Support</td>
      <td>New York</td>
      <td>27</td>
      <td>2011/01/25</td>
      <td>$112,000</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>
      <th>Name
      </th>
      <th>Position
      </th>
      <th>Office
      </th>
      <th>Age
      </th>
      <th>Start date
      </th>
      <th>Salary
      </th>
    </tr>
  </tfoot>
</table>
    


	@endsection

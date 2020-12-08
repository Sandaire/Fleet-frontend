
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js">

</script>
</head>

<body>
					<!-- Content -->
					  <div class="column content">						
							
							<div class="card-body">
 <br>
 @if(Session::has('success'))
 <div class="alert alert-success">
     {{Session::get('success')}}
 </div>
 @endif
     <form method="POST" action="{{ route('loading.loadings.store') }}">
         {{csrf_field()}}
         <section>
             <div class="panel panel-header">

                 <div class="row">
                     <div class="col-md-6">
                 <div class="form-group">
				 <label for="vehicle" class="col-md-4 col-form-label text-md-right">{{ __('Vehicle') }}</label>
                    <div class="form-select">
												<select name="vehicle" id= "vehicle" required>
												<option  value="">{{ 'Choose a vehicle' }}</option>
												  @foreach($vehicles as $vehicle)
													
													<option  value="{{ $vehicle->id }}">{{ $vehicle->code }}</option>
													@endforeach
												</select>
													@error('vehicle')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
													
											</div>
                 </div>
				 </div>
                 <div class="form-group">
                
				 <label for="terminal" class="col-md-4 col-form-label text-md-right">{{ __('Terminal') }}</label>
                     <div class="form-group row">
												<select name="terminal" id="terminal" required>
											<option  value="">{{ 'Choose a terminal' }}</option>
												
														<option value="THOR/JOA">THOR - JOA</option>
														<option value="TEVASA">TEVASA</option>
													
														 <option value="THOR/SODIGAZ">THOR - SODIGAZ</option>
														 <option value="TGV">TGV - SODIGAZ</option>
														 <option value="THOR/HAITI GAZ">THOR - HAITI GAZ</option>
													
												
											  
											  									
											</select>
											@error('terminal')
												<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
												</span>
											@enderror
											
											</div>
                 </div>
				 
				 

             </div>
			 </div>
             <div class="panel panel-footer" >		
                 <table class="table table-bordered">
                     <thead>
                         <tr>
                             <th>Destination</th>
                             <th>Delivery Qty</th>
                             <th>Invoice #</th>
                             <th><a href="#" class="addRow"><i class="glyphicon glyphicon-plus"></i></a></th>
                         </tr>
                     </thead>
                     <tbody>
         <tr>
         
         <td>
											<select name="location_id[]" id= "location_id" class="form-control location_id" required>
													<option  value="">{{ 'Choose a location' }}</option>
												  @foreach($locations as $location)
													
													<option  value="{{ $location->id }}">{{ $location->PlaceDescription }}</option>
													@endforeach
												</select>
													@error('location')
														<span class="invalid-feedback" role="alert">
															<strong>{{ $message }}</strong>
														</span>
													@enderror
		 
		 </td>
           <td><input type="text" name="quantity[]" class="form-control quantity" ></td>
           <td><input type="text" name="invnumber[]" class="form-control invnumber" ></td>
         <td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>
         </tr>
                         </tr>
                     </tbody>
                     <tfoot>
                         <tr>
                            
                             <td><input type="submit" name="" value="Submit" class="btn btn-success"></td>
                         </tr>
                     </tfoot>
                 </table>
             </div>
         </section>
     </form>
</div>
</div>


<script type="text/javascript">
  
	/////////////////////////////////////////////
    $('.addRow').on('click',function(){
        addRow();
    });
    function addRow()
    {
        var tr='<tr>'+
        '<td><select name="location_id[]" id= "location_id" class="form-control location_id"><option  value="">{{ "Choose a location" }}</option>@foreach($locations as $location)<option  value="{{ $location->id }}">{{ $location->PlaceDescription }}</option>@endforeach</select></td>'+
        '<td><input type="text" name="quantity[]" class="form-control quantity" =""></td>'+
        '<td><input type="text" name="invnumber[]" class="form-control invnumber" =""></td>'+
        '<td><a href="#" class="btn btn-danger remove"><i class="glyphicon glyphicon-remove"></i></a></td>'+
        '</tr>';
        $('tbody').append(tr);
    };
    $('.remove').live('click',function(){
        var last=$('tbody tr').length;
        if(last==1){
            alert("you can not remove last row");
        }
        else{
             $(this).parent().parent().remove();
        }
    
    });
</script>

</body>
</html>

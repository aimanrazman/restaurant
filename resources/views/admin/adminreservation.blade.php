<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">
  		
  		@include("admin.navbar")
  		
  		<div class="col-lg-9 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Reservation</h4>
                    <div class="table-responsive">
                      	<table class="table">
                        	<thead>
                          		<tr>
                            		<th>Name</th>
                            		<th>Email</th>
                            		<th>Phone Number</th>
                            		<th>No. of Guest</th>
                            		<th>Date</th>
                            		<th>Time</th>
                            		<th>Message</th>
                          		</tr>
                        	</thead>
                        	<tbody>
								@foreach($data as $data)
		                          	<tr>
		                            	<td>{{$data->name}}</td>
		                            	<td>{{$data->email}}</td>
		                            	<td>{{$data->phone}}</td>
		                            	<td>{{$data->guest}}</td>
		                            	<td>{{$data->date}}</td>
		                            	<td>{{$data->time}}</td>
		                            	<td>{{$data->message}}</td>
		                          </tr>
	                          	@endforeach
                        	</tbody>
                      	</table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    @include("admin.adminscript")

  </body>
</html>
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

  		<div class="row">
  			<div class="col-lg-12 grid-margin stretch-card">
	            <div class="card">
	                <div class="card-body">
	                    <h4 class="card-title">Customer Orders</h4>
	                    <form action="{{url('/search')}}" method="get">
	                    	<input type="text" name="search" style="color: blue;">
	                    	<input type="submit" value="Search" class="btn btn-success">
	                    </form>
	                    <div class="table-responsive">
	                      	<table class="table">
	                        	<thead>
	                          		<tr>
	                            		<th>Name</th>
	                            		<th>Phone</th>
	                            		<th>Address</th>
	                            		<th>Foodname</th>
	                            		<th>Price</th>
	                            		<th>Quantity</th>
	                            		<th>Total Price</th>
	                          		</tr>
	                        	</thead>
	                        	<tbody>
	                        		@foreach($data as $data)
			                          	<tr>
			                            	<td>{{$data->name}}</td>
			                            	<td>{{$data->phone}}</td>
			                            	<td>{{$data->address}}</td>
			                            	<td>{{$data->foodname}}</td>
			                            	<td>RM{{$data->price}}</td>
			                            	<td>{{$data->quantity}}</td>
			                            	<td>RM{{$data->price * $data->quantity}}</td>
			                          </tr>
		                          	@endforeach
	                        	</tbody>
	                      	</table>
	                    </div>
	                </div>
	            </div>
	        </div>
  		</div>	
    </div>
    
    @include("admin.adminscript")

  </body>
</html
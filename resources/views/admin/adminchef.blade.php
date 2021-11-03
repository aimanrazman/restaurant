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
	  		<div class="col-12 grid-margin stretch-card">
		    	<div class="card">
		        	<div class="card-body">
		                <h4 class="card-title">Add Chef</h4>
		                <form class="forms-sample" action="{{url('/uploadchef')}}" method="post" enctype="multipart/form-data">

		                	@csrf

		                    <div class="form-group">
		                        <label for="name">Name</label>
		                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
		                    </div>
		                    <div class="form-group">
		                        <label for="speciality">Speciality</label>
		                        <input type="text" class="form-control" id="speciality" name="speciality" placeholder="Enter the speciality" required>
		                    </div>
		                    <div class="form-group">
		                        <label>Image upload</label>
		                        <div>
		                        	<input type="file" name="image" required>
		                        </div>
		                    </div>
		                    <div>
		                    	<input style="color: black" type="submit" value="Save">
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
		    <div class="col-lg-12 grid-margin stretch-card">
	            <div class="card">
	                <div class="card-body">
	                    <h4 class="card-title">Chef Table</h4>
	                    <div class="table-responsive">
	                      	<table class="table">
	                        	<thead>
	                          		<tr>
	                            		<th>Name</th>
	                            		<th>Speciality</th>
	                            		<th>Image</th>
	                            		<th>Action</th>
	                          		</tr>
	                        	</thead>
	                        	<tbody>
	                        		@foreach($data as $data)
			                          	<tr>
			                            	<td>{{$data->name}}</td>
			                            	<td>{{$data->speciality}}</td>
			                            	<td><img height="100" width="100" src="/chefimage/{{$data->image}}"></td>
			                            	<td>
			                            		<label class="badge badge-danger"><a href="{{url('/deletechef', $data->id)}}" style="color: #ffffff">Delete</a></label>
			                            		<label class="badge badge-info"><a href="{{url('/updatechef', $data->id)}}" style="color: #ffffff">Update</a></label>
			                            	</td>
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
</html>
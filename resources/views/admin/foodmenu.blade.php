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
		                <h4 class="card-title">Add Food</h4>
		                <form class="forms-sample" action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

		                	@csrf

		                    <div class="form-group">
		                        <label for="title">Title</label>
		                        <input type="text" class="form-control" id="title" name="title" placeholder="Write a title" required>
		                    </div>
		                    <div class="form-group">
		                        <label for="price">Price</label>
		                        <input type="num" class="form-control" id="price" name="price" placeholder="Price" required>
		                    </div>
		                    <div class="form-group">
		                        <label>Image upload</label>
		                        <div>
		                        	<input type="file" name="image" required>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                    	<label for="description">Description</label>
		                        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
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
	                    <h4 class="card-title">Food Table</h4>
	                    <div class="table-responsive">
	                      	<table class="table">
	                        	<thead>
	                          		<tr>
	                            		<th>Food Name</th>
	                            		<th>Price</th>
	                            		<th>Description</th>
	                            		<th>Image</th>
	                            		<th>Action</th>
	                          		</tr>
	                        	</thead>
	                        	<tbody>
									@foreach($data as $data)
			                          	<tr>
			                            	<td>{{$data->title}}</td>
			                            	<td>{{$data->price}}</td>
			                            	<td>{{$data->description}}</td>
			                            	<td><img height="200" width="200" src="/foodimage/{{$data->image}}"></td>
			                            	<td>
			                            		<label class="badge badge-danger"><a href="{{url('/deletemenu', $data->id)}}" style="color: #ffffff">Delete</a></label>
			                            		<label class="badge badge-info"><a href="{{url('/updateview', $data->id)}}" style="color: #ffffff">Update</a></label>
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
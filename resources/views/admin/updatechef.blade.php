<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    
  	<base href="/public">

    @include("admin.admincss")

  </head>
  <body>
    <div class="container-scroller">
  		
  		@include("admin.navbar")

  		<div class="col-12 grid-margin stretch-card">
	    	<div class="card">
	        	<div class="card-body">
	                <h4 class="card-title">Update Chef</h4>
	                <form class="forms-sample" action="{{url('/updatefoodchef', $data->id)}}" method="post" enctype="multipart/form-data">

	                	@csrf

	                    <div class="form-group">
	                        <label for="name">Name</label>
	                        <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" required>
	                    </div>
	                    <div class="form-group">
	                        <label for="speciality">Speciality</label>
	                        <input type="text" class="form-control" id="speciality" name="speciality" value="{{$data->speciality}}" required>
	                    </div>
	                    <div class="form-group">
			                <label>Old image</label>
			                <div>
			                  	<img height="200" width="200" src="/chefimage/{{$data->image}}">
			                </div>
			            </div>
			            <div class="form-group">
			                <label>New image upload</label>
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
    </div>
    
    @include("admin.adminscript")

  </body>
</html>
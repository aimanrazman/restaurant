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

  		<div class="col-9 grid-margin stretch-card">
		    <div class="card">
		        <div class="card-body">
		            <h4 class="card-title">Add Food</h4>
		            <form class="forms-sample" action="{{url('/update', $data->id)}}" method="post" enctype="multipart/form-data">

		            @csrf

			            <div class="form-group">
			                <label for="title">Title</label>
			                <input type="text" class="form-control" id="title" name="title" value="{{$data->title}}" required>
			            </div>
	                    <div class="form-group">
			                <label for="price">Price</label>
			                <input type="num" class="form-control" id="price" name="price" value="{{$data->price}}" required>
			            </div>
			            <div class="form-group">
			                <label for="description">Description</label>
			                <textarea class="form-control" id="description" name="description" rows="4">{{$data->description}}</textarea>
			            </div>
			            <div class="form-group">
			                <label>Old image</label>
			                <div>
			                  	<img height="200" width="200" src="/foodimage/{{$data->image}}">
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
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
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

	  		<div class="col-lg-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Users Table</h4>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>

                        	@foreach($data as $data)
	                          <tr>
	                            <td>{{$data->name}}</td>
	                            <td>{{$data->email}}</td>

	                            @if($data->usertype=="0")
	                            	<td><label class="badge badge-danger"><a href="{{url('/deleteuser', $data->id)}}" style="color: #ffffff">Delete</a></label></td>
	                            @else
	                            	<td><label class="badge badge-info">Not Allowed</label></td>
	                            @endif

	                          </tr>
                          	@endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
	  	</div>
    	<!-- container-scroller -->

	    @include("admin.adminscript")

	  </body>
	</html>
</body>
</html>
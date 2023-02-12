@extends('admin.admin_master')

@section('admen')
    
<div class="page-content">
    <div class="container-fluid">
    
    
    <div class="row">
        <div class="col-lg-6">
            <div class="card"><br><br>
    <center>
                <img class="rounded-circle avatar-xl" src="{{(!empty($userdata->profile_image))?url('upload/admin_images/'.$userdata->profile_image):
                url('upload/no_image.jpg') }}" alt="Card image cap">
    </center>
    
                <div class="card-body">
                    <h4 class="card-title">Name : {{ $userdata->name }} </h4>
                    <hr>
                    <h4 class="card-title">User Email : {{$userdata->email }} </h4>
                    <hr>
                    <h4 class="card-title">User Id : {{$userdata->id }} </h4>
                    <hr>
                    <a href="{{route('admin.edit')}}" class="btn btn-info btn-rounded waves-effect waves-light" > Edit Profile</a>
    
                </div>
            </div>
        </div> 
    
    
     </div> 
    
    
    </div>
    </div>
@endsection
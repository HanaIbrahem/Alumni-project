@extends('admin.admin_master')

@section('admen')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">
    
    <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <br> <br> 
                <h4 class="card-title">Edit Profile Page </h4>
                <br>
              
    

                 @if (count($errors))
                        <p class="alert alert-danger alert-dismissibles fade show">
                        @foreach ( $errors->all() as $error )
                           {{$error}} <br>
                        @endforeach
                    </p>
                @endif
                <form method="post" action="{{route('update.password')}}" enctype="multipart/form-data">
                    @csrf
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                    <div class="col-sm-10">
                        <input name="Old_Passwor" class="form-control" type="password" placeholder="Old Passwor"  id="old-password">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
                        <input name="New_Password" class="form-control" type="password" placeholder="New Password"  id="new-password">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Confirm</label>
                    <div class="col-sm-10">
                        <input name="Confirm_Password" class="form-control" type="password" placeholder="New Password"  id="new-password">
                    </div>
                </div>
              
              
    
    
                
           
                <!-- end row -->
                <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile">
                </form>
    
    
    
            </div>
        </div>
    </div> <!-- end col -->
    </div>
    
    
    
    </div>
    </div>
    
    
   
    
@endsection
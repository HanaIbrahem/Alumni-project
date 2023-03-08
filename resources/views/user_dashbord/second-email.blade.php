
@php
$id=Auth::user()->id;
$userdata=App\Models\user::find($id);
use App\Models\Department;
// $department=Department::where('id',1)->get();
$department=Department::find($userdata->department);
@endphp
@extends('user_dashbord.master')

@section('main')

<div class="content-body">
    <div class="container-fluid">

        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your  dashboard </p>
                </div>
            </div>
           
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('second-email.form') }}">
                           
                                @csrf
                                @method("POST")
                             
                                
                                @if (count($errors))
                                <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
                                    <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                    </button>
                                    <strong>Error!</strong> 
                                    <ul>
                                    @foreach ($errors->all() as $message )
                                    <li>{{ $message}}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                    
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label form-labe text-primary">Email</label><br>
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control form-control" name="second_email" value="{{ old('second_email') }}" placeholder="Second Email">
                                    </div>
                                </div>

                                <input type="submit" class="btn btn-primary" value="Update">
                              
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
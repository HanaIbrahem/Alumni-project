@extends('admin.admin_master')

@php
    $i = 0;
@endphp



@section('admen')
    <div class="content-body">
        <div class="container-fluid">

            <div class="modal fade" id="addProjectSidebar">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Create Project</h5>
                            <button type="button" class="close" data-dismiss="modal"><span>×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <label class="text-black font-w500">Project Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Deadline</label>
                                    <input type="date" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="text-black font-w500">Client Name</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-primary">CREATE</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="welcome-text">
                        <h4>Hi, welcome back!
                        </h4>
                        <p class="mb-0">Your dashboard</p>
                    </div>
                </div>

            </div>


            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Admin Register</h4>
                    </div>
                    <div class="card-body p-6">
                  
                   
    
                        {{-- Validation Errors --}}
                        @if (count($errors))
                        <div class="div alert-danger">
                            @foreach ($errors->all() as $message )
                                <li>{{ $message}}</li>
                            @endforeach
                            </ul>
                        </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
    
                        <!-- Form -->
                    
                        <form   action="{{route('admin.register.create')}}"method="POST" id="myForm">
                            @csrf
                            <!-- Username -->
                            <div class="row">
                                <div class="col-sm form-group">
                                    <div class="form-group mb-3 ">
                                        {{-- <label for="username" class="form-label">Firt Name</label> --}}
                                        <input type="text" id="name" class="form-control" name="name" placeholder="First Name" >
                                    </div>
                                    
                                </div>
                          
                            </div>
                            <!-- Email -->
                            <div class="mb-3 form-group">
                                {{-- <label for="email" class="form-label">Email</label> --}}
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" >
                            </div>
                            <!-- Password -->
                            <div class="mb-1 form-group">
                                {{-- <label for="password" class="form-label">Password</label> --}}
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" >
                            </div>
                            <div class="mb-3 form-group">
                                {{-- <label for="password" class="form-label">Confirm Password</label> --}}
                                <input type="password" id="password" class="form-control" name="password_confirmation" placeholder="Confirm password" >
                            </div>
                            
                            <div>
                                <!-- Button -->
                                <div class="d-grid " style="width: 30%">
                                    <button type="submit" class="rounded btn btn-primary">Register
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    name: {
                        required : true,
                    },confirmpassword:{
                        required : true,

                    },password:{
                     
                      
                      required : true,
                    },email:{
                        required : true,

                    }
                },
                messages  :{
                   
    
                    name: {
                        required : 'Please confirm your password',
                    },confirmpassword:{

                    },password:{
                        required : 'Please Enter password',
                    } 
                    ,email:{
                        required : 'Please Enter your Email',

                    }
                },
                errorElement : 'span', 
                errorPlacement: function (error,element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight : function(element, errorClass, validClass){
                    $(element).addClass('is-invalid');
                },
                unhighlight : function(element, errorClass, validClass){
                    $(element).removeClass('is-invalid');
                },
            });
        });
        
    </script>
@endsection

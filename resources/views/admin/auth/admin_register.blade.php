@php
    use App\Models\University;
    $websitesetup=University::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{  $websitesetup->title}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
  <section class="container d-flex flex-column ">
    <div class="row align-items-center justify-content-center g-0 min-vh-100">
        <div class="col-lg-5 col-md-8 py-8 py-xl-0">
            <!-- Card -->
            
            <div class="card shadow">
               
                <!-- Card body -->
                <div class="card-body p-6">
                  
                   
                    <div class="mb-4 text-center">
                        <div class="row">
                            <div class="col"></div>
                            <div class="col"> <a href="{{route('/')}}"><img src="{{$websitesetup->logo}}" class="rounded mx-auto d-block" alt=""></a>
                            </div>
                            <div class="col"></div>
                        </div>
                        <h3 class="mb-1 fw-bold">Sign up</h3>
                        <span class="opacit">Already have an account?</span>
                        <a href="{{route('login_form')}}" class="text-primary ">Sign in</a>
                    </div>

                    {{-- Validation Errors --}}
                    @if (count($errors))
                    <div class="div alert-danger">
                        @foreach ($errors->all() as $message )
                            <li>{{ $message}}</li>
                        @endforeach
                        </ul>
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
</section>    


<script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{asset('backend/vendor/peity/jquery.peity.min.js')}}"></script>

    <script src="{{asset('backend/js/validate.min.js')}}"></script>

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
</body>
</html>
@php
    use App\Models\University;
    $websitesetup=University::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{{ $websitesetup->title}}</title>
  
    {{-- <link rel="stylesheet" href="{{asset('backend/vendor/chartist/css/chartist.min.css')}}">
    <link href="{{asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/vendor/owl-carousel/owl.carousel.css" rel="stylesheet')}}">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet"> --}}




    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
   
</head>

<body>

 
@php
       use App\Models\Department;
       $department=Department::all();
@endphp
         <!-- Page content -->
    <main> 
        <section class="container d-flex flex-column ">
            <div class="row align-items-center justify-content-center g-0 min-vh-100">
                <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                    <!-- Card -->
                    <div class="card shadow">
                       
                        <!-- Card body -->
                        <div class="card-body p-6">
                          
                           
                            <div class="mb-4  text-center">
                                <div class="row">
                                    <div class="col"></div>
                                    <div class="col"> <a href="{{route('/')}}"><img src="{{$websitesetup->logo}}" class="rounded mx-auto d-block" alt=""></a>
                                    </div>
                                    <div class="col"></div>
                                </div>
                                <h3 class="mb-1 fw-bold">Sign up</h3>
                                <span class="opacit">Already have an account?</span>
								<a href="{{route('login')}}" class="text-primary ">Sign in</a>
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
                        
                            <form action="{{ route('register') }}"method="POST" id="myForm">
                                @csrf
                                <!-- Username -->
                                <div class="row">
                                    <div class="col-sm form-group">
                                        <div class="form-group mb-1 ">
                                            {{-- <label for="username" class="form-label">Firt Name</label> --}}
                                            <input type="text" id="name" class="form-control" name="name" placeholder="First Name" >
                                        </div>
                                        
                                    </div>
                                    <div class="col-sm">
                                        <div class="mb-1 form-group">
                                            {{-- <label for="username" class="form-label">Last Name</label> --}}
                                            <input type="text" id="lastname " class="form-control" name="lname" placeholder="Last Name">
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
                                <div class="row justify-content-center align-items-center g-2">
                                    <div class="col form-group">
                                        <label for="password" class="form-label">Gender</label><br>
                                        <label for="">Female</label>
                                        <input type="radio" name="gender" value="female" id="">
                                        <label for="">Male</label>
                                        <input type="radio" name="gender" value="male" id="">

                                    </div>  
                                    <div class="col form-group">
                                        <label for="password" class="form-label">User Type</label><br>
                                        <select name="usertype" class="form-select" id="type" >
                                            <option value="Alumni">Alumni</option>
                                            <option value="Student">Student</option>
                                            <option value="Teacher">Teacher</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3 mt-2 form-group">
                                    <label for="password" name="department" class="form-label">Department</label>
                                    <select class="form-select" name="department" id="inputGroupSelect02">
                                      
                                        @foreach ($department as $item )
                                            <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                  </div>
                                <!-- Checkbox -->
                                <div class="mb-3 ">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="agreeCheck">
                                        <label class="form-check-label" for="agreeCheck"><span>I agree to the <a href="terms-condition-page.html">Terms of
												Service </a>and
											<a href="terms-condition-page.html">Privacy Policy.</a></span></label>
                                    </div>
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
    </main>

	<script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{asset('backend/vendor/peity/jquery.peity.min.js')}}"></script>

    <script src="{{asset('backend/js/validate.min.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function (){
            $('#myForm').validate({
                rules: {
                    lname: {
                        required : true,
                    }, name: {
                        required : true,
                    },confirmpassword:{
                        required : true,

                    },password:{
                        required : true,
                    },gender:{
                        required : true,
                    },usertype:{
                        required : true,
                    },email:{
                        required : true,

                    }
                },
                messages  :{
                    lname: {
                        required : 'Please Enter Last Name    ',
                    },
    
                    name: {
                        required : 'Please confirm your password',
                    },confirmpassword:{

                    },password:{
                        required : 'Please Enter password',
                    },gender:{
                        required : 'Please Enter your gender',
                    },department:{
                        required : 'Please select your department',
                    },usertype:{
                        required : 'Please select usertype',
                    },email:{
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






{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

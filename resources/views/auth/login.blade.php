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
    <title>{{$websitesetup->title}}</title>
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
                        <h3 class="mb-1 fw-bold">Sign in</h3>
                        <span class="opacit">if you don't have an account?</span>
                        <a href="{{route('register')}}" class="text-primary ">Sign up</a>
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
                
                    <form   method="POST" action="{{ route('login') }}" id="myForm">
                        @csrf
                        <!-- Username -->
                       
                        <!-- Email -->
                        <div class="mb-3 form-group">
                            {{-- <label for="email" class="form-label">Email</label> --}}
                            <input type="email" id="email" class="form-control" name="email" placeholder="Email address here" >
                        </div>
                        <!-- Password -->
                        <div class="mb-3 form-group">
                            {{-- <label for="password" class="form-label">Password</label> --}}
                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" >
                        </div>
                        
                        @if (Route::has('password.request'))
                       
                        <div class="mb-3">
                            <a class="underline text-sm  " href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        </div>
                         @endif
                        
                        <div>
                            <!-- Button -->
                            <div class="d-grid " style="width: 30%">
                                <button type="submit" class="rounded btn btn-primary">Login
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

                password:{
                     
                      
                      required : true,
                    },email:{
                        required : true,

                    }
                },
                messages  :{
                   
    

                    password:{
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



{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

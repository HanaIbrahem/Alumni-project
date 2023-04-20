

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
    
    
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
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
                                <div class="col"> <a href="{{route('/')}}"><img src="{{asset($websitesetup->logo)}}" class="rounded mx-auto d-block" alt=""></a>
                                </div>
                                <div class="col"></div>
                            </div>
                            <h3 class="mb-1 fw-bold">Reset Password</h3>
            
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
                    
                        <form method="POST" action="{{ route('admin.password.store') }}">
                            @csrf
                            @method("POST")
                            <!-- Username -->
                           
                             <!-- Password Reset Token -->
                           <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <!-- Email -->
                            <div class="mb-3 form-group">
                                {{-- <label for="email" class="form-label">Email</label> --}}
                                {{-- <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus /> --}}
                                <input type="email" id="email" value="{{$request->email}}" class="form-control" name="email" placeholder="Email address here" >
                            </div>
                            <!-- Password -->
                            <div class="mb-3 form-group">
                                {{-- <label for="password" class="form-label">Password</label> --}}
                                <input type="password" id="password" class="form-control" name="password" placeholder="Password" >
                            </div>
                            
                            {{-- Confirm Password --}}
                            <div class="mb-3 form-group">
                                {{-- <label for="password" class="form-label">Password</label> --}}
                                <input type="password" id="password_confirmation" class="form-control" name="password_confirmation" placeholder="password confirmation" >
                            </div>
                        
                            <div>
                                <!-- Button -->
                                <div class="d-grid " style="width: 50%">
                                    <button type="submit" class="rounded btn btn-primary">Reset Password
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</body>
</html>




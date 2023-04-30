

@extends('frontend.body.master')

<div style=></div>
@section('main')

<header class="position-relative">
    <div class="page-header min-vh-25 position-relative"
        style="background-image: url('{{asset('upload/Untitled.jpg')}}');"
        loading="lazy">
        <span class="mask bg-gradient-dark"></span>
        <div class="container mt-5">
            <div class="row justify-content-center">
                {{-- <div class="col-lg-6 text-center mx-auto mt-n7">
                    <h1 class="text-white fadeIn2 fadeInBottom">
                        Your Career 
                    </h1>
                    <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-8">
                        It is our task to find your job opportunity in our community.
                    </p>
                  
                </div> --}}
            </div>
        </div>
    </div>
</header>

{{-- start card of body --}}
<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

    <div class="container my-5">
        <section class="pt-2 pb-3">
            <div class="container">
                <div class="row align-items-center">
                    <!-- col -->
                    <div class=" col-12">
                        <div class="d-md-flex align-items-center">
                            <!-- img -->
                            <div class="position-relative mt-n5">
                                <img src="{{asset('upload/images/career/'.$career->image)}}" width="100px" height="100px" alt="" class=" rounded-3 border">
        
                            </div>
                            
                            <div class="w-100 ms-md-4 ">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <!-- heading -->
                                        <h1 class="mb-0 ">{{$career->title}}
                                        </h1>
                                        <div class="mb-2 mb-md-0">
                                            <span class="me-2 icon {{ \Carbon\Carbon::now() > $career->duration ? 'text-danger' : '' }}"> <i class="fa-solid fa-clock op text-info"></i><span class=" op">{{ \Carbon\Carbon::parse($career->duration)->format('M d, Y')  }}</span></span>
                                            <span class="me-2">
                                                <i class="fa-solid fa-money"> </i><span class=" op">{{$career->salary_range}}</span></span>
                                            <span class="me-2">
                                                <i class="fa-solid fa-location-dot op"></i><span class=" op">{{$career->location}}</span></span>
                                        </div>
        
                                        {{-- <div>
                                            <!-- reviews -->
                                            <span class="text-dark fw-medium">4.5 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z">
                                                </path>
                                                </svg>
        
                                         </span><span class="ms-0">(131 Reviews)</span>
                                        </div> --}}
                                    </div>
                                   
                                </div>
        
                                <div>
                                    <span class=" text-warning">{{ \Carbon\Carbon::parse($career->created_at)->diffForHumans() }}</span>  
                                    
                                </div>
                                
                            </div>
                           
                        </div>
                    </div>
        
                </div>

            </div>
        </section>

        <section class="py-2">
              
            <div class="container">
                
                <div class="row mt-6 rowrev">
                    <div class="col-12">
                        <h2 class="mb-3 companyjobheads">About {{$career->type}}</h2>
        
                        {!! $career->detail !!}
                        
                    
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>





@endsection


@extends('frontend.body.master')

<div style=></div>
@section('main')
<section>
    <!-- container -->
    <div class="container">
        <!-- row -->
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

<section class="py-6">
              
    <div class="container">
        
        <div class="row mt-6 rowrev">
            <div class="col-12">
                <h2 class="mb-3 companyjobheads">About {{$career->type}}</h2>

                {!! $career->detail !!}
                
            
            </div>
        </div>
    </div>
</section>


@endsection
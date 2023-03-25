@extends('frontend.body.master') 


@section('main')

{{-- Header Section Carousel  --}}

{{-- end section --}}
{{-- Main section --}}
<section class="py-8">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card border mb-6 mb-md-0 shadow-none">
                    <div class="card-header">
                        <h4 class="mb-0 fs-5">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter text-muted me-2" viewBox="0 0 16 16">
                               <path   d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                            </svg>
                            All Filters
                        </h4>
                    </div>
                    <form action="{{route('career.groupby')}}" method="post">

                        @csrf
                        <div class="card-body py-3">

                            <a class="fs-5 text-dark fw-semi-bold" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Type <span class="float-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                   </svg>
                                  </span>
                            </a>
                            <div class="collapse show" id="collapseExample">
                                <div class="mt-3">
                                    {{-- start foreach --}}
                                     @foreach ($careercount as $item)
                                     <div class="form-check mb-2 text-secondary">

                                        <input class="form-check-input" type="radio" name="type" value="{{$item->type}}" id="flexCheckLocationTwo " checked="">
                                        <label class="form-check-label" for="flexCheckLocationTwo ">
                                            {{$item->type}}  <span class="text-muted">({{$item->count}})</span>
                                        </label>  
                                    </div>
                                     @endforeach
                                    {{-- end foreach --}}
                                   
                                
                                </div>
                            </div>
    
                        </div>

                        
                        <div class="card-body py-3">

                            <a class="fs-5 text-dark fw-semi-bold" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                Location <span class="float-end">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-down" viewBox="0 0 16 16">
                                   <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
                                   </svg>
                                  </span>
                            </a>
                            <div class="collapse show" id="collapseExample">
                                <div class="mt-3">
                                    {{-- start foreach --}}
                                     @foreach ($location as $item)
                                     <div class="form-check mb-2 text-secondary">

                                        <input class="form-check-input" type="radio" name="location" value="{{$item->location}}" id="flexCheckLocationTwo " checked="">
                                        <label class="form-check-label" for="flexCheckLocationTwo ">
                                            {{$item->location}}  <span class="text-muted">({{$item->count}})</span>
                                        </label>  
                                    </div>
                                     @endforeach
                                    {{-- end foreach --}}
                                   
                                
                                </div>
                            </div>
    
                        </div>

                        <div class="card-body py-3">
                            <input type="submit" class="btn btn-primary rounded" value="Filter">
                        </div>
                    </form> 
                </div>
            
            </div>

            <div class="col-xl-9 col-md-8 mb-6 mb-md-0">
                <div class="row align-items-center mb-4">
                    <div class="col">
                        <p class="mb-0">List of careers </p>
                    </div>
                    <div class="col-auto">
                        <div class="d-flex ">
                            <div class="ms-3">
                                
                                <select class="selectpicker form-control" data-width="100%">
                                  <option value="Newest">Newest</option>
                                  <option value="Oldest">Salary</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- start foreach --}}
                @foreach ( $career as $item )
                <!-- card  start-->

                <div class="card card-bordered mb-3 card-hover cursor-pointer">
                    <!-- card body -->
                    <div class="card-body">
                        <div>
                            <div class="d-xl-flex">
                                <div class="mb-3 mb-md-0">
                                    <!-- Img -->
                                    <img src="{{asset('upload/images/career/'.$item->image)}}" alt="{{$item->title}}" width="100px" height="100px" class="rounded-circle">
                                </div>
                                <!-- text -->
                                <div class="ms-xl-3 w-100 mt-3 mt-xl-1">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <h3 class="mb-1 fs-4"><a href="job-single.html" class="text-inherit">{{$item->title}}</a>
                                                <span class="badge bg-danger-soft ms-2">Featured Job</span>
                                            </h3>

                                            <div>
                                                <span>at {{$item->type}} </span>
                                            </div>


                                        </div>
                                       <div>
                                           {{-- <span class="icon {{ \Carbon\Carbon::now() > $item->duration ? 'text-danger' : '' }}">
                                             <i class="fa fa-clock text-primary"></i>
                                           </span> --}}
                                        </div>
                                    </div>
                                   
                                    <div class="d-md-flex justify-content-between ">
                                        <div class="mb-2 mb-md-0">
                                            <span class="me-2 icon {{ \Carbon\Carbon::now() > $item->duration ? 'text-danger' : '' }}"> <i class="fa-solid fa-clock op text-info"></i><span class=" op">{{ \Carbon\Carbon::parse($item->duration)->format('M d, Y')  }}</span></span>
                                            <span class="me-2">
                                                <i class="fa-solid fa-money"> </i><span class=" op">{{$item->salary_range}}</span></span>
                                            <span class="me-2">
                                                <i class="fa-solid fa-location-dot op"></i><span class=" op">{{$item->location}}</span></span>
                                        </div>
                                        <div>
                                             <span class="op text-warning">{{ \Carbon\Carbon::parse($item->created_at)->diffForHumans() }}</span>  
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- card  end -->

                @endforeach
               
             

                <!-- pagination start -->
                <div class="pagination-wrap">
                    {{ $career->links('vendor.pagination.custom') }}
                  </div>
                <!-- pagination end -->


            </div>

        </div>

    </div>
</section>


@endsection
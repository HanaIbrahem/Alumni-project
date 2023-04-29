@extends('frontend.body.master')

@section('main')
    
    <header>
        <div class="page-header min-vh-45"
            style="background-size: cover; transform: translate3d(0px, 0px, 0px);"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex justify-content-center flex-column">
                        <h5 class="mt-5 text-light">Read about:</h5>
                        <h3 class="text-white mb-0">{{ $posts->title }}</h3>
                    
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n3 mb-4">
      <div class="container ">
        
        <div class="row mb-5 p-4">
            <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">

                <h3 class="card-title">
                    {{ $posts->title }}
                </h3>
            </div>

            <div class="col-lg-8 justify-content-center d-flex flex-column">
                <div class="card">
                    <div class="d-block blur-shadow-image">
                        <img src="{{asset('upload/images/post/'.$posts->image)}}" alt="{{$posts->title}}"
                            alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg"
                            loading="lazy">
                    </div>

                </div>

            </div>
        
            <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
             

                <p class="card-description">
                    {!! $posts->detail !!}
                </p>
                <p class="author">
                    <span class="font-weight-bold text-warning">
                        posts add at:</span></a>, {{ $posts->created_at->format('M j, Y') }}
                </p>

            </div>
            <div class="author">
                <img  class="avatar avatar-sm shadow me-2 border-radius-lg"
                src="{{ !empty($posts->user->image_profile)
                    ? url('upload/images/profile/' . $posts->user->image_profile)
                    : url('upload/no_image.jpg') }}"
                alt="{{$posts->user->name}}" loading="lazy"> 
                <p class="my-auto"><a href="{{route('alumnishow.page',$posts->user->id)}}">{{$posts->user->name}} </a></p>
            </di
       </div>
    </div>
@endsection


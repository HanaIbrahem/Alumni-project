@extends('frontend.body.master')

@section('main')
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}"> --}}

    <header>
        <div class="page-header min-vh-45"
            style="background-size: cover; transform: translate3d(0px, 0px, 0px);"
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex justify-content-center flex-column">
                        <h5 class="mt-5 text-light">Read about:</h5>
                        <h3 class="text-white mb-0">{{ $news->title }}</h3>
                    
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n3 mb-4">
      <div class="container ">
        <div class="row">
          
          <div class="col-lg-7 mt-5 ml-auto">
            <article class="blog-details">

              
              <h3 class="">{{ $news->title }}</h3>

              <div class="meta-top">
                 <ul>
                     <li class="d-inline align-items-center m-4"><i class="fa fa-solid fa-quote-left"></i> {{ $news->type }}</li>
                     <li class="d-inline align-items-center"><i class="fa fa-clock"></i> <time datetime=""
                             class="text-warning">{{ $news->created_at->format('M j, Y') }}</time></li>
                     {{-- <li class="d-inline align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> --}}
                 </ul>
              </div><!-- End meta top -->
              <div class="post-img">
                  <img src="{{ asset('upload/images/news/' . $news->image) }}"
                      alt="{{ $news->title }}"class="img-fluid">
              </div>


              <div class="content">
                  {!! $news->detail !!}
              </div><!-- End meta bottom -->

          </article><!-- End blog post -->
          </div>
          <div class="col-lg-4 ml-auto">
            <div class="pt-1 pb-5 position-sticky top-1 mt-lg-5">
                <h4 class="mt-lg-5 pt-3">Newsletter</h4>
                <p>Get access to subscriber exclusive deals and be the first who gets informed about fresh sales.
                </p>
                <div class="input-group input-group-dynamic mb-4" style="width:100%">
                    <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input class="form-control" placeholder="Search" type="text">
                </div>
                <h3 class="sidebar-title">Categories</h3>


                <div class="card justify-content-center mb-3">
                    <ul class="mt-3">
                        @foreach ($newsCount as $catygory)
                            <li style="list-style: none"><a
                                    href="{{ route('news.groupby', $catygory->type) }}">{{ $catygory->type }} <span
                                        class="hilite text-info">({{ $catygory->count }})</span></a></li>
                        @endforeach
                    </ul>

                </div>
                </a>

            </div>
        </div>
        </div>
      </div>
    </div>
@endsection

@extends('frontend.body.master')

@section('main')
    {{-- <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}"> --}}

    <header>
        <div class="page-header min-vh-45"
        style="background-image: url('{{asset('upload/Untitled.jpg')}}')"

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
                    <li class="d-inline align-items-center"><i class="fa-solid fa-eye"></i>{{$news->views}}</li>
                    <li class="d-inline align-items-center">Comments:
                      @if ($commentCounts && $commentCounts->comment_count != null)
                      {{$commentCounts->comment_count}}
    
                      @endif
                    </li>
                
                  
                 </ul>
              </div><!-- End meta top -->
              <div class="post-img">
                  <img src="{{ asset('upload/images/news/' . $news->image) }}"
                      alt="{{ $news->title }}"class="img-fluid">
              </div>


              <div class="content">
                  {!! $news->detail !!}
              </div><!-- End meta bottom -->

              <div class="row">
                <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Comment section</h5>
                        <!-- Comment form -->
                        <form method="POST" action="{{route('comment.stor')}}">

                            @csrf
                            @method('POST')
                            @if (count($errors))
                    <div class="div alert-danger text-white">
                        @foreach ($errors->all() as $message )
                            <li>{{ $message}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                            <input type="hidden" name="post_id" value="{{$news->id}}">
                            <input type="hidden" name="type" value="news">
                          <div class="form-group">
                            <textarea class="form-control py-3" name="content" placeholder="Write your comment..."></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Leav a comment</button>
                        </form>
                        <!-- Comment list -->
                        <ul class="list-unstyled mt-3">
                          
                            @foreach ( $comments as $item)
                            <li class="media ms-3 mb-3 " style="border-bottom: 1px solid #036393">
                                <a href="{{route('alumnishow.page',$item->user->id)}}" class="avatar avatar-xs rounded-circle">
                                    <img  class="avatar avatar-sm shadow me-2 border-radius-lg"
                                    src="{{ !empty($item->user->image_profile)
                                        ? url('upload/images/profile/' . $item->user->image_profile)
                                        : url('upload/no_image.jpg') }}"
                                    alt="{{$item->user->name}}" loading="lazy">
                                    <h5 class="mt-0 mb-1">{{$item->user->name}}</h5>

                                </a>
                                <div class="media-body bg-light p-2 rounded-pill">
                                 <p class="text-small"> {{$item->content}} </p>

                                </div>
                                <small>{{$item->created_at->format('M Y D')}}</small>
                                @if(Auth::check() && Auth::user()->id == $item->user_id)
                                <a href="{{route('comment.destroy',$item->id)}}"><i class="fa fa-trash"></i></a>

                                @endif

                            </li>
                            @endforeach
                          <!-- Add more comments here -->
                        </ul>
                      </div>
                    </div>
                    <ul class="pagination pagination-primary mt-4 ml-2">
                        {{ $comments->links('vendor.pagination.custom') }}

                    </ul>

                </div>
            </div>


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




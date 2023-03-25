@extends('frontend.body.master')

@section('main')

<section id="blog" class="blog">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row g-5">

        <div class="col-lg-8">

          <article class="blog-details">

            <div class="post-img">
              <img src="{{asset("upload/images/news/".$news->image)}}" alt="{{$news->title}}"class="img-fluid">
            </div>

            <h2 class="title">{{$news->title}}</h2>

            <div class="meta-top">
              <ul>
                <li class="d-flex align-items-center"><i class="bi bi-person"></i> {{$news->type}}</li>
                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <time datetime="" class="text-warning">{{$news->created_at->format('M j, Y')}}</time></li>
                {{-- <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li> --}}
              </ul>
            </div><!-- End meta top -->

            <div class="content">
                {!!$news->detail!!}
            </div><!-- End meta bottom -->

          </article><!-- End blog post -->

          <!-- End post author -->

          

        </div>

        <div class="col-lg-4">

          <div class="sidebar">

            <div class="sidebar-item ">
              <h3 class="sidebar-title">Search</h3>
              
              <form action="" class="d-flex rounded mx-auto d-block m-4">
                <input type="text" class="form-control me-2 rounded-pill" > <br>
                <button class="btn btn-secondary rounded-pill" type="submit">Search</button>

              </form>
            </div><!-- End sidebar search formn-->

            <div class="sidebar-item categories">
              <h3 class="sidebar-title">Categories</h3>
              <ul class="mt-3">
                @foreach ( $newsCount as $catygory )
                <li><a href="{{route('news.groupby',$catygory->type)}}">{{$catygory->type}} <span class="hilite">{{$catygory->count}}</span></a></li>

                @endforeach
              </ul>
            </div><!-- End sidebar categories-->

            <div class="sidebar-item recent-posts">
              <h3 class="sidebar-title">Recent News</h3>

              <div class="mt-3">

                @foreach ($recentnews as $item )
                <div class="post-item mt-3">
                    <img style="width:80px;height:60px" src="{{asset("upload/images/news/".$item->image)}}" alt="{{$item->title}}"class="img-fluid">
                    <div>
                      <h4><a href="{{route('news.show',$item->id)}}">{{$item->title}}</a></h4>
                      <time datetime="" class="text-warning">{{$item->created_at->format('M j, Y')}}</time>
                    </div>
                  </div><!-- End recent post item-->
                @endforeach
            

               

              </div>

            </div><!-- End sidebar recent posts-->

            {{-- <div class="sidebar-item tags">
              <h3 class="sidebar-title">Tags</h3>
              <ul class="mt-3">
                <li><a href="#">App</a></li>
                <li><a href="#">IT</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Mac</a></li>
                <li><a href="#">Design</a></li>
                <li><a href="#">Office</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Smart</a></li>
                <li><a href="#">Tips</a></li>
                <li><a href="#">Marketing</a></li>
              </ul>
            </div> --}}
            <!-- End sidebar tags-->

          </div><!-- End Blog Sidebar -->

        </div>
      </div>

    </div>
</section>


@endsection
@extends('frontend.body.master')

@section('main')
<header>
    <div class="page-header min-vh-50"
        style="background-image: url('{{asset('upload/Untitled.jpg')}}')"
        loading="lazy">
        <span class="mask bg-gradient-dark"></span>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-white text-center">
                    <h2 class="text-white">Soran University News</h2>
                </div>
            </div>
        </div>
    </div>
</header>
   

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n3 mb-4">
      <div class="container ">
        <div class="row">
            
            <div class="col-lg-7">

                <div class="pt-1 pb-5 position-sticky top-1 z-index-1 mt-3 mt-lg-5 ">
                    <ul class="mt-5 pt-3 nav nav-pills nav-fill p-1" role="tablist">
                      <li class="nav-item">
                         <a class="nav-link mb-0 px-0 py-1 active" href="{{route('recent.news')}}">
                          All News
                         </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mb-0 px-0 py-1 active"  href="{{route('important.news')}}">
                         Important
                        </a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link mb-0 px-0 py-1" id="dropdownMenuPages5" data-bs-toggle="dropdown" aria-expanded="false">
                             Catigores
                             <img src="{{ asset('upload/down-arrow-dark.svg') }}" class="arrow ms-auto ms-md-2">
                         </a>
                     
                         <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3" aria-labelledby="dropdownMenuPages5">
                             <div class="d-lg-block">
                              @foreach ($newsCount as $catygory)
                              <p class="text-sm m-0 p-0  "><a
                                href="{{ route('news.groupby', $catygory->type) }}">{{ $catygory->type }} <span
                                    class="hilite text-info">({{ $catygory->count }})</span></a></p>
                              @endforeach
                             </div>
                             
                         </div>
                     </li>
                   </ul>
                </div>
                <section class="py-5">


                    @foreach ($news as $item)
                        <div class="card card-plain card-blog mt-5" data-aos="zoom-in"  data-aos-duration="1000">
                            <div class="row">
                                <div class="col-lg-4 col-md-4">
                                    <div class="card-image position-relative border-radius-lg">
                                        <div class="blur-shadow-image">
                                            <img class="img border-radius-lg" style="width:90%"
                                                src="{{ asset('upload/images/news/' . $item->image) }}" alt="architecture"
                                                loading="lazy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-7 col-md-7 my-sm-auto mt-3 ms-sm-3">
                                    <h4>
                                        <a href="{{ route('news.show', $item->id) }}" class="text-dark">{{ $item->title }}</a><br>
                                        <small class="text-secondary text-small">{{ $item->type }}</small>

                                    </h4>
                                    <p>
                                        <li class="d-inline align-items-center"><i class="fa-solid fa-eye"></i>{{$item->views}}</li>

                                    </p>
                                    <p>
                                        {!! Str::limit($item->detail, 300) !!}
                                        <a href="{{ route('news.show', $item->id) }}" class="text-primary"> Read More </a>
                                    </p>
                                    <div class="author">
                                        <p class="text-warning">{{ $item->created_at->format('M j, Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <ul class="pagination pagination-primary mt-4 ml-2">
                        {{ $news->links('vendor.pagination.custom') }}

                    </ul>



                </section>




            </div>
            <div class="col-lg-4 ml-auto">
                <div class="pt-1 pb-5 position-sticky top-1 mt-lg-5">
                    <h4 class="mt-lg-5 pt-3">Newsletter</h4>
                    <p>Get access to subscriber exclusive deals and be the first who gets informed about fresh sales.
                    </p>
                    <div class="input-group input-group-dynamic mb-4" style="width:100%">
                        <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <form action="{{ route('news.search') }}" method="post">
                            @csrf
                            <input class="form-control" placeholder="Search" id="search-input" type="text" name="search">
                        </form>
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
    

    {{-- <main>
    <br><br><br>
    <section id="News-content" class="bg-gl">
        <div class="container-flued  sticky-top bg-light " >
             <!--Navbar -->
            <div class="row bg-dark  ">
                <div class="col-1"></div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark ">
                        <button class="navbar-toggler  text-primary border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon "></span>
                          </button>
                          <a class="navbar-brand" href="#"></a>
                          <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" href="#">All News</a>
                                  </li>
        
                                  <li class="nav-item">
                                    <a class="nav-link " aria-current="page" href="#">Importaint News</a>
                                  </li>
                              <li class="nav-item">
                                <a class="nav-link " aria-current="page" href="#">Recent News</a>
                              </li>
                              <li class="nav-item dropdown">
                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                   Catigoty
                                 </a>
                                 <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                   @foreach ($newsCount as $catygory)
                                   <li><a class="dropdown-item" href="{{route('news.groupby',$catygory->type)}}">{{$catygory->type}}</a></li>

                                   @endforeach
                                 </ul>
                               </li>
        
                            </ul>
                            
                          </div>
                          <form class="d-flex">
                            <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-secondary rounded-pill" type="submit">Search</button>
                          </form>
                        
                    </nav>
                </div>
                <div class="col-1">
                </div>
            </div>
            
        </div>

        <div class="container  " >
            <div class="row justify-content-center ">


                <!-- Column -->
            
                <!-- Column -->
                <!-- Column -->
            
              <div class="row mt-5">

                @foreach ($news as $item)
                  
                <div class="col-md-3">
                  <div class="card border-0 mb-4 p-3">
                    <a href="{{route('news.show',$item->id)}}"><img class="card-img-top" src="{{asset("upload/images/news/".$item->image)}}" alt="{{$item->title}}"></a>
                   
                    <h6 class="font-weight-medium mt-3"><a href="{{route('news.show',$item->id)}}" class="link text-decoration-none">{{$item->title}}</a></h6>
                    <small class="text-secondary mb-2">{{$item->type}}</small> 
                    <p class="text-warning">{{$item->created_at->format('M j, Y');}}</p>
                  </div>

                </div>
                @endforeach
                <div class="pagination-wrap">
                  {{ $news->links('vendor.pagination.custom') }}
                </div>
              </div>
            </div>

            
        </div>

    </section>

    <section id="News-slider">
        <div class="slide-container swiper" >
            <div class="slide-content">
                <h3 class="text-center">Recent News</h3>
                <div class="card-wrapper swiper-wrapper text-start " style="height: 230px;">
                    <div class="card swiper-slide">
                        <div class="bg-dark text-dark " >
                            <img src="./assets/img/blog/blog-2.jpg" class="card-img " alt="...">
                            <div class="card-img-overlay ">
                              <p class="card-title "style="margin-top: 8rem; margin-bottom: 0%; padding-bottom: 0% ">
                             <a href="" class="text-white fw-bold">Card title Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, consequuntur. 
                            </a>
                            </p>
                            </div>
                        </div>
                    </div>   
    
                    <div class="card swiper-slide">
                        <div class="bg-dark text-dark " >
                            <img src="./assets/img/blog/blog-2.jpg" class="card-img " alt="...">
                            <div class="card-img-overlay ">
                              <p class="card-title "style="margin-top: 8rem; margin-bottom: 0%; padding-bottom: 0% ">
                             <a href="" class="text-white fw-bold">Card title Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, consequuntur. 
                            </a>
                            </p>
                            </div>
                        </div>
                    </div>   
    
                    <div class="card swiper-slide">
                        <div class="bg-dark text-dark " >
                            <img src="./assets/img/blog/blog-2.jpg" class="card-img " alt="...">
                            <div class="card-img-overlay ">
                              <p class="card-title "style="margin-top: 8rem; margin-bottom: 0%; padding-bottom: 0% ">
                             <a href="" class="text-white fw-bold">Card title Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, consequuntur. 
                            </a>
                            </p>
                            </div>
                        </div>
                    </div>   
                    
                </div>
            </div>
    
            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div><br><br>
            <div class="swiper-pagination" style="margin-left:48%; "></div>
        </div>
    
    </section>
</main> --}}
@endsection

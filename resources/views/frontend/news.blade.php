@extends('frontend.body.master')

@section('main')

<main>
    <br><br><br>
    <section id="News-content" class="bg-gl">
        <div class="container-flued  sticky-top bg-light " >
             <!--Navbar -->
            <div class="row bg-dark  ">
                <div class="col-1"></div>
                <div class="col-md-8">
                    <nav class="navbar navbar-expand-lg navbar-dark bg-dark  ">
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
                                   @foreach ( $newsCount as $catygory )
                                   <li><a class="dropdown-item" href="{{route('news.groupby',$catygory->type)}}">{{$catygory->type}}</a></li>

                                   @endforeach
                                 </ul>
                               </li>
        
                            </ul>
                            
                          </div>
                          <form class="d-flex">
                            <input class="form-control me-2 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-light rounded-pill" type="submit">Search</button>
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

                @foreach ($news as $item )
                  
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
</main>



    
    

    
<div class="p-2 bg-dark" style="margin-top: 1rem;"></div>



@endsection
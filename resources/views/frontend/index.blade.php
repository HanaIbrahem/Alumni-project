@extends('frontend.body.master')

@section('main')


<section class=" text-white" style="background: linear-gradient(#308aead2, rgba(1, 80, 177, 0.992)),url(./assets/img/blog/blog-2.jpg) center / cover;height:33rem;">
       
  <div class="container" style="padding-top:100px ;">
      <div class="row text-center">
          <div class="col-md-12 my-5" data-aos="zoom-in">

              <h2 class="" >Soran Alumni Community</h2>
              <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit cumque autem eaque, maxime quibusdam quos minus assumenda fugit nemo totam incidunt quasi harum dolor libero earum commodi, corporis reiciendis blanditiis.</p>
              <div class="btn"><a href="{{route('login')}}" class="btn btn-secondary rounded-pill fs-5 py-2 px-4">Get Start</a></div>
          </div>
      </div>
  </div>

</section>
<!-- <section class="">
  <div class="container my-5">
      <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg">
          <div id="Heder-p" class="col-lg-7 p-3 p-lg-5 pt-lg-3">
              <h1 class="display-4 fw-bold lh-1 text-primary mb-3">Alumni Community</h1>
              <p class="lead">Urna molestie hac curae vel, integer odio lacinia inceptos suscipit. Volutpat proin ut vivamus auctor, malesuada curabitur donec et. Elementum rhoncus mattis cursus, faucibus ultricies. Ligula non netus curabitur mi.</p>
              <div class="d-grid gap-2 d-md-flex justify-content-md-start mb-4 mb-lg-3"><button class="btn btn-primary rounded-pill btn-lg px-4 me-md-2 fw-bold" id="Header-btn" type="button">Primary</button><button class="btn btn-outline-secondary btn-lg px-4 rounded-pill" type="button">Secondary</button></div>
          </div>
          <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg"><img class="rounded-lg-3" src="./assets/img/blog/blog-inside-post.jpg" width="700" height="500"></div>
      </div>
  </div>
</section> -->



<section class=" bg-xl">
  <div class="blog-home2 py-5">
      <div class="container">
      <!-- Row  -->
           <div class="row justify-content-center">
             <!-- Column -->
             <div class="col-md-8 text-center">
               <h3 class="my-3 text-primary">Upcoming Events</h3>
             </div>
             <!-- Column -->
             <!-- Column -->
           </div>
         
           <div class="row py-5 rounded " data-aos="fade-right">
             <!-- Column -->
             <div class="col-md-3 ">
               <div class="card border-0 mb-4 p-3 shadow-lg">
                 <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img5.jpg" alt="wrappixel kit"></a>
                
                 <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>
               </div>
             </div>
             <div class="col-md-3">
               <div class="card border-0 mb-4 p-3 shadow-lg">
                 <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img5.jpg" alt="wrappixel kit"></a>
                 <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>

               </div>
             </div>
             <div class="col-md-3">
               <div class="card border-0 mb-4 p-3 shadow-lg">
                 <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img5.jpg" alt="wrappixel kit"></a>
                 <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>

               </div>
             </div>
             <div class="col-md-3">
                 <div class="card border-0 mb-4 p-3 shadow-lg">
                   <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img5.jpg" alt="wrappixel kit"></a>
                   <h6 class="font-weight-medium mt-3"><a href="#" class="link text-decoration-none">New Seminar on Newest Food Recipe</a></h6>    
                 </div>
               </div>
           </div>
      </div>
   </div>
</section>
<section class="">
  <div class="container-flued h-100">
      <div class="text-white bg-primary bg-gradient border rounded border-0 p-4 py-5">
          <div class="row h-100">
              <div class="col-md-10 col-xl-8 text-center d-flex d-sm-flex d-md-flex justify-content-center align-items-center mx-auto justify-content-md-start align-items-md-center justify-content-xl-center">
                  <div>
                      <h1 class="text-uppercase fw-bold text-white mb-3">Login <br>Update your Information</h1>
                      <p class="mb-4">You have completed your studies, now choose how to stay connected. Find out how you can get involved and what staying in touch can do for you.</p><button class="btn btn-light rounded-pill fs-5 py-2 px-4" href="{{route('login')}}" type="button">Sign in&nbsp;</button>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>



<section id="career-slide" class="bg-xl py-4 py-xl-5">
<div class="container">
  <div class="row"><div class="col text-center text-primary"><h3>Your Career</h3></div></div>
  <div class="row" data-aos="fade-left">
    <div class="col-xl-12 col-md-8 mb-6 mb-md-0">
      

      <div class="card card-bordered mb-3 card-hover cursor-pointer">
          <!-- card body -->
          <div class="card-body">
              <div>
                  <div class="d-xl-flex">
                      <div class="mb-3 mb-md-0">
                          <!-- Img -->
                          <img src="./assets/img/job/job-brand-logo/job-list-logo-1.svg" alt="Geeks UI - Bootstrap 5 Template" class="icon-shape border rounded-circle">
                      </div>
                      <!-- text -->
                      <div class="ms-xl-3 w-100 mt-3 mt-xl-1">
                          <div class="d-flex justify-content-between mb-5">
                              <div>
                                  <h3 class="mb-1 fs-4"><a href="job-single.html" class="text-secondary">Software Engineer
          (Web3/Crypto)</a>
                                      <span class="badge bg-danger-soft ms-2">Featured Job</span>
                                  </h3>

                                  <div>
                                      <span>at HelpDesk </span>
                                      <span class="text-dark ms-2 fw-medium">4.5 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
          </svg>

                             </span><span class="ms-0">(131 Reviews)</span>
                                  </div>


                              </div>
                              <div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark text-muted bookmark" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
      </svg>
                              </div>
                          </div>

                          <div class="d-md-flex justify-content-between ">
                              <div class="mb-2 mb-md-0">
                                  <span class="me-2"> <i class="fa-solid fa-clock op"></i><span class=" op">1 - 5
          years</span></span>
                                  <span class="me-2">
                                      <i class="fa-solid fa-dollar-sign op"></i><span class=" op"> 12k - 18k</span></span>
                                  <span class="me-2">
                                      <i class="fa-solid fa-location-dot op"></i><span class=" op">Ahmedabad, Gujarat</span></span>
                              </div>
                              <div>
                                  <span class="op text-warning">21 hours ago</span>
                              </div>
                          </div>

                      </div>
                  </div>

              </div>
          </div>
      </div>
      <!-- card -->
      <div class="card card-bordered  mb-3 card-hover cursor-pointer">
          <!-- card body -->
          <div class="card-body">
              <div>
                  <div class="d-xl-flex">
                      <div class="mb-3 mb-md-0">
                          <!-- Img -->

                          <img src="./assets/img/job/job-brand-logo/job-list-logo-2.svg" alt="Geeks Bootstrap 5 Template" class="icon-shape border rounded-circle">
                      </div>
                      <!-- text -->
                      <div class="ms-xl-3  w-100 mt-3 mt-xl-1">
                          <div class="d-flex justify-content-between mb-4">
                              <div>
                                  <h3 class="mb-1 fs-4"><a href="job-single.html" class="text-inherit">Senior React Developer</a>
                                  </h3>
                                  <div>
                                      <span>at Airtable </span>
                                      <span class="text-dark ms-2 fw-medium">5.0 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
          </svg>

        </span><span class="ms-0">(324 Reviews)</span>
                                  </div>
                              </div>
                              <div>
                                  <svg xmlns="" width="16" height="16" fill="currentColor" class="bi bi-bookmark text-muted bookmark" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
      </svg>
                              </div>
                          </div>

                          <div class="d-md-flex justify-content-between ">
                              <div class="mb-2 mb-lg-0">
                                  <span class="me-2"> <i class="fa-solid fa-clock op"></i><span class=" op">0 - 5
          years</span></span>
                                  <span class="me-2">
                                      <i class="fa-solid fa-dollar-sign op"></i><span class=" op">5k - 8k</span></span>
                                  <span class="me-2">
                                      <i class="fa-solid fa-location-dot op"></i><span class=" op">Jaipur, Rajasthan</span></span>
                              </div>
                              <div>
                                  <i class="fe fe-clock text-muted op"></i> <span class="op">1 day ago</span>
                              </div>
                          </div>

                      </div>


                  </div>

              </div>
          </div>
      </div>
      <!-- card -->
      <div class="card card-bordered  mb-3 card-hover cursor-pointer">
          <!-- card body -->
          <div class="card-body">
              <div>
                  <div class="d-xl-flex">
                      <div class="mb-3 mb-md-0">
                          <!-- Img -->

                          <img src="./assets/img/job/job-brand-logo/job-list-logo-3.svg" alt="" class="icon-shape border rounded-circle">
                      </div>
                      <!-- text -->
                      <div class="ms-xl-3  w-100 mt-3 mt-xl-1">
                          <div class="d-flex justify-content-between mb-4">
                              <div>
                                  <h3 class="mb-1 fs-4"><a href="job-single.html" class="text-inherit">Software Engineer
          (Web3/Crypto)</a>
                                  </h3>
                                  <div>
                                      <span>at Square </span>
                                      <span class="text-dark ms-2 fw-medium">3.9 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
          </svg>

        </span><span class="ms-0">(424 Reviews)</span>
                                  </div>
                              </div>
                              <div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark text-muted bookmark" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
      </svg>
                              </div>
                          </div>
                          <div>
                              <div class="d-md-flex justify-content-between ">
                                  <div class="mb-2 mb-md-0">
                                      <span class="me-2"> <i class="fa-solid fa-clock op"></i><span class=" op">2 - 6
            years</span></span>
                                      <span class="me-2">
                                          <i class="fa-solid fa-dollar-sign op"></i><span class=" op">Not discloses</span></span>
                                      <span class="me-2">
                                          <i class="fa-solid fa-location-dot op"></i><span class=" op">Hastsal, Delhi</span></span>
                                  </div>
                                  <div>
                                      <i class="fe fe-clock text-muted op"></i> <span class="op">1 day ago</span>
                                  </div>
                              </div>
                          </div>
                      </div>


                  </div>

              </div>
          </div>
      </div>
      <!-- card -->
      <div class="card card-bordered  mb-3 card-hover cursor-pointer">
          <!-- card body -->
          <div class="card-body">
              <div>
                  <div class="d-xl-flex">
                      <div class="mb-3 mb-md-0">
                          <!-- Img -->

                          <img src="./assets/img/job/job-brand-logo/job-list-logo-4.svg" alt="" class="icon-shape border rounded-circle">
                      </div>
                      <!-- text -->
                      <div class="ms-xl-3  w-100 mt-3 mt-xl-1">
                          <div class="d-flex justify-content-between mb-4">
                              <div>
                                  <h3 class="mb-1 fs-4"><a href="job-single.html" class="text-inherit">Lead Software Engineer</a>
                                  </h3>
                                  <div>
                                      <span>at Dot </span>
                                      <span class="text-dark ms-2 fw-medium">4.5 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
          </svg>

        </span><span class="ms-0">(523 Reviews)</span>
                                  </div>
                              </div>
                              <div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark text-muted bookmark" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
      </svg>
                              </div>
                          </div>
                          <div>
                              <div class="d-md-flex justify-content-between ">
                                  <div class="mb-2 mb-md-0">
                                      <span class="me-2"> <i class="fa-solid fa-clock op"></i><span class="op">0 - 2
            years</span></span>
                                      <span class="me-2">
                                          <i class="fa-solid fa-dollar-sign op"></i><span class=" op">Not discloses</span></span>
                                      <span class="me-2">
                                          <i class="fa-solid fa-location-dot op"></i><span class=" op">Pune, Chennai</span></span>
                                  </div>
                                  <div>
                                      <i class="fe fe-clock text-muted op"></i> <span class="op">1 Month ago</span>
                                  </div>
                              </div>
                          </div>
                      </div>


                  </div>

              </div>
          </div>
      </div>
      <!-- card -->
      <div class="card card-bordered  mb-3 card-hover cursor-pointer">
          <!-- card body -->
          <div class="card-body">
              <div>
                  <div class="d-xl-flex">
                      <div class="mb-3 mb-md-0">
                          <!-- Img -->

                          <img src="./assets/img/job/job-brand-logo/job-list-logo-5.svg" alt="" class="icon-shape border rounded-circle">
                      </div>
                      <!-- text -->
                      <div class="ms-xl-3  w-100 mt-3 mt-xl-1">
                          <div class="d-flex justify-content-between mb-4">
                              <div>
                                  <h3 class="mb-1 fs-4"><a href="job-single.html" class="text-inherit">Senior Full Stack
          Engineer</a> </h3>
                                  <div>
                                      <span>at Toggle </span>
                                      <span class="text-dark ms-2 fw-medium">4.9 <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" class="bi bi-star-fill text-warning align-baseline" viewBox="0 0 16 16">
            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
          </svg>

        </span><span class="ms-0">(923 Reviews)</span>
                                  </div>
                              </div>
                              <div>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark text-muted bookmark" viewBox="0 0 16 16">
        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
      </svg>
                              </div>
                          </div>
                          <div>
                              <div class="d-md-flex justify-content-between ">
                                  <div class="mb-2 mb-md-0">
                                      <span class="me-2"> <i class="fa-solid fa-clock op"></i>
                                          <span class=" op">2 - 6years</span></span>
                                      <span class="me-2">
                                          <i class="fa-solid fa-dollar-sign op"></i><span class=" op">Not discloses</span></span>
                                      <span class="me-2">
                                          <i class="fa-solid fa-location-dot op"></i><span class=" op">Ahmedabad, Gujarat</span></span>
                                  </div>
                                  <div>
                                      <i class="fe fe-clock text-muted op"></i> <span class="op">2 Month ago</span>
                                  </div>
                              </div>
                          </div>
                      </div>


                  </div>

              </div>
          </div>
      </div>
      <!-- card -->

      <!-- pagination start -->
      <ul class="pagination mt-4 mb-2">
          <li class="page-item disabled">
              <a class="page-link mx-1 rounded" href="#" tabindex="-1" aria-disabled="true">
                  <i class="fa-solid fa-arrow-left"></i>
              </a>
          </li>
          <li class="page-item active">
              <a class="page-link mx-1 rounded" href="#">1</a>
          </li>
          <li class="page-item">
              <a class="page-link mx-1 rounded" href="#">2</a>
          </li>
          <li class="page-item">
              <a class="page-link mx-1 rounded" href="#">3</a>
          </li>
          <li class="page-item">
              <a class="page-link mx-1 rounded" href="#"><i class="fa-solid fa-arrow-right"></i></a>
          </li>
      </ul>
      <!-- pagination end -->


  </div>
  </div>
</div>


</section>




<section id="alumni-slider">
  <div class="slide-container swiper" data-aos="fade-up">
      <div class="slide-content">
          <h3 class="text-center">Alumni Story</h3>
          <p class="text-center">see soran alumni students</p>

          <div class="card-wrapper swiper-wrapper">
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="images/profile1.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="images/profile2.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="images/profile3.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="images/profile4.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              <div class="card swiper-slide">
                  <div class="image-content">
                      <span class="overlay"></span>

                      <div class="card-image">
                          <img src="images/profile5.jpg" alt="" class="card-img">
                      </div>
                  </div>

                  <div class="card-content">
                      <h2 class="name">David Dell</h2>
                      <p class="description">The lorem text the section that contains header with having open functionality. Lorem dolor sit amet consectetur adipisicing elit.</p>

                      <button class="button">View More</button>
                  </div>
              </div>
              
          </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div><br><br>
      <div class="swiper-pagination" style="  margin-left:48%; "></div>
  </div>

</section>



@endsection
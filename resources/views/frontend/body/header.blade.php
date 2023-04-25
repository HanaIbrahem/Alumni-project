@php
    use App\Models\University;
    $websitesetup = University::find(1);
    
@endphp

<!-- Navbar Light -->
<div class="container position-sticky z-index-sticky top-0 bg-gradient-primary">
    <div class="row">
      <div class="col-12">
        <nav  class="navbar navbar-expand-lg blur border-radius-xl position-absolute my-3 top-0 border-bottom py-2 z-index-3 shadow my-3 py-2 start-0 end-0 mx-4">
            <div class="container">
        
                <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim"
                    data-placement="bottom" target="_blank">
                    <img src="{{ asset('' . $websitesetup->logo) }}" width="20" alt="down-arrow" class="arrow ms-1 rounded-pill">
                    <span class="text-primary bold ">{{ $websitesetup->name }}</span>
                </a>
        
                <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon mt-2">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </span>
                </button>
                <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                    <ul class="navbar-nav navbar-nav-hover mx-auto">
                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex "
                                role="button" href="{{route('/')}}">
                                <i class="material-icons opacity-6 me-1 text-md fa-solid fa-home"></i>
                                Home
                            </a>
                        </li>
        
                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex "
                                role="button" >
                                <i class="material-icons opacity-6 me-1 text-md fa-solid fa-calendar-days"></i>
                                Events
                            </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex "
                                role="button" href="{{route('news.page')}}">
                                <i class="material-icons opacity-6 me-1 text-md fa fa-newspaper"></i>
                                News
                            </a>
                        </li>
        
                        <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex"
                                role="button" href="{{route('career.page')}}">
                                <i class="material-icons opacity-6 me-1 text-md fa-solid fa-comments-dollar"></i>
                                Career
                            </a>
                        </li>
        
                        {{-- <li class="nav-item mx-2">
                            <a class="nav-link ps-2 d-flex "
                                role="button">
                                <i class="material-icons opacity-6 me-1 text-md fa-solid fa-graduation-cap"></i>
                                Memberships
                            </a>
                        </li> --}}
        
                        <li class="nav-item dropdown">
                            <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                                role="button" id="dropdownMenuPages6" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="material-icons opacity-6 me-1 text-md fa-solid fa-circle-info"></i>
                                About
                                <img src="{{ asset('upload/down-arrow-dark.svg') }}" class="arrow ms-auto ms-md-2">
        
                            </a>

                            
                            
                            <div class="dropdown-menu ms-n3 dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3  dropdown-menu-end" aria-labelledby="dropdownMenuPages6">
                                <div class="d-none d-lg-block">
                                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                    About
                                  </h6>
                                  <a href="../../pages/about-us.html" class="dropdown-item border-radius-md">
                                    <span>About Us</span>
                                  </a>
                                  <a href="../../pages/contact-us.html" class="dropdown-item border-radius-md">
                                    <span>Contact Us</span>
                                  </a>
                                  <a href="../../pages/author.html" class="dropdown-item border-radius-md">
                                    <span>F&Q</span>
                                  </a>
                                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                    Alumni
                                  </h6>
                                  <a href="{{route('gallary.page')}}" class="dropdown-item border-radius-md">
                                    <span>Gallary</span>
                                  </a>
                                  <a href="" class="dropdown-item border-radius-md">
                                    <span>Alumin Story</span>
                                  </a>
                                </div>
                                <div class="d-lg-none">
                                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1">
                                    Landing Pages
                                  </h6>
                                  <a href="../../pages/about-us.html" class="dropdown-item border-radius-md">
                                    <span>About Us</span>
                                  </a>
                                  <a href="../../pages/contact-us.html" class="dropdown-item border-radius-md">
                                    <span>Contact Us</span>
                                  </a>
                                  <a href="../../pages/author.html" class="dropdown-item border-radius-md">
                                    <span>Author</span>
                                  </a>
                                  <h6 class="dropdown-header text-dark font-weight-bolder d-flex align-items-center px-1 mt-3">
                                    Account
                                  </h6>
                                  <a href="../../pages/sign-in.html" class="dropdown-item border-radius-md">
                                    <span>Sign In</span>
                                  </a>
                                </div>
                              </div>
                            
        
                        </li>
                        @if (!Auth::check())
                            <!-- If user is not logged in -->
        
                            <li class="nav-item dropdown header-profile d-lg-none d-block">
        
                                <a href="{{ route('login') }}"
                                    class="btn btn-sm  btn-round mb-0 ms-auto d-lg-none d-block text-start text-primary">Login</a>
        
                            </li>
                        @else
                            <!-- If user is logged in -->
                            <li class="nav-item dropdown header-profile d-lg-none d-block">
        
                                <a href="{{ Auth::check() ? route('dashboard') : route('login') }}" class="nav-link">
                                    {{ Auth::check() ? __('Dashboard') : __('Login') }}
                                </a>
                            </li>
                        @endif
                    </ul>
        
        
                </div>
                <ul class="navbar-nav d-lg-block d-none">
        
                    @if (Route::has('login'))
        
                        <div class="hidden fixed top-0 right-0 sm:block">
                            @auth
        
                                <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
        
                                    <li class="nav-item dropdown dropdown-hover mx-2">
                                        <a class="nav-link ps-2 d-flex cursor-pointer align-items-center" id="dropdownMenuPages"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ !empty(Auth::user()->image_profile)
                                                ? url('upload/images/profile/' . Auth::user()->image_profile)
                                                : url('upload/no_image.jpg') }}"
                                                class="rounded-pill" width="25">
                                            <img src="{{ asset('upload/down-arrow-dark.svg') }}" class="arrow ms-auto ms-md-2">
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-animation ms-n3 dropdown-md p-3 border-radius-xl mt-0 mt-lg-3"
                                            aria-labelledby="dropdownMenuPages">
                                            <div class="d-none d-lg-block">
        
        
                                                <a href="{{ route('dashboard') }}" class="dropdown-item border-radius-md">
                                                    <span>Dashbord</span>
                                                </a>
        
                                                <form method="POST" class="dropdown-item border-radius-md"
                                                    action="{{ route('logout') }}">
                                                    @csrf
        
                                                    <x-dropdown-link :href="route('logout')"
                                                        onclick="event.preventDefault();
                                                  this.closest('form').submit();">
                                                        {{ __('Log Out ') }}
                                                    </x-dropdown-link>
                                                </form>
        
        
        
                                            </div>
        
        
                                        </div>
                                    </li>
                                </div>
                            @else
                                <div class="collapse navbar-collapse w-100 pt-3 pb-2 py-lg-0" id="navigation">
                                    <a href="{{ route('login') }}" class="nav-item mx-2 text-primary underline">Login</a>
                                    /
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="nav-item mx-2  underline"> Register</a>
                                    @endif
                                </div>
        
                            @endauth
        
        
        
                    @endif
        
        
                </ul>
            </div>
        </nav>
        
      </div>
    </div>
</div>


<!-- End Navbar -->

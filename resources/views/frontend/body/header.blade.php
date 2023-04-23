@php
    use App\Models\University;
    $websitesetup = University::find(1);
    
@endphp

<!-- Navbar Light -->

<nav class="navbar navbar-expand-lg navbar-light bg-white z-index-3 py-2">
    <div class="container">

        <a class="navbar-brand" href="" rel="tooltip" title="Designed and Coded by Creative Tim"
            data-placement="bottom" target="_blank">
            <img src="{{ asset('' . $websitesetup->logo) }}" width="20" alt="down-arrow" class="arrow ms-1">
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
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center active"
                        role="button">
                        Home
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        role="button">
                        Events
                    </a>
                </li>
                <li class="nav-item mx-2">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        role="button">
                        News
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        role="button">
                        Career Resources
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        role="button">
                        Memberships
                    </a>
                </li>

                <li class="nav-item mx-2">
                    <a class="nav-link ps-2 d-flex justify-content-between cursor-pointer align-items-center"
                        role="button">
                        About
                    </a>
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

<!-- End Navbar -->

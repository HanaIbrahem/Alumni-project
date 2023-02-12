@php
    use App\Models\University;
    $websitesetup=University::find(1);
@endphp

<header id="Heder">
    <nav class="navbar navbar-light navbar-expand-lg py-3" id="Navber">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center d-lg-none" href="#"><img class="img-fluid" src="{{$websitesetup->logo}}"width="100px" height="30px"  alt="bssblocks image placeholder"></a><button data-bs-toggle="collapse" class="navbar-toggler text-primary border-0" data-bs-target="#navcol-11"><span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="1em" height="1em" fill="currentColor" class="fs-4">
                       
                <path d="M0 96C0 78.33 14.33 64 32 64H416C433.7 64 448 78.33 448 96C448 113.7 433.7 128 416 128H32C14.33 128 0 113.7 0 96zM64 256C64 238.3 78.33 224 96 224H480C497.7 224 512 238.3 512 256C512 273.7 497.7 288 480 288H96C78.33 288 64 273.7 64 256zM416 448H32C14.33 448 0 433.7 0 416C0 398.3 14.33 384 32 384H416C433.7 384 448 398.3 448 416C448 433.7 433.7 448 416 448z"></path>
                    </svg></span></button>
            <div class="collapse navbar-collapse justify-content-between" id="navcol-11">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active d-flex align-items-center ps-0" href="./index.html">
                              
                                <i class="fa-sharp fa-solid fa-house-user"></i> Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center" href="./news.html">
                               
                                <i class="fa-solid fa-book-open-reader"></i>  News</a>
                    </li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center" href="./event.html">
                                <i class="fa-sharp fa-solid fa-calendar-days"></i>  Events</a>
                    </li>
                          
                    </ul><a class="navbar-brand d-flex align-items-center d-none d-lg-block" href="#"><img class="img-fluid" src="{{$websitesetup->logo}}"width="100px" height="30px" alt="bssblocks image placeholder"></a>
                    <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link d-flex align-items-center" href="#">
                              
                     <i class="fa-solid fa-magnifying-glass-dollar"></i>  Career</a>
                          
                    </li>
                    <li class="nav-item"><a class="nav-link d-flex align-items-center" href="#">
                                <i class="fa-sharp fa-solid fa-graduation-cap"></i>  Alumni Story</a>
                    </li>
                          
                    <li class="nav-item"><a class="nav-link d-flex align-items-center pe-0" href="#">
                                <i class="fa-solid fa-building-columns"></i> About</a>
                    </li>
                           
                </ul>
            </div>
        </div>
    </nav>
</header>
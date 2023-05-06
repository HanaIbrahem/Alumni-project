@extends('frontend.body.master')

@section('main')
    <!-- -------- START HEADER 9 w/ floating img and bg  ------- -->
    {{-- <header class="position-relative">
        <div class="page-header min-vh-100 position-relative">
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy">
                <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4">
            </video>
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto mt-n7">
                        <h1 class="text-white fadeIn2 fadeInBottom">
                            Your alumni community
                        </h1>
                        <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-8">
                            Stay connected for life to our University community.
                        </p>
                        <a type="submit" href="{{route('register')}}" class="btn bg-white me-2 fadeIn1 fadeInBottom">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </header> --}}

    <header class="position-relative">
        <div class="page-header min-vh-75 position-relative"
            style="background-image: url('{{asset('upload/Untitled.jpg')}}');"
            loading="lazy">
            <span class="mask bg-gradient-dark"></span>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto mt-n7">
                        <h1 class="text-white fadeIn2 fadeInBottom">
                            Your alumni community
                        </h1>
                        <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-8">
                            Stay connected for life to our University community.
                        </p>
                        <a type="submit" href="{{route('register')}}" class="btn bg-white me-2 fadeIn1 fadeInBottom">Get started</a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <div class="container my-5">
            <section class="py-5 mt-5">
                <div class="container">
                    <div class="row" data-aos="zoom-in"  data-aos-duration="1000">
                        <div class="col-lg-8 ms-auto me-auto">
                            <h3 class="title mb-4">Alimni Community</h3>
                            <p class="text-dark">
                                An alumni community is a group of individuals who have graduated from a particular school,
                                college, or university. This community is formed by people who share a common experience of
                                having attended the same institution, and often includes former students, faculty members,
                                and staff. Alumni communities are usually organized by the institution itself, and they
                                provide a means for former students to stay connected to their alma mater and to each other.
                                The community can be a valuable resource for networking, career opportunities, and social
                                events, and can help alumni to maintain a sense of connection to their educational
                                institution even after they have graduated.
                            </p>
                        </div>
                    </div>

                   
                    <!-- -------- START Features w/ 4 infos - just colored icons -------- -->
                    <section class="py-4">
                        <div class="container">
                            <div class="row text-center" data-aos="zoom-out"  data-aos-duration="1000"style="border-top: 2px solid #1A73E8">
                                <div class="col-sm-12">
                                    <h3 class="mb-5">Our Community</h3>
                                </div>
                                <div class="col-lg-3 col-md-6 bg-primary rounded  mb-2 text-white">
                                    <div class="info">
                                        <i class="material-icons text-gradient text-dark fa fa-dollar text-3xl"></i>
                                        <h5 class="mt-3 text-white">Career Oportunity</h5>
                                        <p>Access lifelong career and enterprise support.</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="info">
                                        <i
                                            class="material-icons text-gradient fa-solid fa-pen-to-square text-info text-3xl"></i>
                                        <h5 class="mt-3">Update your Info</h5>
                                        <p>Update your information and keep touch with university</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="info">
                                        <i class="material-icons text-gradient fa fa-search text-info text-3xl"></i>
                                        <h5 class="mt-3">Search Alumni</h5>
                                        <p>Searchs for alumi and checking here experince</p>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="info">
                                        <i class="material-icons fa fa-calendar text-info text-3xl"></i>
                                        <h5 class="mt-3">Upcome Events</h5>
                                        <p>Grow your professional network by joining our online community</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="pt-3 pb-4 " id="">
                        <div class="container">
                            <div class="row " data-aos="fade-out"  data-aos-duration="1000">
                                <div class="col-lg-12 mx-auto py-3">
                                    <div class="row">
                                        <div class="col-md-3 position-relative">
                                            <div class="p-3 text-center">
                                                <h1 class="text-gradient text-primary"><span id="state1"
                                                        countto="70">{{$countObj->userCount}}</span>+</h1>
                                                <h5 class="mt-3">Members</h5>
                                                <p class="text-sm font-weight-normal">From buttons, to inputs, navbars,
                                                    alerts or cards, you are covered</p>
                                            </div>
                                            <hr class="vertical dark">
                                        </div>
                                        <div class="col-md-3 position-relative">
                                            <div class="p-3 text-center">
                                                <h1 class="text-gradient text-primary"> <span id="state2"
                                                        countto="15">{{$countObj->userCareer}}</span>+</h1>
                                                <h5 class="mt-3">Career Oportunity</h5>
                                                <p class="text-sm font-weight-normal">Mix the sections, change the colors
                                                    and unleash your creativity</p>
                                            </div>
                                            <hr class="vertical dark">
                                        </div>
                                        <div class="col-md-3">
                                            <div class="p-3 text-center">
                                                <h1 class="text-gradient text-primary" id="state3" countto="4">{{$countObj->userEvent}}+</h1>
                                                <h5 class="mt-3">Events</h5>
                                                <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use
                                                    our pre-made pages for your website</p>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="p-3 text-center">
                                                <h1 class="text-gradient text-primary" id="state3" countto="4">{{$countObj->userGallary}}+</h1>
                                                <h5 class="mt-3">Gallary</h5>
                                                <p class="text-sm font-weight-normal">Save 3-4 weeks of work when you use
                                                    our pre-made pages for your website</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- -------- END Features w/ 4 infos - just colored icons -------- -->
                </div>
            </section>

            <!-- START Blogs w/ 3 rows w/ image on left & title, text, author on end-->
            {{-- <section class="py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ms-auto me-auto">
                            <div class="card card-plain card-blog mt-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image position-relative border-radius-lg">
                                            <div class="blur-shadow-image">
                                                <img class="img border-radius-lg"
                                                    src="../../assets/img/examples/card-blog3.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                                        <h3>
                                            <a href="javascript:;" class="text-dark font-weight-normal">Miami raised $65
                                                million for pet sitting</a>
                                        </h3>
                                        <p>
                                            Finding temporary housing for your dog should be as easy as renting an Airbnb.
                                            That’s the idea behind Rover, which raised $65 million to expand its pet sitting
                                            and dog-walking businesses.. <a href="javascript:;" class="text-dark"> Read
                                                More </a>
                                        </p>
                                        <div class="author">
                                            <img src="../../assets/img/team-1.jpg" alt="..."
                                                class="avatar border-radius-lg avatar-sm shadow me-2">
                                            <p class="my-auto">Katie Roof</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-plain card-blog mt-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image position-relative border-radius-lg">
                                            <div class="blur-shadow-image">
                                                <img class="img border-radius-lg"
                                                    src="../../assets/img/examples/card-blog4.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                                        <h3>
                                            <a href="javascript:;" class="text-dark font-weight-normal">MateLabs mixes
                                                machine learning</a>
                                        </h3>
                                        <p>
                                            If you’ve ever wanted to train a machine learning model and integrate it with
                                            IFTTT, a new offering from MateLabs. MateVerse, a platform where novices can
                                            spin out machine... <a href="javascript:;" class="text-dark"> Read More </a>
                                        </p>
                                        <div class="author">
                                            <img src="../../assets/img/team-3.jpg" alt="..."
                                                class="avatar border-radius-lg avatar-sm shadow me-2">
                                            <p class="my-auto">John Mannes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card card-plain card-blog mt-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card-image position-relative border-radius-lg">
                                            <div class="blur-shadow-image">
                                                <img class="img border-radius-lg"
                                                    src="../../assets/img/examples/blog5.jpg">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-7 my-auto ms-md-3 mt-md-auto mt-4">
                                        <h3>
                                            <a href="javascript:;" class="text-dark font-weight-normal">US venture
                                                investment ticks up</a>
                                        </h3>
                                        <p>
                                            Venture investment in U.S. startups rose sequentially in the second quarter of
                                            2017, boosted by large, late-stage financings and a few outsized early-stage
                                            rounds in tech and healthcare.. <a href="javascript:;" class="text-dark"> Read
                                                More </a>
                                        </p>
                                        <div class="author">
                                            <img src="../../assets/img/team-4.jpg" alt="..."
                                                class="avatar border-radius-lg avatar-sm shadow me-2">
                                            <p class="my-auto">Devin Coldewey</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --}}
            <!-- END Blogs w/ 3 rows w/ image on left & title, text, author on end-->

        </div>
    </div>
    <!-- -------- END HEADER 10 w/ floating img and bg  ------- -->
@endsection

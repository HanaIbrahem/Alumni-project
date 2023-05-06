@extends('frontend.body.master')
@php
    use App\Models\Department;
    $department = Department::all();
@endphp
@section('main')
    <header class="position-relative">
        <div class="page-header min-vh-75 position-relative"
            style="background-image: url('{{asset('upload/a.jpg')}}');"
            loading="lazy">
            <span class="mask bg-gradient-dark"></span>
            <div class="container mt-5">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center mx-auto mt-n7">
                        <h1 class="text-white fadeIn2 fadeInBottom">
                            See All Soran University Alumni
                        </h1>
                        <p class="lead mb-5 fadeIn3 fadeInBottom text-white opacity-8">
                            Alumni Community is a web-based student alumni portal for advanced education institutions.
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <div class="container my-5">
            <div class="row mt-n5 border-radius-md pb-4 p-3 mx-sm-0 mx-1 position-relative z-index-3">

                <div class="pt-1 col-lg-3 mt-lg-n2 mt-2 ">
                    <ul class="mt-5 pt-3 nav nav-pills nav-fill p-1" role="tablist">

                        <li class="nav-item ">
                            <a class="nav-link mb-0 px-0 py-1" id="dropdownMenuPages5" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Departmets
                                <img src="{{ asset('upload/down-arrow-dark.svg') }}" class="arrow ms-auto ms-md-2">
                            </a>

                            <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3 "
                                aria-labelledby="dropdownMenuPages5">
                                <div class="d-lg-block">

                                    @foreach ($department as $item)
                                        <p class="text-sm m-0 p-0"><a
                                                href="{{ route('alumnigroupbydep.page', ['dep' => $item->id]) }}">{{ $item->name }}</a>
                                        </p>
                                    @endforeach


                                </div>

                            </div>
                        </li>
                    </ul>
                </div>

                <div class="pt-1 col-lg-3 mt-lg-n2 mt-2">
                    <ul class="mt-5 pt-3 nav nav-pills nav-fill p-1" role="tablist">

                        <li class="nav-item ">
                            <a class="nav-link mb-0 px-0 py-1" id="dropdownMenuPages5" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Users type
                                <img src="{{ asset('upload/down-arrow-dark.svg') }}" class="arrow ms-auto ms-md-2">
                            </a>

                            <div class="dropdown-menu dropdown-menu-animation dropdown-md p-3 border-radius-lg mt-0 mt-lg-3"
                                aria-labelledby="dropdownMenuPages5">
                                <div class="d-lg-block">
                                    <p class="text-sm m-0 p-0">
                                        <a href="{{ route('alumnigroupby.page', ['type' => 'Alumni']) }}">Alumni</a>
                                    </p>
                                    <p class="text-sm m-0 p-0"> <a
                                            href="{{ route('alumnigroupby.page', ['type' => 'Student']) }}">Student</a></p>
                                    <p class="text-sm m-0 p-0"> <a
                                            href="{{ route('alumnigroupby.page', ['type' => 'Teacher']) }}">Teacher</a></p>

                                </div>

                            </div>
                        </li>
                    </ul>
                </div>

                <div class="pt-1 col-lg-3 mt-lg-n2 mt-2 ">
                    <div class="mt-6">
                        <div class="input-group input-group-dynamic mb-4" style="width:100%">
                            <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                            <form action="{{route('alumni.search')}}" method="post">
                                @csrf
                                @method('POST')
                                <input class="form-control" name="search" placeholder="Search" type="text">

                                <div class="d-none">
                                    <input type="submit" value="">
                                </div>
                                

                            </form>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row mt-4" style="background-color: #ffffffd4">

                @foreach ($alumni as $item)
                    <div class="col-md-4 mb-md-3 mb-7">
                        <div class="card">
                            <div class="text-center mt-n5 z-index-1">
                                <div class="position-relative">
                                    <div class="blur-shadow-avatar mt-4 pt-2 rounded-circle">
                                        <img class="avatar avatar-xxl shadow-lg"
                                            src="{{ !empty($item->image_profile)
                                                ? url('upload/images/profile/' . $item->image_profile)
                                                : url('upload/no_image.jpg') }}"
                                            alt="avatar">
                                    </div>


                                </div>
                            </div>
                            <div class="card-body text-center pb-0">
                                <h4 class="mb-0"><a href="{{route('alumnishow.page',$item->id)}}">{{ $item->name }}</a></h4>
                                <p class="text-primarys">{{ $item->type }}</p>
                                <p>{{ $department->where('id', $item->department)->value('name') }}</p>
                                <p class="mt-2">
                                    {{ $item->bio }}
                                </p>
                            </div>
                            <div class="card-footer text-center pt-2">
                                <div class="mx-auto">
                                    <svg class="opacity-2" width="60px" height="60px" viewBox="0 0 270 270"
                                        version="1.1" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <title></title>
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <path
                                                d="M107.000381,49.033238 C111.792099,48.01429 115.761022,48.6892564 116.625294,50.9407629 C117.72393,53.8028077 113.174473,58.3219079 107.017635,60.982801 C107.011653,60.9853863 107.00567,60.9879683 106.999688,60.990547 C106.939902,61.0219589 106.879913,61.0439426 106.820031,61.0659514 C106.355389,61.2618887 105.888177,61.4371549 105.421944,61.5929594 C88.3985192,68.1467602 80.3242628,76.9161885 70.3525495,90.6906738 C60.0774843,104.884196 54.9399518,119.643717 54.9399518,134.969238 C54.9399518,138.278158 55.4624127,140.716309 56.5073346,142.283691 C57.2039492,143.328613 57.9876406,143.851074 58.8584088,143.851074 C59.7291771,143.851074 61.0353294,143.241536 62.7768659,142.022461 C68.3497825,138.016927 75.4030052,136.01416 83.9365338,136.01416 C93.8632916,136.01416 102.658051,140.063232 110.320811,148.161377 C117.983572,156.259521 121.814952,165.88151 121.814952,177.027344 C121.814952,188.695638 117.417572,198.970703 108.622813,207.852539 C99.828054,216.734375 89.1611432,221.175293 76.6220807,221.175293 C61.9931745,221.175293 49.3670351,215.166992 38.7436627,203.150391 C28.1202903,191.133789 22.8086041,175.024577 22.8086041,154.822754 C22.8086041,131.312012 30.0359804,110.239421 44.490733,91.6049805 C58.2196377,73.906272 74.3541002,59.8074126 102.443135,50.4450748 C102.615406,50.3748509 102.790055,50.3058192 102.966282,50.2381719 C104.199241,49.7648833 105.420135,49.3936487 106.596148,49.1227802 L107,49 Z M233.000381,49.033238 C237.792099,48.01429 241.761022,48.6892564 242.625294,50.9407629 C243.72393,53.8028077 239.174473,58.3219079 233.017635,60.982801 C233.011653,60.9853863 233.00567,60.9879683 232.999688,60.990547 C232.939902,61.0219589 232.879913,61.0439426 232.820031,61.0659514 C232.355389,61.2618887 231.888177,61.4371549 231.421944,61.5929594 C214.398519,68.1467602 206.324263,76.9161885 196.352549,90.6906738 C186.077484,104.884196 180.939952,119.643717 180.939952,134.969238 C180.939952,138.278158 181.462413,140.716309 182.507335,142.283691 C183.203949,143.328613 183.987641,143.851074 184.858409,143.851074 C185.729177,143.851074 187.035329,143.241536 188.776866,142.022461 C194.349783,138.016927 201.403005,136.01416 209.936534,136.01416 C219.863292,136.01416 228.658051,140.063232 236.320811,148.161377 C243.983572,156.259521 247.814952,165.88151 247.814952,177.027344 C247.814952,188.695638 243.417572,198.970703 234.622813,207.852539 C225.828054,216.734375 215.161143,221.175293 202.622081,221.175293 C187.993174,221.175293 175.367035,215.166992 164.743663,203.150391 C154.12029,191.133789 148.808604,175.024577 148.808604,154.822754 C148.808604,131.312012 156.03598,110.239421 170.490733,91.6049805 C184.219638,73.906272 200.3541,59.8074126 228.443135,50.4450748 C228.615406,50.3748509 228.790055,50.3058192 228.966282,50.2381719 C230.199241,49.7648833 231.420135,49.3936487 232.596148,49.1227802 L233,49 Z"
                                                fill="#48484A" fill-rule="nonzero"
                                                transform="translate(135.311778, 134.872794) scale(-1, -1) translate(-135.311778, -134.872794) ">
                                            </path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <!-- pagination start -->
            <div class="pagination pagination-primary m-4 pagination-wrap" style="margin-left:10%">
                {{ $alumni->links('vendor.pagination.custom') }}
            </div>
            <!-- pagination end -->

        </div>
    </div>
@endsection

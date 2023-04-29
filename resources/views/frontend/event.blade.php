@extends('frontend.body.master')

@section('main')
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

    <header>
        <div class="page-header min-vh-50"
            style="background-image: url('https://images.unsplash.com/photo-1491156855053-9cdff72c7f85?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=2200&amp;q=80')"
            loading="lazy">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-white text-center">
                        <h2 class="text-white">Soran University Events and Programs</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">
        <div class="container">
            <div class="row mb-5 border-radius-xl mt-5 pb-4 w-100 w-md-75 p-0 p-md-3 mx-auto">
                <div class="col-lg-6 d-flex align-items-center ms-auto">
                    <div class="input-group input-group-dynamic mb-4" style="width:100%">
                        <span class="input-group-text"><i class="fas fa-search" aria-hidden="true"></i></span>
                        <input class="form-control" placeholder="Search" type="text">
                    </div>
                </div>
                {{-- <div class="col-lg-3 d-flex align-items-center me-auto">
                    <button type="button" class="btn bg-gradient-light w-100 mb-0 mt-3 mt-lg-0">Search</button>
                </div> --}}
            </div>
            <div class="row">
                <div class="col-lg-12">

                    <div class="container">

                        {{-- start foreach --}}
                        @foreach ($event as $item)
                            <div class="row mb-5 p-4 shadow shadow-lg">
                                <div class="col-lg-6 justify-content-center d-flex flex-column">
                                    <div class="card">
                                        <div class="d-block blur-shadow-image">
                                            <img src="{{ asset('upload/images/event/' . $item->image) }}"
                                                alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg"
                                                loading="lazy">
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
                                    <h6 class="category text-warning mt-3">{{ $item->type }}</h6>
                                    <h3 class="card-title">
                                        <a href="{{ route('event.show', $item->id) }}" class="text-dark">{{ $item->title }}</a>
                                    </h3>

                                    <div id="{{$item->id}}" class="d-flex">
                                        <div class="days me-3  text-primary  p-1"></div>
                                        <div class="hours me-3  text-primary  p-1"></div>
                                        <div class="minutes me-3  text-primary  p-1"></div>
                                        <div class="seconds me-3  text-primary  p-1"></div>
                                    </div>

                                    <p class="card-description">
                                        {!! Str::limit($item->detail, 200) !!}
                                        <a href="{{ route('event.show', $item->id) }}" class="text-darker icon-move-right text-sm">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                    <p class="author">
                                        <span class="font-weight-bold text-warning">
                                            Event</span></a>, {{ $item->created_at->format('M j, Y') }}
                                    </p>

                                </div>

                                @php
                                    // Retrieve the item from the database
                                    

                                    $created_at = $item->enddate;

                                @endphp


                                <script>
                                    // Set the countdown date and time
                                    var countDownDate = new Date("{{ $created_at }}").getTime();

                                    // Update the countdown every second
                                    var x = setInterval(function() {

                                        // Get the current date and time
                                        var now = new Date().getTime();

                                        // Calculate the distance between the current date and time and the countdown date and time
                                        var distance = countDownDate - now;

                                        // Calculate days, hours, minutes, and seconds
                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                        var down={{$item->id}};
                                        
                                        // Display the countdown
                                        document.getElementById(down).innerHTML = days + "d " + hours + "h " +
                                            minutes + "m " + seconds + "s ";

                                        // If the countdown is over, display a message
                                        if (distance < 0) {
                                            clearInterval(x);
                                            document.getElementById("countdown").innerHTML = "<span class='text-danger'>EXPIRED !</span>";

                                        }
                                    }, 1000);
                                </script>

                            </div>
                        @endforeach

                        {{-- end foreach --}}
                    </div>



                    {{-- start pasgnination --}}
                    <ul class="pagination pagination-primary mt-4 ml-2">
                        {{ $event->links('vendor.pagination.custom') }}

                    </ul>

                    {{-- end pasigniation --}}
                </div>
            </div>



        </div>
    </div>
@endsection

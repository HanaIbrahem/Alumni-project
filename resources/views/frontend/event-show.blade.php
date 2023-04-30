@extends('frontend.body.master')

@section('main')
    
    <header>
        <div class="page-header min-vh-45"
        style="background-image: url('{{asset('upload/Untitled.jpg')}}')"

            loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex justify-content-center flex-column">
                        <h5 class="mt-5 text-light">Read about:</h5>
                        <h3 class="text-white mb-0">{{ $event->title }}</h3>
                    
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n3 mb-4">
      <div class="container ">
        
        <div class="row mb-5 p-4">
            <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
                <h6 class="category text-warning mt-3">{{ $event->type }}</h6>
                <h3 class="card-title">
                    <a href="javascript:;" class="text-dark">{{ $event->title }}</a>
                </h3>
            </div>

            <div class="col-lg-8 justify-content-center d-flex flex-column">
                <div class="card">
                    <div class="d-block blur-shadow-image">
                        <img src="{{ asset('upload/images/event/' . $event->image) }}"
                            alt="img-blur-shadow-blog-2" class="img-fluid border-radius-lg"
                            loading="lazy">
                    </div>

                </div>

            </div>
            <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
               
                <div id="countdown" class="d-flex mt-4">
                    <div class="days me-3  text-primary  p-1"></div>
                    <div class="hours me-3  text-primary  p-1"></div>
                    <div class="minutes me-3  text-primary  p-1"></div>
                    <div class="seconds me-3  text-primary  p-1"></div>
                </div>

                <p class="card-description">
                    {!! $event->detail !!}
                </p>
                <p class="author">
                    <span class="font-weight-bold text-warning">
                        Event add at:</span></a>, {{ $event->created_at->format('M j, Y') }}
                </p>

            </div>

            @php
                // Retrieve the item from the database
                

                $created_at = $event->enddate;

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

                    
                    // Display the countdown
                    document.getElementById("countdown").innerHTML = days + "d " + hours + "h " +
                        minutes + "m " + seconds + "s ";

                    // If the countdown is over, display a message
                    
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("countdown").innerHTML = "<span class='text-danger'>EXPIRED !</span>";
                    }
                }, 1000);
            </script>
      </div>
    </div>
@endsection


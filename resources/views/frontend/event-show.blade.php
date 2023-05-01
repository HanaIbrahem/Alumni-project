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
                    <p><i class="fa-solid fa-eye"></i>{{$event->views}}</p>

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

            <div class="row">
                <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">

                    <div class="card">
                      <div class="card-body">
                        <h5 class="card-title">Comment section</h5>
                        <!-- Comment form -->
                        <form method="POST" action="{{route('comment.stor')}}">

                            @csrf
                            @method('POST')
                            @if (count($errors))
                    <div class="div alert-danger text-white">
                        @foreach ($errors->all() as $message )
                            <li>{{ $message}}</li>
                        @endforeach
                        </ul>
                    </div>
                    @endif
                    @if(session('error'))
                    <div class="alert alert-warning alert-dismissible text-white fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                    @endif
                            <input type="hidden" name="post_id" value="{{$event->id}}">
                            <input type="hidden" name="type" value="events">
                          <div class="form-group">
                            <textarea class="form-control py-3" name="content" placeholder="Write your comment..."></textarea>
                          </div>
                          <button type="submit" class="btn btn-primary">Leav a comment</button>
                        </form>
                        <!-- Comment list -->
                        <ul class="list-unstyled mt-3">
                          
                            @foreach ( $comments as $item)
                            <li class="media ms-3 " style="border-bottom: 1px solid #036393">
                                <a href="{{route('alumnishow.page',$item->user->id)}}" class="avatar avatar-xs rounded-circle">
                                    <img  class="avatar avatar-sm shadow me-2 border-radius-lg"
                                    src="{{ !empty($item->user->image_profile)
                                        ? url('upload/images/profile/' . $item->user->image_profile)
                                        : url('upload/no_image.jpg') }}"
                                    alt="{{$item->user->name}}" loading="lazy">
                                    <h5 class="mt-0 mb-1">{{$item->user->name}}</h5>

                                </a>
                                <div class="media-body bg-light p-2 rounded-pill">
                                 <p class="text-small"> {{$item->content}} </p>

                                </div>
                                <small>{{$item->created_at->format('M Y D')}}</small>

                            </li>
                            @endforeach
                          <!-- Add more comments here -->
                        </ul>
                      </div>
                    </div>
                    <ul class="pagination pagination-primary mt-4 ml-2">
                        {{ $comments->links('vendor.pagination.custom') }}

                    </ul>

                </div>
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




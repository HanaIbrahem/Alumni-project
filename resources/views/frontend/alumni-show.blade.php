@extends('frontend.body.master')
@php
    use App\Models\Department;
    $department = Department::all();
    use App\Models\post;
    $posts = post::where('user_id', $alumni->id)->get();
@endphp
@section('main')
    <header>
        <div class="page-header min-height-400"
            style="background-image:url({{ !empty($alumni->cover_image)
                ? url('upload/images/cover/' . $alumni->cover_image)
                : url('upload/no_image.jpg') }}) "
            loading="lazy">
            <span class="mask bg-gradient-dark opacity-8"></span>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            <img class="avatar avatar-xxl shadow-xl position-relative z-index-2"
                                src="{{ !empty($alumni->image_profile)
                                    ? url('upload/images/profile/' . $alumni->image_profile)
                                    : url('upload/no_image.jpg') }}"
                                alt="bruce" loading="lazy">
                        </div>
                        <div class="row py-5">
                            <div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mx-auto">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <h3 class="mb-0">{{ $alumni->name }}</h3>
                                    {{-- <div class="d-block">
                                        <button type="button"
                                            class="btn btn-sm btn-outline-info text-nowrap mb-0">Follow</button>
                                    </div> --}}
                                </div>
                                <div class="row mb-4">

                                    <div class="col-auto">
                                        <span class="h6">{{ $alumni->type }}</span>
                                    </div> <br>
                                    <div class="col-auto">
                                        <span>{{ $department->where('id', $alumni->department)->value('name') }}</span>
                                    </div>
                                    <p>
                                        <span>{{ $alumni->email }}</span>
                                    </p>

                                    <div class="">
                                        @if ($alumni->phonenumber != "")
                                        <p class="text-start">
                                            {{$alumni->phonenumber}}
                                        </p>
                                        @endif
                                        
                                        <p class="text-start">
                                            @if ($alumni->facebook != "")
                                            <a href="{{$alumni->facebook}}" class="p-2" ><i class="fa fa-lg fa-facebook text-info"></i></a>
                                            @endif
                                            @if ($alumni->linkedin != "")
                                            <a href="{{$alumni->linkedin}}" class="p-2"><i class="fa fa-lg fa-linkedin text-primary"></i></a>

                                            @endif

                                         </p>
                                       
                                    </div>
                                 
                                    <p class="mt-2">
                                        <span>{{ $alumni->job }}</span>
                                    </p>
                                    <p class="mb-2">
                                        {{ $alumni->bio }}
                                    </p>
                                </div>

                                <div class="row mb-4">
                                    {!! $alumni->about !!}
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            
              
                

              
              
            </div>
        </section>

        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12  mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            @if ($posts->count() >0)
                            <div class="container">
                                <div class="row">
                                    <div class="col-12 mx-auto">
                                        <h3 class="mb-5">Check my latest blogposts</h3>
                                    </div>
                                </div>
                                <div class="row py-5">
                                    
                                    @foreach ( $posts as $item )
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="card card-plain">
                                            <div class="card-header p-0 position-relative">
                                                <a class="d-block blur-shadow-image">
                                                    <img src="{{asset('upload/images/post/'.$item->image)}}" alt="{{$item->title}}"
                                                        class="img-fluid shadow border-radius-lg" loading="lazy">
                                                </a>
                                                <div class="colored-shadow"
                                                    style="background-image: url(&quot;../../assets/img/examples/testimonial-6-2.jpg&quot;);">
                                                </div>
                                            </div>
                                            <div class="card-body px-0">
                                                <h5 class="text-dark font-weight-bold">
                                                    {{$item->title}}
                                                </h5>
                                                <p>
                                                    {!! $item->content !!}
                                                </p>
                                               
                                            </div>
                                            <div>
                                                <p class="card-text text-dark">{{$item->created_at->format('M j, Y') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                    
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-sm-7 py-5 position-relative">
            <div class="container">
                <div class="row">
                    <div class="col-12 mx-auto">
                        <div class="mt-n8 mt-md-n9 text-center">
                            <div class="container py-4">
                                <div class="row">
                                  <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                                    <h3 class="text-center">Contact Me</h3>
                                    <form role="form" action="{{route('alumnicontact.page')}}" id="contact-form" method="post" autocomplete="off">
                                      @csrf
                                      @method('POST')
                                      <input type="hidden" value="{{$alumni->id}}" name="userid">
                                      <div class="card-body">
                                        <div class="row">
                                          <div class="col-md-6">
                                            <div class="input-group input-group-dynamic mb-4">
                                              <label class="form-label">Name</label>
                                              <input class="form-control" name="name"  type="text" >
                                            </div>
                                          </div>
                                        
                                        </div>
                                        <div class="mb-4">
                                          <div class="input-group input-group-dynamic">
                                            <label class="form-label ">Email Address</label>
                                            <input type="email" name="email"class="form-control">
                                          </div>
                                        </div>
                                        <div class="input-group mb-4 input-group-static">
                                          <label>Your message</label>
                                          <textarea name="message" name="message" class="form-control" id="message" rows="4"></textarea>
                                        </div>
                                        <div class="row">
                                        
                                          <div class="col-md-12">
                                            <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
                                          </div>
                                        </div>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection


@extends('frontend.body.master')
@php
    // use App\Models\Department;
    // $department = Department::all();
@endphp
@section('main')
    <header>
        <div class="page-header min-vh-50"
            style="background-image: url('{{asset('upload/Untitled.jpg')}}')"
            loading="lazy">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-white text-center">
                        <h2 class="text-white">Alumni blog posts</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <div class="container my-5">
            <div class="row">
                <div class="col-lg-12">

                    <div class="container">
                          {{-- start foreach --}}
                          @foreach ($posts as $item)
                          <div class="row mb-5 p-4 shadow shadow-lg">
                              <div class="col-lg-6 justify-content-center d-flex flex-column">
                                  <div class="card">
                                      <div class="d-block blur-shadow-image">
                                          <img src="{{asset('upload/images/post/'.$item->image)}}" alt="{{$item->title}}"
                                              class="img-fluid border-radius-lg"
                                              loading="lazy">
                                      </div>

                                  </div>
                              </div>
                              <div class="col-lg-6 justify-content-center d-flex flex-column pl-lg-5 pt-lg-0 pt-3">
                                  <h3 class="card-title">
                                      <a href="{{ route('alumnipostshow.page', $item->id) }}" class="text-dark">{{ $item->title }}</a>
                                  </h3>

                               

                                  <p class="card-description">
                                      {!! Str::limit($item->content, 200) !!}
                                      <a href="{{ route('alumnipostshow.page', $item->id) }}" class="text-darker icon-move-right text-sm">Read More
                                          <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                      </a>
                                  </p>
                                  <div class="author">
                                    <img  class="avatar avatar-sm shadow me-2 border-radius-lg"
                                    src="{{ !empty($item->user->image_profile)
                                        ? url('upload/images/profile/' . $item->user->image_profile)
                                        : url('upload/no_image.jpg') }}"
                                    alt="{{$item->user->name}}" loading="lazy"> 
                                    <p class="my-auto"><a href="{{route('alumnishow.page',$item->user->id)}}">{{$item->user->name}} </a></p>
                                  </div>
                                  <p class="author">
                                      <span class="font-weight-bold text-warning">
                                          </span></a>, {{ $item->created_at->format('M j, Y') }}
                                  </p>

                              </div>
                          </div>
                      @endforeach

                      {{-- end foreach --}}
                    </div>

                    <ul class="pagination pagination-primary mt-4 ml-2">
                        {{ $posts->links('vendor.pagination.custom') }}

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

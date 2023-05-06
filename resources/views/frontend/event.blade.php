@extends('frontend.body.master')

@section('main')
    <header>
        <div class="page-header min-vh-50" style="background-image: url('{{ asset('upload/Untitled.jpg') }}')" loading="lazy">
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

                        <form action="{{ route('event.search') }}" method="post">
                            @csrf
                            <input class="form-control" placeholder="Search" id="search-input" type="text" name="search">
                        </form>
                        <div id="search-results">
                            {{-- @if (count($results) > 0)
                                <ul>
                                    @foreach ($results as $result)
                                        <li>{{ $result }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>No results found.</p>
                            @endif --}}
                        </div>
                        

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
                            <div class="row mb-5 p-4 shadow shadow-lg"data-aos="fade-left" data-aos-duration="1000">
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
                                        <a href="{{ route('event.show', $item->id) }}"
                                            class="text-dark">{{ $item->title }}</a>
                                    </h3>

                                    <div id="" class="d-flex">

                                        <p class="author">
                                            <span class="font-weight-bold text-warning">
                                                Expired at: {{ \Carbon\Carbon::parse($item->enddate)->format('M j, Y') }}
                                        </p>

                                    </div>

                                    <p class="card-description">
                                        {!! Str::limit($item->detail, 200) !!}
                                        <a href="{{ route('event.show', $item->id) }}"
                                            class="text-darker icon-move-right text-sm">Read More
                                            <i class="fas fa-arrow-right text-xs ms-1" aria-hidden="true"></i>
                                        </a>
                                    </p>
                                    <p class="author">
                                        <span class="font-weight-bold text-warning">
                                            Event</span></a>, {{ $item->created_at->format('M j, Y') }}
                                        <span class="ms-3 text-info">
                                            <i class="fa-solid fa-eye"></i>{{ $item->views }}
                                        </span>
                                    </p>

                                </div>

                                @php
                                    // Retrieve the item from the database
                                    
                                    $created_at = $item->enddate;
                                    
                                @endphp




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

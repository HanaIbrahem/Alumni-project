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
                        <h2 class="text-white">About Community</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n6 mb-4">

        <div class="container my-5">
            <section class="py-1s mt-1">
                <div class="container">
                    <div class="row">
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
                </div>
            </section>
        </div>
    </div>
    

@endsection
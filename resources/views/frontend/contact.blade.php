@extends('frontend.body.master')
@php
    // use App\Models\Department;
    // $department = Department::all();
@endphp
@section('main')
    <header>
        <div class="page-header min-vh-50" style="background-image: url('{{ asset('upload/Untitled.jpg') }}')" loading="lazy">
            <span class="mask bg-gradient-dark"></span>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-white text-center">
                        <h2 class="text-white">Conatct</h2>
                        <p>
                            For further questions, including partnership opportunities, please email help@soran.edu.iqs.com or contact using our contact form.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="page-header">
        <div class="position-absolute fixed-top ms-auto w-50 h-100 rounded-3 z-index-0 d-none d-sm-none d-md-block me-n4"
            style="background-image: url('{{asset('upload/images.jpg')}}'); background-size: cover;">
        </div>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-7 d-flex justify-content-center flex-column">
                    <div class="card card-body d-flex justify-content-center shadow-lg p-5 blur align-items-center">
                        <h3 class="text-center">Contact us</h3>
                        <form role="form" id="contact-form" method="post" autocomplete="off">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group input-group-static mb-4">
                                            <label>First Name</label>
                                            <input class="form-control" placeholder="eg. Jack" aria-label="First Name..."
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-6 ps-2">
                                        <div class="input-group input-group-static">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" placeholder="eg. Samuel"
                                                aria-label="Last Name...">
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="input-group input-group-static">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" placeholder="hello@creative-tim.com">
                                    </div>
                                </div>
                                <div class="input-group input-group-static mb-4">
                                    <label>Your message</label>
                                    <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-check form-switch d-flex align-items-center mb-4">
                                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"
                                                checked="">
                                            <label class="form-check-label ms-3 mb-0" for="flexSwitchCheckDefault">I agree
                                                to the <a href="javascript:;" class="text-dark"><u>Terms and
                                                        Conditions</u></a>.</label>
                                        </div>
                                    </div>
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
@endsection

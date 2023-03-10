@php

    $id=Auth::user()->id;
    $userdata=App\Models\user::find($id);
    use App\Models\University;
    $websitesetup=University::find(1);
@endphp
<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- App favicon -->
        
      
        {{-- <link rel="stylesheet" href="{{asset('backend/vendor/chartist/css/chartist.min.css')}}"> --}}
        <link href="{{asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        {{-- <link href="{{asset('backend/vendor/owl-carousel/owl.carousel.css" rel="stylesheet')}}"> --}}
        <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
      

        <link rel="website icon" type="png" href="{{asset('upload/brand-logo.png')}}">


        {{-- Tetxt editor --}}

        <title>{{$websitesetup->title}}</title>

        {{-- ckeditor --}}
        <style>
             #container2 {
                width: 1000px;
                margin: 20px auto;
            }
            .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 200px;
            }
            .ck-content .image {
                /* block images */
                max-width: 80%;
                margin: 20px auto;
            }
        </style>
    </head>

    <body >
    
    <!-- <body data-layout="horizontal" data-topbar="dark"> -->
        <div id="preloader" style="display: none;">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
        <div id="main-wrapper">
            {{-- Start Navbar --}}

            
            <div class="nav-header">
                <a href="{{route('/')}}" class="brand-logo">
                    <img src="{{asset('upload/brand-logo.png')}}"width="50" height="50" alt="">
                    
                      
                </a>
    
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                </div>
            </div>
            {{--SHeder Navigatoiom  --}}
            @include('user_dashbord.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('user_dashbord.sidebar')
             
            <!-- Left Sidebar End -->


             <!--**********************************
            Content body start
             ***********************************-->
             @yield('main')
                 <!--**********************************
            Content body end
             ***********************************-->
             @include('user_dashbord.footer')
        </div>
               
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
      
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
	<script src="{{asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	{{-- <script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script> --}}
	<script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
	<!-- Chart piety plugin files -->
    {{-- <script src="{{asset('backend/vendor/peity/jquery.peity.min.js')}}"></script> --}}
	
	<!-- Apex Chart -->
	{{-- <script src="{{asset('backend/vendor/apexchart/apexchart.js')}}"></script> --}}
	
	<!-- Dashboard 1 -->
	{{-- <script src="{{asset('backend/js/dashboard/dashboard-1.js')}}"></script> --}}
	
	{{-- <script src="{{asset('backend/vendor/owl-carousel/owl.carousel.js')}}"></script> --}}
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
	<script src="{{asset('backend/js/deznav-init.js')}}"></script>
    {{-- <script src="{{asset('backend/js/demo.js')}}"></script> --}}
    {{-- <script src="{{asset('backend/js/styleSwitcher.js')}}"></script> --}}
    

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}

    {{-- <script src="{{asset('backend/js/validate.min.js')}}"></script> --}}

    {{-- form editor --}}  

    @yield("editor")
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/decoupled-document/ckeditor.js"></script> --}}

    

    {{-- Dark mode and light mode --}}
    <script>
        jQuery(document).ready(function(){
            setTimeout(function() {
                dezSettingsOptions.version = 'light';
                new dezSettings(dezSettingsOptions);
            },1500)
        });
    </script>
   
    </body>

</html>
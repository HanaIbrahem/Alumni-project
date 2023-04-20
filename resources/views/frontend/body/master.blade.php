
@php
    use App\Models\University;
    $websitesetup=University::find(1);
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,400i,700,700i">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/slider/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">

    <!-- Font ausom link -->
    <script src="https://kit.fontawesome.com/8b87d80512.js" crossorigin="anonymous"></script>


    <link rel="website icon" type="png" href="{{asset('upload/brand-logo.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/vendor/aos/aos.css')}}">

    <title>{{$websitesetup->title}}</title>
</head>
<body>

    @include('frontend.body.header')


    @yield('main')
    

    
    @include('frontend.body.footer')


    {{-- Scripts --}}
{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> --}}
    <script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/responsive-blog-card-slider-1.js')}}"></script>
    <script src="{{asset('frontend/assets/js/responsive-blog-card-slider.js')}}"></script>


    <script src="{{asset('frontend/assets/vendor/aos/aos.js')}}"></script>
    
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>
</body>
</html>
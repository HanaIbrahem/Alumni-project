@php
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
        
      
        <link rel="stylesheet" href="{{asset('backend/vendor/chartist/css/chartist.min.css')}}">
        <link href="{{asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
        <link href="{{asset('backend/vendor/owl-carousel/owl.carousel.css" rel="stylesheet')}}">
        <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">
      
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

        <link rel="website icon" type="png" href="{{asset('upload/brand-logo.png')}}">

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        {{-- Tetxt editor --}}
x
        <title>{{$websitesetup->title}}</title>
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
                <a href="index.html" class="brand-logo">
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
	<script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>
	<script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
	<!-- Chart piety plugin files -->
    <script src="{{asset('backend/vendor/peity/jquery.peity.min.js')}}"></script>
	
	<!-- Apex Chart -->
	<script src="{{asset('backend/vendor/apexchart/apexchart.js')}}"></script>
	
	<!-- Dashboard 1 -->
	<script src="{{asset('backend/js/dashboard/dashboard-1.js')}}"></script>
	
	<script src="{{asset('backend/vendor/owl-carousel/owl.carousel.js')}}"></script>
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
	<script src="{{asset('backend/js/deznav-init.js')}}"></script>
    <script src="{{asset('backend/js/demo.js')}}"></script>
    <script src="{{asset('backend/js/styleSwitcher.js')}}"></script>
    

    <script src="{{asset('backend/js/validate.min.js')}}"></script>

    {{-- form editor --}}  

    <script>
        jQuery(document).ready(function(){
            setTimeout(function() {
                dezSettingsOptions.version = 'light';
                new dezSettings(dezSettingsOptions);
            },1500)
        });
    </script>


<script>
    tinymce.init({
      selector: '#textfiels',
      plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
      toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
      mergetags_list: [
        { value: 'First.Name', title: 'First Name' },
        { value: 'Email', title: 'Email' },
      ],
    });
  </script>
   

   

  <script>
   @if(Session::has('message'))
   var type = "{{ Session::get('alert-type','info') }}"
   switch(type){
      case 'info':
      toastr.info(" {{ Session::get('message') }} ");
      break;
  
      case 'success':
      toastr.success(" {{ Session::get('message') }} ");
      break;
  
      case 'warning':
      toastr.warning(" {{ Session::get('message') }} ");
      break;
  
      case 'error':
      toastr.error(" {{ Session::get('message') }} ");
      break; 
   }
   @endif 
  </script>
 

  
  
 <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script>

  
    </body>

</html>
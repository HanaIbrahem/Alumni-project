@php
    use App\Models\University;
    $websitesetup=University::find(1);

    
    $admin= Auth::guard('admin')->user();

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


        {{-- validation javascript code support --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <title>{{$websitesetup->title}}</title>
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
            @include('admin.body.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.body.sidebar')
             
            <!-- Left Sidebar End -->


             <!--**********************************
            Content body start
             ***********************************-->
             @yield('admen')
                 <!--**********************************
            Content body end
             ***********************************-->
             @include('admin.body.footer')
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
    
      {{-- Swit alert code js --}}
      <script src="{{ asset('backend/js/code.js') }}"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


    <script src="{{asset('backend/js/validate.min.js')}}"></script>
   
     

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
 

 <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/super-build/ckeditor.js"></script>
       
 <script>
     // This sample still does not showcase all CKEditor 5 features (!)
     // Visit https://ckeditor.com/docs/ckeditor5/latest/features/index.html to browse all the features.
     CKEDITOR.ClassicEditor.create(document.getElementById("editor"), {
         // https://ckeditor.com/docs/ckeditor5/latest/features/toolbar/toolbar.html#extended-toolbar-configuration-format
         toolbar: {
             items: [
                 'exportPDF','exportWord', '|',
                 'findAndReplace', 'selectAll', '|',
                 'heading', '|',
                 'bold', 'italic', 'strikethrough', 'underline', 'code', 'subscript', 'superscript', 'removeFormat', '|',
                 'bulletedList', 'numberedList', 'todoList', '|',
                 'outdent', 'indent', '|',
                 'undo', 'redo',
                 '-',
                 'fontSize', 'fontFamily', 'fontColor', 'fontBackgroundColor', 'highlight', '|',
                 'alignment', '|',
                 'link', 'insertImage', 'blockQuote', 'insertTable', 'mediaEmbed', 'codeBlock', 'htmlEmbed', '|',
                 'specialCharacters', 'horizontalLine', 'pageBreak', '|',
                 'textPartLanguage', '|',
                 'sourceEditing'
             ],
             shouldNotGroupWhenFull: true
         },
         // Changing the language of the interface requires loading the language file using the <script> tag.
         // language: 'es',
         list: {
             properties: {
                 styles: true,
                 startIndex: true,
                 reversed: true
             }
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/headings.html#configuration
         heading: {
             options: [
                 { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                 { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                 { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' },
                 { model: 'heading3', view: 'h3', title: 'Heading 3', class: 'ck-heading_heading3' },
                 { model: 'heading4', view: 'h4', title: 'Heading 4', class: 'ck-heading_heading4' },
                 { model: 'heading5', view: 'h5', title: 'Heading 5', class: 'ck-heading_heading5' },
                 { model: 'heading6', view: 'h6', title: 'Heading 6', class: 'ck-heading_heading6' }
             ]
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/editor-placeholder.html#using-the-editor-configuration
         placeholder: 'Content Here!',
         // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-family-feature
         fontFamily: {
             options: [
                 'default',
                 'Arial, Helvetica, sans-serif',
                 'Courier New, Courier, monospace',
                 'Georgia, serif',
                 'Lucida Sans Unicode, Lucida Grande, sans-serif',
                 'Tahoma, Geneva, sans-serif',
                 'Times New Roman, Times, serif',
                 'Trebuchet MS, Helvetica, sans-serif',
                 'Verdana, Geneva, sans-serif'
             ],
             supportAllValues: true
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/font.html#configuring-the-font-size-feature
         fontSize: {
             options: [ 10, 12, 14, 'default', 18, 20, 22 ],
             supportAllValues: true
         },
         // Be careful with the setting below. It instructs CKEditor to accept ALL HTML markup.
         // https://ckeditor.com/docs/ckeditor5/latest/features/general-html-support.html#enabling-all-html-features
         htmlSupport: {
             allow: [
                 {
                     name: /.*/,
                     attributes: true,
                     classes: true,
                     styles: true
                 }
             ]
         },
         // Be careful with enabling previews
         // https://ckeditor.com/docs/ckeditor5/latest/features/html-embed.html#content-previews
         htmlEmbed: {
             showPreviews: true
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/link.html#custom-link-attributes-decorators
         link: {
             decorators: {
                 addTargetToExternalLinks: true,
                 defaultProtocol: 'https://',
                 toggleDownloadable: {
                     mode: 'manual',
                     label: 'Downloadable',
                     attributes: {
                         download: 'file'
                     }
                 }
             }
         },
         // https://ckeditor.com/docs/ckeditor5/latest/features/mentions.html#configuration
         mention: {
             feeds: [
                 {
                     marker: '@',
                     feed: [
                         '@apple', '@bears', '@brownie', '@cake', '@cake', '@candy', '@canes', '@chocolate', '@cookie', '@cotton', '@cream',
                         '@cupcake', '@danish', '@donut', '@dragée', '@fruitcake', '@gingerbread', '@gummi', '@ice', '@jelly-o',
                         '@liquorice', '@macaroon', '@marzipan', '@oat', '@pie', '@plum', '@pudding', '@sesame', '@snaps', '@soufflé',
                         '@sugar', '@sweet', '@topping', '@wafer'
                     ],
                     minimumCharacters: 1
                 }
             ]
         },
         // The "super-build" contains more premium features that require additional configuration, disable them below.
         // Do not turn them on unless you read the documentation and know how to configure them and setup the editor.
         removePlugins: [
             // These two are commercial, but you can try them out without registering to a trial.
             // 'ExportPdf',
             // 'ExportWord',
             'CKBox',
             'CKFinder',
             'EasyImage',
             // This sample uses the Base64UploadAdapter to handle image uploads as it requires no configuration.
             // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/base64-upload-adapter.html
             // Storing images as Base64 is usually a very bad idea.
             // Replace it on production website with other solutions:
             // https://ckeditor.com/docs/ckeditor5/latest/features/images/image-upload/image-upload.html
             // 'Base64UploadAdapter',
             'RealTimeCollaborativeComments',
             'RealTimeCollaborativeTrackChanges',
             'RealTimeCollaborativeRevisionHistory',
             'PresenceList',
             'Comments',
             'TrackChanges',
             'TrackChangesData',
             'RevisionHistory',
             'Pagination',
             'WProofreader',
             // Careful, with the Mathtype plugin CKEditor will not load when loading this sample
             // from a local file system (file://) - load this site via HTTP server if you enable MathType
             'MathType'
         ]
     });
 </script>
  
 {{-- <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js" ></script> --}}

  
    </body>

</html>
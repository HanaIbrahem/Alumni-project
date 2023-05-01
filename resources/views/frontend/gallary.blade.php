



@extends('frontend.body.master') 


@section('main')

<style>
    .image-container {
      position: relative;
    }
    

    .image-name {
      display: none;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: rgba(0, 0, 0, 0.403);
      color: white;
      padding: 10px;
      font-size: 14px;
      margin:0px 11px;
    }
    
    .image-container:hover .image-name {
      display: block;
    }
</style>

<header>
  <div class="page-header min-vh-45 bg-light text-center"  style="background-image: url('{{asset('upload/Untitled.jpg')}}');"
  loading="lazy">

      <div class="container ">
          <div class="row" style="padding:10% 5%">
              <div class="col-lg-10 m-auto p-50 ">
                  <h2>Hello! Welcome to Soran University photo gallery With Creative & Unique Style</h2>
              </div>
          </div>
      </div>
  </div>
</header>

<div class="card card-body blur shadow-blur mx-3 mx-md-4 mt-n3 mb-4">
  <section class="gallery__section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="card-title">Gallery</h4>
                    <a href="{{route('gallary.page')}}">#all&nbsp;</a>
                    @foreach ( $gallargroups as $item )
                    <a href="{{route('gallary.groupby',$item->title)}}">#{{$item->title}} </a>&nbsp; 
                    @endforeach
                </div>
                <div class="card-body pb-1">
                    <div id="lightgallery" class="row">
                       
                       @foreach ( $gallary as $item)
                         <a href="{{asset('upload/images/gallary/'.$item->image)}}" data-exthumbimage="{{asset('upload/images/gallary/'.$item->image)}}" data-src="{{asset('upload/images/gallary/'.$item->image)}}" class="col-lg-3 col-md-6 mb-4 image-container">
                           <img src="{{asset('upload/images/gallary/'.$item->image)}}" alt="{{$item->title}}" style="width:100%;">
                           <span class="image-name">{{$item->title}} &nbsp; &nbsp; {{$item->created_at->format('Y M d')}}</span>
                         </a>
                       @endforeach
                        
                    </div>
                </div>
            </div>
            <!-- /# card -->
        </div>
    </div>
    <!-- pagination start -->
    <div class="pagination pagination-primary m-4 pagination-wrap" style="margin-left:10%">
      {{ $gallary->links('vendor.pagination.custom') }}
    </div>
    <!-- pagination end -->
</section>
</div>



<script src="{{asset('backend/vendor/lightgallery/js/lightgallery-all.min.js')}}"></script>
<script>
       $(document).ready(function() {
         $('.filter-controls li').click(function() {
           var filterValue = $(this).data('filter');
           $('#lightgallery').isotope({ filter: filterValue });
           $(this).addClass('active').siblings().removeClass('active');
         });
       
         $('#lightgallery').lightGallery({
          download: true,
    share: true
         });

       });
</script>


@endsection

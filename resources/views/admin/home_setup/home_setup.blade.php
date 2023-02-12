@extends('admin.admin_master')

@section('admen')
{{-- validation javascript code support --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
    
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Website Setup</h4>
    
                </div>
            </div>
        </div>
        <!-- end page title -->
        
        <div class="row">
            <div class="col-10">
                <div class="card">
                    <div class="card-body">
    
                        <h3 class="">Website</h3>
                        <p class="card-title-desc">
                            Update Website Title and Logo
                        </p>
                        <div>
                            <form action="{{route('admin.home.setup.update')}}" class="dropzone dz-clickable" method="post"
                              id="myForm" enctype="multipart/form-data">
                                @csrf

                                <input type="hidden" name="id" value="1">
                                <div class="row mb-3">
                                    <label for="Name" class="col-sm-2 col-form-label">Neme:</label>
                                    
                                    <div class="col-sm-5">
                                        <input class="form-control" name="name"
                                        value="{{$University->name}}" type="text" placeholder="name of website" id="example-search-input">
                                    </div>
                                </div>

                                <div class="row mb-3 form-group">
                                    <label for="Title" class="col-sm-2 col-form-label">Titele of Website:</label>
                                    
                                    <div class="col-sm-5">
                                        <input class="form-control" type="text" name="title" placeholder="Titele of website" 
                                        value="{{$University->title}}" id="example-search-input">
                                    </div>
                                </div>

                                <div class="row mb-3 ">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Logo </label>
                                    <div class="col-sm-10">
                                   <input name="logo" class="form-control" type="file" 
                                     name="logo" id="image" accept="image/*" onchange="loadFile(event)">
                                    </div>
                                </div>
                        
                                <div class="row mb-3">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                                   <div class="col-sm-10">
                                    <img id="output" class="rounded avatar-lg" src="{{ (!empty($University->logo))? url( $University->logo):url('upload/no_image.jpg') }}" alt="Card image cap">
                                 </div>

                                 
                                {{-- <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted ri-upload-cloud-2-line"></i>
                                    </div>
                                    
                                    
                                    <h4>Drop files here or click to .</h4>
                                </div> --}}
                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                                </div>


                            </form>
                        </div>
    
                        
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->
    </div>

</div>


<script type="text/javascript">
        
        var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                title: {
                    required : true,
                }, name: {
                    required : true,
                }, 
            },
            messages :{
                title: {
                    required : 'Please Enter Title',
                },

                name: {
                    required : 'Please Enter Name',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection


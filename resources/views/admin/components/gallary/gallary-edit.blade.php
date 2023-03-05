@extends('admin.admin_master')


@section('admen')

<div class="content-body">
    <div class="container-fluid">

        <div class="modal fade" id="addProjectSidebar">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Create Project</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="text-black font-w500">Project Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Deadline</label>
                                <input type="date" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black font-w500">Client Name</label>
                                <input type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <button type="button" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!
                    </h4>
                    <p class="mb-0">Your dashboard</p>
                </div>
              
            </div>
           
        </div>



        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
            
                        <h4 class="card-title">Add Multi Image to Gallary</h4> <br><br>
            
                        <form method="post" id="myForm" action="{{route('gallary.update')}}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            
                            @if (count($errors))
                            <div class="alert alert-danger alert-dismissible alert-alt solid fade show">
                                <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                                </button>
                                <strong>Error!</strong> 
                                <ul>
                                @foreach ($errors->all() as $message )
                                <li>{{ $message}}</li>
                                @endforeach
                                </ul>
                            </div>
                            @endif
             
                            <input type="hidden" name="id" value="{{$gallary->id}}">
                            <div class="form-group mb-4">
                            <label class="col-sm-2 col-form-label card-title text-primary">Multi Image</label> <br>

                            </div>
                        <!-- end row -->
                        <div class="form-group mb-4">
                            <label class="col-sm-2 col-form-label card-title text-primary">Short Title</label> <br>
                            <div class="col-sm-10">
                            <input class="form-control bg-light " name="title" type="text"
                            placeholder="Short title!" value="{{$gallary->title}}">                 
                            </div>
                        </div>

                          <div class="input-group mb-3 mt-4 col-md-10  form-group">
                              <div class="input-group-prepend">
                                  <span class="input-group-text">Upload Image</span>
                              </div>
                              <div class="custom-file">
                                  <input type="file"name="image"  id="image" accept="image/*" onchange="loadFile(event)"
                                  class="custom-file-input">
                                  <label class="custom-file-label">Choose file</label>
                              </div>
                          </div>
                          <div class="row mb-3" >
                             <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                            <div class="col-sm-10" >
                                  <img id="showImage" class="rounded avatar-lg" 
                                  style="max-width:100px;max-height:100px" src="{{asset('upload/images/gallary/'.$gallary->image)}}" alt="Card image cap">
                            </div>
                           </div>
                        <!-- end row -->
                            <input type="submit" class="btn btn-primary waves-effect waves-light" value="Update">
                        </form>
            
            
            
                    </div>
                </div>
            </div> 
            <!-- end col -->
         </div>
            
            
            

        

    </div>
</div>


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>

{{-- Validation --}}

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
        
            rules: {
                title: {
                    required : true,
                }
                
                
            },
            messages :{
                title: {
                    required : 'Please Enter Title',
                }

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



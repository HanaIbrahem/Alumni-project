@php
$id=Auth::user()->id;
$userdata=App\Models\user::find($id);

use App\Models\Department;
// $department=Department::where('id',1)->get();
$department=Department::find($userdata->department);
@endphp
@extends('user_dashbord.master')

@section('main')

<div class="content-body">
    <div class="container-fluid">
        <!-- Add Project -->
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
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your  dashboard </p>
                </div>
            </div>
           
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="col-12">
                    <h3>Share Your Experience</h3>
                </div>
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <form action="{{route('post.update')}}" method="post"  enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

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

                       
                        
                        <input type="hidden" name="show" value="no">
                        <input type="hidden" name="id" value="{{$post->id}}">
                        <div class="form-group mt-5">
                            <label for="" class="text-primary">Title</label>
                            <input class="form-control"  id="bio" name="title" value="{{$post->title}}" type="text" autocomplete="new-password" placeholder="Title">


                        </div>
                        <div class="form-group">
                            <label for="" class="text-info">Content</label>


                            <div id="container2">
    
                                <textarea name="content" type="text" id="editor" cols="30" rows="50">
                                   {!! $post->content!!}
                                </textarea>
                            </div>

                        </div>
                        <div>
                            <label for="">Image</label></div>
                        <div class="input-group mb-3">

                            <div class="input-group-prepend">
                                <span class="input-group-text">Upload</span>
                            </div>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="image-input"  name="image" >
                                <label class="custom-file-label">Choose image</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <img class="card-img-top img-fluid" src="{{asset('upload/images/post/'.$post->image)}}" id="image-preview" alt="poster">
                        </div>
                        <div class="input-group mb-3">
                            <input type="submit" class="btn btn-primary" value="Update">
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

<input type="file" >

<script>
  const imageInput = document.getElementById('image-input');
  const imagePreview = document.getElementById('image-preview');

  imageInput.addEventListener('change', function(event) {
    const selectedFile = event.target.files[0];
    const imageUrl = URL.createObjectURL(selectedFile);
    imagePreview.setAttribute('src', imageUrl);
  });
</script>



@endsection

@section("editor")
<script src="{{asset('backend/vendor/ckeditor/ckeditor.js')}}"></script>

<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
=@endsection
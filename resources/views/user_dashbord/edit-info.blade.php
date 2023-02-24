@php
$id=Auth::user()->id;
$userdata=App\Models\user::find($id);

use App\Models\Department;
// $department=Department::where('id',1)->get();
$department=Department::find($userdata->department);
@endphp
@extends('user_dashbord.master')

@section('main')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <form action="{{route('profile.update.info')}}" method="post"  enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="profile-head">
                            <div class="photo-content">
                                <div class="cover-photo" style="background-image:url({{(!empty($userdata->cover_image))?url('upload/images/cover/'.$userdata->cover_image):
                                    url('upload/no_image.jpg') }}) "></div>
                            </div>
                            <div class="profile-info">
                                <div class="profile-photo">
                                    <img src="{{(!empty($userdata->image_profile))?url('upload/images/profile/'.$userdata->image_profile):
                                    url('upload/no_image.jpg') }}" id="output" class="img-fluid rounded-circle" alt="">
                                </div>
                                <div class="profile-details">
                                    <div class="profile-name px-3 pt-2">
                                        <h4 class="text-primary mb-0">{{$userdata->name}}</h4>
                                        <p>{{$department->name}}</p>
                                    </div>
                                    <div class="profile-email px-2 pt-2">
                                        <h4>Email Protected</h4>
                                        <p>{{$userdata->email}}</p>
                                    </div>
                                </div>
                            </div>
                            <div><label for="">Image Profile</label></div>


                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="image_profile"  
                                     id="image" accept="image/*" onchange="loadFile(event)">
                                    <label class="custom-file-label">Choose Image</label>
                                </div>
                            </div>

                           
                            <div>
                                <label for="">Cover Profile</label></div>
                            <div class="input-group mb-3">

                                <div class="input-group-prepend">
                                    <span class="input-group-text">Upload</span>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input"  name="cover_image" >
                                    <label class="custom-file-label">Choose image</label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="text-primary">Bio</label>
                                <input class="form-control"  id="bio" name="bio" type="text" value="{{$userdata->bio}}" autocomplete="new-password" placeholder="Bio">

                            </div>
                            <div class="form-group">
                                <label for="" class="text-primary">Current Job</label>

                                <input class="form-control"  id="job" name="job" type="text" value="{{$userdata->job}}" autocomplete="" placeholder="Current job">

                            </div>
                           
                            <div class="form-group">
                                <label for="" class="text-info">About your Self</label>


                                <div id="container2">
           
                                    <textarea name="about" type="text" id="editor" cols="30" rows="50">
                                        {!!$userdata->about!!}
                                    </textarea>
                                </div>

                            </div>
                           
                            
   
                          
                            <div class="input-group mb-3">
                                <input type="submit" class="btn btn-primary" value="Update">
                            </div>


                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
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



@endsection

@extends('admin.admin_master')

@section('admen')

@php
        $admin= Auth::guard('admin')->user();

    
    
@endphp
<div class="content-body">
    <div class="container-fluid">
        <!-- Add Project -->
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your dashboard </p>
                </div>
            </div>
            
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo" style="background-image:url({{(!empty($admin->cover_image))?url('upload/images/cover/adminimg/'.$admin->cover_image):
                                url('upload/no_image.jpg') }}) "></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">

                                    <img src="{{(!empty($admin->image_profile))?url('upload/images/profile/adminimg/'.$admin->image_profile):
                                    url('upload/no_image.jpg') }}" class="img-fluid rounded-circle" id="output" alt="">
                            </div>
                            <div class="profile-details">
                                <div class="profile-name px-3 pt-2">
                                    <h4 class="text-primary mb-0">{{$admin->name}}</h4>
                                    <p>Admin</p>
                                </div>
                                <div class="profile-email px-2 pt-2">
                                    <h4 class="text-muted mb-0">{{$admin->email}}</h4>
                                    <p>Email</p>
                                </div>
                               
                            </div>
                            <div class="dropdown ml-auto">
                                <a href="#" class="btn btn-primary light sharp" data-toggle="dropdown" aria-expanded="true"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="18px" height="18px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('admin.profile')}}"><li class="dropdown-item"><i class="fa fa-user-circle text-primary mr-2"></i> View profile</li>
                                    </a>
                                    <a href="{{route('admin.profile.edit')}}"> <li class="dropdown-item"><i class="fa fa-pencil text-primary mr-2"></i>Edit Profile</li>
                                    </a>
                                    <a href="{{route('admin.changepasswor')}}"><li class="dropdown-item"><i class="fa fa-lock text-primary mr-2"></i> Change Password</li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="profile card card-body px-3 pt-3 pb-0">
                    <form action="{{route('admin.profile.update')}}" method="post"  enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <div class="profile-head">
                           
                           
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
                                <input class="form-control"  id="bio" name="bio" type="text" value="{{$admin->bio}}" autocomplete="new-password" placeholder="Bio">

                            </div>
                           
                           
                            <div class="form-group">
                                <label for="" class="text-info">About your Self</label>


                                <div id="container2">
           
                                    <textarea name="about" type="text" id="editor" cols="30" rows="20">
                                        {!!$admin->about!!}
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
@extends('admin.admin_master')

@section('admen')

@php
    $admin= Auth::guard('admin')->user();

@endphp
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
                                    url('upload/no_image.jpg') }}" class="rounded-circle" width="75" alt="">
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
                <div class="col-xl-12">
                    <div class="card bg-light">
                        <div class="card-header">
                            <h5 class="card-title">{{$admin->bio}}</h5>
    
                         
                           <p class="text-info text-sm">Last Update:{{$admin->updated_at->format('M j, Y')}}</p>
    
    
                        </div>
                       
                    
                        <div class="card-body mb-0">
                           {!!$admin->about !!}
                        </div>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
</div>

@endsection
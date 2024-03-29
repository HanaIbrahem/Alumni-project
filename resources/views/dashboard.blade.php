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
                    {{-- <div class="modal-header">
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
                    </div> --}}
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
                    <div class="profile-head">
                        <div class="photo-content">
                            <div class="cover-photo" style="background-image:url({{(!empty($userdata->cover_image))?url('upload/images/cover/'.$userdata->cover_image):
                                url('upload/no_image.jpg') }}) "></div>
                        </div>
                        <div class="profile-info">
                            <div class="profile-photo">
                                <img src="{{(!empty($userdata->image_profile))?url('upload/images/profile/'.$userdata->image_profile):
                                url('upload/no_image.jpg') }}" class="img-fluid rounded-circle" alt="">
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
                       

                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card bg-light">
                    <div class="card-header">
                        <h5 class="card-title">{{$userdata->bio}}</h5>

                     
                       <p class="text-info text-sm">Last Update:{{$userdata->updated_at->format('M j, Y')}}</p>


                    </div>
                    <div class="" style="margin-left: 20px">
                        <p class="text-start">
                            <a href="{{$userdata->facebook}}" class="p-2" ><i class="fa fa-lg fa-facebook text-info"></i></a>
                            <a href="{{$userdata->linkedin}}" class="p-2"><i class="fa fa-lg fa-linkedin text-primary"></i></a>
                         </p>
                    </div>
                
                    <div class="card-body mb-0">
                       {!!$userdata->about !!}
                    </div>
                </div>
            </div>

            
        </div>
       
    </div>

    
</div>
@endsection










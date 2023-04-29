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

        <div class="row">
            <div class="col-lg-12 mt-3">

                <h3 class="text-info">                All your posts
                </h3>
            </div>

            <div class="row bg-light">

                @foreach ( $posts as $item )
                <div class="col-xl-4">
                    <div class="card mb-3">
                        <img class="card-img-top img-fluid" src="{{asset('upload/images/post/'.$item->image)}}" alt="Card image cap">
                        <div class="card-header">
                            <h5 class="card-title">{{$item->title}}</h5>
                        </div>
                        <div class="card-body">
                            {!! $item->content!!}
                            <p class="card-text text-dark">{{$item->created_at->format('M j, Y') }}</p>
                            
                        </div>
                        <div class="d-flex action-button">
                            <a href="{{route('post.edit',$item->id)}}" class="btn btn-info btn-xs light px-2" >
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <a href="{{route('post.delet',$item->id)}}" id="delete" class="ml-2 btn btn-xs px-2 light btn-danger">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3 6H5H21" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M8 6V4C8 3.46957 8.21071 2.96086 8.58579 2.58579C8.96086 2.21071 9.46957 2 10 2H14C14.5304 2 15.0391 2.21071 15.4142 2.58579C15.7893 2.96086 16 3.46957 16 4V6M19 6V20C19 20.5304 18.7893 21.0391 18.4142 21.4142C18.0391 21.7893 17.5304 22 17 22H7C6.46957 22 5.96086 21.7893 5.58579 21.4142C5.21071 21.0391 5 20.5304 5 20V6H19Z" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>

                            </a>
                        </div>
                        
    
                    </div>
                </div>
                @endforeach
            </div>
         
            
        </div>
    </div>
</div>



@endsection

@section("switalert")

<script src="{{ asset('backend/js/code.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endsection
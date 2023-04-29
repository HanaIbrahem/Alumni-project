@extends('admin.admin_master')

@section("database-style-libs")
<link href="{{asset('backend/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection


{{-- used to get all departments --}}
@php
    $i=0;
    $sum=0;

    use App\Models\Department;
    $department = Department::all();
@endphp

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

          
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example3" class="display" style="min-width: 845px">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Owner</th>
                                    <th>Profile</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Image</th>
                                    <th>Display</th>
                                    <th>Created</th>
                                    <th>Updated</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td>{{$item->user->name}}</td>
                                        <td> <img class="rounded-circle" width="35"
                                            src="{{ !empty($item->user->image_profile)
                                                ? url('upload/images/profile/' . $item->user->image_profile)
                                                : url('upload/no_image.jpg') }}"
                                            alt="bruce" loading="lazy"></td>
                                        <td>{{$item->title}}</td>
                                        <td>{!!$item->content!!}</td>
                                        <td> <img class="avatar avatar-xxl shadow-xl position-relative z-index-2"
                                            src="{{asset('upload/images/post/'.$item->image)}}" alt="{{$item->title}}" width="200"
                                            alt="bruce" loading="lazy"></td>
                                            <td>{{$item->show}}</td>
                                      
                                        <td>{{$item->created_at->format('Y/n/j')}}</td>
                                        <td>{{$item->updated_at->format('Y/n/j')}}</td>

                                        <td class="">
                                            <div class="d-flex">
                                                {{-- <a href="{{route('news.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> --}}
                                                <a href="{{route('postsshow.get',$item->id)}}" class="btn btn-warning" id="pin-post-btn">Pin</a>
                                            </div>	
                                        </td>
                                        
                                                                            
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section("database-libs-import")
<script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>

<script>
    $(document).on('click', '#pin-post-btn', function () {
        var postId = $(this).data('post-id');
        Swal.fire({
  icon: 'success',
  title: 'Post pinned successfully!',
}).then((result) => {
  // Redirect to the page where the pinned post is displayed
  window.location.href = "/pinned-posts";
});
    });
</script>

@endsection


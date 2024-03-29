@extends('admin.admin_master')

@section("database-style-libs")
<link href="{{asset('backend/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection


@section('admen')


@php
    
    use App\Models\Events;
    $events=Events::all();
    $i=1;
@endphp
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
                    <div class="card-header">
                        <h4 class="card-title">Event List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Type</th>
                                        <th style="width: 30%">Detail</th>
                                        <th>Image</th>
                                        <th class="text-warning">Start Date</th>
                                        <th class="text-danger">Expire Date</th>
                                        <th>Created At</th>
                                        <th>Updated At</th>
                                        <th>Pin</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($events  as $item)
                                    <tr>  
                                        <td>{{$i++}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->type}}</td>
                                        <td>{!!$item->detail!!}</td>
                                        <td><img src="{{asset('upload/images/event/'.$item->image)}}"
                                            width="50px" height="50px"></td>
                                        <td>{{$item->startdate}}</td>
                                        <td>{{$item->enddate}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>{{$item->pin}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('event.pin',$item->id)}}" class="btn btn-secondary shadow btn-xs sharp mr-1" id="pin-post-btn">pin</a>
                                                <a href="{{route('event.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="{{route('event.destroy',$item->id)}}" id="delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
            <div class="col-12">
                <div class="card">
                    <a href="{{route('event.create')}}" class="btn btn-primary">Add an Event</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

{{-- To import libraris --}}
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
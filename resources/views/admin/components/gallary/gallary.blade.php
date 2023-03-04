@extends('admin.admin_master')


@section('admen')
{{-- <link rel="stylesheet" href="{{asset('backend/vendor/toastr/css/toastr.min.css')}}"> --}}

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
                <button type="button" class="btn btn-dark mb-2 mr-2" id="toastr-success-top-right">Top
                    Right</button>
            </div>
           
        </div>

        

    </div>
</div>


    {{-- <!-- Toastr -->
    <script src="{{asset('backend/vendor/toastr/js/toastr.min.js')}}"></script>

    <!-- All init script -->
    <script src="{{asset('backend/js/plugins-init/toastr-init.js')}}"></script> --}}

@endsection



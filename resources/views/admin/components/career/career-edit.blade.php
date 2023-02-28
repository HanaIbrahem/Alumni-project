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
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Post a Career</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('career.update')}}" enctype="multipart/form-data"   method="post" id="myForm">
                                @csrf

                                @method("PUT")
                                <input type="hidden" name="id" value="{{$career->id}}">
                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Title</label> <br>
                                    <div class="col-sm-10">
                                    <textarea class="form-control bg-light " name="title" rows="4" id="comment" style="height: 100px;"
                                    placeholder="Title Here!">{{$career->title}}</textarea>                                    </div>
                                </div>
                              
                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Type of Career</label> <br>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-light " name="type" type="text"
                                    placeholder="Type Here!" value="{{$career->type}}">                 
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Company Name</label> <br>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-light " name="company_name" type="text"
                                    placeholder="Type Here!" value="{{$career->company_name}}">                 
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-primary">Salary</label> <br>
                                    <div class="col-sm-10">
                                    <input class="form-control bg-light " name="salary" type="text"
                                    placeholder="Type Here!" value="{{$career->salary_range}}">                 
                                    </div>
                                </div>

                                <div class="form-group mb-4">
                                    <label class="col-sm-2 col-form-label card-title text-danger">Expire Date</label> <br>
                                    <div class="col-sm-10">
                                    <input type="date" class="datepicker-default form-control picker__input"
                                    value="{{$career->duration}}" name="expiredate" id="">
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
                                <div class="input-group mb-3 mt-4 form-group " >
                                    <img src="{{ asset('upload/images/career/'.$career->image)}}" id="output" alt="" style="max-height: 200px" style="">
                                </div>
                                
                                <div class="form-group" >
                                    <label class="col-sm-2 col-form-label card-title text-primary">Description</label><br>
                                    <div class="col-sm-12 ">
                                        <textarea name="detail" type="text"  id="editor" cols="30" rows="20">
                                            {!! $career->detail !!}
                                        </textarea>
                                    </div>
                                </div>


                                


                                <input type="submit" value="Update" class="btn btn-primary">
                               
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
        
            rules: {
                title: {
                    required : true,
                }, description: {
                    required : true,
                }, type: {
                    required : true,
                }, salary: {
                    required : true,
                    number:true,
                }, company_name: {
                    required : true,
                }, expiredate:{
                    required : true,
                    date:true,

                }
                
                
            },
            messages :{
                title: {
                    required : 'Please Enter Title    ',
                },description: {
                    required : 'Please Enter Title    ',
                },
                type: {
                    required : 'Please Enter Type of News    ',

                },salary:{
                    required : 'Please Enter Salary    ',

                },company_name:{
                    required : 'Please Enter Company Name',

                },salary:{
                    required : 'Please Enter Salary    ',

                },expiredate:{
                    required : 'Please Enter Expire Date    ',

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
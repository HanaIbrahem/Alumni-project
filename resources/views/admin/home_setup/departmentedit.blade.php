@extends('admin.admin_master')

@section('admen')


<div class="content-body">
    <div class="container-fluid">        
        <div class="row">
           
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Edit Department</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('admin.department.update')}}" method="post"  id="myForm">
                                @csrf
                                @method("PUT")
                                <input type="hidden" name="ggg" value="{{$department->id}}">
                                <div class="form-group ">
                                    <input type="text" class="form-control input-default " 
                                    name="name" value="{{$department->name}}" placeholder="Name ">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="shortname" value="{{$department->shorttitle}}" class="form-control input-rounded" placeholder="Short Name">
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="update" class="btn btn-primary">
                                </div>
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
                shortname: {
                    required : true,
                }, name: {
                    required : true,
                }, 
            },
            messages :{
                title: {
                    required : 'Please Enter Short Title    ',
                },

                name: {
                    required : 'Please Enter Name',
                },
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

@endsection


@extends('admin.admin_master')

@section('admen')


@php
    use App\Models\Department;
    $date=Department::where('faculty_id',$id)->get();

    
    use App\Models\Faculty;
    $faculty=Faculty::find($id);
    $i=1;
    
@endphp

<div class="content-body">
    <div class="container-fluid">        
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Departments</h4>
                    </div>
                    <div class="card-body">
                        
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <h4 class="card-title">Faculty of {{$faculty->name}}</h4>

                                <thead>
                                    <tr>
                                        
                                        <th><strong>No</strong></th>
                                        <th><strong>Name</strong></th>
                                        <th><strong>Short Title</strong></th>
                                        <th><strong>Created at</strong></th>
                                        <th><strong>Updated at</strong></th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
    
                                    @foreach ($date as $item)
    
                                    <tr>
                                        <td>{{$i}}@php($i++)</td>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->shorttitle}}</td>
                                        <td>{{$item->created_at}}</td>
                                        <td>{{$item->updated_at}}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('admin.department.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="{{route('admin.department.delete',$item->id)}}" class="btn btn-danger shadow btn-xs sharp" id="delete"><i class="fa fa-trash"></i></a>
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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add a Department</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('admin.department.store')}}" method="post"  id="myForm">
                                @csrf
                                <input type="hidden" name="id" value="{{$id}}">
                                <div class="form-group ">
                                    <input type="text" class="form-control input-default " 
                                    name="name" placeholder="Name ">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="shortname" class="form-control input-rounded" placeholder="Short Name">
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Add" class="btn btn-primary">
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


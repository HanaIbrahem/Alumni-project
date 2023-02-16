@extends('admin.admin_master')

@section('admen')


@php
    use App\Models\Faculty;
    $date=Faculty::all();
    $i=1;

    $faculty1=Faculty::all();

    use App\Models\Department;
    


@endphp

<div class="content-body">
    <div class="container-fluid">
       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Facultys</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    
                                    <th><strong>No</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Short Title</strong></th>
                                    <th><strong>Created at</strong></th>
                                    <th><strong>Updated at</strong></th>
                                    <td><strong>Add Department</strong></td>
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
                                            <a href="{{route('admin.department.add',$item->id)}}" class="btn btn-primary ">Add</a>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('admin.faculty.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                            <a href="{{route('admin.faculty.delete',$item->id)}}" id="delete" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
        <div class="row">
            
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add a Faculty</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{route('admin.faculty.add')}}" method="post"  id="myForm">
                                @csrf
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

           
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Facultes</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            @foreach ( $faculty1 as $item )
                                <li>Faculty of {{$item->name}}
                       
                                   @if ($dep=Department::where('faculty_id',$item->id)->count()>0)
                                      <ul>
                                      @foreach ( $depa=Department::where('faculty_id',$item->id)->get() as $item)
                                         <li><pre>    {{$item->name}}</pre></li>
                                      @endforeach
                                     </ul>
                                     
   
                                   @endif
                               </li>
                            @endforeach
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


@extends('admin.admin_master')

@section("database-style-libs")
<link href="{{asset('backend/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">
@endsection

{{-- used to get all departments --}}
@php
    $i=0;
    $sum=0;
    use App\Models\Department;

// $department=Department::where('id',1)->get();
//$department=Department::find($userdata->department);
@endphp




@foreach ($usersByType as $item)
    @php
        $sum += $item->count;
    @endphp
@endforeach
@php
    $usersnotjob=$sum-$usersjob;
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

        
        <div class="row bg-white">
          
            {{-- pie chart --}}
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Type of users</h4>
                    </div>
                    <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                        <canvas id="myChart" width="631" height="187" style="display: block; height: 150px; width: 505px;" class="chartjs-render-monitor"></canvas>
                    </div>
                    <div class="card-title text-center">
                        Users: {{$sum}}
                    </div>
                </div>
            </div>

           {{-- pie chart --}}
           <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Users that work</h4>
                </div>
                <div class="card-body"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
                    <canvas id="userswork" width="631" height="187" style="display: block; height: 150px; width: 505px;" class="chartjs-render-monitor"></canvas>
                </div>
                <div class="card-title text-center">
                    Users: {{$sum}}
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
                                        <th>Image</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Joinded Date</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $item)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td><img class="rounded-circle" width="35" 
                                                src="{{(!empty($item->image_profile))?url('upload/images/profile/'.$item->image_profile):
                                                url('upload/no_image.jpg') }}" alt=""></td> 
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->lname}}</td>
                                            <td>{{$item->email}}</td>
                                            <td>{{$item->gender}}</td>
                                            <td>{{$item->created_at->format('Y/n/j')}}</td>
                                            <td>k</td>
    
                                            <td>
                                                <div class="d-flex">
                                                    {{-- <a href="{{route('news.edit',$item->id)}}" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a> --}}
                                                    <a href="{{route('allusers.destroy',$item->id)}}" class="btn btn-danger shadow btn-xs sharp" id="delete"><i class="fa fa-trash"></i></a>
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
</div>


@endsection

{{-- To import libraris --}}
@section("database-libs-import")
<script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
@endsection

{{-- to import charts --}}
@section("chart")

<script src="{{asset('backend/vendor/chart.js/Chart.bundle.min.js')}}"></script>



<script>


 const jsObject = {!! json_encode($usersByType) !!};
 const names = [];


 // Laravel variable
 
 // Convert to JavaScript variable
 var usersjob = {!! json_encode($usersjob) !!};
 var usersnotjob = {!! json_encode($usersnotjob) !!};

 
// Assuming that the jsObject is an array of objects with 'type' property
jsObject.map(obj => obj.type).forEach(type => names.push(type));
    // Get the canvas element
    var ctx = document.getElementById('myChart').getContext('2d');
    
    // Define the data for the chart
    var data = {
        type: 'pie',

        datasets: [{
            defaultFontFamily: 'Poppins',
            label: 'User Type',
            borderWidth: 0, 
            data: [
                jsObject[0].count,
                jsObject[1].count,
                jsObject[2].count,




            ],
            backgroundColor: [
                "rgba(235, 129, 83, .9)",
				"rgba(235, 129, 83, .7)",
				"rgba(235, 129, 83, .5)",
            ],
            
            hoverBackgroundColor: [
				"rgba(235, 129, 83, .9)",
				"rgba(235, 100, 83, .7)",
				"rgba(235, 29, 83, .5)",
			],
            borderWidth: 1
        }],
        labels: [
            jsObject[0].type,

            jsObject[1].type,

            jsObject[2].type,
					],
                    options: {
					responsive: true, 
					legend: false, 
					maintainAspectRatio: false
				}
        

    };
    

    // Get the canvas element
    
    // Create the chart object
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
            
        }
    });

       var ctx2 = document.getElementById('userswork').getContext('2d');
       var myChart2 = new Chart(ctx2, {
           type: 'pie',
           data: {
            labels: ['not work','working'],
            datasets: [{
                defaultFontFamily: 'Poppins',
                label: 'User Type',
                borderWidth: 0, 
                data: [
                    usersnotjob,usersjob




                ],
                backgroundColor: [
                    "#ffdbd9",
			       "#e1f5d4",
                ],
            
                hoverBackgroundColor: [
                    "#FF4C41",
		         	"#68CF29",
			       ],
                borderWidth: 1
        }],
        
           },
           options: {
              
           }
       });
 
</script>


@endsection
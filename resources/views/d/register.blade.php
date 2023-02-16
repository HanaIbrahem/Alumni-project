


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
    <title>Zenix -  Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <!-- Form step -->
    <link href="{{asset('backend/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css')}}" rel="stylesheet">
    <!-- Custom Stylesheet -->
	<link href="{{asset('backend/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">
    <link href="{{asset('backend/css/style.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.css')}}">
    <style>
         #smartwizard > ul > li > a > span{
            background-color: #0a228a;
            border: black;
        }
                                          
       
        #smartwizard > div.toolbar.toolbar-bottom > button.btn.btn-primary,
        #register{
            background-color: #006dcd;

        }
    </style>


</head>

<body>

    @php
        use App\Models\Faculty;
        use App\Models\Department;

        $department=Department::all();
    @endphp


    <div id="main-wrapper">  
        <div class="container">
            <br><br><br><br>
            <div class="row">
                <div class="col-xl-12 col-xxl-12">
                    <form action="admin.home.test" method="post">
                        @csrf
                        @method('POST')
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Register Steps</h4>
                            </div>
                            <div class="card-body">
                                <div id="smartwizard" class="form-wizard order-create">
                                    <ul class="nav nav-wizard">
                                        <li><a class="nav-link" href="#wizard_Service"> 
                                            <span>1</span> 
                                        </a></li>
                                        <li><a class="nav-link" href="#wizard_Time">
                                            <span>2</span>
                                        </a></li>
                                        <li><a class="nav-link" href="#wizard_Details">
                                            <span>3</span>
                                        </a></li>
                                       
                                    </ul>
                                    <div class="tab-content">
                                        <div id="wizard_Service" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">First Name*</label>
                                                        <input type="text" name="firstName" class="form-control" placeholder="First Name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Last Name<span class="text-danger"><b>*</b></span></label>
                                                        <input type="text" name="lastName" class="form-control" placeholder="Last Name" required="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Email Address<span class="text-danger"><b>*</b></span></label>
                                                        <input type="email" name="email" class="form-control" id="email" aria-describedby="inputGroupPrepend2" placeholder="example@soran.edu.iq">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Phone Number<span class="text-danger"><b>*</b></span></label>
                                                        <input type="text" name="phonenumber" class="form-control" placeholder="(+964) 07-- --- -- --" required="">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div id="wizard_Time" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">User Type<span class="text-danger"><b>*</b></span></label>
                                                       
                                                        <select name="usertype" id="usertype" class="mr-sm-2 default-select">
                                                            <option value="">Alumni</option>
                                                            <option value="">Teacher</option>
                                                            <option value="">Student</option>

                                                        </select>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Department<span class="text-danger"><b>*</b></span></label>
                                                       
                                                        <select name="faculty" id="faculty" class="mr-sm-2 default-select">
                                                           
                                                            @foreach ($department as $item )
                                                                <option value="{{$item->id}}">{{$item->name;}}</option>
                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Second Email<span class="text-danger"><b>*</b></span></label>
                                                        <input type="email2" class="form-control" id="emial1" placeholder="example@example.com" required="">
                                                    </div>
                                                </div>        
                                            </div>
                                        </div>
                                        <div id="wizard_Details" class="tab-pane" role="tabpanel">
                                            <div class="row">
                                             
                                                
                                                <div class="col-lg-6">
                                                    <div class="form-check">
                                                        <label class="text-label">Gender<span class="text-danger"><b>*</b></span></label>

                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" value="male" checked="">
                                                        <label class="form-check-label">
                                                            Male
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" value="female">
                                                        <label class="form-check-label">
                                                            Female
                                                        </label>
                                                    </div>
                                                
                                                </div>
                                               <div class="col-lg-12 ">
                                                <div class="form-group">
                                                    <br> <br>
                                                </div>
    
                                               </div>
                                             
                                            </div>
                                    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                    </form>
                   
                </div>
            </div>
        </div> 
             
    </div>


    

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="{{asset('backend/vendor/global/global.min.js')}}"></script>
	<script src="{{asset('backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

    <script src="{{asset('backend/vendor/jquery-steps/build/jquery.steps.min.js')}}"></script>
    <script src="{{asset('backend/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <!-- Form validate init -->
    <script src="{{asset('backend/js/plugins-init/jquery.validate-init.js')}}"></script>

   <!-- Form Steps -->
	<script src="{{asset('backend/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js')}}"></script>
	
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
	<script src="{{asset('backend/js/deznav-init.js')}}"></script>
    <script src="{{asset('backend/js/demo.js')}}"></script>
    {{-- <script src="{{asset('backend/js/styleSwitcher.js')}}"></script> --}}




</body>

</html>
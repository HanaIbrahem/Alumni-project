<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</head>
<body>

<br><br><br><br><br>
   <div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-md-4">

            @if (Session::has('error'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Error</strong> {{Session::get('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
          
            <form method="post" action="{{route('admin.login')}}" id="myForm">
                @csrf
                <div class="mb-3 form-group">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3 form-group">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <a class="text-primary" href="{{route('admin.register')}}">Register</a>
        </div>
        <div class="col-4"></div>
    </div>
    
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

   <script src="{{ asset('backend/assets/js/code.js') }}"></script>
 <script src="{{ asset('backend/assets/js/validate.min.js') }}"></script>
   <script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
              email: {
                    required : true,
                },
                 password: {
                    required : true,
                }, 
            },
            messages :{
              email: {
                    required : 'Please Enter Email',
                },

                password: {
                    required : 'Please Enter Password',
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
</body>
</html>
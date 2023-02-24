@extends('user_dashbord.master')

@section('main')


<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles mx-0">
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>Hi, welcome back!</h4>
                    <p class="mb-0">Your  dashboard </p>
                </div>
            </div>
           
        </div>
        <div class="col-xl-12">
            <div class="card text-start">
                <div class="card-header">
                    <h5 class="card-title">Read the followig terms befour delete your acount</h5>
                </div>
                <div class="card-body">

                    <div class="alert alert-warning alert-dismissible fade show">
                        <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                        </button>
                        <strong>Warning!</strong> <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga quod soluta possimus? Delectus corporis reprehenderit velit impedit ipsam exercitationem vitae nam quod ratione, id non, fugit quidem dicta. Sint, voluptatibus!  
                        </p>
                    </div>
                    <form action="{{route('profile.destroy')}}" method="post">
                        @csrf
                        @method("delete")

            
                        <p></p>
                        <p class="mt-1 mb-3 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>
                         
                    
                        <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2 mb-3 alert alert-danger solid alert-dismissible fade show" />

                        <label for="" class="text-danger">Passsword</label>

                        
                        <input type="password" name="password" class="form-control mb-4" placeholder="Password">
                       
                        <input type="submit" class="btn rounded btn-danger" value="Delete">
                    </form>
                </div>
            
            </div>
        </div>

    </div>

</div>





@endsection
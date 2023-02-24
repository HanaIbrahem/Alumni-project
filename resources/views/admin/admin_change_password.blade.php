@extends('admin.admin_master')

@section('admen')

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
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" id="myForm" action="{{ route('admin.changepassword.update') }}">
                                @csrf
                                @method('put')
                            
                                <div class="form-group">
                                    <input class="form-control form-control-lg" name="current_password" type="password" autocomplete="current-password" 
                                    placeholder="Current Password">
                                    <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                                </div>
                                <div class="form-group">
                                    <input class="form-control"  id="password" name="password" type="password"  autocomplete="new-password" placeholder="New Password">
                                    <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"placeholder="confirmation New Password">
                                    <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />

                                </div>
                                <div class="form-group">
                                    <x-primary-button class="btn-primary">{{ __('Save') }}</x-primary-button>
                            
                                    @if (session('status') === 'password-updated')
                                        <p
                                            x-data="{ show: true }"
                                            x-show="show"
                                            x-transition
                                            x-init="setTimeout(() => show = false, 2000)"
                                            class="text-sm text-gray-600 dark:text-gray-400"
                                        >{{ __('Saved.') }}</p>
                                    @endif
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
                current_password: {
                    required : true,
                }, password: {
                    required : true,
                }, password_confirmation: {
                    required : true,
                }, 
            },
            messages :{
                current_password: {
                    required : 'Please Enter Old Password    ',
                },

                password: {
                    required : 'Please Enter New Password',
                },
                password_confirmation: {
                    required : 'Please Enter Confirm Password',
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

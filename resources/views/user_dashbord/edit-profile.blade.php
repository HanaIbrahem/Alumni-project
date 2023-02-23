@php
$id=Auth::user()->id;
$userdata=App\Models\user::find($id);
use App\Models\Department;
// $department=Department::where('id',1)->get();
$department=Department::find($userdata->department);
@endphp
@extends('user_dashbord.master')

@section('main')

<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Change Password</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" action="{{ route('password.update') }}">
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
                                    <input class="form-control form-control-sm" id="password_confirmation" name="password_confirmation" type="password" autocomplete="new-password"placeholder="confirmation New Password">
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

@endsection
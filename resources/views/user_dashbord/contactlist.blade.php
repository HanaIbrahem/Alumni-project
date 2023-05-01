
@php
$id=Auth::user()->id;
$userdata=App\Models\user::find($id);
use App\Models\Department;
// $department=Department::where('id',1)->get();
$department=Department::find($userdata->department);
$i=1;
@endphp
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
       
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Recent Contact Messages</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>No</strong></th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th style="width:30%">Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                          
                                @foreach ( $contactlist as $item )
                                <tr>
                           
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->message}}</td>
                                    <td>{{$item->created_at->format('Y/m/d')}}</td>

                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('usercontactdestraoy',$item->id)}}" class="btn btn-danger shadow btn-xs sharp" id="delete"><i class="fa fa-trash"></i></a>
                                        </div>	
                                    </td>
                                </tr> 
                                @endforeach
                              
                            </tbody>
                        </table>
                        @if ($contactlist->count()==0)
                        <p class="text-center text-info">
                            No Message
                        </p>
                        @endif
                    </div>
                    <ul class="pagination pagination-primary mt-4 ml-2">
                        {{ $contactlist->links('vendor.pagination.custom') }}

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("switalert")

<script src="{{ asset('backend/js/code.js') }}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@endsection

@extends('user_dashbord.master')

@section('main')


<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Your Information</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form custom_file_input">
                            <form >
                               

                                <div class="form-group">
                                    <input class="form-control form-control-lg" name="current_password" type="password" autocomplete="current-password" 
                                    placeholder="Last Name">
                                </div>

                                <div class="form-group">
                                    <input class="form-control form-control-lg" name="current_password" type="password" autocomplete="current-password" 
                                    placeholder="Your Bio">
                                </div>


                                <div><label for="">Image Profile</label></div>
                                <div class="input-group mb-3">

                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>


                                <div><label for="">Image Profile</label></div>


                                <div class="input-group mb-3">
    
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Upload</span>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input">
                                        <label class="custom-file-label">Choose file</label>
                                    </div>
                                </div>
                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

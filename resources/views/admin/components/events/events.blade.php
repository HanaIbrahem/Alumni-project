@extends('admin.admin_master')

@section('admen')
<link href="{{asset('backend/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

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

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Career Oportunity</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example3" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Gender</th>
                                        <th>Education</th>
                                        <th>Mobile</th>
                                        <th>Email</th>
                                        <th>Joining Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                        <td>Tiger Nixon</td>
                                        <td>Architect</td>
                                        <td>Male</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>123 456 7890</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="98f1f6fef7d8fde0f9f5e8f4fdb6fbf7f5">[email&#160;protected]</span></strong></a></td>
                                        <td>2011/04/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>												
                                        </td>												
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                        <td>Garrett Winters</td>
                                        <td>Accountant</td>
                                        <td>Female</td>
                                        <td>M.COM., P.H.D.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="5a33343c351a3f223b372a363f74393537">[email&#160;protected]</span></strong></a></td>
                                        <td>2011/07/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                        <td>Ashton Cox</td>
                                        <td>Junior Technical</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="0d64636b624d68756c607d6168236e6260">[email&#160;protected]</span></strong></a></td>
                                        <td>2009/01/12</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                        <td>Cedric Kelly</td>
                                        <td>Developer</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="96fff8f0f9d6f3eef7fbe6faf3b8f5f9fb">[email&#160;protected]</span></strong></a></td>
                                        <td>2012/03/29</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                        <td>Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="335a5d555c73564b525e435f561d505c5e">[email&#160;protected]</span></strong></a></td>
                                        <td>2008/11/28</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                        <td>Brielle Williamson</td>
                                        <td>Specialist</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="2841464e47684d50494558444d064b4745">[email&#160;protected]</span></strong></a></td>
                                        <td>2012/12/02</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                        <td>Herrod Chandler</td>
                                        <td>Sales Assistant</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="81e8efe7eec1e4f9e0ecf1ede4afe2eeec">[email&#160;protected]</span></strong></a></td>
                                        <td>2012/08/06</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                        <td>Rhona Davidson</td>
                                        <td>Integration</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="177e79717857726f767a677b723974787a">[email&#160;protected]</span></strong></a></td>
                                        <td>2010/10/14</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                        <td>Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="a8c1c6cec7e8cdd0c9c5d8c4cd86cbc7c5">[email&#160;protected]</span></strong></a></td>
                                        <td>2009/09/15</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                        <td>Sonya Frost</td>
                                        <td>Software Engineer</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="bed7d0d8d1fedbc6dfd3ced2db90ddd1d3">[email&#160;protected]</span></strong></a></td>
                                        <td>2008/12/13</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                        <td>Jena Gaines</td>
                                        <td>Office Manager</td>
                                        <td>Female</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="9cf5f2faf3dcf9e4fdf1ecf0f9b2fff3f1">[email&#160;protected]</span></strong></a></td>
                                        <td>2008/12/19</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                        <td>Quinn Flynn</td>
                                        <td>Support Lead</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="b9d0d7dfd6f9dcc1d8d4c9d5dc97dad6d4">[email&#160;protected]</span></strong></a></td>
                                        <td>2013/03/03</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                        <td>Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="51383f373e113429303c213d347f323e3c">[email&#160;protected]</span></strong></a></td>
                                        <td>2008/10/16</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                        <td>Haley Kennedy</td>
                                        <td>Senior Marketing</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="1c75727a735c79647d716c7079327f7371">[email&#160;protected]</span></strong></a></td>
                                        <td>2012/12/18</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                        <td>Tatyana Fitzpatrick</td>
                                        <td>Regional Director</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="f0999e969fb09588919d809c95de939f9d">[email&#160;protected]</span></strong></a></td>
                                        <td>2010/03/17</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                        <td>Michael Silva</td>
                                        <td>Marketing Designer</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="177e79717857726f767a677b723974787a">[email&#160;protected]</span></strong></a></td>
                                        <td>2012/11/27</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                        <td>Paul Byrd</td>
                                        <td>Financial Officer</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="1970777f76597c61787469757c377a7674">[email&#160;protected]</span></strong></a></td>
                                        <td>2010/06/09</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                        <td>Gloria Little</td>
                                        <td>Systems Administrator</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="9af3f4fcf5daffe2fbf7eaf6ffb4f9f5f7">[email&#160;protected]</span></strong></a></td>
                                        <td>2009/04/10</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                        <td>Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="7e171018113e1b061f130e121b501d1113">[email&#160;protected]</span></strong></a></td>
                                        <td>2012/10/13</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                        <td>Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="452c2b232a05203d24283529206b262a28">[email&#160;protected]</span></strong></a></td>
                                        <td>2012/09/26</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic1.jpg" alt=""></td>
                                        <td>Jenette Caldwell</td>
                                        <td>Development Lead</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="caa3a4aca58aafb2aba7baa6afe4a9a5a7">[email&#160;protected]</span></strong></a></td>
                                        <td>2011/09/03</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic2.jpg" alt=""></td>
                                        <td>Yuri Berry</td>
                                        <td>Marketing Officer</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="41282f272e012439202c312d246f222e2c">[email&#160;protected]</span></strong></a></td>
                                        <td>2009/06/25</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic3.jpg" alt=""></td>
                                        <td>Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>Male</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="b2dbdcd4ddf2d7cad3dfc2ded79cd1dddf">[email&#160;protected]</span></strong></a></td>
                                        <td>2011/12/12</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic4.jpg" alt=""></td>
                                        <td>Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Female</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="c7aea9a1a887a2bfa6aab7aba2e9a4a8aa">[email&#160;protected]</span></strong></a></td>
                                        <td>2010/09/20</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic5.jpg" alt=""></td>
                                        <td>Angelica Ramos</td>
                                        <td>Executive Officer</td>
                                        <td>Male</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="d7beb9b1b897b2afb6baa7bbb2f9b4b8ba">[email&#160;protected]</span></strong></a></td>
                                        <td>2009/10/09</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic6.jpg" alt=""></td>
                                        <td>Gavin Joyce</td>
                                        <td>Developer</td>
                                        <td>Female</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="3a53545c557a5f425b574a565f14595557">[email&#160;protected]</span></strong></a></td>
                                        <td>2010/12/22</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic7.jpg" alt=""></td>
                                        <td>Jennifer Chang</td>
                                        <td>Regional Director</td>
                                        <td>Male</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="5d34333b321d38253c302d3138733e3230">[email&#160;protected]</span></strong></a></td>
                                        <td>2010/11/14</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic8.jpg" alt=""></td>
                                        <td>Brenden Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>Female</td>
                                        <td>B.TACH, M.TACH</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="87eee9e1e8c7e2ffe6eaf7ebe2a9e4e8ea">[email&#160;protected]</span></strong></a></td>
                                        <td>2011/06/07</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic9.jpg" alt=""></td>
                                        <td>Fiona Green</td>
                                        <td>Operating Officer</td>
                                        <td>Male</td>
                                        <td>B.A, B.C.A</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="422b2c242d02273a232f322e276c212d2f">[email&#160;protected]</span></strong></a></td>
                                        <td>2010/03/11</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><img class="rounded-circle" width="35" src="images/profile/small/pic10.jpg" alt=""></td>
                                        <td>Shou Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>Female</td>
                                        <td>B.COM., M.COM.</td>
                                        <td><a href="javascript:void(0);"><strong>987 654 3210</strong></a></td>
                                        <td><a href="javascript:void(0);"><strong><span class="__cf_email__" data-cfemail="751c1b131a35100d14180519105b161a18">[email&#160;protected]</span></strong></a></td>
                                        <td>2011/08/14</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="#" class="btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('backend/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/js/plugins-init/datatables.init.js')}}"></script>
<script src="{{asset('backend/js/custom.min.js')}}"></script>
<script src="{{asset('backend/js/deznav-init.js')}}"></script>
<script src="{{asset('backend/js/demo.js')}}"></script>
<script src="{{asset('backend/js/styleSwitcher.js')}}"></script>
@endsection
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        {{-- @php
        
        use Illuminate\Http\Request;
        $id= auth::user()->id();
        $userdata=App\Models\Admin::find($id);
        @endphp --}}

        <!-- User details -->
        <div class="user-profile text-center mt-3">
            <div class="">
                {{-- <img src="{{(!empty($userdata->profile_image))?url('upload/admin_images/'.$userdata->profile_image):
                url('upload/no_image.jpg') }}" alt="" class="avatar-md rounded-circle"> --}}
            </div>
            <div class="mt-3">
                {{-- <h4 class="font-size-16 mb-1">{{$userdata->name}}</h4> --}}
                <span class="text-muted"><i class="ri-record-circle-line align-middle font-size-14 text-success"></i> Online</span>
            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Website Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.home.setup')}}">Website</a></li>
                        <li><a href="email-read.html">Header</a></li>
                        <li><a href="email-read.html">Footer</a></li>

                    </ul>

                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Page Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('admin.home.setup')}}">Home</a></li>
                        <li><a href="email-read.html">About</a></li>
                        <li><a href="email-read.html">Portfolu</a></li>

                    </ul>
                </li>

                

                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Authentication</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="auth-login.html">Login</a></li>
                        <li><a href="auth-register.html">Register</a></li>
                        <li><a href="auth-recoverpw.html">Recover Password</a></li>
                        <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Utility</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="pages-starter.html">Starter Page</a></li>
                        <li><a href="pages-timeline.html">Timeline</a></li>
                        <li><a href="pages-directory.html">Directory</a></li>
                        <li><a href="pages-invoice.html">Invoice</a></li>
                        <li><a href="pages-404.html">Error 404</a></li>
                        <li><a href="pages-500.html">Error 500</a></li>
                    </ul>
                </li>

                

                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
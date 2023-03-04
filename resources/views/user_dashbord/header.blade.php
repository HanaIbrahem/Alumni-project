
<div class="header">
    <div class="header-content">
        <nav class="navbar navbar-expand">
            <div class="collapse navbar-collapse justify-content-between">
                <div class="header-left">
                    <div class="input-group search-area right d-lg-inline-flex d-none">
                        <input type="text" class="form-control" placeholder="Find something here...">
                        <div class="input-group-append">
                            <span class="input-group-text">
                                <a href="javascript:void(0)">
                                    <i class="flaticon-381-search-2"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav header-right main-notification">
                    
                   
                    <li class="nav-item dropdown notification_dropdown">
                        <a class="nav-link bell dz-fullscreen" href="#">
                            <svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                            <svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                        </a>
                    </li>
                   
                    
                    
                    <li class="nav-item dropdown header-profile">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                            <img src="{{(!empty($userdata->image_profile))?url('upload/images/profile/'.$userdata->image_profile):
                            url('upload/no_image.jpg') }}"  width="20" alt="">
                            
                            <div class="header-info">
                                <span>{{$userdata->name}}</span>
                                <small>{{$userdata->type}}</small>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{route('dashboard')}}" class="dropdown-item ai-icon">
                                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                <span class="ml-2">Profile </span>
                            </a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
    
                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                                                   <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                                                   {{ __('Log Out ') }}
                                </x-dropdown-link>
                            </form>
                           
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="sub-header">
            <div class="d-flex align-items-center flex-wrap mr-auto">
                <h5 class="dashboard_bar">Dashboard</h5>
            </div>
           
        </div>
    </div>
</div>



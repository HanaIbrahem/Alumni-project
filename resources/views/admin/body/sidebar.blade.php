<div class="deznav">
    <div class="deznav-scroll mm-active ps ps--active-y">
        <div class="main-profile">
            <div class="image-bx">
                <img src=" {{(!empty($admin->image_profile))?url('upload/images/profile/adminimg/'.$admin->image_profile):
                url('upload/no_image.jpg') }}"  width="20" alt="{{$admin->name}}">
                <a href="{{route('admin.profile.edit')}}"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span> {{$admin->name}}</h5>
            <p class="email"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="95f8f4e7e4e0f0efefefefd5f8f4fcf9bbf6faf8">{{$admin->email}}</a></p>
        </div>
        <ul class="metismenu mm-show" id="menu">
            

            <li class="nav-label first">Webiste Setup</li>
            <li class="mm-active"><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-144-layout"></i>
                    <span class="nav-text">Website</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse mm-show left" style="">
                    <li class="mm-active"><a href="{{route('admin.home.setup')}}" class="">Logo&Title</a></li>
                    <li><a href="{{route('admin.home.faculty')}}">Faculty</a></li>
                    <li><a href="#">Footer</a></li>
                </ul>

            </li>
            <li class="nav-label">Posts</li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-077-menu-1"></i>
                    <span class="nav-text">Post</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">News</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('news.get')}}">News List</a></li>
                            <li><a href="{{route('news.create')}}">Post News</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Career</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('career.get')}}">Career List</a></li>
                            <li><a href="{{route('career.create')}}">Post Career</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void(0);" aria-expanded="false">Events</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('event.get')}}">Evants List</a></li>
                            <li><a href="{{route('event.create')}}">Post Events</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

               
           
        </ul>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 650px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 355px;"></div></div></div>
</div>
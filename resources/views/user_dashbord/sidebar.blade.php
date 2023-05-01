
<div class="deznav">
    <div class="deznav-scroll mm-active ps ps--active-y">
        <div class="main-profile">
            <div class="image-bx">
                <img src="{{(!empty($userdata->image_profile))?url('upload/images/profile/'.$userdata->image_profile):
                            url('upload/no_image.jpg') }}" alt="">
                <a href="{{route('profile.edit.info')}}"><i class="fa fa-cog" aria-hidden="true"></i></a>
            </div>
            <h5 class="name"><span class="font-w400">Hello,</span> {{$userdata->name}}</h5>
            <h5>{{$userdata->type}}</h5>
            
        </div>
        <ul class="metismenu mm-show" id="menu">
            

            <li class="nav-label first">Your Profile</li>
            <li class="mm-active"><a class="has-arrow ai-icon" href="javascript:void() " aria-expanded="false">
                    <i class="fa fa-id-card"></i>
                    <span class="nav-text">Profile</span>
                </a>
                <ul aria-expanded="false" class="mm-collapse mm-show left" style="">
                    <li class="mm-active"><a href="{{route('profile.edit.info')}}">Update Your Informayion</a></li>
                    <li ><a href="{{route('profile.edit')}}" class="">Change Password</a></li>
                    <li ><a href="{{route('updateemail.get')}}" class="">Update Email</a></li>
                    <li><a href="{{route('profile.destroy.get')}}">Delete Your Acount</a></li>
                        {{-- <li>
                            <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                                @csrf
                                @method('delete')
                    
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Are you sure you want to delete your account?') }}
                                </h2>
                    
                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                                </p>
                    
                                <div class="mt-6">
                                    <x-input-label for="password" value="Password" class="sr-only" />
                    
                                    <x-text-input
                                        id="password"
                                        name="password"
                                        type="password"
                                        class="mt-1 block w-3/4"
                                        placeholder="Password"
                                    />
                    
                                    <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
                                </div>
                    
                                <div class="mt-6 flex justify-end">
                                    <x-secondary-button x-on:click="$dispatch('close')">
                                        {{ __('Cancel') }}
                                    </x-secondary-button>
                    
                                    <x-danger-button class="ml-3">
                                        {{ __('Delete Account') }}
                                    </x-danger-button>
                                </div>
                            </form>
                        </li> --}}
                </ul>

                

            </li>

            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="las la-sms"></i>
                <span class="nav-text">Contact</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('contactlinks.form')}}">Contact Links</a></li>
                <li><a href="{{route('usercontacts.get')}}">Contact List</a></li>

            </ul>  
            
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-044-file"></i>
                <span class="nav-text">Post</span>
            </a>
            <ul aria-expanded="false" class="mm-collapse left" style="">
                <li><a href="{{route('postlist.get')}}">Post List</a></li>
                <li><a href="{{route('post.get')}}">Make Post</a></li>
            </ul>
        </li>
       
           
           
        </ul>
    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 650px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 355px;"></div></div></div>
</div>
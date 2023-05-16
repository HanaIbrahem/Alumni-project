<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Auth;

use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\File;


class AdminController extends Controller
{
    //


    
    public function Index(){


        return view('admin.auth.admin_login');
    }//end Methd 

    public function AdminRegister(){
        return view('admin.auth.admin_register');

    }//end method 

    public function AdminRegisterCreate(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255','ends_with:soran.edu.iq', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
            
        ]);

        return redirect()->back()->with('success', 'Admin registered successfully.');

        
        
    }//end method 
    

    public function Login(Request $request){
        $check=$request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashbord')->with('error','Admin login successfully');
        }
        else{
            return back()->with('error','Invaled Email or password');
        }
    }//end method 


    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('/')->with('error','Admin logout successfully');


    }//end methid 

    public function Dashbord(){
        return view('admin.index');



    }//end Methd 

    // Update profile 
    public function profile()
    {
        return view('admin.admin_profile_view');   
        
    }//end method 
    

    public function ProfileEdit(){
        return view('admin.admin_profile_edit');
    }//end method
    public function ProfileUpdate(Request $request){

        $admin=$request->user('admin');
        
        //update user profile image
        if($request->file('image_profile')){
            $request->validate([
                'image_profile' => ['required', File::image()],
            
            ]);
            //remove recent imge 
            if( $admin->image_profile != null){

                $imgh = 'upload/images/profile/adminimg/'.$admin->image_profile;
                unlink($imgh);
            }
            $image = $request->file('image_profile');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            $save_url = $name_gen;
            $image->move(public_path('upload/images/profile/adminimg/'), $name_gen);
            $admin->image_profile= $save_url;
        }

        //update user cover image 
        if($request->file('cover_image')){
            $request->validate([
                'cover_image' => ['required', File::image()],
            ]);

            //remove recent image
            if( $admin->cover_image !=null){
                $imgh = 'upload/images/cover/adminimg/'.$admin->cover_image;
                unlink($imgh);
            }
            //for cover iamge  update
            $cover=$request->file('cover_image');
            $name_gen = hexdec(uniqid()).'.'.$cover->getClientOriginalExtension();  // 3434343443.jpg
            $save_url2 = $name_gen;
            $cover->move(public_path('upload/images/cover/adminimg/'), $name_gen);
            $admin->cover_image=$save_url2;

        }

        $admin->bio = $request->input('bio');
        $admin->about= $request->input('about');
        $admin->save();
        return redirect()->back()->with('success', 'User information updated successfully.');

    }//end method  

    // Update password get
    public function ProfileChangePassword(){

        return view('admin.auth.admin_change_password');
    }//end method  

    // Update password store
    public function ProfileChangePasswordUpdate(Request $request): RedirectResponse{



        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user=$request->user('admin');

        $hashedPassword = $user->password;
    
        if (Hash::check($request->current_password, $hashedPassword)) {
            $user->update([
                'password' => Hash::make($request->password),
            ]);
            Auth::guard('admin')->logout();
            return redirect()->route('/')->with('success', 'Password updated successfully. Please login with your new password.');
        }
    
        return redirect()->back()->withErrors(['current_password' => 'The provided password does not match your current password.']);
    }//end method  

    

}

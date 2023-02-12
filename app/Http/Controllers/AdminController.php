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

class AdminController extends Controller
{
    //


    
    public function Index(){


        return view('admin.admin_login');
    }//end Methd 

    public function AdminRegister(){
        return view('admin.admin_register');

    }//end method 

    public function AdminRegisterCreate(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.Admin::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $admin = Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at'=>Carbon::now(),
        ]);

        return redirect()->route('admin.dashbord')->with('error','Admin registered successfully');

        
        
    }//end method 
    

    public function Login(Request $request){
        $check=$request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            $userdata=Admin::find($request->id);

            return redirect()->route('admin.dashbord')->with('error','Admin login successfully');
        }
        else{
            return back()->with('error','Invaled Email or password');
        }
    }//end method 


    public function Logout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with('error','Admin logout successfully');


    }//end methid 

    public function Dashbord(){
        return view('admin.index');



    }//end Methd 
}

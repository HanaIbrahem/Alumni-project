<?php

namespace App\Http\Controllers\component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\User;
use App\Models\post;
use App\Models\Admin;
use App\Models\contact;
use DB;
class alluserscontroller extends Controller
{
    //

    public function index(){

    $users = User::all();

    $usersByType = DB::table('users')
                             ->selectRaw('type, count(*) as count')
                             ->groupBy(['type'])->get();

    
    $usersByDept = DB::table('users')
                             ->selectRaw('department, count(*) as count')
                             ->groupBy(['department'])
                             ->get();
                                
    


    $usersjob = DB::table('users')
        ->whereNotNull('job')->count();
    
    return view('admin.components.users.allusers',compact('users','usersByType','usersjob'));

    }


    public function destroy($id){

       //
       $user=User::find($id); 
 
 
       $user->delete();
       return  redirect()->back();
    }


    public function Postlist(){

        $posts = Post::latest()->get();    
        return view('admin.components.alumniposts.alumni-posts',compact('posts'));
    }

    public function Postshow($id){

       $posts = Post::find($id);
       
       if ($posts->show == "no") {
           $posts->show = "yes";
           $posts->save();
           return redirect()->back();
       }
       
       $posts->show = "no";
       $posts->save();
       return redirect()->back();

    }

    public function ContactList(){

        $contact = contact::latest()->get();  
        return view('admin.components.users.contact-list',compact('contact'));
    }
    public function ContacRemove($id){

        $contact = contact::find($id);  
        $contact->delete();
        return redirect()->back();
    }

    // admin users list
    public function AdminList(){

        $admin=Admin::all();
        return view('admin.users.admin-list',compact('admin'));
    }

    public function AdminRegister(){

        return view('admin.users.admin-register');
    }
    public function AdminDestroy($id){

        $admin=Admin::findOrFail($id);
        $admin->delete();
        return redirect()->back();
    }
}

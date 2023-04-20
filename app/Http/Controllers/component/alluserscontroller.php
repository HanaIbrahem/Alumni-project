<?php

namespace App\Http\Controllers\component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Models\User;
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
}

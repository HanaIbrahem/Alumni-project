<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use Illuminate\Validation\Rules\File;


use Image;
class HomeSetupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $University=University::find(1);
        return view('admin.home_setup.home_setup',compact('University'));
    }

    
    public function update(Request $request)
    {
        
        $slide_id = $request->id;
        if ($request->file('logo')) {

            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'title' => ['required', 'string','max:255'],
                'logo' => ['required', File::image()],
            ]);
            //to remove image on folder
            $multi = University::findOrFail($slide_id );
            $imgh = $multi->logo;
            unlink($imgh);

            $image = $request->file('logo');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        
            Image::make($image)->resize(100,60)->save('upload/'.$name_gen);
            $save_url = 'upload/'.$name_gen;
        
            University::findOrFail($slide_id)->update([
                'name' => $request->name,
                'title' => $request->title,
                'logo' =>$save_url,
        
            ]); 
            return  redirect()->route('admin.dashbord');

        }

             else{
    
                University::findOrFail($slide_id)->update([
               
                    'name' => $request->name,
                    'title' => $request->title,
                    
                ]); 
    
                return redirect()->back();

             }
    
    }
    
}

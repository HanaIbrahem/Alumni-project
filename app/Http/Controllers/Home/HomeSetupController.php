<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Faculty;
use App\Models\Department;
use Illuminate\Validation\Rules\File;
use Carbon\Carbon;


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
        
            Image::make($image)->resize(80,40)->save('upload/'.$name_gen);
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
    
    }//end method

    public function Faculty(){
        return view('admin.home_setup.faculty');
    }//end method


    public function FacultyAdd(Request $request)
    {
        $faculty = Faculty::create([
            'name' => $request->name,
            'shorttitle' => $request->shortname,
        ]);
        return  redirect()->back();
       
    }//end Method


    public function FacultyEdit($id)
    {
        $faculty=Faculty::findOrFail($id);
        return view('admin.home_setup.faculty_edit',compact('faculty'));
    }//end Method


    public function FacultyUpdate(Request $request)
    {
        $faculty_id=$request->ggg;

    
        Faculty::findOrFail($faculty_id)->update([
               
            'name' => $request->name,
            'shorttitle' => $request->shortname,
            
        ]); 

       
        return  redirect()->route('admin.home.faculty');



   

    }//end Method

    public function DeletFaculty($id){

       

        Faculty::findOrFail($id)->delete();

        return redirect()->back();



     }// End Meth


     public function DepartmentAdd($id)
     {
         return view('admin.home_setup.department',compact('id'));
     }//end Method
     

     public function DepartmentStor(Request $request)
     {
        $fac= $request->id;
        $faculty = Faculty::findOrFail($fac);
        // return dd($faculty);

        $faculty->dipartment()->create([
                'name' => $request->name,
                'shorttitle' => $request->shortname,
        ]);


        return redirect()->route('admin.home.faculty');
     }//end method

     public function DepartmentEdit($id)
     {
        $department=Department::findOrFail($id);
        return view('admin.home_setup.departmentedit',compact('department'));
    }//end Method

    public function DepartmentUpdate(Request $request){

        
        $department_id=$request->ggg;

    
        Department::findOrFail($department_id)->update([
               
            'name' => $request->name,
            'shorttitle' => $request->shortname,
            
        ]); 

       
        return  redirect()->back();
    }//end Method

    public function DepartmentDelet($id){

        Department::findOrFail($id)->delete();
 
        return redirect()->back();

    }
    public function test(Request $request){
        dd($request->all());

    }

}
<?php

namespace App\Http\Controllers\component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Gallary;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules;
use Carbon\Carbon;


class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $gallary=Gallary::all();
        return view('admin.components.gallary.gallary',compact('gallary'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('admin.components.gallary.gallary-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


      
         
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'image' => ['required'],

        ]);

       $image = $request->file('image');

       foreach ($image as $multi_image) {

          $name_gen = hexdec(uniqid()).'.'.$multi_image->getClientOriginalExtension();  // 3434343443.jpg

          $multi_image->move(public_path('upload/images/gallary/'), $name_gen);

           Gallary::insert([

               'image' =>  $name_gen,
               'title'=>$request->title,
               'created_at' => Carbon::now(),

           ]); 
       }

       return  redirect()->back();
       
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    
        $gallary=Gallary::find($id);

        return view('admin.components.gallary.gallary-edit',compact('gallary'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

          
    

        $gallary=Gallary::findOrFail($request->id);
        if($request->file('image')){

            $request->validate([
                'image' => ['required', File::image()],
            
            ]);

            //remove recent imge 
            
            $imgh = 'upload/images/gallary/'.$gallary->image;
            unlink($imgh);
    

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            $save_url = $name_gen;
            $image->move(public_path('upload/images/gallary/'), $name_gen);
            $gallary->image= $save_url;
        }   

    


        $gallary->title = $request->input('title');

        
        $gallary->save();
        return  redirect()->route('gallary.get');
    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $gallary=Gallary::findOrFail($id);
        // To Remove Image  from folder
        $imgh = 'upload/images/gallary/'.$gallary->image;
        unlink($imgh);
        $gallary->delete();
        return redirect()->back();
    }
}

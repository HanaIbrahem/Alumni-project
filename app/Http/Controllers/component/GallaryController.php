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
        return view('admin.components.gallary.gallary');
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
        return view('admin.components.gallary.gallary-edit',compact());

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}

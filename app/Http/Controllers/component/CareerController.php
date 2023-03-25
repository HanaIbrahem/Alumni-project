<?php

namespace App\Http\Controllers\component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use App\Models\Career;
use Carbon\Carbon;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.components.career.career');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.components.career.career-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string'],
            'type' => ['required', 'string','max:255'],
            'image'=>['required',File::image()],
        
            'company_name' => ['required', 'string','max:255'],
            'salary' => ['required', 'string','max:255'],
            'expiredate' => ['required','date','after:today'],

        ], [
            'expiredate' => 'The date must be greater than today.',
        ]);

        $image = $request->file('image');

        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        $save_url =$name_gen;
        $image->move(public_path('upload/images/career/'), $name_gen);

        $career = Career::create([
            'title' => $request->title,
            'detail' => $request->detail,
            'type' => $request->type,
            'image' => $save_url,
            'company_name'=>$request->company_name,
            'salary_range'=>$request->salary,
            'location'=>$request->location,
            'duration'=>$request->expiredate,
            'created_at'=>Carbon::now(),
        ]);
        
       
        return  redirect()->back();
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
        
        $career=Career::findOrFail($id);
        return view('admin.components.career.career-edit',compact('career'));
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
        $career=Career::findOrFail($request->id);
        if($request->file('image')){

            $request->validate([
                'image' => ['required', File::image()],
            
            ]);

            //remove recent imge 
            
            $imgh = 'upload/images/career/'.$career->image;
            unlink($imgh);
    

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            $save_url = $name_gen;
            $image->move(public_path('upload/images/career/'), $name_gen);
            $career->image= $save_url;
        }



         $career->title = $request->input('title');
         $career->detail = $request->input('detail');
         $career->type = $request->input('type');
         $career->company_name=$request->input('company_name');
         $career->salary_range=$request->input('salary');
         $career->location=$request->input('location');
         $career->duration=$request->input('expiredate');
        
        $career->save();
        return  redirect()->route('career.get');

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
        //
        $career=Career::find($id);

        // for deleting image with it
        $imgh = 'upload/images/career/'.$career->image;
        unlink($imgh);

        $career->delete();
        return  redirect()->back();
    }
}

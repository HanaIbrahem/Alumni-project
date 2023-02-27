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
            'expiredate' => ['required', 'date'],
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
        dd($request->all());
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

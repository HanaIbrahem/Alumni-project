<?php

namespace App\Http\Controllers\component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;
use App\Models\Events;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.components.events.events');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.components.events.event-create');
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
        
            'expiredate' => ['required','date','after:startdate'],
            'startdate' => ['required','date','after:today'],
        ], [
            'expiredate' => 'The date must be greater than today.',
        ]);
        $image = $request->file('image');

        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        $save_url =$name_gen;
        $image->move(public_path('upload/images/event/'), $name_gen);

        $pin = 'no';
        if(request()->has('pin')) {
            $pin = 'yes';
        } 
        $event = Events::create([
            'title' => $request->title,
            'detail' => $request->detail,
            'type' => $request->type,
            'image' => $save_url,
            'startdate'=>$request->startdate,
            'enddate'=>$request->expiredate,
            'pin'=>$pin,
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
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
        $event=Events::find($id);
        return view('admin.components.events.event-edit',compact('event'));
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

        $event=Events::findOrFail($request->id);
        if($request->file('image')){

            $request->validate([
                'image' => ['required', File::image()],
            
            ]);

            //remove recent imge 
            
            $imgh = 'upload/images/event/'.$event->image;
            unlink($imgh);
    

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            $save_url = $name_gen;
            $image->move(public_path('upload/images/event/'), $name_gen);
            $event->image= $save_url;
        }

        



         $event->title = $request->input('title');
         $event->detail = $request->input('detail');
         $event->type = $request->input('type');
         $event->enddate=$request->input('expiredate');
         $event->startdate=$request->input('startdate');
        
        $event->save();
        return  redirect()->route('event.get');
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
        $event=Events::find($id);

        // for deleting image with it
        $imgh = 'upload/images/event/'.$event->image;
        unlink($imgh);

        $event->delete();
        return  redirect()->back();
    }

    public function pin($id){
        $event=Events::find($id);
        
        if ($event->pin == "no") {
            $event->pin = "yes";
            $event->save();
            return redirect()->back();
        }
        
        $event->pin = "no";
        $event->save();
        return redirect()->back();

    }
}

<?php

namespace App\Http\Controllers\component;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use Carbon\Carbon;

use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules;
use Illuminate\Http\RedirectResponse;

use Image;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.components.news.news');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.components.news.news-create');
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
        // dd($request->all());
        
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'string'],
            'type' => ['required', 'string','max:255'],
            'image'=>['required',File::image()],

        ]);

        $image = $request->file('image');

        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
        $save_url =$name_gen;
        $image->move(public_path('upload/images/news/'), $name_gen);

        $pin = 'no';
        if(request()->has('pin')) {
            $pin = 'yes';
        } 

        $news = News::create([
            'title' => $request->title,
            'detail' => $request->detail,
            'type' => $request->type,
            'image' => $save_url,
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
        $news=News::findOrFail($id);

        return view('admin.components.news.news-edit',compact('news'));
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
        //$faculty_id=$request->ggg;

    
        $news=News::findOrFail($request->id);
        if($request->file('image')){

            $request->validate([
                'image' => ['required', File::image()],
            
            ]);

            //remove recent imge 
            
            $imgh = 'upload/images/news/'.$news->image;
            unlink($imgh);
    

            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            $save_url = $name_gen;
            $image->move(public_path('upload/images/news/'), $name_gen);
            $news->image= $save_url;
        }

        $news->type = $request->input('type');
        $news->title= $request->input('title');
        $news->detail=$request->input('detail');
        $news->save();
        return  redirect()->route('news.get');


        
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
        $news=News::find($id);

        // for deleting image with is
        $imgh = 'upload/images/news/'.$news->image;
        unlink($imgh);

        $news->delete();
        return  redirect()->back();
    }// end method

    public function pin($id){
        $news=News::find($id);
        
        if ($news->pin == "no") {
            $news->pin = "yes";
            $news->save();
            return redirect()->back();
        }
        
        $news->pin = "no";
        $news->save();
        return redirect()->back();

    }
}

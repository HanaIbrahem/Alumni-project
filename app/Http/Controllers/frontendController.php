<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Career;
use App\Models\Gallary;

use App\Models\Events;
use App\Models\User;
use App\Models\post;
use DB;
class frontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function NewsPage(){

        // $news = DB::table('news')
        //     ->orderBy('created_at','desc')
        //     ->get();

        $news=News::latest()->paginate(6);

        // catigory news
        $newsCount = News::select(DB::raw('type, COUNT(*) as count'))
                           ->groupBy('type')->orderBy('count','desc')->limit(5)
                           ->get();
        
        // $recent = News::latest()->take(10)->get();
        return view('frontend.news',compact('news','newsCount'));
    }//end method

    public function NewsShow($id){
        $recentnews=News::latest()->paginate(6);
        $news=News::findOrFail($id);

        // catigory news
        $newsCount = News::select(DB::raw('type, COUNT(*) as count'))
        ->groupBy('type')->orderBy('count','desc')->limit(6)
        ->get();

        return view('frontend.news-show',compact('news','recentnews','newsCount'));


    }//end method

    public function NewsShowGroutBy($type){

        // catig
        $newsCount = News::select(DB::raw('type, COUNT(*) as count'))
        ->groupBy('type')->orderBy('count','desc')->limit(5)
        ->get();

        $news = News::where('type', "$type")
                    ->orderBy('created_at', 'desc')
                    ->paginate(12);
        return view('frontend.news',compact('news','newsCount'));


    }//end method

    //Career Pages
    public function CareerPpage(){

        $career=Career::latest()->paginate(5);
        // Career count type
        $careercount = Career::select(DB::raw('type, COUNT(*) as count'))
        ->groupBy('type')->orderBy('count','desc')->limit(5)
        ->get();

        $location = Career::select(DB::raw('location, COUNT(*) as count'))
        ->groupBy('location')->orderBy('count','desc')->limit(5)
        ->get();
    
        return view('frontend.career',compact('career','careercount','location'));
    }//end method

    public function CareerShow($id){


        $career=Career::findOrFail($id);
        return view('frontend.career-show',compact('career'));
    }//Career Show


    public function CareerShowGroutBy(Request $request){

     $career = Career::where([
                 ['type', $request->type],
                 ['location', $request->location]
             ])
             ->orderBy('created_at', 'desc')
             ->paginate(5);
        // recent careers
        $careercount = Career::select(DB::raw('type, COUNT(*) as count'))
        ->groupBy('type')->orderBy('count','desc')->limit(5)
        ->get();

        $location = Career::select(DB::raw('location, COUNT(*) as count'))
        ->groupBy('location')->orderBy('count','desc')->limit(5)
        ->get();

        return view('frontend.career',compact('career','careercount','location'));
        

    }

    //Gallary pages 
    public function GallaryPpage(){


        //count images orderby title
        $gallargroups = Gallary::select(DB::raw('title, COUNT(*) as count'))
          ->groupBy('title')->orderBy('count','desc')->limit(5)
          ->get();

        // all gallary order by last added images
        $gallary=Gallary::latest()->paginate(16);
        return view('frontend.gallary',compact('gallary','gallargroups'));
    }//end method

    public function GallaryGroupBY($type){

          // gallary groups
          $gallargroups = Gallary::select(DB::raw('title, COUNT(*) as count'))
          ->groupBy('title')->orderBy('count','desc')->limit(5)
          ->get();

          //all images groupby type
          $gallary = Gallary::where('title', $type)
        ->orderBy('created_at', 'desc')
        ->paginate(16);

        return view('frontend.gallary',compact('gallary','gallargroups'));
    }//end method


    //event page
    public function EventsPage(){

        $event=Events::latest()->paginate(6);
        return view('frontend.event',compact('event'));
    }//end method

    public function EventsShow($id){

        $event=Events::findOrFail($id);
        return view('frontend.event-show',compact('event'));
    }
    
    // Start Alumni routes

    public function Alumni(){

        $alumni = User::query()->paginate(15);
        $usersByDepartment = DB::table('users')
            ->select('department', DB::raw('count(*) as total'))
            ->groupBy('department')
            ->get();
        
        return view('frontend.alumni',compact('alumni'));
    }//end method

    public function AlumniGroupBy($type){
     

        $alumni = DB::table('users')->where('type', $type)->paginate(15);;
        $usersByDepartment = DB::table('users')
            ->select('department', DB::raw('count(*) as total'))
            ->groupBy('department')
            ->get();
        

        return view('frontend.alumni',compact('alumni'));

    }//end method 

    public function AlumniGroupByDep($dep){

        $usersByDepartment = DB::table('users')
        ->select('department', DB::raw('count(*) as total'))
        ->groupBy('department')
        ->get();
        $alumni = User::where('department', $dep)->paginate(15);
        return view('frontend.alumni',compact('alumni'));

    }//end method

    public function AlumniShow($id){

        $alumni = User::findOrFail($id);

        // dd($alumni);
        return view('frontend.alumni-show',compact('alumni'));
    }

    public function AlumniPosts(){
         $posts = post::where('show', 'yes')->paginate(5);
        return view('frontend.alumni-posts',compact('posts'));
    }

    public function AlumniPostsshow($id){

        $posts = post::find($id);
        if (  $posts->show=="yes") {
            return view('frontend.alumni-post-show',compact('posts'));
        }
        return  redirect()->back();
    }

}

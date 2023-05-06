<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Career;
use App\Models\Gallary;

use App\Models\Events;
use App\Models\User;
use DB;
class SearchController extends Controller
{
    //News Search mothod
    public function NewsSearch(Request $request){

        $query = $request->search;
        $news = News::where('title', 'LIKE', '%'.$query.'%')
                              ->orWhere('detail', 'LIKE', '%'.$query.'%')
                              ->paginate(10);
        $newsCount = News::select(DB::raw('type, COUNT(*) as count'))
                           ->groupBy('type')->orderBy('count','desc')->limit(5)
                           ->get();
        return view('frontend.news',compact('news','newsCount'));

        // dd($request);
        // $query = $request->input('query');
        // $events = Events::where('title', 'LIKE', '%'.$query.'%')
        //                ->orWhere('detail', 'LIKE', '%'.$query.'%')
        //                ->get();
        // $html = '';
        // foreach ($events as $event) {
        //     $html .= '<a href="'.route('events.show', $event->id).'">'.$event->title.'</a><br>';
        // }
        // return $html;

    }//end method
    
    
    //event search method
    public function EventSearch(Request $request){

        
         $query = $request->search;
        $event = Events::where('title', 'LIKE', '%'.$query.'%')
                              ->orWhere('detail', 'LIKE', '%'.$query.'%')
                              ->paginate(10);
    
        return view('frontend.event',compact('event'));

    
     
    }//end method 

    public function CareerSearch(Request $request)
    {
        $query = $request->search;
        $career = Career::where('title', 'LIKE', '%'.$query.'%')
                              ->orWhere('detail', 'LIKE', '%'.$query.'%')
                              ->paginate(10);
                  
                              
         $careercount = Career::select(DB::raw('type, COUNT(*) as count'))
        ->groupBy('type')->orderBy('count','desc')->limit(5)
        ->get();
    
        $location = Career::select(DB::raw('location, COUNT(*) as count'))
        ->groupBy('location')->orderBy('count','desc')->limit(5)
        ->get();
    
        return view('frontend.career',compact('career','careercount','location'));
    }//end method

    public function AlumniSearch(Request $request){
        $query = $request->search;
        $alumni = User::where('name', 'LIKE', '%'.$query.'%')
        ->orWhere('email', 'LIKE', '%'.$query.'%')->orWhere('bio', 'LIKE', '%'.$query.'%')
        ->orWhere('about', 'LIKE', '%'.$query.'%')->paginate(15);

        return view('frontend.alumni',compact('alumni'));

    }
}

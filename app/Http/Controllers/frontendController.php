<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
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

        $news=News::latest()->paginate(12);

        // catigory news
        $newsCount = News::select(DB::raw('type, COUNT(*) as count'))
                           ->groupBy('type')->orderBy('count','desc')->limit(5)
                           ->get();
        
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

}

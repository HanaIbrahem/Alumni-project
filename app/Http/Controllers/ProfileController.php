<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rules\File;
use App\Models\post;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('user_dashbord.edit-profile', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('logout')->with('status', 'profile-updated');
    }


    /**
     * user Information
    */

    public function EditInfo(ProfileUpdateRequest $request): View{

        return view('user_dashbord.edit-info', [
            'user' => $request->user(),
        ]);
    }//end Method

    public function UpdateInfo(ProfileUpdateRequest $request): RedirectResponse{

        $user = $request->user();

        //image profile upadet if exest
        if($request->file('image_profile')){

            $request->validate([
                'image_profile' => ['required', File::image()],
            
            ]);
            //remove recent imge 
            if( $user->image_profile != null){

                $imgh = 'upload/images/profile/'.$user->image_profile;
                unlink($imgh);
            }

            $image = $request->file('image_profile');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
            $save_url = $name_gen;
            $image->move(public_path('upload/images/profile/'), $name_gen);
            $user->image_profile= $save_url;

        }
         
        // cover image update if exest
        if($request->file('cover_image')){
            $request->validate([
                'cover_image' => ['required', File::image()],
            ]);

            //remove recent i,age
            if( $user->cover_image !=null){
                $imgh = 'upload/images/cover/'.$user->cover_image;
                unlink($imgh);
            }
            //for cover iamge  update
            $cover=$request->file('cover_image');
            $name_gen = hexdec(uniqid()).'.'.$cover->getClientOriginalExtension();  // 3434343443.jpg
            $save_url2 = $name_gen;
            $cover->move(public_path('upload/images/cover/'), $name_gen);
            $user->cover_image=$save_url2;
            
        }

        $user->bio = $request->input('bio');
        $user->about= $request->input('about');
        $user->job=$request->input('job');
        $user->save();
        return redirect()->back()->with('success', 'User information updated successfully.');

    }//end Method


    /**
     * Delete the user's account.
     */
    public function getdestroy(){
        return view('user_dashbord.delete-profile');
    }
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current-password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // Update second email !! Suporting email for users
    public function ContactLinks(){
        
        return view('user_dashbord.contactlinks');
    }

    public function updateemail(Request $request)
    {
       $request->validate([
           'facebook' => 'string|nullable',
           'linkedin' => 'string|nullable',
           'phonenumber' => 'string|nullable', 
       ]);
    
       $user = $request->user();
       $user->facebook = $request->input('facebook');
       $user->linkedin= $request->input('linkedin');
       $user->phonenumber=$request->input('phonenumber');
       $user->save();
    
        
    
        return redirect()->back();
    }


    //get all posts
    public function ListPost(){
        
        $posts = post::where('user_id', auth()->id())->get();

        return view('user_dashbord.post-list',compact('posts'));
    }
    public function MakePost(){

        return view('user_dashbord.post');
    }

    public function PostStor(Request $request){
      

        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required|string',
            'image' => ['required', File::image()],

        ]);
        //  for cover iamge  update
         $img=$request->file('image');
         $name_gen = hexdec(uniqid()).'.'.$img->getClientOriginalExtension();  // 3434343443.jpg
         $save_url2 = $name_gen;
         $img->move(public_path('upload/images/post/'), $name_gen);
        
        $post = new post();
        $post->image=$save_url2;
        $post->title = $validatedData['title'];
        $post->content = $validatedData['content'];
        $post->user_id = Auth::id();
        $post->show="no";
        $post->save();

        return redirect()->back();
    }//end method

    public function PostDelet($id){
        $post=post::find($id);

        if ($post->user_id==Auth::id()) {
            $imgh = 'upload/images/post/'.$post->image;
            unlink($imgh);
    
            $post->delete();
            return  redirect()->back();

        }


        // for deleting image with it
       
        
        return  redirect()->back();
    }

    public function PostEdit($id){

        $post=post::find($id);

        if ($post->user_id==Auth::id()) {

            return view('user_dashbord.post-edit',compact('post'));
        }
         return redirect()->back();
        

       
    }

    public function PostUdate(Request $request){

        
    
        $post=post::findOrFail($request->id);

        if ($post->user_id==Auth::id()) {

           

            if($request->file('image')){
    
                $request->validate([
                    'image' => ['required', File::image()],
                
                ]);
              
    
                $imgh = 'upload/images/post/'.$post->image;
                unlink($imgh);
    
                $image = $request->file('image');
                $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();  // 3434343443.jpg
                $save_url = $name_gen;
                $image->move(public_path('upload/images/post/'), $name_gen);
                $post->image= $save_url;
    
            }
    
       
         
             $post->title = $request->input('title');
             $post->content = $request->input('content');
             $post->show="no";
             $post->save();
            return  redirect()->back();
        }
        return  redirect()->back();


       
    }

    
}

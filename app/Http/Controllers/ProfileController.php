<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Illuminate\Validation\Rules\File;

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
    public function showForm(){
        
        return view('user_dashbord.second-email');
    }

    public function updateemail(Request $request)
    {
        $request->validate([
            'second_email' => 'required|email|unique:users,second_email',
        ]);
    
        auth()->user()->update([
            'second_email' => $request->input('second_email'),
            'second_email_verified_at' => null,
        ]);
    
        auth()->user()->sendEmailVerificationNotification('second_email');
    
        return redirect()->back();
    }

    
}

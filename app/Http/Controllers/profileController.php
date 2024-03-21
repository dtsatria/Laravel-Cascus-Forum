<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class profileController extends Controller
{
    public function index(){
        $userId  = Auth::id();
        $profileDetail = Profile::where('user_id', $userId)->first();
        return view('user.profile', compact('profileDetail'));
    }

    public function update(Request $request,$id){
        $this->validate($request,[
    		'bio' => 'required',
            'umur' => 'required',
            'alamat' => 'required'
    	]);

        $profile = Profile::find($id);
        $profile->bio = $request->bio;
        $profile->umur = $request->umur;
        $profile->alamat = $request->alamat;
        $profile->update();
        toastr()->success('Profile has been updated successfully!');
        return redirect('/profile');
    }
}

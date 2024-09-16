<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    //


    public function changePassword(){

        return view('user.change_password');
    }


    public function updatePassword(Request $request)
    {
        // Validate the input
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        // Get the current authenticated user
        $user = Auth::user();


        // Check if the current password matches
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        // Update the password
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->back()->with('toast', 'success')->with('message',  'Password changed successfully!✅');
    }





    public function changePassport(){

        return view('user.passport');
    }


    public function storePassport(Request $request){

        $request->validate([
            'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Allow only images with a max size of 2MB
        ]);

        $user = Auth::user();
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->storeAs('profile_images', $imageName, 'public');

            if ($user->profile_image) {
                Storage::disk('public')->delete('profile_images/' . $user->profile_image);
            }

            $user->profile_image = $imageName;
            $user->save();
        }

        return redirect()->back()->with('toast', 'success')->with('message',  'Profile image updated successfully!✅');

    }
}
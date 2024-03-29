<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //

    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "email" => "required|unique:users,email"
        ]);
        if ($validator->fails()) {
            return redirect("/register")->with("message", $validator->errors()->first());
        }
        $user = User::create($request->all());
        if ($user) {
            auth()->login($user);
            return redirect('/');
        } else {
            return redirect('/login')->with('message', 'failed to verify you. Please enter valid details');
        }
    }

    public function loginUser(Request $request)
    {
        if (auth()->attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
            return redirect('/');
        }
        return redirect('/login')->with('message', 'Incorrect credentials!! Please enter correct details');
    }

    public function getUserDetails()
    {
        $userId = auth()->id();
        $user = User::find($userId);
        return $user;
    }


    public function loadPage()
    {
        $userData = $this->getUserDetails();
        //    return dd($userData);
        return view('pages.profile', [
            "userData" => $userData,
        ]);
    }

    public function updateUser(Request $data)
    {
        if ($data->hasFile('profile-image')) {
            $image = $data->file('profile-image');

            $user = User::find(auth()->id());
            if ($user->profile_path) {
                Storage::disk('public')->delete($user->profile_path);
            }

            $imagePath = $image->store('profileImages', 'public');
            $updateUser = $user->update([
                "name" => $data->input('name'),
                "email" => $data->input('email'),
                "password" => $data->input('password'),
                "profile_path" => $imagePath
            ]);
            if ($updateUser) {
                return redirect("/profile");
            } else {
                return redirect("/");
            }
        }
    }
}

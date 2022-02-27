<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function profile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
    public function profileUpdate(Request $request)
    {
        $id = Auth::user()->id;
        $id = User::find($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $id->update([
            'name' => $request->post('name'),
            'email' => $request->post('email')
        ]);

        return redirect()->route('profile')->with('success', "Profil tahrirlandi");
    }

    public function profilePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        $password = auth()->user()->id;
        $password = User::find($password);
        $password->update([
            'password' => bcrypt($request['password'])
        ]);

        return redirect()->route('profile');
    }
}

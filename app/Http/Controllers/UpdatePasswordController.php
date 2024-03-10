<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'min:6'],
            'password_confirmation' => ['required']
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update([
                'password' => $request->password_confirmation
            ]);

            return back()->with('success', 'Password has been changed!');
        }

        return back()->with('fail', 'Your credentials does not match with our Records!');
    }
}

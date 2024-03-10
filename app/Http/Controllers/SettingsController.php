<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingsController extends Controller
{
    public function edit($username)
    {



        // first - data tunggal / spesifik
        // data collection ( kumpuland data)
        return view('settings.index', ['user' => User::whereUsername($username)->first()]);
    }


    public function update(Request $request, $username)
    {
        $request->validate([
            'name' => ['required', 'min:3', 'string'],
            'email' => ['email', 'required']
        ]);

        Auth::user()->update([
            'email' => $request->email,
            'name' => $request->name
        ]);

        return back()->with('success', 'User has been updated!');
    }
}

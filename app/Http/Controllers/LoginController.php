<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Dotenv\Exception\ValidationException as ExceptionValidationException;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\ValidationServiceProvider;

class LoginController extends Controller
{
    public function index()
    {

        return view('auth.login');
    }

    public function store(Request $request)
    {

        $request->validate([
            'email' => ['email', 'required'],
            'password' => ['required']
        ]);


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->to(ProvidersRouteServiceProvider::HOME)->with('success', 'Welcome!');
        }



        throw ValidationException::withMessages([
            'email' => 'Your credentials doesnt match with our records.'
        ]);
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}

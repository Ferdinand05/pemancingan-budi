<?php

namespace App\Http\Controllers;

use App\Mail\ResetPasswordMail;
use App\Models\PasswordResetToken;
use App\Models\User;
use App\Providers\RouteServiceProvider as ProvidersRouteServiceProvider;
use Carbon\Carbon;
use Dotenv\Exception\ValidationException as ExceptionValidationException;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Console\View\Components\Error;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\ValidationServiceProvider;
use Illuminate\Support\Str;
use Symfony\Component\Routing\Exception\RouteNotFoundException;

use function PHPUnit\Framework\returnSelf;

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

    public function forgot_password()
    {
        return view('auth.forgot-password');
    }

    public function forgot_password_store(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email'
        ]);


        $token = Str::random(60);
        PasswordResetToken::updateOrCreate(
            [
                'email' => $request->email
            ],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now('Asia/Jakarta')
            ]
        );

        Mail::to($request->email)->send(new ResetPasswordMail($token));


        return back()->with('success', 'Email Reset has been sent!');
    }

    public function reset_password(Request $request, $token)
    {

        $checkToken = PasswordResetToken::whereToken($token)->first();
        if ($checkToken) {
            return view('auth.reset-password', ['token' => $token]);
        }

        return redirect()->to(route('login'))->with('fail', 'Invalid Token!');
    }

    public function reset_password_store(Request $request)
    {

        $request->validate([
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);


        // check apakah ada user token di table password_reset_tokens
        $userToken = PasswordResetToken::query()->where('token', $request->token_reset)->first();
        // mendapatkan user lewat email yg ada di token
        if ($userToken) {
            // ada
            $user = User::where('email', $userToken->email)->first();
            $user->update([
                'password' => $request->password_confirmation
            ]);

            $userToken->delete();
            return redirect()->to(route('login'))->with('success', 'Password has been changed!');
        } else {
            // user tidak ada
            return redirect()->to(route('login'))->with('fail', 'Token Invalid');
        }
    }
}

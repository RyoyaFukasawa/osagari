<?php

namespace App\Http\Controllers\Web\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    // google認証
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    // google認証
    public function handleGoogleCallback(Request $request)
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        if (!empty(preg_match('/@senshu-u.jp/u', $googleUser->email))) {
            if (empty(User::where('email', $googleUser->email)->first())) {
                $googleId = $googleUser->id;
                $email = $googleUser->email;
                return redirect("/guest/register/social?googleId={$googleId}&email={$email}");
            } else {
                $user = User::where('email', $googleUser->email)->first();
                Auth::login($user);
                $request->session()->regenerate();
                return redirect('/home');
            }
        } else {
            // TODO フロントにエラーを出す
            return redirect('/guest/register');
        }
    }
}

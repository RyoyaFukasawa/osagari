<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Mail\Auth\RegisterComplete;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all())->save();
        Auth::login($user);
        $request->session()->regenerate();

        return $this->createResponse();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerate();

        return $this->createResponse();
    }

    public function completeEmail(Request $request)
    {
        $user = $request->user();
        Mail::to($user->email)->send(new RegisterComplete($user));

        $this->data = 'メール送信完了';
        return $this->createResponse();
    }

    public function me(Request $request)
    {
        $user = Auth::user();

        $this->data = $user;

        $this->createResponse();
    }
}

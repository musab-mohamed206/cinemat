<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
    public function store()
    {
        // validate form data
        $credentials = request()->validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required'],
        ]);

        // validate credentials
        if (auth()->attempt($credentials, isset($credentials['remember-me']) && $credentials['remember-me'] === 'yes')) {
            // regenerate session for security and redirect to intended page
            request()->session()->regenerate();
            return redirect()->intended()->with(['flash' => 'success', 'message' => '!تم تسجيل الدخول']);
        }

        // return with error on credential validation erors
        return back()->withErrors(['email' => 'خطأ في البريد الإلكتروني أو كلمة المرور']);
    }

    public function destroy()
    {
        // log user out and redirect
        auth()->logout();
        return redirect('/')->with([
            'flash' => 'success',
            'message' => '!تم تسجيل الخروج',
        ]);
    }
}

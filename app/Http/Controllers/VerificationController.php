<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function showResendVerificationForm()
    {
        return view('auth.verify-email');
    }

    // Mengirim ulang email verifikasi
    public function resendVerificationEmail(Request $request)
    {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'Email verifikasi telah dikirim ulang!');
    }

    // Verifikasi email
    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/home')->with('verified', true);
    }
}

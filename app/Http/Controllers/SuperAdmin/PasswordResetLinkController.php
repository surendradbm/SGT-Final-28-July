<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class PasswordResetLinkController extends Controller
{
    public function create()
    {
        return view('pages.super_admin.general.forgotPassword');
    }

    public function forgetPasswordCheck(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please Check the Form.');
        }

        $email = $request->email;
        $token = Str::random(60);
        $expires_at = now()->addMinutes(60);

        $user = User::where('email', $email)
            ->where('user_type', "0")
            ->first();
        if (!$user) {
            session()->flash('alert', [
                'icon' => 'error', 
                'title' => 'Error', 
                'text' => 'Something went wrong. Please try again.',
            ]);
        } else {
            $data['token'] = $token;
            $data['created_at'] = now();
            $data['token_expires_at'] = $expires_at;
            $user = $user->update($data);
            app('App\Http\Controllers\ForgotPasswordController')->index($email, $token);
            session()->flash('alert', [
                'icon' => 'success',
                'title' => 'Success',
                'text' => 'Password reset link sent to your email. Please check your inbox.',
            ]);
            return back();
        }
    }
}

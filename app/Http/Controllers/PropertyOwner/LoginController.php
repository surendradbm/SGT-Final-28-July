<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('pages.property_owner.auth.login');
    }

    public function loginCheck(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:8',
                'userType' => 'required|in:1',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', 'Please Check the Form.');
            }
            $user = User::where('email', $request->email)
                ->where('user_type', $request->userType)
                ->first();
            if (!$user) {
                throw new \Exception('Invalid Email.');
            }
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw new \Exception('Invalid password.');
            } else {
                // if (Session::has('last_visited_page')) {
                //     // return "yes";
                //     $lastVisitedPage = Session::pull('last_visited_page');
                //     dd(session()->all());
                //     return redirect()->route($lastVisitedPage);
                // } else {
                //     return "no";
                //     Auth::login($user);
                //     return redirect()->route('property-owner.dashboard');
                // }
                Auth::login($user);
                return redirect()->route('property-owner.dashboard');
            }
        } catch (\Exception $e) {
            return back()->with('error', '' . $e->getMessage());
        }
    }

    public function forgetPassword()
    {
        return view('pages.property_owner.auth.forgot-password');
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

        $user = User::where('email', $email)->first();
        if (!$user) {
            return "user not found";
        } else {
            $data['token'] = $token;
            $data['created_at'] = now();
            $data['token_expires_at'] = $expires_at;
            $user = $user->update($data);
            app('App\Http\Controllers\ForgotPasswordController')->index($email, $token);

            return view('pages.property_owner.auth.email-landing')->with('email', $email);
            // return redirect()->route('property_owner.success_password_reset', compact('email'));
            // session()->flash('alert', [
            //     'icon' => 'success',
            //     'title' => 'Success',
            //     'text' => 'Password reset link sent to your email. Please check your inbox.',
            // ]);
            // return back();
        }
    }

    public function showResetForm(Request $request)
    {
        $email = $request->input('email');

        return view('pages.property_owner.auth.password-reset')->with('email', $email);
    }

    public function passwordUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please Check the Form.');
        }

        $user = User::where('email', $request->email)->first();
        $data['password'] =  Hash::make($request->password);
        $user = $user->update($data);

        return redirect()->route('property_owner.login');
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('property_owner.login');
    }
}

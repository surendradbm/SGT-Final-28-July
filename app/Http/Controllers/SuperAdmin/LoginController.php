<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\SuperAdmin\Login;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function index()
    {
        return view('pages.super_admin.general.login');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|min:8',
                'userType' => 'required|in:0',
            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', 'Please Check the Form.');
            }
            $user = User::where('email', $request->email)->first();
            if (!$user) {
                throw new \Exception('Invalid Email.');
            }
            if (!$user || !Hash::check($request->password, $user->password)) {
                throw new \Exception('Invalid password.');
                // return redirect()->route('superadmin.login');
            } else {
                Auth::login($user);
                return redirect()->route('dashboard.index');
            }
        } catch (\Exception $e) {
            return back()->with('error', '' . $e->getMessage());
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('superadmin.login');
    }
}

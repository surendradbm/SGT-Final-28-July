<?php

namespace App\Http\Controllers\PropertyOwner;

use Carbon\Carbon;
use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\Country;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\SuperAdmin\Subscription;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Models\PropertyOwner\CompanyDetail;

class RegisterController extends Controller
{

    public function signUp()
    {
        return view('pages/property_owner/auth/register');
    }

    public function signUpCheck(Request $request)
    { {
            try {
                // return $request->all();
                $validator = Validator::make($request->all(), [
                    'avatar' => 'required',
                    'first_name' => 'required',
                    'last_name' => 'required',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'required|numeric',
                    'password' => 'required|confirmed|min:6',
                    'user_type' => 'required|in:1',
                ]);
                if ($validator->fails()) {
                    return back()
                        ->withErrors($validator)
                        ->withInput()
                        ->with('error', 'Please Check the Form.');
                }
                $otp = rand(100000, 999999);
                $otp_created_at = Carbon::now();
                $otp_expired_at = Carbon::now()->addMinutes(3);
                $data['first_name'] = $request->first_name;
                $data['last_name'] = $request->last_name;
                $data['email'] = $request->email;
                $data['phone'] = $request->phone;
                $data['password'] =  Hash::make($request->password);
                $data['otp'] = $otp;
                $data['otp_created_at'] = $otp_created_at;
                $data['otp_expired_at'] = $otp_expired_at;
                $data['user_type'] = $request->user_type;
                if ($request->hasFile('avatar')) {
                    $image = $request->file('avatar');
                    $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path("/uploads/profile_pictures"), $fileName);
                    $data['avatar'] = $fileName;
                }
                $modal = User::create($data);
                if ($modal) {
                    $email = $request->email;
                    app('App\Http\Controllers\MailController')->index($email, $otp, $otp_created_at, $otp_expired_at);
                    Session::put('email', $request->email);
                    Session::put('otp', $otp);
                    Session::put('otp_created_at', $otp_created_at);
                    Session::put('otp_expired_at', $otp_expired_at);
                    Auth::login($modal);
                    return redirect()->route('property_owner.verify_email');
                } else {
                    throw new \Exception('Invalid Email.');
                }
            } catch (\Exception $e) {
                return back()->with('error', '' . $e->getMessage());
            }
        }
    }

    public function resend_otp()
    {
        $otp = rand(100000, 999999);
        $email = Session::get('email');
        $otp_created_at = Carbon::now();
        $otp_expired_at = Carbon::now()->addMinutes(3);
        $user = User::where('email', $email)->first();
        if (!$user) {
            return back()->with('error', 'User not found');
        } else {
            $user->otp = $otp;
            $user->otp_created_at = $otp_created_at;
            $user->otp_expired_at = $otp_expired_at;
            $user->save();
            app('App\Http\Controllers\MailController')->index($email, $otp, $otp_created_at, $otp_expired_at);
            Session::put('email', $email);
            Session::put('otp', $otp);
            Session::put('otp_created_at', $otp_created_at);
            Session::put('otp_expired_at', $otp_expired_at);
            Session::flash('suc', 'OTP sent successfully');
            return redirect()->route('property_owner.verify_email');
        }
    }

    public function verify_email()
    {
        $email = Session::get('email');
        $otp = Session::get('otp');
        $otp_created_at = Session::get('otp_created_at');
        $otp_expired_at = Session::get('otp_expired_at');
        return view('pages.property_owner.auth.verify-email', [
            'email' => $email,
            'otp' => $otp,
            'otp_created_at' => $otp_created_at,
            'otp_expired_at' => $otp_expired_at,
        ]);
    }

    public function verify_email_check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'required|numeric',
            'email' => 'required|email',
            'otp' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please Check the Form.');
        }
        $code = $request->code;
        $email = $request->input('email');
        $otp = $request->input('otp');
        $now = Carbon::now();
        $user = User::where('email', $email)->first();
        if (!$user) {
            return back()->with('error', 'User not found');
        }
        if ($user->otp != $code) {
            return back()->with('error', 'Invalid OTP');
        }
        if ($user->otp_expired_at > $now) {
            return back()->with('success', 'OTP Valid');
        } else {
            return back()->with('error', 'OTP Expired');
        }
    }

    public function company_details()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('pages.property_owner.auth.company-details', $data);
    }

    public function fetchState(Request $request)
    {
        $data['states'] = State::where("country_id", $request->country_id)->get(["name", "id"]);
        return response()->json($data);
    }
    public function fetchCity(Request $request)
    {
        $data['cities'] = City::where("state_id", $request->state_id)->get(["name", "id"]);
        return response()->json($data);
    }

    public function company_details_check(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => 'required',
            'country' => 'required|numeric',
            'state' => 'required|numeric',
            'city' => 'required|numeric',
            'postal_code' => 'required',
            'street' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please Check the Form.');
        }
        $user_id = auth()->user()->id;

        $data['company_name'] = $request->company_name;
        $data['federal_ein'] = $request->fedral_ein;
        $data['bsis_number'] = $request->bsis_number;
        $data['country'] = $request->country;
        $data['state'] =  $request->state;
        $data['city'] = $request->city;
        $data['postal_code'] = $request->postal_code;
        $data['address'] = $request->street;
        $data['user_id'] = $user_id;

        $check = CompanyDetail::where('user_id', $user_id)->first();
        if ($check) {
            $modal = CompanyDetail::where('id', $check->id)->update($data);
            // Auth::login($modal);
            return redirect()->route('property_owner.select_plan');
            // return "yes";
        } else {
            $modal = CompanyDetail::create($data);
            return redirect()->route('property_owner.select_plan');
            // return "no";
        }
    }

    public function select_plan()
    {
        $subscriptions = Subscription::where('status', '1')->get();
        return view('pages.property_owner.auth.select-plan', compact('subscriptions'));
    }

    public function select_plan_check(Request $request)
    {
        $data['monthlyOrYearly'] = $request->input('monthly_or_yearly');
        $data['user_id'] = $request->input('user_id');
        $data['subscription_id'] = $request->input('subscription_id');
        $data['monthly'] = $request->input('monthly');
        $data['yearly'] = $request->input('yearly');

        $request->session()->put('select_plan_check', $data);

        $data['countries'] = Country::get(["name", "id"]);
        return view('pages.property_owner.auth.billing-address', $data);
    }

    public function billing_address_check(Request $request)
    {
        $data['country'] = $request->input('country');
        $data['state'] = $request->input('state');
        $data['city'] = $request->input('city');
        $data['postal_code'] = $request->input('postal_code');
        $data['street'] = $request->input('street');
        $data['user_id'] = $request->user()->id;

        $request->session()->put('billing_address', $data);
        return redirect()->route('stripe.get');
    }

    public function add_phone()
    {
        return view('pages.property_owner.auth.add-phone');
    }

    public function completed()
    {
        return view('pages.property_owner.auth.completed');
    }

    public function payment()
    {
        return view('pages.property_owner.auth.payment');
    }
}

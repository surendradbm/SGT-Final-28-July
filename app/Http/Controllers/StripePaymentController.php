<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use App\Models\SubscriberHistory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\SuperAdmin\Subscription;
use Illuminate\Support\Facades\Session;

class StripePaymentController extends Controller
{
    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripe()
    {
        $select_plan_check = Session::get('select_plan_check');
        $subscription_id = $select_plan_check['subscription_id'];
        $subscription = Subscription::findOrFail($subscription_id);
        $subscription_name = $subscription->subscription_title;
        $plan_name = ($select_plan_check['monthlyOrYearly'] == "1") ? "Monthly Plan" : "Annual Plan";
        $price = ($select_plan_check['monthlyOrYearly'] == "1") ? $select_plan_check['monthly'] : $select_plan_check['yearly'];
        return view('pages.property_owner.auth.stripe', compact('subscription_name', 'plan_name', 'price'));
    }

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */
    public function stripePost(Request $request)
    {
        $billing_address = Session::get('billing_address');
        $select_plan_check = Session::get('select_plan_check');
        $subscription = Subscription::findOrFail($select_plan_check['subscription_id']);

        Stripe::setApiKey(env('STRIPE_SECRET'));
        Charge::create([
            "amount" => $request->payment_amount * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from Aman Prasad."
        ]);

        // Common data for Subscriber and SubscriberHistory
        $data = [
            'address' => $billing_address['street'],
            'postal_code' => $billing_address['postal_code'],
            'city_id' => $billing_address['city'],
            'state_id' => $billing_address['state'],
            'country_id' => $billing_address['country'],
        ];

        // Subscriber History Data
        $data['user_id'] = Auth::user()->id;
        $data['first_name'] = Auth::user()->first_name;
        $data['last_name'] = Auth::user()->last_name;
        $data['email'] = Auth::user()->email;
        $data['phone'] = Auth::user()->phone;
        $data['user_type'] = Auth::user()->user_type;
        $data['subscription_id'] =  $select_plan_check['subscription_id'];
        $data['subscription_title'] = $subscription->subscription_title;
        $data['subscription_description'] = $subscription->subscription_description;
        $data['trial_type'] = $subscription->trial_type;
        $data['status'] = $subscription->status;
        $data['trial_days'] = $subscription->trial_days; //null
        $data['monthly_price'] =  $select_plan_check['monthly'];
        $data['yearly_price'] = $select_plan_check['yearly'];
        $data['address'] = $billing_address['street'];
        $data['postal_code'] = $billing_address['postal_code'];
        $data['city_name'] = City::where("state_id", $billing_address['state'])->findOrFail($billing_address['city'])->name;
        $data['state_name'] = State::where("country_id", $billing_address['country'])->findOrFail($billing_address['state'])->name;
        $data['country_name'] = Country::findOrFail($billing_address['country'])->name;
        $data['discounted_monthly_price_type'] = $subscription->discounted_monthly_price_type;
        $data['discounted_yearly_price_type'] = $subscription->discounted_yearly_price_type;
        $data['discounted_monthly_price'] = $subscription->discounted_monthly_price;
        $data['discounted_yearly_price'] = $subscription->discounted_yearly_price;
        $data['maximum_property'] = $subscription->maximum_property;
        $data['maximum_shift'] = $subscription->maximum_shift;
        $data['maximum_checkpoint'] = $subscription->maximum_checkpoint;
        $data['maximum_guards'] = $subscription->maximum_guards;
        $data['messenger'] = $subscription->messenger;

        if ($select_plan_check['monthlyOrYearly'] == "1") {
            // Monthly Plan
            $data['monthly_plan'] = 1;
            $data['yearly_plan'] = 0;
        } else {
            // Annually Plan
            $data['monthly_plan'] = 0;
            $data['yearly_plan'] = 1;
        }

        // Create Subscriber
        Subscriber::create($data);

        // Create SubscriberHistory
        SubscriberHistory::create($data);

        // Clear session data
        Session::forget('select_plan_check');
        Session::forget('billing_address');

        // Mail
        $email = Auth::user()->email;
        $first_name = Auth::user()->first_name;
        $last_name = Auth::user()->last_name;
        $phone  = Auth::user()->phone;
        $last_entry = Subscriber::orderBy('updated_at', 'desc')->first();
        $subscription_title = $subscription->subscription_title;

        // Confirmaton Mail
        app('App\Http\Controllers\SubscribtionConfirmationController')->index($email, $first_name, $last_name, $last_entry, $subscription_title);

        // SMS Notification
        // app('App\Http\Controllers\SmsController')->index($phone);

        return redirect()->route('property_owner.success');
        // return view('pages/property_owner/auth/completed', compact('first_name'));
    }

    // public function strip_old()
    // {
    //     $select_plan_check = Session::get('select_plan_check');

    //     if ($select_plan_check['monthlyOrYearly'] == "1") {
    //         // return "Monthly Plan";
    //         $subscription_name = Subscription::findOrFail($select_plan_check['subscription_id'])->subscription_title;
    //         $plan_name = "Monthly Plan";
    //         $price = $select_plan_check['monthly'];
    //         return view(
    //             'pages.property_owner.auth.stripe',
    //             compact('subscription_name', 'plan_name', 'price')
    //         );
    //     } else {
    //         // return "Annualy Plan";
    //         $subscription_name = Subscription::findOrFail($select_plan_check['subscription_id'])->subscription_title;
    //         $plan_name = "Annualy Plan";
    //         $price = $select_plan_check['yearly'];
    //         return view(
    //             'pages.property_owner.auth.stripe',
    //             compact('subscription_name', 'plan_name', 'price')
    //         );
    //     }
    // }

    // public function stripePost_old(Request $request)
    // {
    //     $billing_address = Session::get('billing_address');

    //     Stripe::setApiKey(env('STRIPE_SECRET'));
    //     Charge::create([
    //         "amount" => $request->payment_amount  * 100,
    //         "currency" => "usd",
    //         "source" => $request->stripeToken,
    //         "description" => "Test payment from Aman Prasad."
    //     ]);

    //     $select_plan_check = Session::get('select_plan_check');
    //     if ($select_plan_check['monthlyOrYearly'] == "1") {
    //         // return "Monthly Plan"

    //         // Subscriber Table
    //         $billing_address = Session::get('billing_address');
    //         $data['monthly_plan'] = 1;
    //         $data['yearly_plan'] = 0;
    //         $data['subscription_id'] = $select_plan_check['subscription_id'];
    //         $data['user_id'] = $billing_address['user_id'];
    //         $data['monthly_price'] = $select_plan_check['monthly'];
    //         $data['yearly_price'] = $select_plan_check['yearly'];
    //         $data['address'] = $billing_address['street'];
    //         $data['postal_code'] = $billing_address['postal_code'];
    //         $data['city_id'] = $billing_address['city'];
    //         $data['state_id'] = $billing_address['state'];
    //         $data['country_id'] = $billing_address['country'];
    //         $modal = Subscriber::create($data);

    //         // Subscriber History Table
    //         $subscription = Subscription::where('id', $select_plan_check['subscription_id'])->first();
    //         $countries = Country::where("id", $billing_address['country'])->first();
    //         $states = State::where("country_id", $billing_address['country'])
    //             ->where("id", $billing_address['state'])
    //             ->first();
    //         $cities = City::where("state_id", $billing_address['state'])
    //             ->where("id", $billing_address['city'])
    //             ->first();

    //         $data['first_name'] = Auth::user()->first_name;
    //         $data['last_name'] = Auth::user()->last_name;
    //         $data['email'] = Auth::user()->email;
    //         $data['phone'] = Auth::user()->phone;
    //         $data['user_type'] = Auth::user()->user_type;
    //         $data['subscription_id'] =  $select_plan_check['subscription_id'];
    //         $data['subscription_title'] = $subscription->subscription_title;
    //         $data['subscription_description'] = $subscription->subscription_description;
    //         $data['trial_type'] = $subscription->trial_type;
    //         $data['status'] = $subscription->status;
    //         // $data['trial_days'] = 0;
    //         $data['trial_days'] = $subscription->trial_days;
    //         $data['monthly_plan'] = 1;
    //         $data['monthly_price'] = $subscription->yearly_price;
    //         $data['discounted_monthly_price_type'] = $subscription->discounted_monthly_price_type;
    //         $data['discounted_monthly_price'] = $subscription->discounted_monthly_price;
    //         $data['yearly_plan'] =  0;
    //         $data['discounted_yearly_price_type'] = $subscription->discounted_yearly_price_type;
    //         $data['discounted_yearly_price'] = $subscription->discounted_yearly_price;
    //         $data['maximum_property'] = $subscription->maximum_property;
    //         $data['maximum_shift'] = $subscription->maximum_shift;
    //         $data['maximum_checkpoint'] = $subscription->maximum_checkpoint;
    //         $data['maximum_guards'] = $subscription->maximum_guards;
    //         $data['messenger'] = $subscription->messenger;
    //         $data['address'] = $billing_address['street'];
    //         $data['postal_code'] = $billing_address['postal_code'];
    //         $data['city_name'] = $cities->name;
    //         $data['state_name'] = $states->name;
    //         $data['country_name'] = $countries->name;
    //         $modal1 = SubscriberHistory::create($data);

    //         Session::flush('select_plan_check');
    //         Session::flush('billing_address');

    //         Session::flash('success', 'Payment successful!');
    //         return back();
    //     } else {
    //         // return "Annualy Plan"

    //         // Subscriber Table
    //         $billing_address = Session::get('billing_address');
    //         $data['yearly_plan'] = 1;
    //         $data['monthly_plan'] = 0;
    //         $data['subscription_id'] = $select_plan_check['subscription_id'];
    //         $data['user_id'] =  $billing_address['user_id'];
    //         $data['monthly_price'] = $select_plan_check['monthly'];
    //         $data['yearly_price'] = $select_plan_check['yearly'];
    //         $data['address'] = $billing_address['street'];
    //         $data['postal_code'] = $billing_address['postal_code'];
    //         $data['city_id'] = $billing_address['city'];
    //         $data['state_id'] = $billing_address['state'];
    //         $data['country_id'] = $billing_address['country'];
    //         $modal = Subscriber::create($data);

    //         // Subscriber History Table
    //         $subscription = Subscription::where('id', $select_plan_check['subscription_id'])->first();
    //         $countries = Country::where("id", $billing_address['country'])->first();
    //         $states = State::where("country_id", $billing_address['country'])
    //             ->where("id", $billing_address['state'])
    //             ->first();
    //         $cities = City::where("state_id", $billing_address['state'])
    //             ->where("id", $billing_address['city'])
    //             ->first();

    //         $data['first_name'] = Auth::user()->first_name;
    //         $data['last_name'] = Auth::user()->last_name;
    //         $data['email'] = Auth::user()->email;
    //         $data['phone'] = Auth::user()->phone;
    //         $data['user_type'] = Auth::user()->user_type;
    //         $data['subscription_id'] =  $select_plan_check['subscription_id'];
    //         $data['subscription_title'] = $subscription->subscription_title;
    //         $data['subscription_description'] = $subscription->subscription_description;
    //         $data['trial_type'] = $subscription->trial_type;
    //         $data['status'] = $subscription->status;
    //         $data['trial_days'] = $subscription->trial_days;
    //         $data['monthly_plan'] = 0;
    //         $data['monthly_price'] = $subscription->yearly_price;
    //         $data['discounted_monthly_price_type'] = $subscription->discounted_monthly_price_type;
    //         $data['discounted_monthly_price'] = $subscription->discounted_monthly_price;
    //         $data['yearly_plan'] =  1;
    //         $data['discounted_yearly_price_type'] = $subscription->discounted_yearly_price_type;
    //         $data['discounted_yearly_price'] = $subscription->discounted_yearly_price;
    //         $data['maximum_property'] = $subscription->maximum_property;
    //         $data['maximum_shift'] = $subscription->maximum_shift;
    //         $data['maximum_checkpoint'] = $subscription->maximum_checkpoint;
    //         $data['maximum_guards'] = $subscription->maximum_guards;
    //         $data['messenger'] = $subscription->messenger;
    //         $data['address'] = $billing_address['street'];
    //         $data['postal_code'] = $billing_address['postal_code'];
    //         $data['city_name'] = $cities->name;
    //         $data['state_name'] = $states->name;
    //         $data['country_name'] = $countries->name;
    //         $modal1 = SubscriberHistory::create($data);
    //         Session::flush('select_plan_check');
    //         Session::flush('billing_address');
    //         Session::flash('success', 'Payment successful!');
    //         return back();
    //     }
    // }

    public function success()
    {
        return view('pages/property_owner/auth/completed');
    }
}

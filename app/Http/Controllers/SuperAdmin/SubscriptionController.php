<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use App\Models\SuperAdmin\Subscription;
use Illuminate\Support\Facades\Validator;

class SubscriptionController extends Controller
{
    public function add()
    {
        return view('pages.super_admin.subscription.add-subscription');
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'avatar' => 'required',
                'subscription_title' => 'required|unique:subscriptions,subscription_title',
                'maximum_property' => 'required',
                'maximum_shift' => 'required',
                'maximum_checkpoint' => 'required',
                'maximum_guards' => 'required',
                'messenger' => 'required',

            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', 'Please Check the Form.');
            }
            $data['subscription_title'] = $request->subscription_title;
            $data['subscription_description'] = $request->subscription_description;
            $data['trial_type'] = $request->trial_type;
            $data['trial_days'] = $request->trial_days;
            $data['monthly_price'] = $request->monthly_price;
            $data['yearly_price'] = $request->yearly_price;
            $data['discounted_monthly_price_type'] = $request->discounted_monthly_price_type;
            $data['discounted_monthly_price'] = $request->discounted_monthly_price;
            $data['discounted_yearly_price_type'] = $request->discounted_yearly_price_type;
            $data['discounted_yearly_price'] = $request->discounted_yearly_price;
            $data['maximum_property'] = $request->maximum_property;
            $data['maximum_shift'] = $request->maximum_shift;
            $data['maximum_checkpoint'] = $request->maximum_checkpoint;
            $data['maximum_guards'] = $request->maximum_guards;
            $data['messenger'] = $request->messenger;
            $data['status'] = (!empty($request->status) ? $request->status : '0');
            // $data['created_by'] = Auth::user()->id;
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path("/uploads/subscription"), $fileName);
                $data['avatar'] = $fileName;
            }
            $modal = Subscription::create($data);
            return redirect()->route('superadmin.subscription.all');
        } catch (\Exception $e) {
            return back()->with('error', '' . $e->getMessage());
        }
    }

    public function all()
    {
        $data['subscriptions'] = Subscription::all();
        return view('pages.super_admin.subscription.all-subscription', $data);
    }
    public function edit(Request $request)
    {
        $id = $request->id;
        $data['editData'] = Subscription::findOrFail($id);
        // dd($data['editData']);
        return view('pages.super_admin.subscription.edit-subscription', $data);
    }
    public function update(Request $request)
    {
        $id = $request->id;
        try {
            $validator = Validator::make($request->all(), [
                // 'avatar' => 'required',
                'subscription_title' => 'required|unique:subscriptions,subscription_title,' . $request->id,
                'maximum_property' => 'required',
                'maximum_shift' => 'required',
                'maximum_checkpoint' => 'required',
                'maximum_guards' => 'required',
                'messenger' => 'required',

            ]);
            if ($validator->fails()) {
                return back()
                    ->withErrors($validator)
                    ->withInput()
                    ->with('error', 'Please Check the Form.');
            }
            $data['subscription_title'] = $request->subscription_title;
            $data['subscription_description'] = $request->subscription_description;
            $data['trial_type'] = $request->trial_type;
            if ($request->trial_type === '0') {
                $data['monthly_price'] = $request->monthly_price;
                $data['yearly_price'] = $request->yearly_price;
                $data['discounted_monthly_price_type'] = $request->discounted_monthly_price_type;
                $data['discounted_monthly_price'] = $request->discounted_monthly_price;
                $data['discounted_yearly_price_type'] = $request->discounted_yearly_price_type;
                $data['discounted_yearly_price'] = $request->discounted_yearly_price;
            } else {
                $data['monthly_price'] = null;
                $data['yearly_price'] = null;
                $data['discounted_monthly_price_type'] = null;
                $data['discounted_monthly_price'] = null;
                $data['discounted_yearly_price_type'] = null;
                $data['discounted_yearly_price'] = null;
            }
            $data['trial_days'] = $request->trial_days;
            $data['maximum_property'] = $request->maximum_property;
            $data['maximum_shift'] = $request->maximum_shift;
            $data['maximum_checkpoint'] = $request->maximum_checkpoint;
            $data['maximum_guards'] = $request->maximum_guards;
            $data['messenger'] = $request->messenger;
            $data['status'] = (!empty($request->status) ? $request->status : '0');
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path("uploads/subscription"), $fileName);
                $data['avatar'] = $fileName;
                if (File::exists(public_path("/uploads/subscription/" . $request->avatar_remove))) {
                    File::delete(public_path("/uploads/subscription/" . $request->avatar_remove));
                }
            }
            $model = Subscription::where('id', $id)->update($data);

            return redirect()->route('superadmin.subscription.all');
        } catch (\Exception $e) {
            return back()->with('error', '' . $e->getMessage());
        }
    }
    public function delete(Request $request)
    {
        $id = $request->id;
        $model = Subscription::find($id);
        if (File::exists(public_path("/uploads/subscription/" . $model->avatar))) {
            File::delete(public_path("/uploads/subscription/" . $model->avatar));
        }
        $model->delete();
        return response()->json('success');
    }
    public function status(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $model = Subscription::find($id);
        $model->status = $status;
        $model->save();
        return response()->json('success');
    }
}

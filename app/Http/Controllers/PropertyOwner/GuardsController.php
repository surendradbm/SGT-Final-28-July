<?php

namespace App\Http\Controllers\PropertyOwner;

use Carbon\Carbon;
use App\Models\City;
use App\Models\State;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\SuperAdmin\Guards;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class GuardsController extends Controller
{
    public function all()
    {
        $guards = Guards::where('property_owner_id', auth()->user()->id)->latest()->get();
        return view('pages.property_owner.guards.guards-list', compact('guards'));
    }

    public function add()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('pages.property_owner.guards.add-guard', $data);
    }

    public function view(Request $request)
    {
        $id = $request->id;
        $guards = Guards::findOrFail($id);
        $states = State::all();
        $cities = City::all();
        $data['countries'] = Country::get(["name", "id"]);
        return view('pages.property_owner.guards.view-guard', $data,  compact('guards', 'states', 'cities'));
    }

    public function store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            'avatar' => 'required',
            'name' => 'required',
            'guard_position' => 'required',
            'gender' => 'required',
            'birth_date' => 'required',
            'phone' => 'required|numeric',
            'country' => 'required|numeric',
            'state' => 'required|numeric',
            'city' => 'required|numeric',
            'street' => 'required',
            'zip_code' => 'required|numeric',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'front_side' => 'required',
            'back_side' => 'required',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please Check the Form.');
        }
        $data['property_owner_id'] = auth()->user()->id;
        $data['name'] = $request->name;
        $data['status'] = 1;
        // $data['status'] = $request->status;
        $data['guard_position'] = $request->guard_position;
        $data['gender'] = $request->gender;
        $data['date_of_birth'] = Carbon::createFromFormat('d-m-Y', $request->birth_date)->format('Y-m-d');
        $data['contact_number'] = $request->phone;
        $data['country'] = $request->country;
        $data['state'] = $request->state;
        $data['city'] = $request->city;
        $data['street'] = $request->street;
        $data['zip_code'] = $request->zip_code;
        $data['email_address'] = $request->email;
        $data['password'] = Hash::make($request->password);
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads/profile_pictures"), $fileName);
            $data['avatar'] = $fileName;
        }
        if ($request->hasFile('front_side')) {
            $image = $request->file('front_side');
            $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads/profile_pictures"), $fileName);
            $data['front_side_id_card'] = $fileName;
        }
        if ($request->hasFile('back_side')) {
            $image = $request->file('back_side');
            $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads/profile_pictures"), $fileName);
            $data['back_side_id_card'] = $fileName;
        }
        $modal = Guards::create($data);
        return redirect()->route('property_owner.guards.all');
    }

    public function status(Request $request)
    {
        $id = $request->id;
        $status = $request->status;
        $model = Guards::find($id);
        $model->status = $status;
        $model->save();
        return response()->json('success');
    }

    public function edit(Request $request)
    {
        $id = $request->id;
        $guards = Guards::findOrFail($id);
        $states = State::all();
        $cities = City::all();
        $data['countries'] = Country::get(["name", "id"]);
        return view('pages.property_owner.guards.edit-guard', $data,  compact('guards', 'states', 'cities'));
    }

    public function update(Request $request)
    {
        // return $request->all();
        $id = $request->id;
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            // 'name' => 'required|unique:guards,name,' . $request->id,
            'guard_position' => 'required',
            'gender' => 'required',
            'date_of_birth' => 'required',
            'contact_number' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'street' => 'required|string|max:255',
            'zip_code' => 'required',
            'email_address' => 'required|email|max:255',
            'password' => 'required',

        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please Check the Form.');
        }
        $user = Guards::find($id);
        // return $user;
        $data = [
            'status' => $request->status,
            'name' => $request->name,
            'guard_position' => $request->guard_position,
            'gender' => $request->gender,
            'date_of_birth' => $request->date_of_birth,
            // 'date_of_birth' => Carbon::createFromFormat('d-m-Y', $request->birth_date)->format('Y-m-d'),
            'contact_number' => $request->contact_number,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'street' => $request->street,
            'zip_code' => $request->zip_code,
            'email_address' => $request->email_address,
            'property_owner_id' => auth()->user()->id,
        ];
        // if (Hash::check(trim($request->password), trim($user->password))) {
        //     return "Password matching";
        // } else {
        //     return  "Password is not matching";
        // }
        if ($request->hasFile('avatar')) {
            $image = $request->file('avatar');
            $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads/profile_pictures"), $fileName);
            $data['avatar'] = $fileName;
            if (File::exists(public_path("/uploads/profile_pictures/" . $request->avatar_remove))) {
                File::delete(public_path("/uploads/profile_pictures/" . $request->avatar_remove));
            }
        }
        if ($request->hasFile('front_side_id_card')) {
            $image = $request->file('front_side_id_card');
            $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads/profile_pictures"), $fileName);
            $data['front_side_id_card'] = $fileName;
            if (File::exists(public_path("/uploads/profile_pictures/" . $request->avatar_remove))) {
                File::delete(public_path("/uploads/profile_pictures/" . $request->avatar_remove));
            }
        }
        if ($request->hasFile('back_side_id_card')) {
            $image = $request->file('back_side_id_card');
            $fileName = date('dmy') . time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path("/uploads/profile_pictures"), $fileName);
            $data['back_side_id_card'] = $fileName;
            if (File::exists(public_path("/uploads/profile_pictures/" . $request->avatar_remove))) {
                File::delete(public_path("/uploads/profile_pictures/" . $request->avatar_remove));
            }
        }
        $model = Guards::where('id', $id)->update($data);
        return redirect()->route('property_owner.guards.all');
    }

    public function delete(Request $request)
    {
        $id = $request->id;
        $model = Guards::find($id);
        if (File::exists(public_path("/uploads/profile_pictures/" . $model->avatar))) {
            File::delete(public_path("/uploads/profile_pictures/" . $model->avatar));
        }
        $model->delete();
        return response()->json('success');
    }
}
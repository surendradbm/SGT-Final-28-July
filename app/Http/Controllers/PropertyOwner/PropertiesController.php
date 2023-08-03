<?php

namespace App\Http\Controllers\PropertyOwner;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PropertyOwner\Property;
use Illuminate\Support\Facades\Validator;

class PropertiesController extends Controller
{
    public function all()
    {
        $properties_latest = Property::where('property_owner_id', auth()->user()->id)->latest()->take(3)->get();
        $properties = Property::where('property_owner_id', auth()->user()->id)->latest()->get();
        return $properties_latest;
        return $properties;


        return view('pages.property_owner.properties.all-properties');
    }

    public function properties_index()
    {
        $data['countries'] = Country::get(["name", "id"]);
        return view('pages.property_owner.properties.create-property', $data);
    }

    public function properties_store(Request $request)
    {
        // return $request->all();
        $validator = Validator::make($request->all(), [
            // 'avatar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string|max:255',
            'type' => 'required|in:1,2,3,4,5,6,7,8,9',
            'area' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'contact_name_1' => 'required|string|max:255',
            'contact_number_1' => 'required|string|max:20',
            'property_description' => 'required|string|max:1000',
            'location' => 'required|string|max:255',
            'longitude' => 'required|numeric',
            'latitude' => 'required|numeric',
        ]);
        if ($validator->fails()) {
            return back()
                ->withErrors($validator)
                ->withInput()
                ->with('error', 'Please Check the Form.');
        }
        $data['property_owner_id'] = auth()->user()->id;
        $data['name'] = $request->name;
        $data['type'] = $request->type;
        $data['area'] = $request->area;
        $data['country'] = $request->country;
        $data['state'] = $request->state;
        $data['city'] = $request->city;
        $data['contact_name_1'] = $request->contact_name_1;
        $data['contact_number_1'] = $request->contact_number_1;
        $data['contact_name_2'] = isset($request->contact_name_2) ? ($request->contact_name_2) : 0;
        $data['contact_number_2'] = isset($request->contact_number_2) ? ($request->contact_number_2) : 0;
        $data['contact_name_3'] = isset($request->contact_name_3) ? ($request->contact_name_3) : 0;
        $data['contact_number_3'] = isset($request->contact_number_3) ? ($request->contact_number_3) : 0;
        $data['contact_name_4'] = isset($request->contact_name_4) ? ($request->contact_name_4) : 0;
        $data['contact_number_4'] = isset($request->contact_number_4) ? ($request->contact_number_4) : 0;
        $data['contact_name_5'] = isset($request->contact_name_5) ? ($request->contact_name_5) : 0;
        $data['contact_number_5'] = isset($request->contact_number_5) ? ($request->contact_number_5) : 0;
        $data['property_description'] = $request->property_description;
        $data['location'] = $request->location;
        $data['longitude'] = $request->latitude;
        $data['latitude'] = $request->longitude;
        $data['status'] = '1';
        $modal = Property::create($data);
        return redirect()->route('property_owner.properties.shift');
    }

    public function shift()
    {
        return view('pages.property_owner.properties.create-shift');
    }

    public function checkpoints()
    {
        return view('pages.property_owner.properties.checkpoints');
    }

    public function morningShift()
    {
        return view('pages.property_owner.properties.checkpoint-morning-shift');
    }

    public function routes()
    {
        return view('pages.property_owner.properties.routes');
    }

    public function assignGuards()
    {
        return view('pages.property_owner.properties.assign-guards');
    }
}

<?php

namespace App\Models\PropertyOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'avatar',
        'name',
        'type',
        'area',
        'country',
        'state',
        'city',
        'contact_name_1',
        'contact_number_1',
        'contact_name_2',
        'contact_number_2',
        'contact_name_3',
        'contact_number_3',
        'contact_name_4',
        'contact_number_4',
        'contact_name_5',
        'contact_number_5',
        'property_description',
        'location',
        'longitude',
        'latitude',
        'property_owner_id',
        'status',
    ];
}

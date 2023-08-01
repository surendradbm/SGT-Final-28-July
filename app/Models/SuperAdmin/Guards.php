<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guards extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'avatar',
        'property_owner_id',
        'email_address',
        'password',
        'guard_position',
        'gender',
        'date_of_birth',
        'contact_number',
        'street',
        'city',
        'state',
        'status',
        'country',
        'zip_code',
        'front_side_id_card',
        'back_side_id_card',
    ];
}

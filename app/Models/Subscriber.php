<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscriber extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'subscription_id',
        'monthly_plan',
        'monthly_price',
        'yearly_plan',
        'yearly_price',
        'address',
        'postal_code',
        'city_id',
        'state_id',
        'country_id',
    ];
}

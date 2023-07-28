<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriberHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'user_type',
        'subscription_id',
        'subscription_title',
        'subscription_description',
        'trial_type',
        'status',
        'trial_days',
        'monthly_plan',
        'monthly_price',
        'discounted_monthly_price_type',
        'discounted_monthly_price',
        'yearly_plan',
        'discounted_yearly_price_type',
        'discounted_yearly_price',
        'maximum_property',
        'maximum_shift',
        'maximum_checkpoint',
        'maximum_guards',
        'messenger',
        'address',
        'postal_code',
        'city_name',
        'state_name',
        'country_name',
    ];
}

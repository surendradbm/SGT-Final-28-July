<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'status',
        'subscription_title',
        'subscription_description',
        'trial_type',
        'trial_days',
        'monthly_price',
        'yearly_price',
        'discounted_monthly_price_type',
        'discounted_yearly_price_type',
        'discounted_monthly_price',
        'discounted_yearly_price',
        'maximum_property',
        'maximum_shift',
        'maximum_checkpoint',
        'maximum_guards',
        'messenger',
        // 'created_by',
    ];
}
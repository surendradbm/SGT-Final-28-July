<?php

namespace App\Models\SuperAdmin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'subscription_title',
        'subscription_description',
        'free_trial',
        'trial_days',
        'monthly_price',
        'yearly_price',
        'discounted_monthly_price',
        'discounted_yearly_price',
        'maximum_property',
        'maximum_shift',
        'maximum_checkpoint',
        'maximum_guards',
        'messenger',
    ];
}

<?php

namespace App\Models\PropertyOwner;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyDetail extends Model
{
    use HasFactory;

    protected $table = 'company_details';

    protected $fillable = [
        'company_name',
        'address',
        'city',
        'state',
        'country',
        'federal_ein',
        'postal_code',
        'bsis_number',
        'user_id',
    ];

}

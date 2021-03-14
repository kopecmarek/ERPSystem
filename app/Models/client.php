<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'company_name',
        'email',
        'address' => [
            'town',
            'street',
            'house_number',
            'apartment_number',
            'zip_code',
        ],
        'phone_number',
    ];
}

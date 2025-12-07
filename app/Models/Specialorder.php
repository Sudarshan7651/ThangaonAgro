<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialorder extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
    'business_name',
    'contact',
    'requirements',
    'quantity',
    'delivery_location',
];

}

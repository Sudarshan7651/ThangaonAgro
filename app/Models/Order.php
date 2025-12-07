<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $fillable = [
    'businessname',
    'contact',
    'delivery_location',
    'status',
    'admin_id',
    'vegetable_id',
];

}

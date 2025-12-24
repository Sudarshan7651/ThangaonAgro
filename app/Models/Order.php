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
    'invoice',
];

    // Relationship to User (trader)
    public function trader()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }

    // Relationship to Vegetable
    public function vegetable()
    {
        return $this->belongsTo(Addnewvegetable::class, 'vegetable_id', 'vegetable_id');
    }
}

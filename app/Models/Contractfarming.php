<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contractfarming extends Model
{

    public $timestamps=true;
    // Table uses `vegetable_id` as primary key
    protected $primaryKey = 'vegetable_id';

   protected $fillable=[
    'businessname',
    'contact',
    'togrow',
    'duration',
    'monthlysupply',
   ];

}
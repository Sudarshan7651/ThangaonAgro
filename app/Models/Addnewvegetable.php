<?php

namespace App\Models;
use App\Models\VegetableImage;
use Illuminate\Database\Eloquent\Model;

class Addnewvegetable extends Model
{

    public $timestamps=true;
    // Table uses `vegetable_id` as primary key
    protected $primaryKey = 'vegetable_id';

    public function images()
    {
        return $this->hasMany(VegetableImage::class, 'vegetable_id');
    }


   protected $fillable=[
    'name',
    'price',
    'quantity',
    'image',
    'admin_id',
   ];

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";

    protected $fillable = [
        'name',	'slug',	'details','price',
        'shipping_cost','description','category_id','brand_id',	'image_path','stock','code'
    ];
}

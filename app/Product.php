<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table="products";

    protected $fillable = [
        'name',	'details','price',
        'shipping_cost','category_id','image_path','stock','code'
    ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{

    protected $table='products';
    protected $fillable=[
                        'product_name',
                        'product_image',
                        'product_description',
                        'product_price',
                        'product_quantity',
                        'product_total_price',
                        'category_id',
                        ];


    public function products(){
        return $this->belongsTo('App\category','category_id','id');
    }
}

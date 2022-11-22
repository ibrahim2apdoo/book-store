<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static find($id)
 * @method static where(string $string, $id)
 * @method static create(array $data)
 * @method static orderBy(string $string, string $string1)
 */
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

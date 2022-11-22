<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static orderBy(string $string, string $string1)
 * @method static create(array $data)
 * @method static find($id)
 * @method static where(string $string, $id)
 */
class category extends Model
{
    protected $table='categories';
    protected $fillable=[
                         'category_name',
                        'category_image',
                        'category_description',
                        'added_by',
                         ];
    public function products(){
        return $this->hasMany('App\product','category_id','id');
    }

    public function categories(){
        return $this->belongsTo('App\User','added_by','id');
    }
}

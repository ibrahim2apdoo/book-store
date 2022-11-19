<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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

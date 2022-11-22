<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @method static create(array $data)
 */
class Contact extends Model
{
    protected $table='contacts';
    protected $fillable=[
        'contact_id',
        'contact_name',
        'contact_email',
        'contact_subject',
        'contact_massage',
        'view',
    ];
    public function contacts(){
        return $this->belongsTo('App\Users','contact_id','id');
    }
}

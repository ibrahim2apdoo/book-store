<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_Us extends Model
{
   protected $table='about__us';
   protected $fillable=[

                 'siteName',
                 'sitDescription',
                 'sitImage',
                 'facebook',
                 'tweeter',
                 'linkin',


   ];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taxi extends Model
{
    protected $table = 'taxis';
    protected $fillable = [
      'taxi_name',
      'taxi_price',
      'taxi_desc',
    ];

    
}

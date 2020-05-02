<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trayek extends Model
{
    protected $table ='trayeks';
    protected $fillable = [
        'trayek_name',
        'trayek_price',
        'trayek_desc',
        'gambar',   
    ];

    
    public function index(){
        return Trayek::all();
    }
    
}

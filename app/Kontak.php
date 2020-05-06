<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kontak extends Model
{
    protected $table = 'kontaks';
    protected $fillable = [
        'jenis',
        'nama',
        'nomor',
    ];

    public function jeniskon(){
        return $this->hasone('App/Kontak');
    }
}

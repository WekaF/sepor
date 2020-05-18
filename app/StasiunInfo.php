<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StasiunInfo extends Model
{
    protected $table = 'stasiun_informasi';
    protected $fillable = [
        'nama_denah',
        'gambar',
        'deskripsi',
    ];

    public function index(){
        return StasiunInfo::all();
    }
}

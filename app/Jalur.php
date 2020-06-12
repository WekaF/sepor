<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    protected $table = 'jalurs';
    protected $fillable = [
        'nama_jalur',
        'gambar',
        'deskripsi'
    ];

    public function jalur()
    {
    	return $this->belongsTo(DetailKA::class);
    }
    public function index(){
        return Jalur::all();
    }
}

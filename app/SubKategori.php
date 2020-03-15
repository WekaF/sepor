<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{

    protected $table = 'subkategori';
    protected $fillable = [
        'nama_subkat',
        'Deskrip',
        'long',
        'lat',
        'gambar',
        'no_telp',
        'kategori_id',      
    ];
    
    public function subkategori()
    {
    	return $this->hasMany(SubKategori::class);
    }
    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
    public function index(){
        return SubKategori::all();
    }
}

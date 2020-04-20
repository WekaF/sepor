<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = ['nama_kategori'];
    
    public function kategori()
    {
    	return $this->hasMany(kategori::class);
    }
    public function index(){
        return Kategori::all();
    }
    public function subkategori(){
        return $this->hasMany(SubKategori::class);
    }
}

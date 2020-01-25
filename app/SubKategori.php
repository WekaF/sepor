<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubKategori extends Model
{
    protected $table = 'subkategori';
    protected $fillable = ['nama_subkat','Deskrip','long','lat','kategori_id'];
    
    public function subkategori()
    {
    	return $this->hasMany(subkategori::class);
    }
    public function kategori(){
        return $this->belongsTo('App\Kategori');
    }
}

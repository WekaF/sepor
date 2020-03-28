<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jalur extends Model
{
    protected $table = 'jalurs';
    protected $fillable = ['jalur','deskripsi','gambar'];

    public function jalur()
    {
    	return $this->hasMany(Jalur::class);
    }
    public function index(){
        return Jalur::all();
    }
}

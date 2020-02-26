<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JenisKA extends Model
{
    protected $table = 'jeniskeretas';
    protected $fillable = ['jenis_kereta'];

    public function jenis()
    {
    	return $this->hasMany(JenisKA::class);
    }
    public function index(){
        return JenisKA::all();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailKA extends Model
{
    protected $table = 'detkeretas';
    protected $fillable = [
        'nama_kereta',
        'no_ka',
        'jam',
        'kelaska',
        'relasi',
        'progres_stasiun',
        'jenis_id',
        'keterangan',
        'gambar_jalur'
    ];
    
    public function detail()
    {
    	return $this->hasMany(DetailKA::class);
    }
    public function jenis(){
        return $this->belongsTo(JenisKA::class);
    }
    public function index(){
        return DetailKA::all();
    }
    public function jalur(){
        return $this->belongsTo(Jalur::class);
    }
}

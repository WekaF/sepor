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
        'jalur_id'
    ];
    public function jenis(){
        return $this->belongsTo(JenisKA::class,'jenis_id');
    }
    public function index(){
        return DetailKA::all();
    }
    public function jalur(){
        return $this->belongsTo(JalurKA::class,'jalur_id');
    }

}

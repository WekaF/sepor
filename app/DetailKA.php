<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailKA extends Model
{
    protected $table = 'detkeretas';
    protected $fillable = ['nama_kereta','no_ka','jam','jalur','progres_stasiun','jenis_id','keterangan'];
    
    public function detail()
    {
    	return $this->hasMany(DetailKA::class);
    }
    public function jenis(){
        return $this->belongsTo('App\JenisKA');
    }
    public function index(){
        return DetailKA::all();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StasiunInfo extends Model
{
<<<<<<< HEAD
    protected $table = 'stasiun_infos';
    protected $fillable = [
        'denah_stasiun',
        'prosedur_evakuasi',
        'peta_jaringan',
        'denah_evakuasi',
        'stand_komersil'
=======
    protected $table = 'stasiun_informasi';
    protected $fillable = [
        'nama_denah',
        'gambar',
        'deskripsi',
>>>>>>> fixing
    ];

    public function index(){
        return StasiunInfo::all();
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StasiunInfo extends Model
{
    protected $table = 'stasiun_infos';
    protected $fillable = [
        'denah_stasiun',
        'prosedur_evakuasi',
        'peta_jaringan',
        'denah_evakuasi',
        'stand_komersil'
    ];

    public function index(){
        return StasiunInfo::all();
    }
}

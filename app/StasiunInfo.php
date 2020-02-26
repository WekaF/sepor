<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StasiunInfo extends Model
{
    protected $table = 'stasiun_infos';
    protected $fillable = [
        'denah_stasiun',
        'denah_evakuasi',
        'peta_jaringan',
    ];

    public function index(){
        return StasiunInfo::all();
    }
}

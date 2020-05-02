<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'beritas';
    protected $fillable =
    [
        'judul',
        'isi',
        'gambar'
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}

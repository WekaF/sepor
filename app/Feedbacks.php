<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedbacks extends Model
{
    protected $table = 'feedbacks';
    protected $fillable = [
        'nama',
        'email',
        'saran',
    ];
}

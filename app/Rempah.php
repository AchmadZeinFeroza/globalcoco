<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rempah extends Model
{
    protected $table = 'rempah';
    protected $primaryKey = "id";
    protected $fillable = [
        'image'
    ];
}

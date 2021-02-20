<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefit extends Model
{
    protected $table = 'benefit';
    protected $primaryKey = "id";
    public $timestamps = false;
    protected $fillable = [
        'title', 'description','image'
    ];
}

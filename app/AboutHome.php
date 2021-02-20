<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutHome extends Model
{
    protected $table = 'abouthome';
    protected $primaryKey = null;
    public $incrementing = false;
    public $timestamps = false;
    protected $fillable = [
        'description', 'image'
    ];
}

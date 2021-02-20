<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    protected $table = 'thumbnail';
    protected $primaryKey = "id";
    protected $fillable = [
        'title', 'description', 'image'
    ];
}

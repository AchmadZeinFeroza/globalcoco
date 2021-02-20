<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
        'address','email', 'phone','fb','ig','twitter','map','yt'
    ];
}

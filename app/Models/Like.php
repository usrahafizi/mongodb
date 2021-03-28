<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Like extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'user_id',
    ];
    
}

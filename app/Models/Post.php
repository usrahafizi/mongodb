<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\Models\User;

class Post extends Eloquent
{
    use HasFactory;

    protected $connection = 'mongodb';

    protected $fillable = [
        'body',
    ];  
    
    public function likeBy(User $user){
        return $this->likes->contains('user_id', $user->id);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }
}

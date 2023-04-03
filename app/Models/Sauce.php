<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $fillable = ['userId', 'name', 'manufacturer', 'description', 'mainPepper', 'imageUrl', 'heat', 'likes', 'dislikes', 'usersLiked', 'usersDisliked'];

    public function user()
        {
        return $this->belongsTo('App\User');
        }

    public function like(){
        return $this->belongsToMany('App\User');
    }

    public function dislike(){
        return $this->belongsToMany('App\User');
    }
}

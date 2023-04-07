<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sauce extends Model
{
    use HasFactory;

    protected $fillable = ['userId', 'name', 'manufacturer', 'description', 'main_pepper', 'image_url', 'heat', 'likes', 'dislikes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function likes()
    {
        return $this->belongsToMany(User::class, 'sauce_likes', 'sauce_id', 'user_id');
    }

    public function dislikes()
    {
        return $this->belongsToMany(User::class, 'sauce_dislikes', 'sauce_id', 'user_id');
    }
}

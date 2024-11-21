<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description'];

    // Add relationship

    // Many to One with User class
    public function user() {
        return $this->belongsTo(User::class);
    }

    // One to Many with Comment class
    public function comments() {
        return $this->hasMany(Comment::class);
    }   
}

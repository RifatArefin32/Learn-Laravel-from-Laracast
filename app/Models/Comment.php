<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'user_id', 'post_id'];

    // Define relationships
    // Many to One with Post model
    public function post() {
        return $this->belongsTo(Post::class);
    }

    // Many to One with User model
    public function user() {
        return $this->belongsTo(User::class);
    }
}

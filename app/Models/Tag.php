<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    // Many to Many relationship with Job class
    public function jobs() {
        return $this->belongsToMany(Job::class, foreignPivotKey:"job_items_id");
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // table name
    protected $table = 'job_items';
    protected $fillable = ['title', 'description', 'location', 'salary'];
}

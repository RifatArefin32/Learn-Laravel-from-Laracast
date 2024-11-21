<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    // table name
    protected $table = 'job_items';
    protected $fillable = ['title', 'description', 'location', 'salary'];

    // Many to One relationship with Employer
    public function employer() {
        return $this->belongsTo(Employer::class);
    }
}

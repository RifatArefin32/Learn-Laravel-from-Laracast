<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

// jobs routes
Route::get('/jobs', function () {
    // lazy loading
    // $jobs = Job::all();
    
    // eager loading
    // $jobs = Job::with('employer')->get();
    
    // get data with pagination
    $jobs = Job::with('employer')->paginate(5);
    
    $context = [
        'jobs' => $jobs,
    ];

    return view('jobs.index', $context);
});

Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
    $context = [
        'job' => $job
    ];

    return view('jobs.show', $context);
});


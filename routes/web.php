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



// Section: jobs routes

// index
Route::get('/jobs', function () {
    // $jobs = Job::all();   // lazy loading
    // $jobs = Job::with('employer')->get();    // eager loading
    $jobs = Job::with('employer')->latest()->paginate(5); // get data with pagination
    
    $context = [
        'jobs' => $jobs,
    ];

    return view('jobs.index', $context);
});

// store a job
Route::post('/jobs', function() {
    // dd(request()->all());
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'description' => request(key: 'description'),
        'location' => request(key: 'location'),
        'salary' => request('salary'),
        'employer_id' => 1,
    ]);

    return redirect('/jobs');
});

// create a job
Route::get('/jobs/create', function() {
    return view('jobs.create');
});

// edit a job
Route::get('/jobs/{id}/edit', function($id) {
    $job = Job::find($id);
    $context = [
        'job' => $job
    ];

    return view('jobs.edit', $context);
});

// update a job
Route::patch('/jobs/{id}', function($id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize
    // update the job
    $job = Job::findOrFail ($id);
    $job->update([
        'title' => request('title'),
        'description' => request('description'),
        'location' => request('location'),
        'salary' => request('salary'),
        
    ]);

    return redirect('jobs/'.$job->id);
});

// show a job
Route::get('/jobs/{id}', function($id) {
    $job = Job::find($id);
    $context = [
        'job' => $job
    ];

    return view('jobs.show', $context);
});


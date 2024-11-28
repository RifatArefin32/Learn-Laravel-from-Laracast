<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\JobControllerRMB;
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

// // index
// Route::get('/jobs', function () {
//     // $jobs = Job::all();   // lazy loading
//     // $jobs = Job::with('employer')->get();    // eager loading
//     $jobs = Job::with('employer')->latest()->paginate(5); // get data with pagination
    
//     $context = [
//         'jobs' => $jobs,
//     ];

//     return view('jobs.index', $context);
// });

// // store a job
// Route::post('/jobs', function() {
//     // dd(request()->all());
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required']
//     ]);

//     Job::create([
//         'title' => request('title'),
//         'description' => request(key: 'description'),
//         'location' => request(key: 'location'),
//         'salary' => request('salary'),
//         'employer_id' => 1,
//     ]);

//     return redirect('/jobs');
// });

// // create a job
// Route::get('/jobs/create', function() {
//     return view('jobs.create');
// });

// // edit a job
// Route::get('/jobs/{id}/edit', function($id) {
//     $job = Job::find($id);
//     $context = [
//         'job' => $job
//     ];

//     return view('jobs.edit', $context);
// });

// // update a job
// Route::patch('/jobs/{id}', function($id) {
//     // validate
//     request()->validate([
//         'title' => ['required', 'min:3'],
//         'salary' => ['required']
//     ]);

//     // authorize
//     // update the job
//     $job = Job::findOrFail ($id);
//     $job->update([
//         'title' => request('title'),
//         'description' => request('description'),
//         'location' => request('location'),
//         'salary' => request('salary'),
        
//     ]);
//     // redirect
//     return redirect('jobs/'.$job->id);
// });

// // show a job
// Route::get('/jobs/{id}', function($id) {
//     $job = Job::find($id);
//     $context = [
//         'job' => $job
//     ];

//     return view('jobs.show', $context);
// });

// // Destroy a job
// Route::delete('/jobs/{id}', function($id){
//     $job = Job::findOrFail($id);
//     $job->delete();

//     return redirect('/jobs');
// });

// // Routes using controller
// Route::get('/jobs', [JobController::class, 'index']);
// Route::get('/jobs/create', [JobController::class, 'create']);
// Route::post('/jobs', [JobController::class, 'store']);
// Route::get('/jobs/{id}/edit', [JobController::class, 'edit']);
// Route::get('/jobs/{id}', [JobController::class, 'show']);
// Route::patch('/jobs/{id}', [JobController::class, 'update']);
// Route::delete('/jobs/{id}', [JobController::class, 'destroy']);


// Routes using controller and Route Model Binding
Route::get('/jobs', [JobControllerRMB::class, 'index']);
Route::get('/jobs/create', [JobControllerRMB::class, 'create']);
Route::post('/jobs', [JobControllerRMB::class, 'store']);
Route::get('/jobs/{job}/edit', [JobControllerRMB::class, 'edit']);
Route::get('/jobs/{job}', [JobControllerRMB::class, 'show']);
Route::patch('/jobs/{job}', [JobControllerRMB::class, 'update']);
Route::delete('/jobs/{job}', [JobControllerRMB::class, 'destroy']);
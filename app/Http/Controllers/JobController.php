<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    // show all jobs
    public function index()
    {
        $jobs = Job::with('employer')->latest()->paginate(5);
        $context = [
            'jobs' => $jobs,
        ];

        return view('jobs.index', $context);
    }

    // create a job
    public function create()
    {
        return view('jobs.create');
    }

    // store a job
    public function store()
    {
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
    }

    // show a job
    public function show($id)
    {
        $job = Job::find($id);
        $context = [
            'job' => $job
        ];

        return view('jobs.show', $context);
    }

    // edit a job
    public function edit($id)
    {
        $job = Job::find($id);
        $context = [
            'job' => $job
        ];

        return view('jobs.edit', $context);
    }

    // update a job
    public function update($id)
    {
        // validate
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        // authorize
        // update the job
        $job = Job::findOrFail($id);
        $job->update([
            'title' => request('title'),
            'description' => request('description'),
            'location' => request('location'),
            'salary' => request('salary'),

        ]);
        // redirect
        return redirect('jobs/' . $job->id);
    }

    // delete a job
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('/jobs');
    }
}

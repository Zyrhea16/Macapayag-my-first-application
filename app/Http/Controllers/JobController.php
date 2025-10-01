<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    // Show all jobs
    public function index()
    {
        $jobs = Job::with('employer')->paginate(10);
        return view('jobs.index', ['jobs' => $jobs]);
    }

    // Show form to create a new job
    public function create()
    {
        return view('jobs.create');
    }

    // Store a new job
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        Job::create([
            'title' => $validated['title'],
            'salary' => $validated['salary'],
            'employer_id' => 1,
        ]);

         return redirect()->route('jobs.index')
                     ->with('success', 'Job created successfully!');
    }

    // Show a single job
    public function show(Job $job)
    {
        return view('jobs.show', ['job' => $job]);
    }

    // Show form to edit an existing job
    public function edit(Job $job)
    {
        return view('jobs.edit', ['job' => $job]);
    }

    // Update a job
    public function update(Request $request, Job $job)
    {
        $validated = $request->validate([
            'title' => ['nullable', 'String','min:3'],
            'salary' => ['nullable', 'String']
        ]);

        $job->update($validated);

        return redirect()->route('jobs.show', $job);
    }

    // Delete a job
    public function destroy(Job $job)
    {
        $job->delete();

        return redirect()->route('jobs.index');
    }
}
<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', fn() => view('home'));

Route::get('/jobs', function () { return view('jobs', [ 'jobs' => \App\Models\Job::with('employer')->paginate(10) ]); });

Route::get('/jobs/{id}', fn($id) => view('job', [
    'job' => Job::find($id)
]));




<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', fn() => view('home'));

Route::get('/jobs', fn() => view('jobs', [
    'jobs' => Job::all()
]));

Route::get('/jobs/{id}', fn($id) => view('job', [
    'job' => Job::find($id)
]));




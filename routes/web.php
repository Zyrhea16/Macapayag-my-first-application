<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Models\Job;

Route::get('/', fn() => view('home'));

// Jobs index


// Create job form (must be above /jobs/{job})
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::resource('jobs', JobController::class);


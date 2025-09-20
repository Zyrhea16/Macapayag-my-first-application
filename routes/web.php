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

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            ['id' => 1, 'title' => 'Director', 'salary' => '$50,000'],
            ['id' => 2, 'title' => 'Programmer', 'salary' => '$10,000'],
            ['id' => 3, 'title' => 'Teacher', 'salary' => '$40,000'],
        ]
    ]);
});


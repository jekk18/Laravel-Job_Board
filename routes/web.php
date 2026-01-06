<?php

use App\Http\Controllers\OfferedJobsController;
use Illuminate\Support\Facades\Route;



Route::get('', fn() => to_route('jobs.index'));

Route::resource('jobs', OfferedJobsController::class)
    ->only(['index', 'show']);  
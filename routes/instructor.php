<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Livewire\Instructor\CoursesCurriculu;



Route::redirect('','instructor/courses');



Route::resource('courses',CourseController::class)->names('courses');

Route::get('courses/{course}/curriculum',CoursesCurriculu::class)->name('courses.curriculum');

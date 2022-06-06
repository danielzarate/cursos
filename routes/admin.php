<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;


Route::get('', [HomeController::class, 'index'])->name('home')->middleware('can:Dashboard');


Route::resource('roles',RoleController::class)->names('roles');
Route::resource('users',UserController::class)->only('index','edit','update')->names('users');

Route::resource('categories',CategoryController::class)->names('categories');

Route::get('courses', [CourseController::class, 'index'])->name('courses.index')->middleware('can:Dashboard');
Route::get('courses/{course}/show', [CourseController::class, 'show'])->name('courses.show')->middleware('can:Dashboard');
Route::post('courses/{course}/approved', [CourseController::class, 'approved'])->name('courses.approved')->middleware('can:Dashboard');


Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->name('courses.observation')->middleware('can:Dashboard');
Route::post('courses/{course}/reject', [CourseController::class, 'reject'])->name('courses.reject');

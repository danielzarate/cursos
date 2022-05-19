<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\UserController;


Route::get('', [HomeController::class, 'index'])->name('home')->middleware('can:Dashboard');


Route::resource('roles',RoleController::class)->names('roles');
Route::resource('users',UserController::class)->only('index','edit','update')->names('users');



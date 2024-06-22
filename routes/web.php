<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('roles', App\Http\Controllers\RoleController::class)->name('*', 'roles');
Route::resource('users', App\Http\Controllers\UserController::class)->name('*', 'users');
Route::resource('permissions', App\Http\Controllers\PermissionController::class)->name('*', 'permissions');

Route::get('/user-permissions/{id}', [App\Http\Controllers\UserController::class, 'permissions'])->name('user-permissions');
Route::patch('/sync-permissions/{id}', [App\Http\Controllers\UserController::class, 'syncpermissions'])->name('sync-permissions');

require __DIR__ . '/auth.php';

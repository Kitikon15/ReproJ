<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Admin\AdminController;

// Public routes
Route::get('/', [PublicController::class, 'index']);
Route::get('/test', [PublicController::class, 'index']);
Route::get('/academic', [PublicController::class, 'academic'])->name('academic');
Route::get('/curriculum', [PublicController::class, 'curriculum'])->name('curriculum');
Route::get('/showcase', [PublicController::class, 'showcase'])->name('showcase');

// Authentication (simple session based)
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.attempt');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Program management (single program) - requires authentication
Route::middleware('auth')->group(function () {
	// show edit form for the single program
	Route::get('program', [ProgramController::class, 'edit'])->name('program.edit');
	// update the single program
	Route::post('program', [ProgramController::class, 'update'])->name('program.update');
	
	// Admin routes
	Route::prefix('admin')->name('admin.')->group(function () {
		Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
		Route::get('/news', [AdminController::class, 'newsIndex'])->name('news.index');
		Route::get('/videos', [AdminController::class, 'videosIndex'])->name('videos.index');
		Route::get('/achievements', [AdminController::class, 'achievementsIndex'])->name('achievements.index');
		Route::get('/faculty', [AdminController::class, 'facultyIndex'])->name('faculty.index');
	});
});

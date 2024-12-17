<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Show Login Form
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.form');

// Process Login
Route::post('/login', [LoginController::class, 'processLogin'])->name('login');

// Show File Upload Form (After Successful Login)
Route::get('/upload', [LoginController::class, 'showUploadForm'])->name('upload.form');

// Handle File Upload
Route::post('/upload', [LoginController::class, 'processFileUpload'])->name('upload');

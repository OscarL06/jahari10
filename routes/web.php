<?php

use App\Http\Controllers\{ProfileController, CategoriesController, SubscribeController, NotesController, PracticeController};
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

Route::get('/', function () { 
    /* $user = User::where('email', 'oscar@test.com')->first();
    Auth::login($user);  */
    return view('jahari.home'); 
})->name('home');

Route::view('/test', 'test');

Route::get('/contact', function () { return view('jahari.contact'); })->name('contact');
Route::get('/gallery', function () { return view('jahari.gallery'); })->name('gallery');

Route::get('/dash', function () { return view('dash');})->name('dash');
Route::get('/courses', [CategoriesController::class, 'categories'])->name('categories');
Route::get('/subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');
Route::get('/notes', [NotesController::class, 'show'])->name('notes');
/* Route::get('/settings', [ProfileController::class, 'show'])->name('settings'); */
Route::get('/practice-logs', [PracticeController::class, 'show'])->name('practice');
Route::delete('/practice/delete/{id}', [PracticeController::class, 'destroy'])->name('delete-practice');

Route::middleware('subscribed')->group(function () {
    Route::get('/courses/{id}', [CategoriesController::class, 'courses'])->name('course');
    Route::get('courses/lesson/{id}', [CategoriesController::class, 'lessons'])->name('lesson');
});

/*  Route::get('/', function () {
    return view('welcome');
}); */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
}); 

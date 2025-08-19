<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ProjectController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ServiceController;

// Route::get('/', function () {
//     return view('frontend.index');


// })->name('Home');
Route::get('/', [HomeController::class, 'index'])->name('Home');

Route::get('/about', function () {
    return view('frontend.about');
})->name('About');

// Route::get('/services', function () {
//     return view('frontend.services');
// })->name('Service');

Route::get('/services', [ServiceController::class, 'index'])->name('Service');

// Route::get('/project', function () {
//     return view('frontend.project');
// })->name('Projects');
Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('Contact');



Route::get('/gallery', [ProjectController::class, 'index'])->name('projects');
// Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('projects.show');


Route::post('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'send'])->name('contact.send');

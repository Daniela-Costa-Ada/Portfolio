<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/send-message', function () {
    return redirect()->back()->with('success', 'Message sent successfully!');
})->name('send.message');



Route::get('api/projects', [ProjectController::class, 'index']);
Route::post('api/projects', [ProjectController::class, 'store']);
Route::get('api/projects/{id}', [ProjectController::class, 'show']);
Route::put('api/projects/{id}', [ProjectController::class, 'update']);
Route::delete('api/projects/{id}', [ProjectController::class, 'destroy']);
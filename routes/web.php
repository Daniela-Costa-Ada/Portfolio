<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/vip', [PageController::class, 'about'])->name('vip');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/send-message', function () {
    return redirect()->back()->with('success', 'Message sent successfully!');
})->name('send.message');


Route::prefix('api')->group(function () {
    Route::get('projects', [ProjectController::class, 'index'])->name('api.projects.index');
    Route::post('projects', [ProjectController::class, 'store'])->name('api.projects.store');
    Route::get('projects/{id}', [ProjectController::class, 'show'])->name('api.projects.show');
    Route::put('projects/{id}', [ProjectController::class, 'update'])->name('api.projects.update');
    Route::delete('projects/{id}', [ProjectController::class, 'destroy'])->name('api.projects.destroy');
});

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\EquipeController;
Use App\Http\Controllers\ClubController;
Use App\Http\Controllers\InscriptionController;
Use App\Http\Controllers\AnimationController;
use App\Http\Controllers\HomeController;

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
    return view('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';

Route::resource("/admin/equipe", EquipeController::class)->middleware(['auth:admin', 'verified']);

Route::resource("/admin/club", ClubController::class)->middleware(['auth:admin', 'verified']);

Route::resource("/inscription", InscriptionController::class)->middleware(['auth', 'verified']);

Route::resource("/animation", AnimationController::class)->middleware(['auth', 'verified']);

Route::post('contact_mail',[HomeController::class, 'contact_mail_send']);


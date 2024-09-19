<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\UserController;
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
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::controller(ReviewController::class)->middleware(['auth'])->group(function(){
    Route::get('/', 'tops')->name('tops');
    Route::post('/reviews', 'store')->name('store');
    Route::get('/reviews/create', 'create')->name('create');
    Route::get('/reviews/{review}','show')->name('show');
    Route::put('/reviews/{review}', 'update')->name('update');
    Route::delete('/reviews/{review}', 'delete')->name('delete');
    Route::get('/reviews/{review}/edit', 'edit')->name('edit');
});

Route::controller(StoreController::class)->middleware(['auth'])->group(function(){
    Route::get('/reviews/stores/{store}', 'tops')->name('top');
    Route::get('/stores', 'index')->name('index');
});

Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::get('/users/{user}' , 'mypage')->name('mypage');
    Route::put('/users/{user}', 'update')->name('update');
    Route::get('/users/{user}/edit', 'edit')->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

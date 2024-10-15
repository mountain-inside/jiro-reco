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
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
*/
Route::get('/', [ReviewController::class, 'tops'])->name('tops');
Route::get('/reviews/create', [ReviewController::class, 'create'])->name('create');
Route::get('/reviews/{review}',[ReviewController::class, 'show'])->name('show');

Route::controller(ReviewController::class)->middleware(['auth'])->group(function(){
    
    Route::post('/reviews', 'store')->name('store');
    Route::put('/reviews/{review}', 'update')->name('update');
    Route::delete('/reviews/{review}', 'delete')->name('delete');
    Route::get('/reviews/{review}/edit', 'edit')->name('edit');
});

Route::controller(StoreController::class)->group(function(){
    Route::get('/reviews/stores/{store}', 'tops')->name('top');
    Route::post('/search', 'search')->name('search');
    Route::get('/search', 'paginate');
    Route::get('/stores', 'index')->name('index');
    Route::get('/stores/{store}', 'jiro')->name('jiro');
});

Route::get('/reviews/users/{user}', [UserController::class, 'tops']);
Route::get('/users/{user}', [UserController::class, 'mypage'])->name('mypage');
Route::controller(UserController::class)->middleware(['auth'])->group(function(){
    Route::get('/stamp' ,'stamp')->name('stamp');
    Route::post('/stamp' ,'register')->name('register');
    Route::put('/users/{user}', 'update')->name('update');
    Route::get('/users/{user}/edit', 'edit')->name('edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

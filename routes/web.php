<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\StoryController;
use App\Models\BiodataModel;
use App\Http\Controllers\PaymentController;

// Payment routes

Route::get('/payment', [PaymentController::class, 'create'])->middleware(['auth'])->name('payment');
Route::post('/payments', [PaymentController::class, 'store']);


Route::get('/', function () {
    return view('welcome');
});

Route::get('package',function(){
    return view('package');
})->middleware(['auth', 'verified'])->name('package');



Route::get('welcome',function(){
    return view('welcome');
})->middleware(['auth', 'verified'])->name('welcome');

Route::get('setinfo',function(){
    return view('setinfo');
})->middleware(['auth', 'verified'])->name('setinfo');
Route::post('/biodatas',[BiodataController::class,'store']);



Route::get('/submit_story',[StoryController::class,'create_story'])->middleware(['auth'])->name('submit_story');
Route::post('/storys',[StoryController::class,'store']);
Route::get('/stories',[StoryController::class,'view'])->middleware(['auth'])->name('stories');

Route::get('/dashboard',[BiodataController::class,'view'])->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

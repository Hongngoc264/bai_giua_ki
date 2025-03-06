<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HungController;


Route::get('/', [HungController::class, 'index'])->name('home.index');  
Route::get('/create', [HungController::class, 'create'])->name('home.create'); 
Route::post('/store', [HungController::class, 'store'])->name('home.store');  
Route::get('/edit/{id}', [HungController::class, 'edit'])->name('home.edit'); 
Route::put('/update/{id}', [HungController::class, 'update'])->name('home.update'); 
Route::delete('/destroy/{id}', [HungController::class, 'destroy'])->name('home.destroy');  
Route::get('/trangchu', [HungController::class, 'trangchu'])->name('trangchu');
Route::get('/home', [HungController::class, 'home'])->name('home');
Route::get('/index', [HungController::class, 'index'])->name('index');





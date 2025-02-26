<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HungController;

Route::get('/', [HungController::class, 'index'])->name('home.index');  // Hiển thị danh sách
Route::get('/create', [HungController::class, 'create'])->name('home.create');  // Form thêm mới
Route::post('/store', [HungController::class, 'store'])->name('home.store');  // Lưu dữ liệu mới
Route::get('/edit/{id}', [HungController::class, 'edit'])->name('home.edit');  // Form sửa
Route::put('/update/{id}', [HungController::class, 'update'])->name('home.update');  // Cập nhật dữ liệu
Route::delete('/destroy/{id}', [HungController::class, 'destroy'])->name('home.destroy');  // Xóa dữ liệu




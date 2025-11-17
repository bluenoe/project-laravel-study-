<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get ("/hello", [App\Http\Controllers\HelloController::class, 'index']);

Route::get ("/formhcn", [App\Http\Controllers\hcncontroller::class, 'formhcn']);
Route::post ("/tinh", [App\Http\Controllers\hcncontroller::class, 'tinhhcn']);


Route::get('/home', function () {
    return view('home');
});

Route::get('/san-pham', function () {
    return view('product');
});

Route::get('/trangchu', [App\Http\Controllers\PageController::class, 'getIndex'])->name('trangchu');

Route::get('/loai-san-pham', [App\Http\Controllers\PageController::class, 'getLoaiSp'])->name('loaisanpham');

Route::get('/chi-tiet-san-pham', [App\Http\Controllers\PageController::class, 'getChiTietSp']);

Route::get('/lien-he', [App\Http\Controllers\PageController::class, 'getLienHe'])->name('lienhe');

Route::get('/gioi-thieu', [App\Http\Controllers\PageController::class, 'getGioiThieu'])->name('gioithieu');







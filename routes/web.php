<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/user", [UserController::class, 'index']);
Route::get("/user/tambah", [UserController::class, 'tambah']);
Route::post("/user/tambah_simpan", [UserController::class, 'tambah_simpan']);
Route::get("/user/ubah/{id}", [UserController::class, 'ubah']);
Route::put("/user/ubah_simpan/{id}", [UserController::class, 'ubah_simpan']);
Route::get("/user/hapus/{id}", [UserController::class, 'hapus']);
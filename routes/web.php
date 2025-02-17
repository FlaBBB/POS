<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("category")->group(function () {
    Route::get("food-beverage", [CategoryController::class, "foodBeverage"]);
    Route::get("beauty-health", [CategoryController::class, "beautyHealth"]);
    Route::get("home-care", [CategoryController::class, "homeCare"]);
    Route::get("baby-kid", [CategoryController::class, "babyKids"]);
});

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return "User ID: $id, Name: $name";
});

Route::prefix("admin")->group(function () {
    Route::get("/", function () {
        return "<h1>Admin Page</h1>";
    });
});
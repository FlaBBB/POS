<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function foodBeverage() {
        return view("category/food-and-beverage");
    }

    function babyKids() {
        return view("category/baby-kid");
    }

    function beautyHealth() {
        return view("category/beauty-health");
    }

    function homeCare() {
        return view("category/home-care");
    }
}

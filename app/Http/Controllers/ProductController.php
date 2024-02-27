<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function showFoodBeverage()
    {
        return view('products.food_beverage');
    }

    public function showBeautyHealth()
    {
        return view('products.beauty_health');
    }

    public function showHomeCare()
    {
        return view('products.home_care');
    }

    public function showBabyKid()
    {
        return view('products.baby_kid');
    }
}

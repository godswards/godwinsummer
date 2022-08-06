<?php

namespace App\Http\Controllers;

use App\Models\Price;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index() {
        $prices = Price::with('brands')->get();

        return inertia('Price',[
            'prices' => $prices
        ]);
    }
}

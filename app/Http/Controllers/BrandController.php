<?php

namespace App\Http\Controllers;

use App\Models\Brands;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index() {
        $brands = Brand::with('prices')->get();

        return inertia('Brand',[
            'brands' => $brands
        ]);
    }
}

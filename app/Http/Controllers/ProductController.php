<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($category)
    {
        $product = [
            'food-beverage' => [
                ['id' => 'FB1', 'name' => 'Indomie', 'price' => 10000],
                ['id' => 'FB2', 'name' => 'Sari Roti', 'price' => 12000],
                ['id' => 'FB3', 'name' => 'Tango Wafer', 'price' => 15000]
            ],
            'beauty-health' => [
                ['id' => 'BH1', 'name' => 'Acnes Face Wash', 'price' => 35000],
                ['id' => 'BH2', 'name' => 'Dental Floss', 'price' => 50000],
                ['id' => 'BH3', 'name' => 'Body Wash', 'price' => 15000]
            ],
            'home-care' => [
                ['id' => 'HC1', 'name' => 'So Klin Lantai', 'price' => 20000],
                ['id' => 'HC2', 'name' => 'Facial Tissue', 'price' => 15000],
                ['id' => 'HC3', 'name' => 'Stella Air Freshner', 'price' => 35000]
            ],
            'baby-kid' => [
                ['id' => 'BK1', 'name' => 'Mami Poko Pampers', 'price' => 40000],
                ['id' => 'BK2', 'name' => 'Promina Bubur', 'price' => 20000],
                ['id' => 'BK3', 'name' => 'Baby Shampoo', 'price' => 25000]
            ],
        ];

        return view('product')
            ->with('category', $category)
            ->with('product', $product[$category]);
    }
}

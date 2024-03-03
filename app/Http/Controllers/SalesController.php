<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales()
    {
        $transaksi = [
            [
                'id' => '1',
                'product' => "Indomie",
                'qty' => 10,
                'price' => 10000,
                'total' => 100000,
            ],
            [
                'id' => '2',
                'product' => "Dental Floss",
                'qty' => 5,
                'price' => 50000,
                'total' => 250000,
            ],
            [
                'id' => '3',
                'product' => "Facial Tissue",
                'qty' => 7,
                'price' => 15000,
                'total' => 105000,
            ],
            [
                'id' => '4',
                'product' => "Baby Shampoo",
                'qty' => 8,
                'price' => 25000,
                'total' => 200000,
            ],
        ];
        return view('sales')
        -> with('transaksi', $transaksi);
    }
}

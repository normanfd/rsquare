<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AvailableProduct;

class AvailableProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function VWAvailableProduct()
    {
        return view('admin.availableproduct.index');
    }

    public function StoreAvailableProduct()
    {
        AvailableProduct::create([
            'category_id' => 1,
            'product_id' => 1,
            'product_name' => request('product_name'),
            'product_price' => request('product_price'),
            'product_rating' => "sssss",
            'product_image' => "request('product_image')",
            'product_stock'=> request('product_stock'),
            'product_brand'=> request('product_brand'),
            'product_desc' => request('product_description')
        ]);
        return view('admin.availableproduct.index');
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\AvailableProduct;
// use App\ProductCategory;

class CustomCardiganController extends Controller
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
    public function FormAddCustomCardigan()
    {
        return view('admin.customproduct.cardigan');
        // untuk mendapatkan data dari DB kategori produk
        // $categories = ProductCategory::all();

        // dd($categories); ini buat check ada ga sih data category nya
        // return view('admin.availableproduct.index', compact('categories'));
    }
    // Fungsi untuk menyimpan data kedalam database available product
    // public function StoreAvailableProduct(Request $request)
    // {
    //     // untuk mendapatkan data dari DB kategori produk
    //     $categories = ProductCategory::all();
    //     // cara dapetin lokasi path photo
    //     $photo = $request->file('product_image')->store('product_images');
    //     // dd($photo);
    //     // membuat row baru pada db
    //     AvailableProduct::create([
    //         'category_id' => request('category_id'),
    //         'product_id' => 1,
    //         'product_name' => request('product_name'),
    //         'product_price' => request('product_price'),
    //         'product_rating' => "sssss",
    //         'product_image' => $photo,
    //         'product_stock'=> request('product_stock'),
    //         'product_brand'=> request('product_brand'),
    //         'product_desc' => request('product_description')
    //     ]);
    //     return view('admin.availableproduct.index', compact('categories'));
    // }
    
}

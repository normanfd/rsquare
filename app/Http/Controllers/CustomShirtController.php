<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shirt;

class CustomShirtController extends Controller
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
    public function FormAddCustomShirt()
    {
        return view('admin.customproduct.shirt');
    }
    // Fungsi untuk menyimpan data kedalam database available product
    // Fungsi untuk menyimpan data kedalam database available product
    public function StoreFormAddCustomShirt(Request $request)
    {
        // cara dapetin lokasi path photo
        $photo = $request->file('shirt_image')->store('shirt_images');
        // dd($photo);
        // membuat row baru pada db
        Shirt::create([
            'category_id' => 2,
            'shirt_id' => request('shirt_id'),
            'shirt_name' => request('shirt_name'),
            'shirt_price' => request('shirt_price'),
            'shirt_desc' => request('shirt_desc'),
            'shirt_image' => $photo
        ]);
        return view('admin.customproduct.shirt');
    }
    
}

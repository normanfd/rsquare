<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Shoes;

class CustomShoesController extends Controller
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
    public function FormAddCustomShoes()
    {
        return view('admin.customproduct.shoes');
        
    }
    
    // Fungsi untuk menyimpan data kedalam database available product
    
    public function StoreFormAddCustomShoes(Request $request)
    {
        // cara dapetin lokasi path photo
        $photo = $request->file('shoes_image')->store('shoes_images');
        // dd($photo);
        // membuat row baru pada db
        Shoes::create([
            'category_id' => 2,
            'shoes_id' => request('shoes_id'),
            'shoes_name' => request('shoes_name'),
            'shoes_price' => request('shoes_price'),
            'shoes_desc' => request('shoes_desc'),
            'shoes_image' => $photo
        ]);
        return view('admin.customproduct.shoes');
    }
}

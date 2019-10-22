<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jacket;

class CustomJacketController extends Controller
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
    public function FormAddCustomJacket()
    {
        return view('admin.customproduct.jacket');
    }
    
    // Fungsi untuk menyimpan data kedalam database available product
    public function StoreFormAddCustomJacket(Request $request)
    {
        // cara dapetin lokasi path photo
        $photo = $request->file('jacket_image')->store('jacket_images');
        // dd($photo);
        // membuat row baru pada db
        Jacket::create([
            'category_id' => 2,
            'jacket_id' => request('jacket_id'),
            'jacket_name' => request('jacket_name'),
            'jacket_price' => request('jacket_price'),
            'jacket_desc' => request('jacket_desc'),
            'jacket_image' => $photo
        ]);
        return view('admin.customproduct.jacket');
    }
}

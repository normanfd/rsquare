<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hoodie;

class CustomHoodieController extends Controller
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
    public function FormAddCustomHoodie()
    {
        return view('admin.customproduct.hoodie');
    }
    
    public function StoreFormAddCustomHoodie(Request $request)
    {
        // cara dapetin lokasi path photo
        $photo = $request->file('hoodie_image')->store('hoodie_images');
        // dd($photo);
        // membuat row baru pada db
        Hoodie::create([
            'category_id' => 2,
            'hoodie_id' => request('hoodie_id'),
            'hoodie_name' => request('hoodie_name'),
            'hoodie_price' => request('hoodie_price'),
            'hoodie_desc' => request('hoodie_desc'),
            'hoodie_image' => $photo
        ]);
        return view('admin.customproduct.hoodie');
    }
    
}

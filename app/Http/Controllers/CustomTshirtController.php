<?php

namespace App\Http\Controllers;
use App\Tshirt;
use Illuminate\Http\Request;
// use App\AvailableProduct;
// use App\ProductCategory;

class CustomTshirtController extends Controller
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
    public function FormAddCustomTshirt()
    {
        return view('admin.customproduct.tshirt');
        
    }
    
    public function StoreFormAddCustomTshirt(Request $request)
    {
        // cara dapetin lokasi path photo
        $photo = $request->file('tshirt_image')->store('tshirt_images');
        // dd($photo);
        // membuat row baru pada db
        Tshirt::create([
            'category_id' => 2,
            'tshirt_id' => request('tshirt_id'),
            'tshirt_name' => request('tshirt_name'),
            'tshirt_price' => request('tshirt_price'),
            'tshirt_desc' => request('tshirt_desc'),
            'tshirt_image' => $photo
        ]);

        return view('admin.customproduct.tshirt');
        
    }
}

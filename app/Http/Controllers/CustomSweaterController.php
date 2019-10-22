<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sweater;

class CustomSweaterController extends Controller
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
    public function FormAddCustomSweater()
    {
        return view('admin.customproduct.sweater');
    }

    public function StoreFormAddCustomSweater(Request $request)
    {
        // cara dapetin lokasi path photo
        $photo = $request->file('sweater_image')->store('sweater_images');
        // dd($photo);
        // membuat row baru pada db
        Sweater::create([
            'category_id' => 2,
            'sweater_id' => request('sweater_id'),
            'sweater_name' => request('sweater_name'),
            'sweater_price' => request('sweater_price'),
            'sweater_desc' => request('sweater_desc'),
            'sweater_image' => $photo
        ]);

        return view('admin.customproduct.sweater');
        
    }
}

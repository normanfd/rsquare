<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cardigan;

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
    }
    // ------------------------CARDIGAN ADMIN-------------------------------------
    // Fungsi untuk menyimpan data kedalam database available product
    public function StoreFormAddCustomCardigan(Request $request)
    {
        // cara dapetin lokasi path photo
        $photo = $request->file('cardigan_image')->store('cardigan_images');
        // dd($photo);
        // membuat row baru pada db
        cardigan::create([
            'category_id' => 2,
            'cardigan_id' => request('cardigan_id'),
            'cardigan_name' => request('cardigan_name'),
            'cardigan_price' => request('cardigan_price'),
            'cardigan_desc' => request('cardigan_desc'),
            'cardigan_image' => $photo
        ]);
        return view('admin.customproduct.cardigan');
    }
    
    //fungsi buat get data cardigan
    public function EditCustomCardigan($id){
        $cardigan = cardigan::find($id);
        return view('admin.editproduct.editcardigan', compact('cardigan'));
    }

    public function PostEditCustomCardigan($id, Request $request){
        $cardigan = cardigan::find($id);
        $photo = $request->file('cardigan_image')->store('cardigan_images');
        $cardigan->update([
            'category_id' => 2,
            'cardigan_id' => request('cardigan_id'),
            'cardigan_name' => request('cardigan_name'),
            'cardigan_price' => request('cardigan_price'),
            'cardigan_desc' => request('cardigan_desc'),
            'cardigan_image' => $photo
        ]);
        return view('admin.customproduct.cardigan');
    }

    // ------------------- CARDIGAN USER --------------------------------
    public function VWCardigan()
    {
        return view('user.customproduct.cardigan');
    }

}

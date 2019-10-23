<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cardigan;
use App\Hoodie;
use App\Jacket;
use App\Shirt;
use App\Shoes;
use App\Sweater;
use App\Tshirt;

class CustomProductController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

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

    //hoodie
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

    //jacket
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

    //shirt
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

    //shoes
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

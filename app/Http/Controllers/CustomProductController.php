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
//--------------------------------LAMAN ADMIN-------------------------------------------
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
        $this-> validate(request(),[

            'cardigan_id' => 'required',
            'cardigan_name' => 'required',
            'cardigan_price' => 'required|numeric',
            'cardigan_desc' => 'required',
            'cardigan_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);

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
    
    public function ViewCustomCardigan()
    {
        $cardigan = cardigan::all();
        // dd($cardigan);
        return view('admin.customproduct.cardiganview', compact('cardigan'));
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
        return redirect('admin/');
    }

    public function DeleteCustomCardigan($id)
    {
        $single_product = cardigan::find($id);
        $single_product->delete();
        $product = cardigan::all();
        
        return redirect()->route('admin.viewcustomcardigan', compact('product'));
    }

    //================HOODIE=================================================================================
    public function FormAddCustomHoodie()
    {
        return view('admin.customproduct.hoodie');
    }
    
    public function StoreFormAddCustomHoodie(Request $request)
    {
        $this-> validate(request(),[
            'hoodie_id' => 'required',
            'hoodie_name' => 'required',
            'hoodie_price' => 'required|numeric',
            'hoodie_desc' => 'required',
            'hoodie_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        

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

    public function EditCustomHoodie($id){
        $hoodie = Hoodie::find($id);
        return view('admin.editproduct.edithoodie', compact('hoodie'));
    }

    public function PostEditCustomHoodie($id, Request $request){
        $hoodie = Hoodie::find($id);
        $photo = $request->file('hoodie_image')->store('hoodie_images');
        $hoodie->update([
            'category_id' => 2,
            'hoodie_id' => request('hoodie_id'),
            'hoodie_name' => request('hoodie_name'),
            'hoodie_price' => request('hoodie_price'),
            'hoodie_desc' => request('hoodie_desc'),
            'hoodie_image' => $photo
        ]);
        redirect('admin/');
    }
    

    //=====================================jacket=================================================================
    public function FormAddCustomJacket()
    {
        return view('admin.customproduct.jacket');
    }
    
    // Fungsi untuk menyimpan data kedalam database available product
    public function StoreFormAddCustomJacket(Request $request)
    {   
        $this-> validate(request(),[
            'jacket_id' => 'required',
            'jacket_name' => 'required',
            'jacket_price' => 'required|numeric',
            'jacket_desc' => 'required',
            'jacket_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        

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

    public function EditCustomJacket($id){
        $jacket = Jacket::find($id);
        return view('admin.editproduct.editjacket', compact('jacket'));
    }

    public function PostEditCustomJacket($id, Request $request){
        $jacket = Jacket::find($id);
        $photo = $request->file('jacket_image')->store('jacket_images');
        $jacket->update([
            'category_id' => 2,
            'jacket_id' => request('jacket_id'),
            'jacket_name' => request('jacket_name'),
            'jacket_price' => request('jacket_price'),
            'jacket_desc' => request('jacket_desc'),
            'jacket_image' => $photo
        ]);
        return redirect('admin/');
    }

    //============================shirt=================================================================
    public function FormAddCustomShirt()
    {
        return view('admin.customproduct.shirt');
    }
    // Fungsi untuk menyimpan data kedalam database available product
    // Fungsi untuk menyimpan data kedalam database available product
    public function StoreFormAddCustomShirt(Request $request)
    {
        $this-> validate(request(),[
            'shirt_id' => 'required',
            'shirt_name' => 'required',
            'shirt_price' => 'required|numeric',
            'shirt_desc' => 'required',
            'shirt_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
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

    public function EditCustomShirt($id){
        $shirt = Shirt::find($id);
        return view('admin.editproduct.editshirt', compact('shirt'));
    }

    public function PostEditCustomShirt($id, Request $request){
        $shirt = Shirt::find($id);
        $photo = $request->file('shirt_image')->store('shirt_images');
        $shirt->update([
            'category_id' => 2,
            'shirt_id' => request('shirt_id'),
            'shirt_name' => request('shirt_name'),
            'shirt_price' => request('shirt_price'),
            'shirt_desc' => request('shirt_desc'),
            'shirt_image' => $photo
        ]);
        return redirect('admin/');
    }

    //========================================shoes=======================================================
    public function FormAddCustomShoes()
    {
        return view('admin.customproduct.shoes');
        
    }

    // Fungsi untuk menyimpan data kedalam database available product
    
    public function StoreFormAddCustomShoes(Request $request)
    {
        $this-> validate(request(),[
            'shoes_id' => 'required',
            'shoes_name' => 'required',
            'shoes_price' => 'required|numeric',
            'shoes_desc' => 'required',
            'shoes_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
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

    public function EditCustomShoes($id){
        $shoes = Shoes::find($id);
        return view('admin.editproduct.editshoes', compact('shoes'));
    }

    public function PostEditCustomShoes($id, Request $request){
        $shoes = Shoes::find($id);
        $photo = $request->file('shoes_image')->store('shoes_images');
        $shoes->update([
            'category_id' => 2,
            'shoes_id' => request('shoes_id'),
            'shoes_name' => request('shoes_name'),
            'shoes_price' => request('shoes_price'),
            'shoes_desc' => request('shoes_desc'),
            'shoes_image' => $photo
        ]);
        return redirect('admin/');
    }

    //===============================================Sweater==================================================
    public function FormAddCustomSweater()
    {
        return view('admin.customproduct.sweater');
    }

    public function StoreFormAddCustomSweater(Request $request)
    {
        $this-> validate(request(),[
            'sweater_id' => 'required',
            'sweater_name' => 'required',
            'sweater_price' => 'required|numeric',
            'sweater_desc' => 'required',
            'sweater_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
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

    public function EditCustomSweater($id){
        $sweater = Sweater::find($id);
        return view('admin.editproduct.editsweater', compact('sweater'));
    }

    public function PostEditCustomSweater($id, Request $request){
        $sweater = Sweater::find($id);
        $photo = $request->file('sweater_image')->store('sweater_images');
        $sweater->update([
            'category_id' => 2,
            'sweater_id' => request('sweater_id'),
            'sweater_name' => request('sweater_name'),
            'sweater_price' => request('sweater_price'),
            'sweater_desc' => request('sweater_desc'),
            'sweater_image' => $photo
        ]);
        return redirect('admin/');
    }
    
    //============================tshirt=================================================================
    public function FormAddCustomTshirt()
    {
        return view('admin.customproduct.tshirt');
    }
    // Fungsi untuk menyimpan data kedalam database available product
    // Fungsi untuk menyimpan data kedalam database available product
    public function StoreFormAddCustomTshirt(Request $request)
    {
        $this-> validate(request(),[
            'tshirt_id' => 'required',
            'tshirt_name' => 'required',
            'tshirt_price' => 'required|numeric',
            'tshirt_desc' => 'required',
            'tshirt_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
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

    public function EditCustomTshirt($id){
        $tshirt = Tshirt::find($id);
        return view('admin.editproduct.edittshirt', compact('tshirt'));
    }

    public function PostEditCustomTshirt($id, Request $request){
        $tshirt = Tshirt::find($id);
        $photo = $request->file('tshirt_image')->store('tshirt_images');
        $tshirt->update([
            'category_id' => 2,
            'tshirt_id' => request('tshirt_id'),
            'tshirt_name' => request('tshirt_name'),
            'tshirt_price' => request('tshirt_price'),
            'tshirt_desc' => request('tshirt_desc'),
            'tshirt_image' => $photo
        ]);
        return redirect('admin/');
    }

    // ====================== View Custom Product =========================

    public function VwCustomProduct()
    {
        return view('admin.customproduct.vwcustomproduct');
    }

}

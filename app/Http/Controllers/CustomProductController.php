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
use Intervention\Image\ImageManagerStatic as Image;
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
    public function EditFormCustomCardigan($id){
        $cardigan = cardigan::find($id);
        return view('admin.customproduct.cardiganedit', compact('cardigan'));
    }

    public function SaveEditFormCustomCardigan($id, Request $request){
        $cardigan = cardigan::find($id);
        $photo = $request->file('cardigan_image');
        
        if($photo){
            $photo = $request->file('cardigan_image')->store('cardigan_images');
            $cardigan->update([
                'cardigan_image' => $photo
            ]);
        }
        
        $cardigan->update([
            'category_id' => 2,
            'cardigan_id' => request('cardigan_id'),
            'cardigan_name' => request('cardigan_name'),
            'cardigan_price' => request('cardigan_price'),
            'cardigan_desc' => request('cardigan_desc'),
        ]);
        return redirect('admin/');
    }

    public function DeleteCustomCardigan($id)
    {
        $single_product = cardigan::find($id);
        $single_product->delete();
        $product = cardigan::all();
        
        return redirect()->route('admin.viewcustomcardigan', compact('product'))->with('success', 'produk berhasil ditambahkan');
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

    public function ViewCustomHoodie()
    {
        $hoodie = Hoodie::all();
        // dd($cardigan);
        return view('admin.customproduct.hoodieview', compact('hoodie'));
    }

    public function EditCustomHoodie($id){
        $hoodie = Hoodie::find($id);
        return view('admin.customproduct.hoodieedit', compact('hoodie'));
    }

    public function PostEditCustomHoodie($id, Request $request){
        $hoodie = Hoodie::find($id);
        $photo = $request->file('hoodie_image');

        if($photo){
            $photo->store('hoodie_images');
            $hoodie->update(['hoodie_image' => $photo]);
        }
        $hoodie->update([
            'category_id' => 2,
            'hoodie_id' => request('hoodie_id'),
            'hoodie_name' => request('hoodie_name'),
            'hoodie_price' => request('hoodie_price'),
            'hoodie_desc' => request('hoodie_desc')
        ]);
        redirect('admin/');
    }

    public function DeleteCustomHoodie($id)
    {
        $single_product = Hoodie::find($id);
        $single_product->delete();
        $product = Hoodie::all();
        
        return redirect()->route('admin.viewcustomhoodie', compact('product'))->with('success', 'produk berhasil ditambahkan');
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
        // return view('admin.customproduct.jacket');
        return redirect()->route('admin.addcustomjacket')->with('success', 'produk berhasil ditambahkan');
    }

    public function ViewCustomJacket()
    {
        $jacket = Jacket::all();
        // dd($cardigan);
        return view('admin.customproduct.jacketview', compact('jacket'));
    }

    public function EditCustomJacket($id){
        $jacket = Jacket::find($id);
        return view('admin.customproduct.jacketedit', compact('jacket'));
    }

    public function PostEditCustomJacket($id, Request $request){
        $jacket = Jacket::all();
        $single_jacket = Jacket::find($id);
        $photo = $request->file('jacket_image');
        if($photo){
            $photo = $request->file('jacket_image')->store('jacket_images');
            $single_jacket->update(['jacket_image' => $photo]);
        }
        $single_jacket->update([
            'category_id' => 2,
            'jacket_id' => request('jacket_id'),
            'jacket_name' => request('jacket_name'),
            'jacket_price' => request('jacket_price'),
            'jacket_desc' => request('jacket_desc'),
        ]);
        return redirect()->route('admin.viewcustomjacket',compact('jacket'))->with('info', 'produk berhasil diupdate');
    }

    public function DeleteCustomJacket($id)
    {
        $single_product = Jacket::find($id);
        $single_product->delete();
        $product = Jacket::all();
        
        return redirect()->route('admin.viewcustomjacket', compact('product'))->with('danger', 'produk berhasil dihapus');
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
        // return view('admin.customproduct.shirt');
        return redirect()->route('admin.addcustomshirt')->with('success', 'Kemeja berhasil ditambahkan');
    }

    public function ViewCustomShirt()
    {
        $shirt = Shirt::all();
        // dd($cardigan);
        return view('admin.customproduct.shirtview', compact('shirt'));
    }

    public function EditCustomShirt($id){
        $shirt = Shirt::find($id);
        return view('admin.customproduct.shirtedit', compact('shirt'));
    }

    public function PostEditCustomShirt($id, Request $request){
        $shirt = Shirt::all();
        $single_shirt = Shirt::find($id);
        $photo = $request->file('shirt_image');
        if($photo){
            $photo = $request->file('shirt_image')->store('shirt_images');
            $single_shirt->update(['shirt_image' => $photo]);
        }
        $single_shirt->update([
            'category_id' => 2,
            'shirt_id' => request('shirt_id'),
            'shirt_name' => request('shirt_name'),
            'shirt_price' => request('shirt_price'),
            'shirt_desc' => request('shirt_desc'),
        ]);
        // return redirect('admin/');
        return redirect()->route('admin.viewcustomshirt',compact('shirt'))->with('info', 'produk berhasil diupdate');
    }

    public function DeleteCustomShirt($id)
    {
        $shirt = Shirt::all();
        $single_product = Shirt::find($id);
        $single_product->delete();
        $product = Shirt::all();
        
        return redirect()->route('admin.viewcustomshirt',compact('shirt'))->with('danger', 'produk berhasil dihapus');
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
        // return view('admin.customproduct.shoes');
        return redirect()->route('admin.addcustomshoes')->with('success', 'Sepatu berhasil ditambahkan');
    }

    public function ViewCustomShoes()
    {
        $shoes = Shoes::all();
        // dd($cardigan);
        return view('admin.customproduct.shoesview', compact('shoes'));
    }

    public function EditCustomShoes($id){
        $shoes = Shoes::find($id);
        return view('admin.customproduct.shoesedit', compact('shoes'));
    }

    public function PostEditCustomShoes($id, Request $request){
        $shoes = Shoes::all();
        $single_shoes = Shoes::find($id);
        $photo = $request->file('shoes_image');

        if($photo){
            $photo = $request->file('shoes_image')->store('shoes_images');
            $single_shoes->update(['shoes_image' => $photo]);
        }
        $single_shoes->update([
            'category_id' => 2,
            'shoes_id' => request('shoes_id'),
            'shoes_name' => request('shoes_name'),
            'shoes_price' => request('shoes_price'),
            'shoes_desc' => request('shoes_desc'),
        ]);
        return redirect()->route('admin.viewcustomshoes',compact('shoes'))->with('info', 'produk berhasil diupdate');
    }

    public function DeleteCustomShoes($id)
    {
        $single_product = Shoes::find($id);
        $single_product->delete();
        $product = Shoes::all();
        
        return redirect()->route('admin.viewcustomshoes', compact('product'))->with('danger', 'produk berhasil dihapus');
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

    public function ViewCustomSweater()
    {
        $sweater = Sweater::all();
        // dd($cardigan);
        return view('admin.customproduct.sweaterview', compact('sweater'));
    }

    public function EditCustomSweater($id){
        $sweater = Sweater::find($id);
        return view('admin.customproduct.sweateredit', compact('sweater'));
    }

    public function PostEditCustomSweater($id, Request $request){
        $sweater = Sweater::find($id);
        $photo = $request->file('sweater_image');
        if($photo){
            $photo->store('sweater_images');
            $sweater->update(['sweater_image' => $photo]);
        }
        $sweater->update([
            'category_id' => 2,
            'sweater_id' => request('sweater_id'),
            'sweater_name' => request('sweater_name'),
            'sweater_price' => request('sweater_price'),
            'sweater_desc' => request('sweater_desc'),
        ]);
        return redirect('admin/');
    }

    public function DeleteCustomSweater($id)
    {
        $single_product = Sweater::find($id);
        $single_product->delete();
        $product = Sweater::all();
        
        return redirect()->route('admin.viewcustomsweater', compact('product'))->with('success', 'produk berhasil dihapus');
    }
    
    //============================tshirt=================================================================
    public function FormAddCustomTshirt()
    {
        return view('admin.customproduct.tshirt');
    }
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
        // return view('admin.customproduct.tshirt');
        return redirect()->route('admin.addcustomtshirt')->with('success', 'T-shirt berhasil ditambahkan');
    }

    public function ViewCustomTshirt()
    {
        $tshirt = Tshirt::all();
        // dd($cardigan);
        return view('admin.customproduct.tshirtview', compact('tshirt'));
    }

    public function EditCustomTshirt($id){
        $tshirt = Tshirt::find($id);
        return view('admin.customproduct.tshirtedit', compact('tshirt'));
    }

    public function PostEditCustomTshirt($id, Request $request){
        $single_tshirt = Tshirt::find($id);
        $photo = $request->file('tshirt_image');
        if($photo){
            $photo = $request->file('tshirt_image')->store('tshirt_images');
            $single_tshirt->update(['tshirt_image' => $photo]);
        }
        
        $single_tshirt->update([
            'category_id' => 2,
            'tshirt_id' => request('tshirt_id'),
            'tshirt_name' => request('tshirt_name'),
            'tshirt_price' => request('tshirt_price'),
            'tshirt_desc' => request('tshirt_desc'),
        ]);
        // return redirect('admin/');
        return redirect()->route('admin.viewcustomtshirt',compact('tshirt'))->with('info', 'produk berhasil diupdate');
        
    }

    public function DeleteCustomTshirt($id)
    {
        $single_product = Tshirt::find($id);
        $single_product->delete();
        $product = Tshirt::all();
        
        return redirect()->route('admin.viewcustomtshirt', compact('product'))->with('danger', 'produk berhasil dihapus');
    }
}

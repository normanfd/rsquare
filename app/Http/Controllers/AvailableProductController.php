<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AvailableProduct;
use App\ProductCategory;
use Validator;

class AvailableProductController extends Controller
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
    public function FormAvailableProduct()
    {
        $categories = ProductCategory::all();
        return view('admin.availableproduct.addavailableproduct', compact('categories'));
    }

    public function SaveFormAvailableProduct(Request $request)
    {
        // untuk mendapatkan data dari DB kategori produk
        $categories = ProductCategory::all();

        $this-> validate(request(),[
            'product_name' => 'required',
            'product_price' => 'required|numeric',
            'product_stock' => 'required|numeric',
            'product_brand' => 'required',
            'product_desc' => 'product_desc',
            'product_image' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);

        // cara dapetin lokasi path photo
        $photo = $request->file('product_image')->store('product_images');
        // dd($photo);
        // membuat row baru pada db
        AvailableProduct::create([
            'category_id' => request('category_id'),
            'product_id' => 1,
            'product_name' => request('product_name'),
            'product_price' => request('product_price'),
            'product_rating' => "sssss",
            'product_image' => $photo,
            'product_stock'=> request('product_stock'),
            'product_brand'=> request('product_brand'),
            'product_desc' => request('product_description')
        ]);
        // return view('admin.availableproduct.addAvailableProduct', compact('categories'))->with('success', 'produk berhasil ditambahkan');
        return redirect()->route('admin.VWAvailProduct',compact('categories'))->with('success', 'produk berhasil ditambahkan');
    }

    public function ViewAvailableProduct()
    {
        $product = AvailableProduct::all();
        return view('admin.availableproduct.vwproduct', compact('product'));
    }

    public function EditFormAvailableProduct($id)
    {
        $product = AvailableProduct::find($id);
        $categories = ProductCategory::all();
        return view('admin.availableproduct.editproduct', compact('product', 'categories'));
    }

    public function SaveEditFormAvailableProduct($id, Request $request)
    {
        $single_product = AvailableProduct::find($id);
        $product = AvailableProduct::all();

        $photo = $request->file('product_image');
        if($photo){
            $photo = $request->file('product_image')->store('product_images');
            $single_product->update([
                'product_image' => $photo
            ]);
        }

        $single_product->update([
            'category_id' => request('category_id'),
            'product_id' => 1,
            'product_name' => request('product_name'),
            'product_price' => request('product_price'),
            'product_rating' => "sssss",
            'product_stock'=> request('product_stock'),
            'product_brand'=> request('product_brand'),
            'product_desc' => request('product_description')
        ]);
        return redirect()->route('admin.listavailableproduct', compact('product'))->with('info', 'produk berhasil diupdate');
    }

    public function DeleteAvailableProduct($id)
    {
        $single_product = AvailableProduct::find($id);
        $single_product->delete();
        $product = AvailableProduct::all();
        
        return redirect()->route('admin.listavailableproduct', compact('product'))->with('danger', 'produk berhasil dihapus');
    }
}

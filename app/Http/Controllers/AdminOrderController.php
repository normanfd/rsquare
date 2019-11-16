<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CardiganOrder;
use App\HoodieOrder;
use App\JacketOrder;
use App\ShirtOrder;
use App\ShoesOrder;
use App\SweaterOrder;
use App\TshirtOrder;
use App\User;
use App\AvailableProductOrder;

//Controller untuk Admin melihat orderan yang masuk dan mengedit orderan sesuai perubahan keputusan user
class AdminOrderController extends Controller
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
    
    public function DeleteAvailableOrder($id)
    {
        $single_product = AvailableProductOrder::find($id);
        $single_product->delete();
        
        $order = AvailableProductOrder::all();
        return redirect()->route('admin.showavailableorder', compact('order'))->with('danger', 'pesanan berhasil dihapus');
    }

    public function ShowAvailableOrder()
    {
        $order = AvailableProductOrder::all();
        $totalorder = AvailableProductOrder::count();
        return view('admin.availableproduct.OrderAvailableProduct', compact('order'));
    }

    public function DetailAvailableProduct($id)
    {
        $single_product = AvailableProductOrder::find($id);
        return view('admin.availableproduct.DetailOrderAvailableProduct', compact('single_product'));
    }
    public function ShowAllOrder()
    {
        $cardigan = CardiganOrder::all();
        $hoodie = HoodieOrder::all();
        $jacket = JacketOrder::all();
        $shirt = ShirtOrder::all();
        $shoes = ShoesOrder::all();
        $sweater = SweaterOrder::all();
        $tshirt = TshirtOrder::all();

        return view('admin.order.vwallorder', compact('cardigan', 'hoodie', 'jacket', 'shirt', 'shoes', 'sweater', 'tshirt'));
    }

    // ------------------------JACKET------------------------------
    public function DetailJacket($id)
    {
        $single_jacket = JacketOrder::find($id);
        return view('admin.order.detailorder.JacketOrderDetail', compact('single_jacket'));
    }
    public function DeleteJacketOrder($id)
    {
        $single_product = JacketOrder::find($id);
        $single_product->delete();
        
        $cardigan = CardiganOrder::all();
        $hoodie = HoodieOrder::all();
        $jacket = JacketOrder::all();
        $shirt = ShirtOrder::all();
        $shoes = ShoesOrder::all();
        $sweater = SweaterOrder::all();
        $tshirt = TshirtOrder::all();
        
        return redirect()->route('admin.showallorder', compact('cardigan', 'hoodie', 'jacket', 'shirt', 'shoes', 'sweater', 'tshirt'))->with('danger', 'pesanan berhasil dihapus');
    }

// -----------------------------SHIRT----------------------------------------
    public function DetailShirt($id)
    {
        $single_shirt = ShirtOrder::find($id);
        return view('admin.order.detailorder.ShirtOrderDetail', compact('single_shirt'));
    }
    public function DeleteShirtOrder($id)
    {
        $single_product = ShirtOrder::find($id);
        $single_product->delete();
        
        $cardigan = CardiganOrder::all();
        $hoodie = HoodieOrder::all();
        $jacket = JacketOrder::all();
        $shirt = ShirtOrder::all();
        $shoes = ShoesOrder::all();
        $sweater = SweaterOrder::all();
        $tshirt = TshirtOrder::all();
        
        return redirect()->route('admin.showallorder', compact('cardigan', 'hoodie', 'jacket', 'shirt', 'shoes', 'sweater', 'tshirt'))->with('danger', 'pesanan berhasil dihapus');
    }

    // ---------------------------------SHOES----------------------------------------------
    public function DetailShoes($id)
    {
        $single_shoes = ShoesOrder::find($id);
        return view('admin.order.detailorder.ShoesOrderDetail', compact('single_shoes'));
    }
    public function DeleteShoesOrder($id)
    {
        $single_product = ShoesOrder::find($id);
        $single_product->delete();
        
        $cardigan = CardiganOrder::all();
        $hoodie = HoodieOrder::all();
        $jacket = JacketOrder::all();
        $shirt = ShirtOrder::all();
        $shoes = ShoesOrder::all();
        $sweater = SweaterOrder::all();
        $tshirt = TshirtOrder::all();
        
        return redirect()->route('admin.showallorder', compact('cardigan', 'hoodie', 'jacket', 'shirt', 'shoes', 'sweater', 'tshirt'))->with('danger', 'pesanan berhasil dihapus');
    }

    public function DetailTshirt($id)
    {
        $single_tshirt = TshirtOrder::find($id);
        return view('admin.order.detailorder.TshirtOrderDetail', compact('single_tshirt'));
    }
    public function DeleteTshirtOrder($id)
    {
        $single_product = TshirtOrder::find($id);
        $single_product->delete();
        
        $cardigan = CardiganOrder::all();
        $hoodie = HoodieOrder::all();
        $jacket = JacketOrder::all();
        $shirt = ShirtOrder::all();
        $shoes = ShoesOrder::all();
        $sweater = SweaterOrder::all();
        $tshirt = TshirtOrder::all();
        
        return redirect()->route('admin.showallorder', compact('cardigan', 'hoodie', 'jacket', 'shirt', 'shoes', 'sweater', 'tshirt'))->with('danger', 'pesanan berhasil dihapus');
    }
    // public function TshirtOrder()
    // {
    //     $order = TshirtOrder::all();
    //     // dd($order);
    //     return view('admin.order.tshirtorder', compact('order'));
    // }


        // //-------------------------CARDIGAN-------------------------

    // public function DetailCardigan($id)
    // {
    //     $single_cardigan = CardiganOrder::find($id);
    //     return view('admin.order.detailorder.CardiganOrderDetail', compact('single_cardigan'));
    // }
    
    // public function DetailHoodie($id)
    // {
    //     $single_hoodie = HoodieOrder::find($id);
    //     return view('admin.order.detailorder.HoodieOrderDetail', compact('single_hoodie'));
    // }
    // ---------------------------------SWEATER-----------------------------------------------------------
    // public function DetailSweater($id)
    // {
    //     $single_sweater = SweaterOrder::find($id);
    //     return view('admin.order.detailorder.SweaterOrderDetail', compact('single_sweater'));
    // }
    // public function DetailTshirt($id)
    // {
    //     $single_tshirt = TshirtOrder::find($id);
    //     return view('admin.order.detailorder.TshirtOrderDetail', compact('single_tshirt'));
    // }

    // public function CardiganOrder()
    // {
    //     $order = CardiganOrder::all();
    //     // dd($order);
    //     return view('admin.order.cardiganOrder', compact('order'));
    // }
    
    // public function HoodieOrder()
    // {
    //     $order = HoodieOrder::all();
    //     // dd($order);
    //     return view('admin.order.hoodieorder', compact('order'));
    // }

    // public function JacketOrder()
    // {
    //     $order = JacketOrder::all();
    //     // dd($order);
    //     return view('admin.order.jacketorder', compact('order'));
    // }

    // public function ShirtOrder()
    // {
    //     $order = ShirtOrder::all();
    //     // dd($order);
    //     return view('admin.order.shirtorder', compact('order'));
    // }

    // public function ShoesOrder()
    // {
    //     $order = ShoesOrder::all();
    //     // dd($order);
    //     return view('admin.order.shoesorder', compact('order'));
    // }

    // public function SweaterOrder()
    // {
    //     $order = SweaterOrder::all();
    //     // dd($order);
    //     return view('admin.order.sweaterorder', compact('order'));
    // }

    

    
}

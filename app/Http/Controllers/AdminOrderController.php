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

//Controller untuk Admin melihat orderan yang masuk dan mengedit orderan sesuai perubahan keputusan user
class AdminOrderController extends Controller
{
    //-------------------------CARDIGAN-------------------------

    public function CardiganOrder()
    {
        $order = CardiganOrder::all();
        // dd($order);
        return view('admin.order.cardiganOrder', compact('order'));
    }
    
    public function HoodieOrder()
    {
        $order = HoodieOrder::all();
        // dd($order);
        return view('admin.order.hoodieorder', compact('order'));
    }

    public function JacketOrder()
    {
        $order = JacketOrder::all();
        // dd($order);
        return view('admin.order.jacketorder', compact('order'));
    }

    public function ShirtOrder()
    {
        $order = ShirtOrder::all();
        // dd($order);
        return view('admin.order.shirtorder', compact('order'));
    }

    public function ShoesOrder()
    {
        $order = ShoesOrder::all();
        // dd($order);
        return view('admin.order.shoesorder', compact('order'));
    }

    public function SweaterOrder()
    {
        $order = SweaterOrder::all();
        // dd($order);
        return view('admin.order.sweaterorder', compact('order'));
    }

    public function TshirtOrder()
    {
        $order = TshirtOrder::all();
        // dd($order);
        return view('admin.order.tshirtorder', compact('order'));
    }
}

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
}

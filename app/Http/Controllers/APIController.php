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

class APIController extends Controller
{
    public function ListCardiganAPI(cardigan $cardigan){
        $cardigans = $cardigan->all();
        return response()->json($cardigans);
    }

    public function ListHoodieAPI(Hoodie $hoodie){
        $hoodies = $hoodie->all();
        return response()->json($hoodies);
    }

    public function ListJacketAPI(Jacket $jacket){
        $jackets = $jacket->all();
        return response()->json($jackets);
    }
    
    public function ListShirtAPI(Shirt $shirt){
        $shirts = $shirt->all();
        return response()->json($shirts);
    }

    public function ListShoesAPI(Shoes $shoes){
        $shoess = $shoes->all();
        return response()->json($shoess);
    }

    public function ListSweaterAPI(Sweater $sweater){
        $sweaters = $sweater->all();
        return response()->json($sweaters);
    }
    
    public function ListTshirtAPI(TShirt $tshirt){
        $tshirts = $tshirt->all();
        return response()->json($tshirts);
    }
}

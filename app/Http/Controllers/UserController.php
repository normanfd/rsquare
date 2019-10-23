<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cardigan;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // ------------------- CARDIGAN USER --------------------------------
    //fungsi buat nampilin index cardigan
    public function VWCardigan()
    {
        $cardigan = cardigan::all();
        return view('user.customproduct.cardigan', compact('cardigan'));
    }

    //fungsi buat nampilin detail
    public function DetailCardigan($id){
        $cardigan = cardigan::find($id);
        // dd($cardigan);
        return view('user.detailproduct.cardigan_detail', compact('cardigan'));
    }

    public function FormOrderCardigan($id)
    {
        $cardigan = cardigan::find($id);
        // dd($cardigan);
        return view('user.customorderform.cardiganorder', compact('cardigan'));
    }
}

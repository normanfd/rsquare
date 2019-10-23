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
    public function VWCardigan()
    {
        $cardigan = cardigan::all();
        return view('user.customproduct.cardigan', compact('cardigan'));
    }
}

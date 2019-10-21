<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function VWAvailableProduct()
    {
        return view('admin.availableproduct.index');
    }
}

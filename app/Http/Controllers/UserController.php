<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\cardigan;
use App\hoodie;
use App\jacket;
use App\shirt;
use App\shoes;
use App\sweater;
use App\tshirt;
use App\ShoesOrder;
use App\CardiganOrder;
use App\JacketOrder;
use App\HoodieOrder;
use App\ShirtOrder;
use App\SweaterOrder;
use App\TshirtOrder;

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

    public function CreateCardiganOrder($id, Request $request)
    {
        $this-> validate(request(),[
            'user_id' => 'required',
            'color' => 'required',
            'collar' => 'required',
            'material' => 'required',
            'buttons' => 'required',
            'sleeve' => 'required',
            'sleeve_model' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'wa_number' => 'required|numeric',
            'note' => 'required',
            'pocket' => 'required',
            'upload_design' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        

        $wa_number = request('wa_number');
        $name = request('name');
        $note = request('note');
        
        if(request('cardigan_design')!= null){
            $photo = $request->file('cardigan_design')->store('user_cardigan_images');
        }else{
            $photo = "null";
        }

        CardiganOrder::create([
            'cardigan_id' => $id,
            'user_id' => request('user_id'),
            'color' => request('selector_color'),
            'collar' => request('selector_collar'),
            'material' => request('selector_material'),
            'buttons' => request('selector_button'),
            'sleeve' => request('selector_arm'),
            'sleeve_model' => request('selector_armmodel'),
            'size' => request('size'),
            'amount' => request('amount'),
            'wa_number' => request('wa_number'),
            'note' => request('note'),
            'pocket' => request('selector_bag'),
            'upload_design' => $photo
        ]);

        return view('confirmation', compact('wa_number', 'name', 'note'));
    }
// -----------------------------HOODIE---------------------------------------------------
    //fungsi buat nampilin index hoodie
    public function VWHoodie()
    {
        $hoodie = hoodie::all();
        return view('user.customproduct.hoodie', compact('hoodie'));
    }

    //fungsi buat nampilin detail
    public function DetailHoodie($id){
        $hoodie = hoodie::find($id);
        
        return view('user.detailproduct.hoodie_detail', compact('hoodie'));
    }

    public function FormOrderHoodie($id)
    {
        $hoodie = hoodie::find($id);
    
        return view('user.customorderform.hoodieorder', compact('hoodie'));
    }

    public function CreateHoodieOrder($id, Request $request)
    {
        $this-> validate(request(),[
            'user_id' => 'required',
            'color' => 'required',
            'collar' => 'required',
            'material' => 'required',
            'sleeve' => 'required',
            'sleeve_model' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'wa_number' => 'required|numeric',
            'note' => 'required',
            'pocket' => 'required',
            'upload_design' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
        if ($this->fails()) {
            redirect()
                ->back()
                ->withErrors($this->errors());
        }
        $wa_number = request('wa_number');
        $name = request('name');
        $note = request('note');
        
        if(request('hoodie_design')!= null){
            $photo = $request->file('hoodie_design')->store('user_hoodie_images');
        }else{
            $photo = "null";
        }

        HoodieOrder::create([
            'hoodie_id' => $id,
            'user_id' => request('user_id'),
            'color' => request('selector_color'),
            'collar' => request('selector_collar'),
            'material' => request('selector_material'),
            'sleeve' => request('selector_arm'),
            'sleeve_model' => request('selector_armmodel'),
            'size' => request('size'),
            'amount' => request('amount'),
            'wa_number' => request('wa_number'),
            'note' => request('note'),
            'pocket' => request('selector_bag'),
            'upload_design' => $photo
        ]);

        return view('confirmation', compact('wa_number', 'name', 'note'));
    }
// --------------------------------jacket--------------------------------------
    //fungsi buat nampilin index jacket
    public function VWJacket()
    {
        $jacket = jacket::all();
        return view('user.customproduct.jacket', compact('jacket'));
    }

    //fungsi buat nampilin detail
    public function DetailJacket($id){
        $jacket = jacket::find($id);
        
        return view('user.detailproduct.jacket_detail', compact('jacket'));
    }

    public function FormOrderJacket($id)
    {
        $jacket = jacket::find($id);
        
        return view('user.customorderform.jacketorder', compact('jacket'));
    }

    public function CreateJacketOrder($id, Request $request)
    {
        $this-> validate(request(),[
            'user_id' => 'required',
            'color' => 'required',
            'collar' => 'required',
            'material' => 'required',
            'buttons' => 'required',
            'sleeve' => 'required',
            'sleeve_model' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'wa_number' => 'required|numeric',
            'note' => 'required',
            'pocket' => 'required',
            'upload_design' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
        if ($this->fails()) {
            redirect()
                ->back()
                ->withErrors($this->errors());
        }
        $wa_number = request('wa_number');
        $name = request('name');
        $note = request('note');

        if(request('jacket_design')!= null){
            $photo = $request->file('jacket_design')->store('user_jacket_images');
        }else{
            $photo = "null";
        }

        JacketOrder::create([
            'jacket_id' => $id,
            'user_id' => request('user_id'),
            'color' => request('selector_color'),
            'collar' => request('selector_collar'),
            'material' => request('selector_material'),
            'buttons' => request('selector_button'),
            'sleeve' => request('selector_arm'),
            'sleeve_model' => request('selector_armmodel'),
            'size' => request('size'),
            'amount' => request('amount'),
            'wa_number' => request('wa_number'),
            'note' => request('note'),
            'pocket' => request('selector_bag'),
            'upload_design' => $photo
        ]);

        return view('confirmation', compact('wa_number', 'name', 'note'));
    }
//------------------------------------------------SHIRT--------------------------------
    //fungsi buat nampilin index shirt
    public function VWShirt()
    {
        $shirt = shirt::all();
        return view('user.customproduct.shirt', compact('shirt'));
    }

    //fungsi buat nampilin detail
    public function DetailShirt($id){
        $shirt = shirt::find($id);
        
        return view('user.detailproduct.shirt_detail', compact('shirt'));
    }

    public function FormOrderShirt($id)
    {
        $shirt = shirt::find($id);
        
        return view('user.customorderform.shirtorder', compact('shirt'));
    }
    
    public function CreateShirtOrder($id, Request $request)
    {
        $this-> validate(request(),[
            'user_id' => 'required',
            'color' => 'required',
            'collar' => 'required',
            'material' => 'required',
            'buttons' => 'required',
            'sleeve' => 'required',
            'sleeve_model' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'wa_number' => 'required|numeric',
            'note' => 'required',
            'pocket' => 'required',
            'upload_design' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
        if ($this->fails()) {
            redirect()
                ->back()
                ->withErrors($this->errors());
        }
        $wa_number = request('wa_number');
        $name = request('name');
        $note = request('note');

        if(request('shirt_design')!= null){
            $photo = $request->file('shirt_design')->store('user_shirt_images');
        }else{
            $photo = "null";
        }

        ShirtOrder::create([
            'shirt_id' => $id,
            'user_id' => request('user_id'),
            'color' => request('selector_color'),
            'collar' => request('selector_collar'),
            'material' => request('selector_material'),
            'buttons' => request('selector_button'),
            'sleeve' => request('selector_arm'),
            'sleeve_model' => request('selector_armmodel'),
            'size' => request('size'),
            'amount' => request('amount'),
            'wa_number' => request('wa_number'),
            'note' => request('note'),
            'pocket' => request('selector_bag'),
            'upload_design' => $photo
        ]);

        return view('confirmation', compact('wa_number', 'name', 'note'));
    }
// ---------------------------------SHOES---------------------------------------
    //fungsi buat nampilin index shoes
    public function VWShoes()
    {
        $shoes = shoes::all();
        return view('user.customproduct.shoes', compact('shoes'));
    }

    //fungsi buat nampilin detail
    public function DetailShoes($id){
        $shoes = shoes::find($id);
        
        return view('user.detailproduct.shoes_detail', compact('shoes'));
    }

    public function FormOrderShoes($id)
    {
        $shoes = shoes::find($id);
        
        return view('user.customorderform.shoesorder', compact('shoes'));
    }

    public function CreateShoesOrder($id)
    {
        $this-> validate(request(),[
            'user_id' => 'required',
            'color' => 'required',
            'collar' => 'required',
            'material' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'wa_number' => 'required|numeric',
            'note' => 'required'
        ]);
        
        if ($this->fails()) {
            redirect()
                ->back()
                ->withErrors($this->errors());
        }
        $wa_number = request('wa_number');
        $name = request('name');
        $note = request('note');

        ShoesOrder::create([
            'shoes_id' => $id,
            'user_id' => request('user_id'),
            'color' => "request('color')",
            'material' => request('selector_material'),
            'size' => request('size'),
            'amount' => request('amount'),
            'wa_number' => request('wa_number'),
            'note' => request('note')
        ]);

        return view('confirmation', compact('wa_number', 'name', 'note'));
    }
// --------------------------------SWEATER--------------------------------------
    //fungsi buat nampilin index sweater
    public function VWSweater()
    {
        $sweater = sweater::all();
        return view('user.customproduct.sweater', compact('sweater'));
    }

    //fungsi buat nampilin detail
    public function DetailSweater($id){
        $sweater = sweater::find($id);
        
        return view('user.detailproduct.sweater_detail', compact('sweater'));
    }

    public function FormOrderSweater($id)
    {
        $sweater = sweater::find($id);
        
        return view('user.customorderform.sweaterorder', compact('sweater'));
    }

    public function CreateSweaterOrder($id, Request $request)
    {
        $this-> validate(request(),[
            'user_id' => 'required',
            'color' => 'required',
            'collar' => 'required',
            'material' => 'required',
            'sleeve' => 'required',
            'sleeve_model' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'wa_number' => 'required|numeric',
            'note' => 'required',
            'pocket' => 'required',
            'upload_design' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
        if ($this->fails()) {
            redirect()
                ->back()
                ->withErrors($this->errors());
        }
        $wa_number = request('wa_number');
        $name = request('name');
        $note = request('note');
        
        if(request('sweater_design')!= null){
            $photo = $request->file('sweater_design')->store('user_sweater_images');
        }else{
            $photo = "null";
        }

        SweaterOrder::create([
            'sweater_id' => $id,
            'user_id' => request('user_id'),
            'color' => request('selector_color'),
            'collar' => request('selector_collar'),
            'material' => request('selector_material'),
            'sleeve' => request('selector_arm'),
            'sleeve_model' => request('selector_armmodel'),
            'size' => request('size'),
            'amount' => request('amount'),
            'wa_number' => request('wa_number'),
            'note' => request('note'),
            'pocket' => request('selector_bag'),
            'upload_design' => $photo
        ]);

        return view('confirmation', compact('wa_number', 'name', 'note'));
    }    
// ------------------------------------TSHIRT--------------------------------------------
    //fungsi buat nampilin index Tshirt
    public function VWTshirt()
    {
        $tshirt = tshirt::all();
        return view('user.customproduct.tshirt', compact('tshirt'));
    }

    //fungsi buat nampilin detail
    public function DetailTshirt($id){
        $tshirt = tshirt::find($id);
        
        return view('user.detailproduct.tshirt_detail', compact('tshirt'));
    }

    public function FormOrderTshirt($id)
    {
        $tshirt = tshirt::find($id);
        
        return view('user.customorderform.tshirtorder', compact('tshirt'));
    }

    public function CreateTshirtOrder($id, Request $request)
    {
        $this-> validate(request(),[
            'user_id' => 'required',
            'color' => 'required',
            'material' => 'required',
            'sleeve' => 'required',
            'size' => 'required',
            'amount' => 'required|numeric',
            'wa_number' => 'required|numeric',
            'note' => 'required',
            'upload_design' => 'required|mimes:jpeg,png,bmp,tiff|max:4096'
        ]);
        
        if ($this->fails()) {
            redirect()
                ->back()
                ->withErrors($this->errors());
        }
        $wa_number = request('wa_number');
        $name = request('name');
        $note = request('note');

        if(request('tshirt_design')!= null){
            $photo = $request->file('tshirt_design')->store('user_tshirt_images');
        }else{
            $photo = "null";
        }


        TshirtOrder::create([
            'tshirt_id' => $id,
            'user_id' => request('user_id'),
            'color' => request('selector_color'),
            'material' => request('selector_material'),
            'sleeve' => request('selector_arm'),
            'size' => request('size'),
            'amount' => request('amount'),
            'wa_number' => request('wa_number'),
            'note' => request('note'),
            'upload_design' => $photo
        ]);

        return view('confirmation', compact('wa_number', 'name', 'note'));
    }
}

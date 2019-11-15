@extends('layouts.user')

@section('content')

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="billing_details">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <h4>Detail Pesanan</h4>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="row contact_form" action="{{ route('post.user.order.shoes', $shoes->id) }}" method="post" novalidate="novalidate">
              {{ csrf_field() }}
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="wa_number" name="wa_number" placeholder="Nomor Whatsapp" value="{{old('wa_number')}}" required/>
              </div>
              
              <!-- <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="user_id" name="user_id" value="Nama Anda = {{ Auth::getUser()->name}}" readonly/>
              </div> -->

              <div class="col-md-6 form-group p_star">
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah Order"/>
              </div>

              <input class="input" id="selector_material" name="selector_material" value="belum tersedia" hidden>
              <!-- <h4 class="col-md-12"> Pilih Bahan </h4>
              <div class="col-md-3 form-group shoes_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-1" name="selector_material" value="kain"/>
                  <label for="f-option-material-1">Kain</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group shoes_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-2" name="selector_material" value="kulit"/>
                  <label for="f-option-material-2">Kulit</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
               </div> -->
              <!-- <div class="col-md-3 form-group shoes_material"> -->
                <!-- <div class="radion_btn">
                  <input type="radio" id="f-option-material-3" name="selector_material" value="plastik"/>
                  <label for="f-option-material-3">Plastik</label>
                  <div class="check"></div>
                </div> -->
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              <!-- </div> -->
              <h4 class="col-md-12"> Pilih Warna</h4>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option1" name="selector_color" value="red"/>
                  <label for="f-option1">Black</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option2" name="selector_color" value="blue"/>
                  <label for="f-option2">Grey</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option3" name="selector_color" value="green"/>
                  <label for="f-option3">Green Army</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option4" name="selector_color" value="green"/>
                  <label for="f-option4">Brown</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector_color" value="green"/>
                  <label for="f-option5">Donker</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector_color" value="green"/>
                  <label for="f-option6">White</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="input" id="pola" name="selector_pola" value="belum tersedia"></div>
              <!-- <h4 class="col-md-12">Pilih Pola</h4>
              <div class="col-md-3 form-group shoes_pola">
                <div class="radion_btn">
                  <input type="radio" id="f-option-pola-1" name="selector_pola" value="Pola 1"/>
                  <label for="f-option-pola-1">Pola 1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group shoes_pola">
                <div class="radion_btn">
                  <input type="radio" id="f-option-pola-2" name="selector_pola" value="Pola 2"/>
                  <label for="f-option-pola-2">Pola 2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group shoes_pola">
                <div class="radion_btn">
                  <input type="radio" id="f-option-pola-3" name="selector_pola" value="Pola 3"/>
                  <label for="f-option-pola-3">Pola 3</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;">
              </div> -->

              <div class="col-md-12 form-group p_star">
                <h4>Ukuran</h4>
                <select class="form-check" id="size" name="size">
                  <option value="38">38</option>
                  <option value="39">39</option>
                  <option value="40">40</option>
                  <option value="41">41</option>
                  <option value="42">42</option>
                  <option value="43">43</option>
                  <option value="44">44</option>
                </select>
              </div>

              <div class="col-md-12 form-group">
                <h4>Catatan Khusus</h4>
                <textarea class="form-control" name="note" id="message" rows="1"
                  placeholder="Catatan Khusus..."></textarea>
              </div>

              <div class="col-md-12 form-group">
                <button type="submit" class="btn_3">Pesan Sekarang</button>
              </div>

              <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::getUser()->id}}" hidden/>
            </form>
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!--================End Checkout Area =================-->

 @endsection
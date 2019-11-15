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
            <form class="row contact_form" action="{{ route('post.user.order.tshirt', $tshirt->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="wa_number" name="wa_number" placeholder="Nomor Whatsapp" value="{{old('wa_number')}}"required/>
              </div>
              
              <!-- <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="user_id" name="user_id" value="Nama Anda = {{ Auth::getUser()->name}}" readonly/>
              </div> -->

              <div class="col-md-6 form-group p_star">
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah Order"/>
              </div>
              <input class="input" id="selector_material" name="selector_material" value="belum tersedia" hidden>
              <!-- <h4 class="col-md-12"> Pilih Bahan</h4>
              <div class="col-md-3 form-group tshirt_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-1" name="selector_material" value="kanva1"/>
                  <label for="f-option-material-1">Kain</label>
                  <div class="check"></div>
                </div>
              
              </div>
              <div class="col-md-3 form-group tshirt_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-2" name="selector_material" value="kanva2"/>
                  <label for="f-option-material-2">Flanel</label>
                  <div class="check"></div>
                </div>
              
              </div> -->

              <h4 class="col-md-12">Pilih Warna</h4>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option1" name="selector_color" value="black"/>
                  <label for="f-option1">Black</label>
                  <div class="check"></div>
                </div>
                
              </div>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option2" name="selector_color" value="grey"/>
                  <label for="f-option2">Grey</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option3" name="selector_color" value="green army"/>
                  <label for="f-option3">Green Army</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option4" name="selector_color" value="cyan"/>
                  <label for="f-option4">Cyan</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector_color" value="donker"/>
                  <label for="f-option5">Donker</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector_color" value="cream"/>
                  <label for="f-option6">Cream</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option7" name="selector_color" value="dark red"/>
                  <label for="f-option7">Dark Red</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group tshirt_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option8" name="selector_color" value="white"/>
                  <label for="f-option8">White</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>

              <input class="input" id="selector_arm" name="selector_arm" value="belum tersedia" hidden>
              <!-- <h4 class="col-md-12"> Model Kerah</h4>
              <div class="col-md-3 form-group tshirt_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-1" name="selector_arm" value="kanva1"/>
                  <label for="f-option-collar-1">Kerah 1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group tshirt_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-2" name="selector_arm" value="kanva2"/>
                  <label for="f-option-collar-2">Kerah 2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group tshirt_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-3" name="selector_arm" value="kanva2"/>
                  <label for="f-option-collar-3">Kerah 3</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div> -->


              <!-- <input class="input" id="selector_material" name="selector_arm" value="belum tersedia" hidden>
              <h4 class="col-md-12"> Model Lengan</h4>
              <div class="col-md-3 form-group tshirt_arm">
                <div class="radion_btn">
                  <input type="radio" id="f-option-arm-1" name="selector_arm" value="kanva1"/>
                  <label for="f-option-arm-1">Lengan 1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group tshirt_arm">
                <div class="radion_btn">
                  <input type="radio" id="f-option-arm-2" name="selector_arm" value="kanva2"/>
                  <label for="f-option-arm-2">Lengan 2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group tshirt_arm">
                <div class="radion_btn">
                  <input type="radio" id="f-option-arm-3" name="selector_arm" value="kanva2"/>
                  <label for="f-option-arm-3">Lengan 3</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div> -->

              <div class="col-md-12 form-group p_star">
                <h4>Ukuran</h4>
                <select class="form-check" id="size" name="size">
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                </select>
              </div>

              <div class="col-md-12 form-group">
                  <h4>Desain T-Shirt (Optional)</h4>
                  <div class="form-control">
                      <input type="file" name="tshirt_design">
                  </div>
              </div>

              <div class="col-md-12 form-group">
                <h4>Catatan Khusus (Optional )</h4>
                <textarea class="form-control" name="note" id="message" rows="1"
                  placeholder="Catatan Khusus..."></textarea>
              </div>


              <!-- <div class="col-md-12 form-group">
                <a class="btn_3 form-group" type=submit >Proceed</a>
              </div> -->
              <button type="submit" class="btn btn-success">
                Pesan Sekarang
              </button>
              
              <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::getUser()->id}}" hidden/>
            </form>
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!--================End Checkout Area =================-->

 @endsection
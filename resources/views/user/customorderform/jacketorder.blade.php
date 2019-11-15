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
            <form class="row contact_form" action="{{ route('post.user.order.jacket', $jacket->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="wa_number" name="wa_number" placeholder="Nomor Whatsapp" value="{{old('wa_number')}}" required/>
              </div>
              
              <!-- <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="user_id" name="user_id" value="Nama Anda = {{ Auth::getUser()->name}}" readonly/>
              </div> -->

              <div class="col-md-12 form-group p_star">
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah Order"/>
              </div>
              <input class="input" id="selector_material" name="selector_material" value="belum tersedia" hidden>
              <!-- <h4 class="col-md-12"> Pilih bahan</h4>
              <div class="col-md-3 form-group jacket_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-1" name="selector_material" value="kain"/>
                  <label for="f-option-material-1">Kain</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group jacket_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-2" name="selector_material" value="kulit"/>
                  <label for="f-option-material-2">Kulit</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group jacket_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-3" name="selector_material" value="katun"/>
                  <label for="f-option-material-3">Katun</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div> -->

              <h4 class="col-md-12"> Pilih warna</h4>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option1" name="selector_color" value="black"/>
                  <label for="f-option1">Black</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option2" name="selector_color" value="grey"/>
                  <label for="f-option2">Grey</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option3" name="selector_color" value="green army"/>
                  <label for="f-option3">Green Army</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option4" name="selector_color" value="cyan"/>
                  <label for="f-option4">Cyan</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option5" name="selector_color" value="donker"/>
                  <label for="f-option5">Donker</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option6" name="selector_color" value="cream"/>
                  <label for="f-option6">Cream</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option7" name="selector_color" value="dark red"/>
                  <label for="f-option7">Dark red</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>
              <div class="col-md-3 form-group jacket_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option8" name="selector_color" value="white"/>
                  <label for="f-option8">white</label>
                  <div class="check"></div>
                </div>
                <!-- <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;"> -->
              </div>

              <h4 class="col-md-12"> Model Kerah</h4>
              <div class="col-md-3 form-group jacket_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-1" name="selector_collar" value="kerah1"/>
                  <label for="f-option-collar-1">Kerah1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kerah/Kerah1.png')}}">
              </div>
              <div class="col-md-3 form-group jacket_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-2" name="selector_collar" value="kerah2"/>
                  <label for="f-option-collar-2">kerah2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kerah/Kerah2.png')}}">
              </div>
              <div class="col-md-3 form-group jacket_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-3" name="selector_collar" value="kerah3"/>
                  <label for="f-option-collar-3">kerah3</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kerah/Kerah3.png')}}">
              </div>
              <div class="col-md-3 form-group jacket_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-4" name="selector_collar" value="kerah4"/>
                  <label for="f-option-collar-4">kerah4</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kerah/Kerah4.png')}}">
              </div>
            
              <h4 class="col-md-12"> Lengan Panjang/ Pendek</h4>
              <div class="col-md-3 form-group jacket_arm">
                <div class="radion_btn">
                  <input type="radio" id="f-option-arm-1" name="selector_arm" value="pendek"/>
                  <label for="f-option-arm-1">pendek</label>
                  <div class="check"></div>
                </div>
              </div>
              <div class="col-md-3 form-group jacket_arm">
                <div class="radion_btn">
                  <input type="radio" id="f-option-arm-2" name="selector_arm" value="panjang"/>
                  <label for="f-option-arm-2">panjang</label>
                  <div class="check"></div>
                </div>
              </div>

              <h4 class="col-md-12"> Model lengan</h4>
              <div class="col-md-3 form-group jacket_armmodel">
                <div class="radion_btn">
                  <input type="radio" id="f-option-armmodel-1" name="selector_armmodel" value="model1"/>
                  <label for="f-option-armmodel-1">model1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/lengan/model1.png')}}">
              </div>
              <div class="col-md-3 form-group jacket_armmodel">
                <div class="radion_btn">
                  <input type="radio" id="f-option-armmodel-2" name="selector_armmodel" value="model2"/>
                  <label for="f-option-armmodel-2">model2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/lengan/model2.png')}}">
              </div>
              <div class="col-md-3 form-group jacket_armmodel">
                <div class="radion_btn">
                  <input type="radio" id="f-option-armmodel-3" name="selector_armmodel" value="model3"/>
                  <label for="f-option-armmodel-3">model2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/lengan/model3.png')}}">
              </div>
              <div class="col-md-3 form-group jacket_armmodel">
                <div class="radion_btn">
                  <input type="radio" id="f-option-armmodel-4" name="selector_armmodel" value="model4"/>
                  <label for="f-option-armmodel-4">model4</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/lengan/model4.png')}}">
              </div>
              

              <h4 class="col-md-12"> model kantong</h4>
              <div class="col-md-2 form-group jacket_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-1" name="selector_bag" value="kantong1"/>
                  <label for="f-option-bag-1">kantong1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kantong/kantong1.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-2" name="selector_bag" value="kantong2"/>
                  <label for="f-option-bag-2">kantong2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kantong/kantong2.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-3" name="selector_bag" value="kantong3"/>
                  <label for="f-option-bag-3">kantong1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kantong/kantong3.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-4" name="selector_bag" value="kantong4"/>
                  <label for="f-option-bag-4">kantong4</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kantong/kantong4.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-5" name="selector_bag" value="kantong5"/>
                  <label for="f-option-bag-5">kantong5</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kantong/kantong5.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-6" name="selector_bag" value="kantong6"/>
                  <label for="f-option-bag-6">kantong6</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kantong/kantong6.png')}}">
              </div>

              <h4 class="col-md-12"> Pilih sleting/ kancing depan</h4>
              <div class="col-md-2 form-group jacket_zipper">
                <div class="radion_btn">
                  <input type="radio" id="f-option-zipper-1" name="selector_zipper" value="model1"/>
                  <label for="f-option-zipper-1">model1</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kancing/model1.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_zipper">
                <div class="radion_btn">
                  <input type="radio" id="f-option-zipper-2" name="selector_zipper" value="model2"/>
                  <label for="f-option-zipper-2">model2</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kancing/model2.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_zipper">
                <div class="radion_btn">
                  <input type="radio" id="f-option-zipper-3" name="selector_zipper" value="model3"/>
                  <label for="f-option-zipper-3">model3</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kancing/model3.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_zipper">
                <div class="radion_btn">
                  <input type="radio" id="f-option-zipper-4" name="selector_zipper" value="model4"/>
                  <label for="f-option-zipper-4">model4</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kancing/model4.png')}}">
              </div>
              <div class="col-md-2 form-group jacket_zipper">
                <div class="radion_btn">
                  <input type="radio" id="f-option-zipper-5" name="selector_zipper" value="model5"/>
                  <label for="f-option-zipper-5">model5</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/jacket/kancing/model5.png')}}">
              </div>

              <!-- <h4 class="col-md-12"> Jacket Button</h4>
              <div class="col-md-3 form-group jacket_button">
                <div class="radion_btn">
                  <input type="radio" id="f-option-button-1" name="selector_button" value="kanva1"/>
                  <label for="f-option-button-1">V model</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group jacket_button">
                <div class="radion_btn">
                  <input type="radio" id="f-option-button-2" name="selector_button" value="kanva2"/>
                  <label for="f-option-button-2">O model</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group jacket_button">
                <div class="radion_btn">
                  <input type="radio" id="f-option-button-3" name="selector_button" value="kanva2"/>
                  <label for="f-option-button-3">Z model</label>
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
                  <h4>Desain Jacket (Optional)</h4>
                  <div class="form-control">
                      <input type="file" name="jacket_design">
                  </div>
              </div>

              <div class="col-md-12 form-group">
                <h4>Catatan khusus (Optional)</h4>
                <textarea class="form-control" name="note" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
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
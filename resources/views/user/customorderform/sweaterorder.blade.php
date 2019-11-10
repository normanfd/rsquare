@extends('layouts.user')

@section('content')

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h4>Order Sweater Details</h4>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form class="row contact_form" action="{{ route('post.user.order.sweater', $sweater->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="wa_number" name="wa_number" placeholder="Nomor Whatsapp" value="{{old('wa_number')}}"required/>
              </div>
              
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="user_id" name="user_id" value="Nama Anda = {{ Auth::getUser()->name}}" readonly/>
              </div>

              <div class="col-md-6 form-group p_star">
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah Order"/>
              </div>

              <h4 class="col-md-12"> Sweater Material</h4>
              <div class="col-md-3 form-group sweater_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-1" name="selector_material" value="kanva1"/>
                  <label for="f-option-material-1">Kain</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-2" name="selector_material" value="kanva2"/>
                  <label for="f-option-material-2">Kulit</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-3" name="selector_material" value="kanva2"/>
                  <label for="f-option-material-3">Katun</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>

              <h4 class="col-md-12"> Sweater Color</h4>
              <div class="col-md-3 form-group sweater_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option1" name="selector_color" />
                  <label for="f-option1">Red</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option2" name="selector_color" />
                  <label for="f-option2">Blue</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option3" name="selector_color" />
                  <label for="f-option3">Green</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option4" name="selector_color" />
                  <label for="f-option4">Cyan</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;">
              </div>

              <h4 class="col-md-12"> Sweater Collar</h4>
              <div class="col-md-3 form-group sweater_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-1" name="selector_collar" value="kanva1"/>
                  <label for="f-option-collar-1">V model</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_collar">
                <div class="radion_btn">
                  <input type="radio" id="f-option-collar-2" name="selector_collar" value="kanva2"/>
                  <label for="f-option-collar-2">O model</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
            
              <h4 class="col-md-12"> Sweater Arm</h4>
              <div class="col-md-3 form-group sweater_arm">
                <div class="radion_btn">
                  <input type="radio" id="f-option-arm-1" name="selector_arm" value="kanva1"/>
                  <label for="f-option-arm-1">Short</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_arm">
                <div class="radion_btn">
                  <input type="radio" id="f-option-arm-2" name="selector_arm" value="kanva2"/>
                  <label for="f-option-arm-2">Long</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>

              <h4 class="col-md-12"> Sweater Arm Model</h4>
              <div class="col-md-3 form-group sweater_armmodel">
                <div class="radion_btn">
                  <input type="radio" id="f-option-armmodel-1" name="selector_armmodel" value="kanva1"/>
                  <label for="f-option-armmodel-1">karet</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_armmodel">
                <div class="radion_btn">
                  <input type="radio" id="f-option-armmodel-2" name="selector_armmodel" value="kanva2"/>
                  <label for="f-option-armmodel-2">biasa</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_armmodel">
                <div class="radion_btn">
                  <input type="radio" id="f-option-armmodel-3" name="selector_armmodel" value="kanva2"/>
                  <label for="f-option-armmodel-3">kancing</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>

              <h4 class="col-md-12"> Sweater Bag</h4>
              <div class="col-md-3 form-group sweater_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-1" name="selector_bag" value="kanva1"/>
                  <label for="f-option-bag-1">Kanan</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-2" name="selector_bag" value="kanva2"/>
                  <label for="f-option-bag-2">kiri</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group sweater_bag">
                <div class="radion_btn">
                  <input type="radio" id="f-option-bag-3" name="selector_bag" value="kanva2"/>
                  <label for="f-option-bag-3">kirikanan</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>


              <div class="col-md-12 form-group p_star">
                <h4>Sweater Size</h4>
                <select class="form-check" id="size" name="size">
                  <option value="S">S</option>
                  <option value="M">M</option>
                  <option value="L">L</option>
                  <option value="XL">XL</option>
                  <option value="XXL">XXL</option>
                </select>
              </div>

              <div class="col-md-12 form-group">
                  <h4>Desain Sweater (optional)</h4>
                  <div class="form-control">
                      <input type="file" name="sweater_design">
                  </div>
              </div>

              <div class="col-md-12 form-group">
                <h4>Order Sweater Note</h4>
                <textarea class="form-control" name="note" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
              </div>


              <!-- <div class="col-md-12 form-group">
                <a class="btn_3 form-group" type=submit >Proceed</a>
              </div> -->
              <button type="submit" class="btn btn-success">
                Create
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
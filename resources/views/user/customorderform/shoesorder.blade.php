@extends('layouts.user')

@section('content')

  <!--================Checkout Area =================-->
  <section class="checkout_area section_padding">
    <div class="container">
      <div class="billing_details">
        <div class="row">
          <div class="col-lg-8">
            <h4>Order Shoes Details</h4>
            <form class="row contact_form" action="#" method="post" novalidate="novalidate">
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="number" name="number" />
                <span class="placeholder" data-placeholder="Whatsapp number"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="email" name="email" />
                <span class="placeholder" data-placeholder="Email Address"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="name" name="name" />
                <span class="placeholder" data-placeholder="Your Name"></span>
              </div>
              <div class="col-md-6 form-group p_star">
                <input type="text" class="form-control" id="amount" name="amount" />
                <span class="placeholder" data-placeholder="Order Amount"></span>
              </div>
            
              <h4 class="col-md-12"> Shoes Color</h4>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option1" name="selector_color" />
                  <label for="f-option1">Red</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option2" name="selector_color" />
                  <label for="f-option2">Blue</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group shoes_color">
                <div class="radion_btn">
                  <input type="radio" id="f-option3" name="selector_color" />
                  <label for="f-option3">Green</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;">
              </div>

              <h4 class="col-md-12"> Shoes Material</h4>
              <div class="col-md-3 form-group shoes_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-1" name="selector_material" />
                  <label for="f-option-material-1">Kain</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_1.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group shoes_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-2" name="selector_material" />
                  <label for="f-option-material-2">Kulit</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_2.png')}}" alt="" style="width:200px;height:200px;">
              </div>
              <div class="col-md-3 form-group shoes_material">
                <div class="radion_btn">
                  <input type="radio" id="f-option-material-3" name="selector_material" />
                  <label for="f-option-material-3">Plastik</label>
                  <div class="check"></div>
                </div>
                <img src="{{asset('winter/img/instagram/inst_3.png')}}" alt="" style="width:200px;height:200px;">
              </div>

              <div class="col-md-12 form-group p_star">
                <h4>Shoes Size</h4>
                <select class="shoes_size">
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
                <h4>Order Shoes Note</h4>
                <textarea class="form-control" name="message" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
              </div>
              <div class="col-md-12 form-group">
                <a class="btn_3 form-group" href="#">Proceed to Paypal</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>    
  </section>
  <!--================End Checkout Area =================-->

 @endsection
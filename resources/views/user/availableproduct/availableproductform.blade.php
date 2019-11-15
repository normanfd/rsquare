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
            <form class="row contact_form" action="{{ route('post.user.order.availableproduct', $product->id) }}" method="post" novalidate="novalidate" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="col-md-12 form-group p_star">
                <input type="text" class="form-control" id="wa_number" name="wa_number" placeholder="Nomor Whatsapp" value="{{old('wa_number')}}" required/>
              </div>
              
              <div class="col-md-12 form-group p_star">
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Jumlah Order"/>
              </div>

              <!-- jangan lupa set saja size shoes == 1-->
              @if( $product->category_id == 1)
                <div class="col-md-12 form-group p_star">
                  <h4>Ukuran Sepatu</h4>
                  <select class="form-check" id="size" name="size">
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                  </select>
                </div>
              @else
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
              @endif
              
              <div class="col-md-12 form-group">
                <h4>Catatan khusus</h4>
                <textarea class="form-control" name="note" id="message" rows="1"
                  placeholder="Order Notes"></textarea>
              </div>

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
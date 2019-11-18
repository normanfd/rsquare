<!-- Menampilkan order sesuai dengan user bersangkutan -->




@extends('layouts.user')

@section('content')

<section class="cart_area section_padding">
    <div class="container">
      <div class="cart_inner">
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Product</th>
                <th scope="col">Category</th>
                <th scope="col">Harga</th>
                <th scope="col">Quantity</th>
                <th scope="col">Total</th>
              </tr>
            </thead>
            <tbody>
            <!-- Available -->
            @foreach($availableorder as $apo)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="../../../storage/{{ $apo->availableproduct->product_image }}" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="{{route('user.order.avail.detail', $apo->id)}}">{{$apo->availableproduct->product_name}}</a>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>Available</h5>
                </td>
                <td>
                  <h5>Rp{{ $apo->availableproduct->product_price }}</h5>
                </td>
                <td>
                  <h5>{{ $apo->amount }}</h5>
                </td>
                <td>
                  <h5>Rp{{ $apo->amount * $apo->availableproduct->product_price }}</h5>
                </td>
              </tr>
            @endforeach

            <!-- Jacket -->
            @foreach($jacket as $jacketorder)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="../../../storage/{{ $jacketorder->jacket->jacket_image }}" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="{{route('user.order.jacket.detail', $jacketorder->id)}}">{{$jacketorder->jacket->jacket_name}}</a>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>Jacket</h5>
                </td>
                <td>
                  <h5>Rp{{ $jacketorder->jacket->jacket_price }}</h5>
                </td>
                <td>
                  <h5>{{ $jacketorder->amount }}</h5>
                </td>
                <td>
                  <h5>Rp{{ $jacketorder->amount * $jacketorder->jacket->jacket_price }}</h5>
                </td>
              </tr>
            @endforeach

            <!-- Shirt -->
            @foreach($shirt as $shirtorder)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="../../../storage/{{ $shirtorder->shirt->shirt_image }}" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="{{route('user.order.shirt.detail', $shirtorder->id)}}">{{$shirtorder->shirt->shirt_name}}</a>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>Shirt</h5>
                </td>
                <td>
                  <h5>Rp{{ $shirtorder->shirt->shirt_price }}</h5>
                </td>
                <td>
                  <h5>{{ $shirtorder->amount }}</h5>
                </td>
                <td>
                  <h5>Rp{{ $shirtorder->amount * $shirtorder->shirt->shirt_price }}</h5>
                </td>
              </tr>
            @endforeach

            <!-- Tshirt -->
            @foreach($tshirt as $tshirtorder)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="../../../storage/{{ $tshirtorder->tshirt->tshirt_image }}" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="{{route('user.order.tshirt.detail', $tshirtorder->id)}}">{{$tshirtorder->tshirt->tshirt_name}}</a>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>tshirt</h5>
                </td>
                <td>
                  <h5>Rp{{ $tshirtorder->tshirt->tshirt_price }}</h5>
                </td>
                <td>
                  <h5>{{ $tshirtorder->amount }}</h5>
                </td>
                <td>
                  <h5>Rp{{ $tshirtorder->amount * $tshirtorder->tshirt->tshirt_price }}</h5>
                </td>
              </tr>
            @endforeach

            <!-- Shoes -->
            @foreach($shoes as $shoesorder)
              <tr>
                <td>
                  <div class="media">
                    <div class="d-flex">
                      <img src="../../../storage/{{ $shoesorder->shoes->shoes_image }}" alt="" />
                    </div>
                    <div class="media-body">
                        <a href="{{route('user.order.shoes.detail', $shoesorder->id)}}">{{$shoesorder->shoes->shoes_name}}</a>
                    </div>
                  </div>
                </td>
                <td>
                  <h5>shoes</h5>
                </td>
                <td>
                  <h5>Rp{{ $shoesorder->shoes->shoes_price }}</h5>
                </td>
                <td>
                  <h5>{{ $shoesorder->amount }}</h5>
                </td>
                <td>
                  <h5>Rp{{ $shoesorder->amount * $shoesorder->shoes->shoes_price }}</h5>
                </td>
              </tr>
            @endforeach
            
            </tbody>
          </table>
        </div>
    </div>
</section>

@endsection
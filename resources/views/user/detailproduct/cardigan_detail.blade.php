<div class="h1">INI HALAMAN DETAIL</div>
{{$cardigan->cardigan_id }} <br>
{{$cardigan->cardigan_name }} <br>
{{$cardigan->cardigan_price }} <br>
{{$cardigan->cardigan_desc }} <br>
{{$cardigan->cardigan_image }} <br>
<a class="btn btn-primary" href="{{route('user.order.cardigan', $cardigan->id)}}" role="button">Order This Product</a>
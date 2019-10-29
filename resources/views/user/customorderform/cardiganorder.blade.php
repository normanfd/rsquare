<div class="h1">INI HALAMAN ORDER</div>
{{$cardigan->cardigan_name }} <br>
{{$cardigan->cardigan_price }} <br>
{{$cardigan->cardigan_desc }} <br>
{{$cardigan->cardigan_image }} <br>
user_id : {{ Auth::getUser()->id}} <br>
cardigan_id : {{$cardigan->id }} <br>
<!-- Mendapatkan data cardigan -->

@foreach($order as $cardigan)
    <h5>Order {{$cardigan->id}}</h5>
    id : {{$cardigan->cardigan_id}}
    {{$cardigan->cardigan->cardigan_name}}
    user id : {{$cardigan->user_id}}
    {{$cardigan->user->name}}
    material : {{$cardigan->material}}
    warna : {{$cardigan->color}}
    kerah : {{$cardigan->collar}}
    kancing : {{$cardigan->buttons}}
    lengan : {{$cardigan->sleeve}}
    model lengan : {{$cardigan->sleeve_model}}
    kantong : {{$cardigan->pocket}}
    ukuran : {{$cardigan->size}}
    <!-- {{$cardigan->upload_design}} -->
    jumlah : {{$cardigan->amount}}
    nomor wa : {{$cardigan->wa_number}}
    catatan : {{$cardigan->note}}
    <br>
@endforeach
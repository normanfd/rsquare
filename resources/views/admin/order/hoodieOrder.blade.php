<!-- Mendapatkan data hoodie -->
@foreach($order as $hoodie)
    <h5>Order {{$hoodie->id}}</h5>
    id : {{$hoodie->hoodie_id}}
    {{$hoodie->hoodie->hoodie_name}}
    user id : {{$hoodie->user_id}}
    {{$hoodie->user->name}}
    material : {{$hoodie->material}}
    warna : {{$hoodie->color}}
    kerah : {{$hoodie->collar}}
    kancing : {{$hoodie->buttons}}
    lengan : {{$hoodie->sleeve}}
    model lengan : {{$hoodie->sleeve_model}}
    kantong : {{$hoodie->pocket}}
    ukuran : {{$hoodie->size}}
    <!-- {{$hoodie->upload_design}} -->
    jumlah : {{$hoodie->amount}}
    nomor wa : {{$hoodie->wa_number}}
    catatan : {{$hoodie->note}}
    <br>
@endforeach
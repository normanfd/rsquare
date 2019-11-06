<!-- Mendapatkan data tshirt -->
@foreach($order as $tshirt)
    <h5>Order {{$tshirt->id}}</h5>
    id : {{$tshirt->tshirt_id}}
    {{$tshirt->tshirt->tshirt_name}}
    user id : {{$tshirt->user_id}}
    {{$tshirt->user->name}}
    material : {{$tshirt->material}}
    warna : {{$tshirt->color}}
    kerah : {{$tshirt->collar}}
    kancing : {{$tshirt->buttons}}
    lengan : {{$tshirt->sleeve}}
    model lengan : {{$tshirt->sleeve_model}}
    kantong : {{$tshirt->pocket}}
    ukuran : {{$tshirt->size}}
    <!-- {{$tshirt->upload_design}} -->
    jumlah : {{$tshirt->amount}}
    nomor wa : {{$tshirt->wa_number}}
    catatan : {{$tshirt->note}}
    <br>
@endforeach
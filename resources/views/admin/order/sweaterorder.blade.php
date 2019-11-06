<!-- Mendapatkan data sweater -->
@foreach($order as $sweater)
    <h5>Order {{$sweater->id}}</h5>
    id : {{$sweater->sweater_id}}
    {{$sweater->sweater->sweater_name}}
    user id : {{$sweater->user_id}}
    {{$sweater->user->name}}
    material : {{$sweater->material}}
    warna : {{$sweater->color}}
    kerah : {{$sweater->collar}}
    kancing : {{$sweater->buttons}}
    lengan : {{$sweater->sleeve}}
    model lengan : {{$sweater->sleeve_model}}
    kantong : {{$sweater->pocket}}
    ukuran : {{$sweater->size}}
    <!-- {{$sweater->upload_design}} -->
    jumlah : {{$sweater->amount}}
    nomor wa : {{$sweater->wa_number}}
    catatan : {{$sweater->note}}
    <br>
@endforeach
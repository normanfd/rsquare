<!-- Mendapatkan data shoes -->
@foreach($order as $shoes)
    <h5>Order {{$shoes->id}}</h5>
    id : {{$shoes->shoes_id}}
    {{$shoes->shoes->shoes_name}}
    user id : {{$shoes->user_id}}
    {{$shoes->user->name}}
    material : {{$shoes->material}}
    warna : {{$shoes->color}}
    kerah : {{$shoes->collar}}
    kancing : {{$shoes->buttons}}
    lengan : {{$shoes->sleeve}}
    model lengan : {{$shoes->sleeve_model}}
    kantong : {{$shoes->pocket}}
    ukuran : {{$shoes->size}}
    <!-- {{$shoes->upload_design}} -->
    jumlah : {{$shoes->amount}}
    nomor wa : {{$shoes->wa_number}}
    catatan : {{$shoes->note}}
    <br>
@endforeach
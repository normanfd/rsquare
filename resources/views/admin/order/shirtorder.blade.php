<!-- Mendapatkan data shirt -->
@foreach($order as $shirt)
    <h5>Order {{$shirt->id}}</h5>
    id : {{$shirt->shirt_id}}
    {{$shirt->shirt->shirt_name}}
    user id : {{$shirt->user_id}}
    {{$shirt->user->name}}
    material : {{$shirt->material}}
    warna : {{$shirt->color}}
    kerah : {{$shirt->collar}}
    kancing : {{$shirt->buttons}}
    lengan : {{$shirt->sleeve}}
    model lengan : {{$shirt->sleeve_model}}
    kantong : {{$shirt->pocket}}
    ukuran : {{$shirt->size}}
    <!-- {{$shirt->upload_design}} -->
    jumlah : {{$shirt->amount}}
    nomor wa : {{$shirt->wa_number}}
    catatan : {{$shirt->note}}
    <br>
@endforeach
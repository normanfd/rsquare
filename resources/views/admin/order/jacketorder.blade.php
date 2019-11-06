<!-- Mendapatkan data jacket -->
@foreach($order as $jacket)
    <h5>Order {{$jacket->id}}</h5>
    id : {{$jacket->jacket_id}}
    {{$jacket->jacket->jacket_name}}
    user id : {{$jacket->user_id}}
    {{$jacket->user->name}}
    material : {{$jacket->material}}
    warna : {{$jacket->color}}
    kerah : {{$jacket->collar}}
    kancing : {{$jacket->buttons}}
    lengan : {{$jacket->sleeve}}
    model lengan : {{$jacket->sleeve_model}}
    kantong : {{$jacket->pocket}}
    ukuran : {{$jacket->size}}
    <!-- {{$jacket->upload_design}} -->
    jumlah : {{$jacket->amount}}
    nomor wa : {{$jacket->wa_number}}
    catatan : {{$jacket->note}}
    <br>
@endforeach
<!-- Mendapatkan data cardigandata -->
@foreach($cardigan as $cardigandata)
    <h5>cardigan {{$cardigandata->id}}</h5>
    id : {{$cardigandata->cardigandata_id}}
    {{$cardigandata->cardigan->cardigan_name}}
    user id : {{$cardigandata->user_id}}
    {{$cardigandata->user->name}}
    material : {{$cardigandata->material}}
    warna : {{$cardigandata->color}}
    kerah : {{$cardigandata->collar}}
    kancing : {{$cardigandata->buttons}}
    lengan : {{$cardigandata->sleeve}}
    model lengan : {{$cardigandata->sleeve_model}}
    kantong : {{$cardigandata->pocket}}
    ukuran : {{$cardigandata->size}}
    <!-- {{$cardigandata->upload_design}} -->
    jumlah : {{$cardigandata->amount}}
    nomor wa : {{$cardigandata->wa_number}}
    catatan : {{$cardigandata->note}}
    <br>
@endforeach

<!-- Mendapatkan data hoodiedata -->
@foreach($hoodie as $hoodiedata)
    <h5>Hoodie {{$hoodiedata->id}}</h5>
    id : {{$hoodiedata->hoodiedata_id}}
    {{$hoodiedata->hoodie->hoodie_name}}
    user id : {{$hoodiedata->user_id}}
    {{$hoodiedata->user->name}}
    material : {{$hoodiedata->material}}
    warna : {{$hoodiedata->color}}
    kerah : {{$hoodiedata->collar}}
    kancing : {{$hoodiedata->buttons}}
    lengan : {{$hoodiedata->sleeve}}
    model lengan : {{$hoodiedata->sleeve_model}}
    kantong : {{$hoodiedata->pocket}}
    ukuran : {{$hoodiedata->size}}
    <!-- {{$hoodiedata->upload_design}} -->
    jumlah : {{$hoodiedata->amount}}
    nomor wa : {{$hoodiedata->wa_number}}
    catatan : {{$hoodiedata->note}}
    <br>
@endforeach

<!-- Mendapatkan data jacketdata -->
@foreach($jacket as $jacketdata)
    <h5>Jacket {{$jacketdata->id}}</h5>
    id : {{$jacketdata->jacketdata_id}}
    {{$jacketdata->jacket->jacket_name}}
    user id : {{$jacketdata->user_id}}
    {{$jacketdata->user->name}}
    material : {{$jacketdata->material}}
    warna : {{$jacketdata->color}}
    kerah : {{$jacketdata->collar}}
    kancing : {{$jacketdata->buttons}}
    lengan : {{$jacketdata->sleeve}}
    model lengan : {{$jacketdata->sleeve_model}}
    kantong : {{$jacketdata->pocket}}
    ukuran : {{$jacketdata->size}}
    <!-- {{$jacketdata->upload_design}} -->
    jumlah : {{$jacketdata->amount}}
    nomor wa : {{$jacketdata->wa_number}}
    catatan : {{$jacketdata->note}}
    <br>
@endforeach

<!-- Mendapatkan data shirdata -->
@foreach($shirt as $shirdata)
    <h5>Shirt {{$shirdata->id}}</h5>
    id : {{$shirdata->shirdata_id}}
    {{$shirdata->shirt->shirt_name}}
    user id : {{$shirdata->user_id}}
    {{$shirdata->user->name}}
    material : {{$shirdata->material}}
    warna : {{$shirdata->color}}
    kerah : {{$shirdata->collar}}
    kancing : {{$shirdata->buttons}}
    lengan : {{$shirdata->sleeve}}
    model lengan : {{$shirdata->sleeve_model}}
    kantong : {{$shirdata->pocket}}
    ukuran : {{$shirdata->size}}
    <!-- {{$shirdata->upload_design}} -->
    jumlah : {{$shirdata->amount}}
    nomor wa : {{$shirdata->wa_number}}
    catatan : {{$shirdata->note}}
    <br>
@endforeach

<!-- Mendapatkan data shoesdata -->
@foreach($shoes as $shoesdata)
    <h5>Shoes {{$shoesdata->id}}</h5>
    id : {{$shoesdata->shoesdata_id}}
    {{$shoesdata->shoes->shoes_name}}
    user id : {{$shoesdata->user_id}}
    {{$shoesdata->user->name}}
    material : {{$shoesdata->material}}
    warna : {{$shoesdata->color}}
    kerah : {{$shoesdata->collar}}
    kancing : {{$shoesdata->buttons}}
    lengan : {{$shoesdata->sleeve}}
    model lengan : {{$shoesdata->sleeve_model}}
    kantong : {{$shoesdata->pocket}}
    ukuran : {{$shoesdata->size}}
    <!-- {{$shoesdata->upload_design}} -->
    jumlah : {{$shoesdata->amount}}
    nomor wa : {{$shoesdata->wa_number}}
    catatan : {{$shoesdata->note}}
    <br>
@endforeach

<!-- Mendapatkan data sweaterdata -->
@foreach($sweater as $sweaterdata)
    <h5>Sweater {{$sweaterdata->id}}</h5>
    id : {{$sweaterdata->sweaterdata_id}}
    {{$sweaterdata->sweater->sweater_name}}
    user id : {{$sweaterdata->user_id}}
    {{$sweaterdata->user->name}}
    material : {{$sweaterdata->material}}
    warna : {{$sweaterdata->color}}
    kerah : {{$sweaterdata->collar}}
    kancing : {{$sweaterdata->buttons}}
    lengan : {{$sweaterdata->sleeve}}
    model lengan : {{$sweaterdata->sleeve_model}}
    kantong : {{$sweaterdata->pocket}}
    ukuran : {{$sweaterdata->size}}
    <!-- {{$sweaterdata->upload_design}} -->
    jumlah : {{$sweaterdata->amount}}
    nomor wa : {{$sweaterdata->wa_number}}
    catatan : {{$sweaterdata->note}}
    <br>
@endforeach

<!-- Mendapatkan data tshirtdata -->
@foreach($tshirt as $tshirtdata)
    <h5>Tshirt {{$tshirtdata->id}}</h5>
    id : {{$tshirtdata->tshirtdata_id}}
    {{$tshirtdata->tshirt->tshirt_name}}
    user id : {{$tshirtdata->user_id}}
    {{$tshirtdata->user->name}}
    material : {{$tshirtdata->material}}
    warna : {{$tshirtdata->color}}
    kerah : {{$tshirtdata->collar}}
    kancing : {{$tshirtdata->buttons}}
    lengan : {{$tshirtdata->sleeve}}
    model lengan : {{$tshirtdata->sleeve_model}}
    kantong : {{$tshirtdata->pocket}}
    ukuran : {{$tshirtdata->size}}
    <!-- {{$tshirtdata->upload_design}} -->
    jumlah : {{$tshirtdata->amount}}
    nomor wa : {{$tshirtdata->wa_number}}
    catatan : {{$tshirtdata->note}}
    <br>
@endforeach
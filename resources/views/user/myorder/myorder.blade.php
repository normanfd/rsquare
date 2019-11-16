<!-- Menampilkan order sesuai dengan user bersangkutan -->

Available product
<br>
@foreach($availableorder as $apo)
    id order : {{$apo->id}}
    nama produk : {{$apo->availableproduct->product_name}}
    <a href="{{route('user.order.avail.detail', $apo->id)}}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
    <br>
@endforeach
<br>
Jacket
<br>
@foreach($jacket as $jacketorder)
    {{$jacketorder->id}}
    {{$jacketorder->jacket->jacket_name}}
    <a href="{{route('user.order.jacket.detail', $jacketorder->id)}}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
    <br>
@endforeach
<br>
Shirt
<br>
@foreach($shirt as $shirtorder)
    {{$shirtorder->id}}
    {{$shirtorder->shirt->shirt_name}}
    <a href="{{route('user.order.shirt.detail', $shirtorder->id)}}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
    <br>
@endforeach
<br>
Shoes
<br>
@foreach($shoes as $shoesorder)
    {{$shoesorder->id}}
    {{$shoesorder->shoes->shoes_name}}
    <a href="{{route('user.order.shoes.detail', $shoesorder->id)}}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
    <br>
@endforeach
<br>
Tshirt
<br>
@foreach($tshirt as $tshirtorder)
    {{$tshirtorder->id}}
    {{$tshirtorder->tshirt->tshirt_name}}
    <a href="{{route('user.order.tshirt.detail', $tshirtorder->id)}}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
    <br>
@endforeach
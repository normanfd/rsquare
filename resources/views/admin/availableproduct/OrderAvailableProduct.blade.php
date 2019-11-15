CARA AMBIL DATA
<br>
@foreach($order as $product)
    id pesanan : {{$product->id}},
    Pemesan : {{$product->user->name}},
    Produk yang dipesan : {{$product->availableproduct->product_name}},
    kategori pesanan : {{$product->availableproduct->category->category_name}}
    <a href="{{ route('admin.detail.availableproduct', $product->id) }}" class="m-btn m-btn--hover-brand btn btn-sm btn-primary">Detail</a>
    <br>
@endforeach
id pesanan : {{$single_product->id}} <br>
Pemesan : {{$single_product->user->name}} <br>
Produk yang dipesan : {{$single_product->availableproduct->product_name}} <br>
kategori pesanan : {{$single_product->availableproduct->category->category_name}} <br>
<form action="{{ route('admin.delete.available.order', $single_product->id) }}" method="post">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button class="m-btn  btn btn-sm btn-info" type="submit">Hapus</button>
</form>
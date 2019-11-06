Old data <br>
id produk : {{$product->id}}
kategory produk : {{$product->category_id}}
Kode Produk : {{$product->product_id}}
Name produk : {{$product->product_name}}
Harga produk : {{$product->product_price}}
<a class="btn btn-primary" href=" {{ route('admin.PostEditAvailableProduct', $product->id) }}" role="button">Simpan Perubahan</a>
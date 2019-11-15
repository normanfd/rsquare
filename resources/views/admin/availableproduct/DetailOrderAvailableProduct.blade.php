id pesanan : {{$single_product->id}} <br>
Pemesan : {{$single_product->user->name}} <br>
Produk yang dipesan : {{$single_product->availableproduct->product_name}} <br>
kategori pesanan : {{$single_product->availableproduct->category->category_name}} <br>
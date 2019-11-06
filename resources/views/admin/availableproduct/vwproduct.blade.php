<!-- Mendapatkan data available product -->
@foreach($product as $produk)
    <h6>produk id : {{ $produk->id }}</h6>
    produk kategori : {{ $produk->category->category_name }}
    nama produk : {{ $produk->product_name }}
    harga produk : {{ $produk->product_price }}
    <br>
    <img src="../storage/{{ $produk->product_image }}" alt="ini gambar cardigan" width=200 height=200>

    <a class="btn btn-primary" href=" {{ route('admin.EditAvailProduct', $produk->id)}}" role="button">Edit</a>
    
@endforeach
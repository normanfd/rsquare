@foreach($hoodie as $produk)
    {{ $produk->id}}
    {{ $produk->hoodie_name}}
    <a href="{{ route('admin.Editcustomhoodie', $produk->id) }}" type="button">Edit</a>
    <div class="m-widget4__ext">
        <!-- {{ route('admin.DeleteAvailProduct', $produk->id) }} -->
        <form action="{{ route('admin.Deletecustomhoodie', $produk->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
        </form>
    </div>
    <br>
@endforeach
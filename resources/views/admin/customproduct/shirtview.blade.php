@foreach($shirt as $produk)
    {{ $produk->id}}
    {{ $produk->shirt_name}}
    <a href="{{ route('admin.Editcustomshirt', $produk->id) }}" type="button">Edit</a>
    <div class="m-widget4__ext">
        <!-- {{ route('admin.DeleteAvailProduct', $produk->id) }} -->
        <form action="{{ route('admin.Deletecustomshirt', $produk->id) }}" method="post">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button class="m-btn  btn btn-sm btn-danger" type="submit">Delete</button>
        </form>
    </div>
    <br>
@endforeach
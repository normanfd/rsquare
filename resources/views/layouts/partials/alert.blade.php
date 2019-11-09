@if(session('success'))
    <div class="alert alerts-success">
        {{ session('success')}}
    </div> 
@endif

@if(session('info'))
    <div class="alert alerts-info">
        {{ session('info')}}
    </div>
@endif

@if(session('danger'))
    <div class="alert alerts-danger">
        {{ session('danger')}}
    </div>
@endif
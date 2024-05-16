

@include('templates.header')

@if(session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
    @endif
<a href="/add-product" class="btn btn-primary">Add Product</a>

    <x-products :products="$products"/>
    @include('templates.footer')
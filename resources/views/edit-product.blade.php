@include('templates.header')
<div class="container">
    <br>
    <h2>Product - Edit Product </h2>
    <hr>
    @if($errors->any())
      @foreach($errors->all() as $err)
      <div class="alert alert-danger">
        {{$err}}
      </div>
      @endforeach
    @endif
    <form action="/edit-product/{{ $product->id }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="name" name="product_name" placeholder="Product Name"
                value="{{ old('product_name') ? old('product_name') : $product->product_name }}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Product Price</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Price"
                value="{{ old('price') ? old('price') : $product->price }}">
        </div>

        <div class="mb-3">
            <label for="quantity" class="form-label">Product Quantity</label>
            <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity"
                value="{{ old('quantity') ? old('quantity') : $product->quantity }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Product Description</label>
            <textarea class="form-control" id="description" rows="3" name="description">
                {{ old('description') ? old('description') : $product->description }}
            </textarea>
        </div>

        <input type="hidden" name="id" value="{{$product->id}}">
        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
    </form>
</div>

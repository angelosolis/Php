@include('templates.header')
<div class="container">
    <br>
    <h2>Product - Add Product </h2>
    <hr>
    @if($errors)
      @foreach($errors->all() as $err)
      <div class="alert alert-danger">
        {{$err}}
    </div>
    @endforeach
    @endif
<form action="/add-product" method="post">
    @csrf
<div class="mb-3">
  <label for="name" class="form-label">Product Name</label>
  <input type="text" class="form-control" id="name" name="product_name" placeholder="Product Name"
  value="{{old('product_name')}}"></input>
</div>

<div class="mb-3">
  <label for="price" class="form-label">Product Price</label>
  <input type="text" class="form-control" id="price" name="price" placeholder="Price" value="{{old('price')}}"></input>
</div>

<div class="mb-3">
  <label for="quantity" class="form-label">Product Quantity</label>
  <input type="text" class="form-control" id="quantity" name="quantity" placeholder="Quantity" value="{{old('quantity')}}"></input>
</div>


<div class="mb-3">
  <label for="description" class="form-label">Product Description</label>
  <textarea class="form-control" id="description" rows="3" name="description">{{old('description')}}</textarea>
</div>


<button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>
</div>

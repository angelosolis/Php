
    <table class="table table-striped">
        <tr>
            <th>Product Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
        <tr>
            <td><a href="/product-details/{{$product->id}}">{{ $product->product_name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->quantity }}</td>
            <td>{{ $product->price }}</td>
            <td><image width="100px" height="100px"src="{{$product->imageUrl}}"></td>
            <td>
                <form action="/delete-product/{{$product->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

       
    </table>
    {{$products->links()}}
    
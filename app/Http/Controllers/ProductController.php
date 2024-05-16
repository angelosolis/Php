<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;

class ProductController extends Controller
{
    public function index()
    {
     $products = Product::paginate(8);
     $users = User::all();
     return view ('index')->with('products', $products)->with('users',$users);
    }

    public function productDetails($id)
    {
        $product = Product::find($id);
        //$products = Product
        $products = Product::inRandomOrder()->take(6)->get();
        return view('product-details')->with('product', $product)->with('products', $products);
    }

    public function addProduct()
    {
        return view('add-product');
    }

    public function addProductPost(Request $request)
    {
      
        $validateData = $request->validate([
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'nullable|string',
        ]);
    

        $product = new Product();
        $product->product_name = $request->input('product_name');
        $product->price = $request->input('price');
        $product->quantity = $request->input('quantity');
        $product->description = $request->input('description');
    

        $product->save();
    

        return view('add-product');
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('edit-product')->with('product', $product);
    }
    
    public function editProductPost(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required|integer', // Ensure id is present and integer
            'product_name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'description' => 'nullable|string',
        ]);
    
        Product::where('id', $request['id'])->update([
            'product_name' => $validateData['product_name'],
            'price' => $validateData['price'],
            'quantity' => $validateData['quantity'],
            'description' => $validateData['description'],
        ]);
    
        // Redirect to product details with concatenated ID
        return redirect('/product-details/' . $request['id']);
    }
    
    public function deleteProduct($id)
{
    Product::destroy($id);
    return redirect('/')->with('success', 'Product deleted successfully');
}


    
}

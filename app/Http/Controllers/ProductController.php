<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allProducts(Request $request)

    {
        if (isset($request->instock)) {
            $stock = $request->instock;
            $products = Product::where('stock', '=', $stock)->get();
        }  else {
            $products = Product::all();
        }
        return view('products', ['products' => $products]);
    }
    public function getSingleProduct(int $id) {
        $product = Product::find($id);
        var_dump($product);
        return response ('hello world');
    }

}

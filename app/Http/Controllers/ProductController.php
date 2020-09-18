<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use App\Models\Product;

class ProductController extends Controller {
    public function get_products() {
        $products = Product::all();

        return response(json_encode([
            'status' => 'success',
            'data' => [
                'products' => $products
            ]
        ]));
    }

    public function get_product($id) {
        $product = Product::find($id);

        return response(json_encode([
            'status' => 'success',
            'data' => [
                'product' => $product
            ]
        ]));
    }
}
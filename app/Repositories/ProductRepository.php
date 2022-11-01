<?php

namespace App\Repositories;

use App\Interfaces\ProductInterface;
use App\Models\Product;

class ProductRepository implements ProductInterface {

    public function getProducts(int $paginate = 10) {
        return Product::select('id','title','description','image')
                        ->paginate($paginate);
    }

    public function getProduct(int $product_id) {
        return Product::where('id', $product_id)
                        ->get();
    }

    public function setProduct(array $product) {
        return Product::create($product);
    }

    public function updateProduct(int $product_id, array $product) {
        return Product::where('id', $product_id)
                        ->update($product);
    }
}

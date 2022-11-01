<?php

namespace App\Interfaces;

interface ProductInterface {
    public function getProducts(int $paginate);
    public function getProduct(int $product_id);
    public function setProduct(array $product);
    public function updateProduct(int $product_id, array $product);
}

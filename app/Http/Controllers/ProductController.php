<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\ProductRepository;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    use HttpResponses;

    private $productRepository;

    private function __construct(ProductRepository $productRepository) {
        $this->productRepository = $productRepository;
    }

    public function getProducts() {
        try {
            $products = $this->productRepository->getProducts();
            return $this->success([
                'status' => true,
                'data'   =>  $products
            ]);
        } catch(\Throwable $th) {
                $message = 'Something went wrong. Please try again later';
                // TODO::Log unexpected errors
                return $this->error($message, 500);
        }
    }
}

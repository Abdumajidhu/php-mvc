<?php

namespace App\Controllers;

use App\Models\Product;

class Products
{
    public function index()
    {
        $model = new Product;
        $products = $model->getData();
        require "views/products_index.php";
    }

    public function show()
    {
        require "src/models/product_show.php";
        // $product = new Product;
        // $products = $product->getData();
        // require "views/products_index.php";
    }

}
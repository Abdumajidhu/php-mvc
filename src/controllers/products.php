<?php
class Products
{
    public function index()
    {
        require "src/models/product.php";
        $product = new Product;
        $products = $product->getData();
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
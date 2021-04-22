<?php
require_once 'product.php';
require_once 'connection.php';


class ProductLoader {

    public static function getAllProducts(PDO $PDO) : array
    {
        $query = $PDO->query('select * from fundamentals.products ORDER BY productID');
        $query->execute();
        $rawProducts = $query->fetchAll();

        $products = [];
        foreach ($rawProducts as ['productID' => $productID, 'name' => $name, 'price' => $price, 'tax' => $tax]) {
            $products[] = Product::loadProductDB(
                $productID,
                $name,
                $price,
                $tax
            );

        }print_r($products);
        return $products;
    }
}



<?php
declare(strict_types=1);

class Product {
    private int $productID;
    private string $name;
    private int $price;
    private int $tax;

    public function __construct(int $productID, string $name, int $price, int $tax) {

        $this->productID = $productID;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }

    public static function loadProductDB(int $productID, string $name, int $price, int $tax) : Product
    {
        $product = new Product($productID, $name, $price, $tax);
        $product->productID = $productID;
        return $product;
    }
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->productID;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getTax(): float
    {
        return $this->tax;
    }
}

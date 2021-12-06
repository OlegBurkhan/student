<?php
//include_once './ProductAbstract.php';
//
//class SimpleProduct extends ProductAbstract
//{
//    public function __construct(
//        string $name,
//        float $price,
//        int $qty)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->qty = $qty;
//    }
//    public function getName(): string
//    {
//        return $this->name;
//    }
//    public function getPrice():float
//    {
//        return $this->price;
//    }
//    public function setName(): self
//    {
//        $this->name = $name;
//    }
//    public function setPrice(): float
//    {
//        $this->price = $price;
//    }
//
//    public function setQty(): self
//    {
//        $this->qty = $qty;
//    }
//
//    public function getFinalPrice(): float
//    {
//        return $this->price;
//    }
//
//}

include_once './ProductAbstract.php';

class SimpleProduct extends ProductAbstract
{
    public function __construct(
        string $name,
        float $price,
        int $qty)
    {
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice():PriceInterface
    {
        return $this->price;
    }
    public function setName(): self
    {
        $this->name = $name;
    }
    public function setPrice(): PriceInterface
    {
        $this->price = $price;
    }

    public function setQty(): self
    {
        $this->qty = $qty;
    }

    public function getFinalPrice(): float
    {
        return $this->price;
    }

}

<?php
//include_once './ProductInterface.php';
//
//
//abstract class ProductAbstract implements  ProductInterface
//{
//    private string $name;
//    private float $price;
//    private int $qty;
//
//public function getName(): string
//{
//}
//public function getPrice(): PriceInterface
//{
//}
//public function setName(): self
//{
//}
//public function setPrice(): PriceInterface
//{
//}
//public function setQty(): self
//{
//}
//public function getQty(): int
//{
//}
//public function getFinalPrice(): float
//{
//}
//
//
//}

include_once './ProductInterface.php';


abstract class ProductAbstract implements ProductInterface
{
    private string $name;
    private float $price;
    private int $qty;

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): PriceInterface
    {
        return $this->price;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
    }

    public function setPrice(PriceInterface $price): self
    {
        $this->price = $price;
    }

    public function setQty(int $qty): self
    {
        $this->qty = $qty;
    }

    public function getQty(): int
    {
        return $this->qty;
    }

    public function getFinalPrice(): float
    {
        return $this->price;
    }


}

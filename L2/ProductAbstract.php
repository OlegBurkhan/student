<?php
include_once './ProductInterface.php';


abstract class ProductAbstract implements  ProductInterface
{
    private string $name;
    private float $price;
    private int $qty;



    public function getName(): string
    {
    }
    public function getPrice():float
    {
    }
    public function setName(): self
    {
    }
    public function setPrice(): float
    {
    }
    public function setQty(): self
    {
    }
    public function getQty(): int
    {
    }
    public function getFinalPrice(): float
    {
    }


}

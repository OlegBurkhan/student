<?php
include_once './ProductInterface.php';
include_once './PriceInterface.php';

class ProductAbstract
{
    private string $name;
    private PriceInterface $price;
    private int $qty;


    public function __construct(
        string $name,
        PriceInterface $price,
        int $qty = null)
    {
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
    }
    public function getName(): string
{
    return $this->name;
}
    public function getPrice():float
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

    public function getFinalPrice(): float
    {
        return $this->price;
    }


}

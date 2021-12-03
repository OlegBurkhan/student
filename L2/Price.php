<?php
include_once './PriceInterface.php';

class Price
{
    private float $price;
    private float $oldPrice;


    public function __construct(
        float $price,
        float $oldPrice = null)
    {
        $this->price = $price;
        $this->oldPrice = $oldPrice;
    }

    public function setOldPrice(float $oldPrice): float
    {
        $this->oldPrice = $oldPrice;
    }

    public function setPrice(float $price): float
    {
        $this->price = $price;
    }

    public function getOldPrice(): float
    {
        return $this->oldPrice;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

}

<?php
include_once './PriceInterface.php';

class Price implements PriceInterface
{
    private float $price;
    private float $oldPrice;


    public function __construct(
        float $price,
        float $oldPrice )
    {
        $this->price=$price;
        $this->oldPrice=$oldPrice;
    }

    public function setOldPrice(): float
    {
        $this->oldPrice=$oldPrice;
    }

    public function setPrice(): float
    {
        $this->price=$price;
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

$a = new Price(12,4564 );
print_r($a);

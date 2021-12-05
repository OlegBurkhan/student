<?php
include_once './ProductAbstract.php';
include_once './ComplexProductInterface.php';

class BundleProduct extends ProductAbstract implements ComplexProductInterface
{
    private $children = [];
    private $child = [];

    public function __construct(
        string $name,
        float $price,
        int $qty,
        array $children,
        array $child)
    {
        $this->name = $name;
        $this->price = $price;
        $this->qty = $qty;
        $this->children = $children;
        $this->child = $child;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getPrice():float
    {
        return $this->price;
    }
    public function setName(): self
    {
        $this->name = $name;
    }
    public function setPrice(): float
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



    public function getChildren(): self
{
    return $this->children;
}
   public function setChild(): self
   {
    $this->child = $child;
   }
   public function setChildren(): self
{
    $this->children = $children;
}


}

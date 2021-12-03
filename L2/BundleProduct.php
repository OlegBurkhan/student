<?php
include_once './ProductAbstract.php';
include_once './ComplexProductInterface.php';

class BundleProduct extends ProductAbstract
{
    private $children: <ProductInterface>[];

    public function getChildren(): <ProductInterface>[]
{
    return $this->children;
}
   public function setChild(ProductInterface): self
   {
    $this->child = $children;
   }
   public function setChildren(<ProductInterface>[]): self
{
    $this->children = $children;
}


}

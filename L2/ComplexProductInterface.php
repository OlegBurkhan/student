<?php
include_once './ProductInterface.php';
Interface ComplexProductInterface
{
   public function getChildren(): <ProductInterface>[];
   public function setChild(ProductInterface): self;
   public function setChildren(<ProductInterface>[]): self;

}
<?php

Interface ComplexProductInterface
{
   public function getChildren(): ProductInterface;
   public function setChild(ProductInterface $child): self;
   public function setChildren(ProductInterface $children): self;

}
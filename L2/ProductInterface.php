<?php
include_once './PriceInterface.php';
Interface ProductInterface
{
   public function getName(): string;
   public function getPrice(): PriceInterface;
   public function getQty(): int;
   public function setName(): self;
   public function setPrice(): self;
   public function setQty(): self;
}
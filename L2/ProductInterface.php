<?php

//Interface ProductInterface
//{
//   public function getName(): string;
//   public function getPrice(): float;
//   public function getQty(): int;
//   public function setName(): self;
//   public function setPrice(): float;
//   public function setQty(): self;
//}

Interface ProductInterface
{
    public function getName(): string;
    public function getPrice(): PriceInterface;
    public function getQty(): int;
    public function setName(): self;
    public function setPrice(): PriceInterface;
    public function setQty(): self;
}
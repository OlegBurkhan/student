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

interface ProductInterface
{
    public function getName(): string;

    public function getPrice(): PriceInterface;

    public function getQty(): int;

    public function setName(string $name): self;

    public function setPrice(PriceInterface $price): self;

    public function setQty(int $qty): self;
}
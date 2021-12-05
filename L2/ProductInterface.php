<?php

Interface ProductInterface
{
   public function getName(): string;
   public function getPrice(): float;
   public function getQty(): int;
   public function setName(): self;
   public function setPrice(): float;
   public function setQty(): self;
}
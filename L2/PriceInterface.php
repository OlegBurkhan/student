<?php
//Interface PriceInterface
//{
//    public function setOldPrice(): float;
//    public function setPrice(): float;
//    public function getOldPrice(): float;
//    public function getPrice(): float;
//
//}


interface PriceInterface
{
    public function getOldPrice(): float;

    public function getPrice(): float;

    public function setOldPrice(): float;

    public function setPrice(): float;

}
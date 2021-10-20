<?php
// 1. Create a class Product which contains next properties: string type, string name, string description, array children ()

class Product
{
    public $type;
    public $name;
    public $description;
    public $children = [];

    // 2. Add a constructor which has arguments are related with properties above

    function __construct($type, $name, $description, $children)
    {
        $this->type = $type;
        $this->name = $name;
        $this->description = $description;
        $this->children = $children;
    }

     // 3. Create getter and setter methods for properties










}


// 4. Create a method addChild which has a Product type as an argument and add the passed products to the children property

// 5. Create a class Price with the next properties: oldPrice, price

// 6. Add new property price to the Product class with new method assignPrice(Price $price)

// 7. Create new method getFinalPrice which returns value of the price property

// 8. Greate a method getOldPrice which returns value of the oldPrice property

// 9. Create new class Category with next properties: string Name, array children, array products

// 10. Add getter and setter for the properties in the Category class

// 11. Create an array of product objects with a price object and children

// 12. Create an array of category objects which have products from the array above

// 13. Create new method getFormattedProducts in the Category class that returns table contains associated products with next collumns Product name, Price (if the product has old price it should be print before the final price in the stroke html tag). Products should be sorted in the table by the final price from low to high

// 14. Create a method in the category class showTree that returns a list of categories with subcategories which placed in the children property. The tree should be built dynamicaly 
// Example:
/**
<dl>
  <dt>Men</dt>
  <dd>
    <dl>
      <dt>Shoes</dt>
      <dd>
         <dl>
           <dt>Boots</dt>
           <dt>Sleepers</dt>
         </dl>
      </dd>
    </dl>
  </dd>
</dl>
**/

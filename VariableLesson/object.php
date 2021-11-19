<?php
// 1. Create a class Product which contains next properties: string type, string name, string description, array children ()

class Product
{
    private string $type;
    private string $name;
    private string $description;
    private array $children = [];
    private float $price;

    // 2. Add a constructor which has arguments are related with properties above

//    public function __construct($type = 'none', $name = 'none', $description = 'none', $children = [])
//    {
//        $this->type = $type;
//        $this->name = $name;
//        $this->description = $description;
//        $this->children = $children;
//    }

    public function __construct(

        string $type,
        string $name,
        string $description,
        array $children = [],
        float $price)
    {
        $this->type = $type;
        $this->name = $name;
        $this->description = $description;
        $this->children = $children;
        $this->price = $price;
    }

    // 3. Create getter and setter methods for properties

    public function getType(): string
    {
        return $this->type;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getDescription(): string
    {
        return $this->description;
    }
    public function getChildren(): array
    {
        return $this->children;
    }

    public function setType(string $type)//: string
    {
        $this->type = $type;
    }
    public function setName(string $name)//: self
    {
        $this->name = $name;
    }
    public function setDescription(string $description)//: self
    {
        $this->description = $description;
    }
    public function setChildren(array $children)//: self
    {
        $this->children = $children;
    }
// 4. Create a method addChild which has a Product type as an argument and add the passed products
// to the children property

//    public function addChild($type, $children)
//    {if ($type == $this->type)
//        $this->children[] = $children;
//    }

    public function addChild($children)
    {
        $this->children[] = $children;
    }
// 6. Add new property price to the Product class with new method assignPrice(Price $price)
    public function assignPrice($price)//: float
    {
        $this->price = $price;
    }
// 7. Create new method getFinalPrice which returns value of the price property
    public function getFinalPrice(): float
    {
        return $this->price;
    }
}



$Product1 = new Product('boot', 'CAT', 'winter shoes', [],256.2);

$Product2 = new Product('hat', 'reebok', 'winter hat',[],95.75);


//$Product1-> addchild('boot', ['leather', 'noobook']);
$Product1-> addChild(['leather', 'noobook']);

//$Product1-> assignPrice(425.0);
//$Product1->setType('ebuchka');

echo "<pre>";
print_r($Product1);
print_r($Product2);
echo "</pre>";

echo $Product1->getFinalPrice();

// 5. Create a class Price with the next properties: oldPrice, price

class Price
{
    public int $oldPrice;
    public int $price;

    public function constructor(
        float $price,
        float $oldprice = null)
    {
        $this->price = $price;
        $this->oldPrice = $oldPrice;
    }

    public static function setOldPrice(float $oldPrice)
    {
        $this->oldPrice = $oldPrice;
    }

    public static function setPrice(float $price)
    {
        $this->price = $price;
    }

// 8. Create a method getOldPrice which returns value of the oldPrice property

    public function getOldPrice(float $oldPrice)
    {
        return $this->oldPrice;
    }

    public static function getPrice(float $price)
    {
        return $this->price;
    }

}






// 9. Create new class Category with next properties: string Name, array children, array products

class Category
{
    public string $Name;
    public array $children = [];
    public array $products = [];

    public function __construct(

        string $Name,
        array $children = [],
        array $products = [])
    {
        $this->name = $Name;
        $this->children = $children;
        $this->products = $products;
    }

// 10. Add getter and setter for the properties in the Category class

    public function getName(): string
    {
        return $this->Name;
    }
    public function getChildren(): array
    {
        return $this->children;
    }
    public function getProducts(): array
    {
        return $this->products;
    }


    public function setName(string $Name)
    {
        $this->name = $Name;
    }
    public function setChildren(array $children)
    {
        $this->children = $children;
    }
    public function setProducts(array $products)
    {
        $this->products = $products;
    }

}
$Product5 = new Category('zaebok', [], []);

echo "<pre>";
print_r($Product5);
echo "</pre>";


// 11. Create an array of product objects with a price object and children

// 12. Create an array of category objects which have products from the array above

// 13. Create new method getFormattedProducts in the Category class that returns table contains
// associated products with next collumns Product name, Price (if the product has old price
// it should be print before the final price in the stroke html tag). Products should be sorted
// in the table by the final price from low to high


// 14. Create a method in the category class showTree that returns a list of categories with
// subcategories which placed in the children property. The tree should be built dynamicaly
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

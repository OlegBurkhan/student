<?php
// Array functions https://www.php.net/manual/en/ref.array.php

// 1. you have an array $names = ['Karl', 'Mark', 'Pedro', 'Huan', 'Jia', 'Loki'];
// You need to show the all names in the <ul><li> list (See https://www.w3schools.com/html/html_lists.asp)
$names = ['Karl', 'Mark', 'Pedro', 'Huan', 'Jia', 'Loki'];
echo "<ul><li> $names[0], <li>$names[1], <li>$names[2], <li>$names[3], <li>$names[4], 
<li>$names[5],</li></ul>";

// 2. Get new array but all items should be sorted by alphabet

$n2 = $names;
sort($n2);
echo "<ul><li> $n2[0], <li>$n2[1], <li>$n2[2], <li>$n2[3], <li>$n2[4], 
<li>$n2[5],</li></ul>";
//print_r($n2);

// 3. Get new array but without the first and last items
$n3 = $n2;
unset($n3[0], $n3[5]);
sort($n3);
echo "<ul><li> $n3[0], <li>$n3[1], <li>$n3[2], <li>$n3[3], </li></ul>";
//print_r($n3);


// 4. Get new array but use only even items from the names array
function even ($item){
    return $item % 2;
    }
$n4 = array_filter($names, 'even',ARRAY_FILTER_USE_KEY);
sort($n4);
print_r($n4);
echo "<br>";

// 5. Get a new array where the items is sorted by count of symbols in the names.

function sort_by_value($a, $b) {
    return  mb_strlen($a) - mb_strlen($b);
    }
$n5 = $n2;
usort($n5, 'sort_by_value');
print_r($n5);
echo "<br>";


// 6. You have the array $products = [['name' => 'Samsung TV', 'price' => 2000.0000, 'stock' => 200], ['name' => 'Sony TV', 'price' => 2500.00, 'stock' => 10], ['name' => 'LG', 'price' => 950.0000, 'stock' => 1500]];
// You need to display the data in the html table (see https://www.w3schools.com/html/html_tables.asp) The prices is not typo. Use your own function which has a array as an argument for display the table
/*
 --------------------------
 |name      |price  |stock|
 --------------------------
 |Samsung TV|2000.00|200  |
 --------------------------
 |Sony TV   |2500   |10   |
 --------------------------
 |LG        |950    |1500 |
 --------------------------
*/

$products = [['name' => 'Samsung TV', 'price' => 2000.0000, 'stock' => 200],
    ['name' => 'Sony TV', 'price' => 2500.00, 'stock' => 10],
    ['name' => 'LG', 'price' => 950.0000, 'stock' => 1500]];
echo "<table >
  <style>
table, th, td {
  border:1px solid black;
  //width:100%;  
}
</style>

  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Stock</th>
  </tr>
  <tr>
    <td>{$products['0']['name']}</td>
    <td>{$products['0']['price']}</td>
    <td>{$products['0']['stock']}</td>
  </tr>
  <tr>
    <td>{$products['1']['name']}</td>
    <td>{$products['1']['price']}</td>
    <td>{$products['1']['stock']}</td>
  </tr>
  <tr>
    <td>{$products['2']['name']}</td>
    <td>{$products['2']['price']}</td>
    <td>{$products['2']['stock']}</td>
  </tr>
</table>";
echo "<br>";

// 7. Sort the array by the price (new array should start from lower prices) and show the result via the function below

function sort_by_price($a, $b) {
    return  $a['price'] <=> $b['price'];
    }

$productsprice = $products;
usort($productsprice, 'sort_by_price');

echo "<table >
  <style>
table, th, td {
  border:1px solid black;
  //width:100%;  
}
</style>

  <tr>
    <th>Name</th>
    <th>Price</th>
    <th>Stock</th>
  </tr>
  <tr>
    <td>{$productsprice['0']['name']}</td>
    <td>{$productsprice['0']['price']}</td>
    <td>{$productsprice['0']['stock']}</td>
  </tr>
  <tr>
    <td>{$productsprice['1']['name']}</td>
    <td>{$productsprice['1']['price']}</td>
    <td>{$productsprice['1']['stock']}</td>
  </tr>
  <tr>
    <td>{$productsprice['2']['name']}</td>
    <td>{$productsprice['2']['price']}</td>
    <td>{$productsprice['2']['stock']}</td>
  </tr>
</table>";
echo "<br>";

// 8. Create a function which calculate a sum of the all prices in the array

function sum_of_price ($a){
    $b = array_sum(array_column($a,'price'));
    return ($b);
}
$sumprice = sum_of_price($products);
echo $sumprice;
echo "<br>";

// 9. Add the new items in the array ['name' => 'Panasonic', 'price' => 4000.0000, 'stock' => 0], ['name' => 'JVC', 'price' => 550.0000, 'stock' => 12]
$newproducts = $products;
array_push($newproducts,['name' => 'Panasonic', 'price' => 4000.0000, 'stock' => 0],
                               ['name' => 'JVC', 'price' => 550.0000, 'stock' => 12]);
echo "<pre>";
print_r($newproducts);
echo "</pre>";
echo "<br>";

// 10. Create a new array which has only items where the stock more that 10

function sort_by_stock($a){
    return $a['stock'] > 10;
}
$newarr = array_filter($newproducts, "sort_by_stock");
sort($newarr);
echo "<pre>";
print_r($newarr);
echo "</pre>";
echo "<br>";

// 11. Create a function taht returns an array with 20 items there the value is a random letter from latin alphabet (the value should not be repeated) 
// Example ['s', 't', 'z' ...];

// 12. Challenge task
/*
You have a store which sells beer but you don't sell a single bottle you can sell only packs
You have three standards pack which contains different counts of bottles
const SMALL_PACK = 3;
const MIDDLE_PACK = 6;
const BIG_PACK = 20;

You need to create a function that get a int bottles as an argument and returns an optimized count of packs which need to buy for this

function calcPacks(int $bottles): array
{
	return [
		'small'  => 'count of small packs',
		'middle' => 'count of middle packs',
		'big'    => 'count of big packs',
	];
}

*/


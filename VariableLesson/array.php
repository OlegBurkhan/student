<?php
// Array functions https://www.php.net/manual/en/ref.array.php

// 1. you have an array $names = ['Karl', 'Mark', 'Pedro', 'Huan', 'Jia', 'Loki'];
// You need to show the all names in the <ul><li> list (See https://www.w3schools.com/html/html_lists.asp)
$names = ['Karl', 'Mark', 'Pedro', 'Huan', 'Jia', 'Loki'];
echo "<ul><li> $names[0], <li>$names[1], <li>$names[2], <li>$names[3], <li>$names[4], 
<li>$names[5],</li></ul>";


// 2. Get new array but all items should be sorted by alphabet

// 3. Get new array but without the first and last items

// 4. Get new array but use only even items from the names array

// 5. Get a new array where the items is sorted by count of symbols in the names.

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

// 7. Sort the array by the price (new array should start from lower prices) and show the result via the function below

// 8. Create a function which calculate a sum of the all prices in the array

// 9. Add the new items in the array ['name' => 'Panasonic', 'price' => 4000.0000, 'stock' => 0], ['name' => 'JVC', 'price' => 550.0000, 'stock' => 12]

// 10. Create a new array which has only items where the stock more that 10

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


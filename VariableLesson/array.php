<?php
// Array functions https://www.php.net/manual/en/ref.array.php

// 1. you have an array $names = ['Karl', 'Mark', 'Pedro', 'Huan', 'Jia', 'Loki'];
// You need to show the all names in the <ul><li> list (See https://www.w3schools.com/html/html_lists.asp)
$names = ['Karl', 'Mark', 'Pedro', 'Huan', 'Jia', 'Loki'];
echo "<ul><li> $names[0], <li>$names[1], <li>$names[2], <li>$names[3], <li>$names[4], 
<li>$names[5],</li></ul>";

// 2. Get new array but all items should be sorted by alphabet

$SortByAlphabet = $names;
sort($SortByAlphabet);
echo "<ul><li> $SortByAlphabet[0], <li>$SortByAlphabet[1], <li>$SortByAlphabet[2], <li>$SortByAlphabet[3], <li>$SortByAlphabet[4], 
<li>$SortByAlphabet[5],</li></ul>";
//print_r($SortByAlphabet);

// 3. Get new array but without the first and last items
//$ArrWithoutFirstAndLast = $SortByAlphabet;
//$ArrWithoutFirst = array_shift($ArrWithoutFirstAndLast);
//$Reversed = array_reverse($ArrWithoutFirstAndLast);
//$ArrWithoutLast = array_shift($Reversed);
//$ArrWithoutFirstAndLast = $Reversed;
//sort($ArrWithoutFirstAndLast);
//echo "<ul><li> $ArrWithoutFirstAndLast[0], <li>$ArrWithoutFirstAndLast[1], <li>$ArrWithoutFirstAndLast[2], <li>$ArrWithoutFirstAndLast[3], </li></ul>";
//Too much code, next one lookslike better

$ArrWithoutFirstAndLast = $SortByAlphabet;
$ArrWithoutFirst = array_shift($ArrWithoutFirstAndLast);
$ArrWithoutLast = array_pop($ArrWithoutFirstAndLast);
sort($ArrWithoutFirstAndLast);
echo "<ul><li> $ArrWithoutFirstAndLast[0], <li>$ArrWithoutFirstAndLast[1], <li>$ArrWithoutFirstAndLast[2], <li>$ArrWithoutFirstAndLast[3], </li></ul>";


// 4. Get new array but use only even items from the names array
function even ($item){
    return $item % 2;
    }
$OnlyEvenByKey = array_filter($names, 'even',ARRAY_FILTER_USE_KEY);
//print_r($OnlyEvenByKey);
//echo "<br>";
//print_r($names);
//echo "<br>";
sort($OnlyEvenByKey);
print_r($OnlyEvenByKey);
echo "<br>";

// 5. Get a new array where the items is sorted by count of symbols in the names.

function sort_by_value($a, $b) {
    return  mb_strlen($a) - mb_strlen($b);
    }
$SortedByValue = $SortByAlphabet;
usort($SortedByValue, 'sort_by_value');
print_r($SortedByValue);
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


function Print_Table_From_Array ($a){

    echo '<table >
  <style>
table, th, td {
  border:1px solid black;
  //width:100%;
}
</style>';
    echo "<tr>";

    echo "<th>Name</th> <th>Price</th> <th>Stock</th>";
    echo "</tr>";
    foreach ($a as $key => $value) {
        foreach ($value as $data)
            echo "<td>" . $data . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
}
Print_Table_From_Array ($products);

// 7. Sort the array by the price (new array should start from lower prices) and show the result via the function below

function sort_by_price($a, $b) {
    return  $a['price'] <=> $b['price'];
    }

$productsprice = $products;
usort($productsprice, 'sort_by_price');
Print_Table_From_Array ($productsprice);

// 8. Create a function which calculate a sum of the all prices in the array

function sum_of_price ($a){
    $b = array_sum(array_column($a,'price'));
    return ($b);
}
$SumOfPrice = sum_of_price($products);
echo $SumOfPrice;
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
$NewArrByStock = array_filter($newproducts, "sort_by_stock");
sort($NewArrByStock);
echo "<pre>";
print_r($NewArrByStock);
echo "</pre>";
echo "<br>";

// 11. Create a function taht returns an array with 20 items there the value is a random letter from latin alphabet (the value should not be repeated) 
// Example ['s', 't', 'z' ...];

function create_random_arr($a){
    $RandomArrayAtoZ = range('a', 'z');
    shuffle($RandomArrayAtoZ);
    $c = array_slice($RandomArrayAtoZ,0, 20);
    return $c;
}
$EmptyArray = [];
$CreatedArray = create_random_arr($EmptyArray);
echo "<pre>";
print_r($CreatedArray);
echo "</pre>";
echo "<br>";


// 12. Challenge task
/*
You have a store which sells beer but you don't sell a single bottle you can sell only packs
You have three standards pack which contains different counts of bottles
const SMALL_PACK = 3;
const MIDDLE_PACK = 6;
const BIG_PACK = 20;

You need to create a function that get a int bottles as an argument and returns
an optimized count of packs which need to buy for this

function calcPacks(int $bottles): array
{
	return [
		'small'  => 'count of small packs',
		'middle' => 'count of middle packs',
		'big'    => 'count of big packs',
	];
}

*/

const SMALL_PACK = 3;
const MIDDLE_PACK = 6;
const BIG_PACK = 20;
$bottles = rand(0, 1000);
//$bottles = 18;

echo $bottles;
echo "<br>";
$Packs=[];
$Packs = calcPacks($bottles);
echo "<pre>";
print_r($Packs);
echo "</pre>";

function calcPacks(int $bottles): array
{
    $S = ($bottles / SMALL_PACK);
    $M = ($bottles / MIDDLE_PACK);
    $B = ($bottles / BIG_PACK);

    if ((BIG_PACK - ($bottles - BIG_PACK * floor($B)))<=1) {
        $BigPacks = (floor($B) + 1);
        $MiddlePacks = 0;
        $SmallPacks = 0;

    }

    elseif ($B >= 1) {
        $BigPacks = floor($B);
        $BottlesLast1 = $bottles - BIG_PACK * $BigPacks;
        $M1 = ($BottlesLast1 / MIDDLE_PACK);

        if ($M1 < 1){
            $BigPacks = floor($B);
            $MiddlePacks = floor($M1);
            $S1 = ($BottlesLast1 / SMALL_PACK);

            if ($S1 >= 1){
                $SmallPacks = ceil($S1);
                if ($SmallPacks >= 2){
                    $MiddlePacks = (floor($M1) + 1);
                    $SmallPacks = 0;
                }
                if ($MiddlePacks >= 3){
                    $BigPacks = (floor($B) + 1);
                    $MiddlePacks = 0;
                    $SmallPacks = 0;
                }
            }

            elseif ($S1 < 1){
                $SmallPacks = 1;
            }
        }
        if ($M1 >= 1) {
            $MiddlePacks = floor($M1);
            $BottlesLast2 = $bottles - BIG_PACK * $BigPacks - MIDDLE_PACK * $MiddlePacks;
            $S1 = ($BottlesLast2 / SMALL_PACK);
        }

        if ($S1 >= 1){
            $SmallPacks = ceil($S1);
            if ($SmallPacks >= 2){
                $MiddlePacks = (floor($M1) + 1);
                $SmallPacks = 0;
            }
        }
        elseif ($S1 == 0){
            $SmallPacks = 0;
        }
        elseif ($S1 < 1){
            $SmallPacks = 1;
        }
    }

    elseif ($B < 1){
        $BigPacks = floor($B);
        $MiddlePacks = floor($M);
        $BottlesLast2 = $bottles - MIDDLE_PACK * $MiddlePacks;
        $S1 = ($BottlesLast2 / SMALL_PACK);

        if ($S1 >= 1){
            $SmallPacks = ceil($S1);
            if ($SmallPacks == 2){
                $MiddlePacks = (floor($M) + 1);
                $SmallPacks = 0;
            }
        }

        elseif ($S1 == 0){
            $SmallPacks = 0;
        }
        elseif ($S1 < 1){
            $SmallPacks = 1;
        }
    }
    elseif ($M < 1){
        $BigPacks = floor($B);
        $MiddlePacks = floor($M);
        $BottlesLast2 = $bottles - MIDDLE_PACK * $MiddlePacks;
        $S1 = ($BottlesLast2 / SMALL_PACK);

        if ($S1 >= 1){
            $SmallPacks = ceil($S1);
            if ($SmallPacks == 2){
                $MiddlePacks = (floor($M) + 1);
                $SmallPacks = 0;
            }
        }

        elseif ($S1 < 1){
            $SmallPacks = 1;
        }
    }
    return [
        'small'  => $SmallPacks,
        'middle' => $MiddlePacks,
        'big'    => $BigPacks,
    ];
}




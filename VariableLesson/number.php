<?php
// Look the functions for working with numbers https://www.php.net/manual/en/ref.math.php
/*
* There is a float number $number = 4.786234876;
*/

// Round the number to the 4 digits after a point
$number = 4.786234876;
$roundedNumber = round($number, 4);
echo $roundedNumber;
echo "<br>";

// Write if conditions which compare two numbers (int with float, float with float, int with int)

//Вот нутром чую, что должен быть способ проще...
$firstInt = 12;
$secondInt = -45;
$firstFFloat = 3.148762498762;
$secondFloat = 32423.0000;

function compare1 ($firstInt, $secondInt, $firstFFloat, $secondFloat)
{
    if ($firstInt == $firstFFloat) {return "$firstInt equal $firstFFloat";    }
    elseif ($firstInt<$firstFFloat){return "$firstInt less than $firstFFloat";}
    elseif ($firstInt>$firstFFloat){return "$firstInt more than $firstFFloat";}
 }
$c1 = compare1 ($firstInt, $secondInt, $firstFFloat, $secondFloat);
echo "$c1";
echo "<br>";
function compare2 ($firstInt, $secondInt, $firstFFloat, $secondFloat)
{
    if ($firstInt==$secondInt){return "$firstInt equal $secondInt";}
    elseif ($firstInt<$secondInt){return "$firstInt less than $secondInt";}
    elseif ($firstInt>$secondInt){return "$firstInt more than $secondInt";}
}
$c2 = compare2 ($firstInt, $secondInt, $firstFFloat, $secondFloat);
echo "$c2";
echo "<br>";
function compare3 ($firstInt, $secondInt, $firstFFloat, $secondFloat)
{
    if ($firstInt == $secondFloat) {return "$firstInt equal $secondFloat";}
    elseif ($firstInt < $secondFloat) {return "$firstInt less than $secondFloat";}
    elseif ($firstInt > $secondFloat) {return "$firstInt more than $secondFloat";}
}
$c3 = compare3 ($firstInt, $secondInt, $firstFFloat, $secondFloat);
echo "$c3";
echo "<br>";
function compare4 ($firstInt, $secondInt, $firstFFloat, $secondFloat)
{
    if ($secondInt == $firstFFloat) {return "$secondInt equal $firstFFloat";    }
    elseif ($secondInt<$firstFFloat){return "$secondInt less than $firstFFloat";}
    elseif ($secondInt>$firstFFloat){return "$secondInt more than $firstFFloat";}
}
$c4 = compare4 ($firstInt, $secondInt, $firstFFloat, $secondFloat);
echo "$c4";
echo "<br>";
function compare5 ($firstInt, $secondInt, $firstFFloat, $secondFloat)
{
    if ($secondInt == $secondFloat) {return "$secondInt equal $secondFloat";}
    elseif ($secondInt < $secondFloat) {return "$secondInt less than $secondFloat";}
    elseif ($secondInt > $secondFloat) {return "$secondInt more than $secondFloat";}
}
$c5 = compare5 ($firstInt, $secondInt, $firstFFloat, $secondFloat);
echo "$c5";
echo "<br>";
function compare6 ($firstInt, $secondInt, $firstFFloat, $secondFloat)
{
    if ($firstFFloat == $secondFloat) {return "$firstFFloat equal $secondFloat";}
    elseif ($firstFFloat < $secondFloat) {return "$firstFFloat less than $secondFloat";}
    elseif ($firstFFloat > $secondFloat) {return "$firstFFloat more than $secondFloat";}
}
$c6 = compare6 ($firstInt, $secondInt, $firstFFloat, $secondFloat);
echo "$c6";
echo "<br>";

// Get random int value;
$randomInt = rand();
echo $randomInt;
echo "<br>";

// Get random value that less then 300 but bigger then 200
$randInt = rand(200,300);
echo $randInt;
echo "<br>";

// Get reised number 45 to the power of 5
$number = 45;
$power = pow($number, 5);
echo $power;
echo "<br>";

// get minimam/maximum numbers from $num1 = 2; $num2 = 2.44; $num3 = 23; $num4 = 23.00000000001; $num5 = 55;
$num1 = 2; $num2 = 2.44; $num3 = 23; $num4 = 23.00000000001; $num5 = 55;
$max = max([$num1, $num2, $num3, $num4, $num5]);
$min = min([$num1, $num2, $num3, $num4, $num5]);
echo $max;
echo "<br>";
echo $min;


<?php
/**
* There is a string variable $str = '6525765762|Some Text';
* We need to get the first number from the value and put it into new int variable $number 
* Check if we can do it with native php function
*/
$str = '6525765762|Some Text';
$number;

/**
* Get a count of symbols in the string and put that number in the new int variable $count 
*/
$count = strlen($str);
echo "$count <br> <br>";
/**
* There is a string $str = 'String "%s" has %a symbols';
* We need to replace subtext %s on the $str text and $a on the $count variable;
* Check how to use https://www.php.net/manual/en/function.str-replace
*/

/**
* There is a string variable $str;
* a) transform a string all uppercase letters.
* b) transform a string all lowercase letters.
* c) make a string's first character uppercase.
* d) make a string's first character of all the words uppercase.
*/

$str = 'the best text in the world';
$allUppercaseLetters = strtoupper($str);
echo "$allUppercaseLetters <br>";
$allLowercaseLetters = strtolower($str);
echo "$allLowercaseLetters <br>";
$firstUppercaseLatter = ucfirst($str);
echo "$firstUppercaseLatter <br>";
$allFirstUppercaseLatter = ucwords($str);
echo "$allFirstUppercaseLatter <br>";
// You have a number 1.2324234234
// Convert it in the english notation with comma as separator instead of point
//echo $britFormat;

// Repeat string "test" four times (use a PHP function)

// Remove the right/left/left and right spaces space in the string ' Hello world '

// Find the position of the first occurrence of a substring 'test' in a string 'We all love to pass tests in the school'

// Find the last occurrence of a character 'm' in a string 'The best mom in the world'

// You have a password 'My_PassWord9234' you need to make a hash for it (https://habr.com/ru/post/210760/)

// Strip HTML and PHP tags from a string "<?php echo '<div><h1>Title</h1><p>Some text</p></div>'"" echo '<div><h1>Title</h1> <b>and</b> <p>Some text</p></div>'"

// Find the position of the first occurrence of a substring "max" in a string "We all know what there is no maximum of natural numbers in this Universe"

// Add the tag '<br>' after every words which have at least 20 or more  symbols in phrase "The quick brown fox jumped over the lazy dog"

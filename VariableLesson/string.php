<?php
/**
* There is a string variable $str = '6525765762|Some Text';
* We need to get the first number from the value and put it into new int variable $number 
* Check if we can do it with native php function
*/
$str = '6525765762|Some Text';
$num = explode("|",$str);
echo "$num[0]";
echo "<br>";
//$number = (int)$str;
//echo "$number <br> <br>";

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
$str1 = 'String "%s" has %a symbols';
$find = array("%s", "%a");
$change_to = array($str, $count);
echo str_replace($find, $change_to, $str1);
echo "<br>";
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
$num = 1.2324234234;

function convtoEnglish ($num){
    $numb = ["0","1","2","3","4","5","6","7","8","9","."];
    $word = ["zero","one","two","three","four","five","six","seven","eight","nie",","];
    return str_replace($numb, $word, $num);
}
$britFormat = convtoEnglish ($num);
echo $britFormat;
echo "<br>";
// Repeat string "test" four times (use a PHP function)
$string = "test";
echo str_repeat($string,4);
echo "<br>";
// Remove the right/left/left and right spaces space in the string ' Hello world '
$string = ' Hello world ';
$r = rtrim ($string," ");
echo "$r <br>";
$l = ltrim ($string," ");
echo "$r <br>";
$lr = trim ($string," ");
echo "$r <br>";
// Find the position of the first occurrence of a substring 'test' in a string 'We all love to pass tests in the school'
$string = 'We all love to pass tests in the school';
echo stripos($string,'test');
echo "<br>";
// Find the last occurrence of a character 'm' in a string 'The best mom in the world'
$string = 'The best mom in the world';
echo strrpos($string, 'm');
echo "<br>";
// You have a password 'My_PassWord9234' you need to make a hash for it (https://habr.com/ru/post/210760/)
$password = 'My_PassWord9234';
echo password_hash($password,CRYPT_BLOWFISH);
echo "<br>";
// Strip HTML and PHP tags from a string "<?php echo '<div><h1>Title</h1><p>Some text</p></div>'"" echo '<div><h1>Title</h1> <b>and</b> <p>Some text</p></div>'"

$st = " echo '<div><h1>Title</h1><p>Some text</p></div>'";
echo strip_tags($st);
echo "<br>";
//Должно работать по идее, но нихуя не работает

// Find the position of the first occurrence of a substring "max" in a string "We all know what there is no maximum of natural numbers in this Universe"
$string = "We all know what there is no maximum of natural numbers in this Universe";
echo stripos($string, 'max');
echo "<br>";
// Add the tag '<br>' after every words which have at least 20 or more  symbols in phrase "The quick brown fox jumped over the lazy dog"

$str = "The quick brown fox jumped over the lazy dog";
echo wordwrap($str,20, "<br>", false);

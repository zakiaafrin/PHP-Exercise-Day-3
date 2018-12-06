<?php

// Exercise-1:
echo 'Exercise-1:' . '<hr>';
//1. If you have and array $arr = [0,1,2,3,4]; How do you extract the third value?
$arr1 = [0,1,2,3,4]; 
echo 'Q-1 : Third value = ' . $arr1[2];

//2. If you have an array $arr = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4]; How do you extract the third value?
$arr2 = ["zero"=>0, "one"=>1, "two"=>2, "three"=>3, "four"=>4];
echo '<br/>Q-2 : Third value = ' . $arr2["two"];

//3. Create a new array with each comma-separated value as its own array element from the string $a = "a,b,c,d,e,f".
$arr3 = "a,b,c,d,e,f";
$arr3 = explode(",", $arr3);
echo '<br/>Q-3 : ';
var_dump($arr3) . '<br/>';

//4. With the result array from 3, create a new array where each element is both key and value. In other words, the result should be: ["a"=>"a", "b"=>"b", "c"=>"c”,   "d"=>"d", "e"=>"e"]

// $arr4 = array_combine($arr3, $arr3);
$arr4 = array();
foreach( $arr3 as $element ) {
    $arr4 [ $element ] = $element;
}
echo '<br/>Q-4 : ';
var_dump($arr4) . '<br/>';

//5. Find the sum of this array of numbers $arr = [0, 1, 2, 3, 4, 5, 6];
$arr5 = array(0, 1, 2, 3, 4, 5, 6);
echo '<br/>Q-5 : Array Sum = ' . array_sum($arr5) . '<br/>';

// Exercise-2:
echo '<br/>Exercise-2:' . '<hr>';
//6. Write a PHP function to find the maximum and minimum marks from the following set of arrays:
$marks1 = [360,310,310,330,313,375,456,111,256];
$marks2 = [350,340,356,330,321];
$marks3 = [630,340,570,635,434,255,298];
echo 'Q-6 : Max Value = ' . max(array_merge($marks1,$marks1,$marks3)) . ', Min Value = ' . min(array_merge($marks1,$marks1,$marks3));

//7. Write a PHP function to generate a string with 11 random letters and numbers.
$RandNumStr = substr(str_shuffle(md5(time())), 0, 11);                              //substr( sha1( time() ), 0, 11 );
echo '<br/>Q-7 : 11 random letters and numbers = ' . $RandNumStr;

echo '<br/>Q-7 : 11 random letters = ';
$randLtrs = range('a','k');
shuffle($randLtrs);
foreach ($randLtrs as $letter) {
echo "$letter";
}

$RandNum = substr(number_format(time() * rand(),0,'',''), 0, 11);
echo '<br/>Q-7 : 11 random numbers = ' . $RandNum;

//8. Giving a sentence, write a PHP script that:
$s1 = 'this is the 3rd day of php class.';
// Transform all characters to uppercase.
echo '<br/>Q-8 : All characters to uppercase = ' .strtoupper($s1);
// Transform all characters to lowercase.
echo'<br>Q-8 : All characters to lowercase = '. strtolower($s1);
// Make the first character uppercase.
echo'<br>Q-8 : First character uppercase = '. ucfirst($s1);
// Make the first character of all the words uppercase.
echo'<br>Q-8 : First character of all the words uppercase = '. ucwords($s1);

//9. Write a PHP script to extract the file name from a path, in example: “http://www.example.com/public_html/index.php”
echo '<br>Q-9 : '. basename($_SERVER['PHP_SELF']);

$path = 'http://www.example.com/public_html/index.php';
echo '<br>Q-9 : '. basename($path);
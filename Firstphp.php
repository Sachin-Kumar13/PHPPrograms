<?php
//This is a single line comments
/* 
this
is 
the 
multiline 
comments
*/

echo "Hello World \n";//in html <br> are use for new line in the place of \n
$a=123;
$b=44;
$c=121.22;
$str1="This is a string ";
var_dump(($str1));
echo "This is a sum =", $a + $b,"<br>" ;
var_dump(($a));


$str2="My name is Sachin";
echo strlen($str2); 
echo str_word_count($str2);
echo strrev($str2),"<br>";
echo strpos($str2,"Sachin"),"<br>";
echo str_replace('is','are',$str2);

?>



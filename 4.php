<?php
    $name = "Aayush";
    echo " My name is <strong>$name</strong> "."and number of characters in my name is : ".strlen($name);
 echo"<br>";
    $s = "PHP is a popular general-purpose scripting language that is especially suited to web development.";
    echo"String s is : $s";
    echo"<br>";
     echo " Total number of words in s string  : ".str_word_count($s);
 echo"<br>";
     echo "Reverse string of s is : ".strrev($s);
 echo"<br>";
    echo " position of language in string s is : ".strpos($s,"language");
$n ="<pre>    Javascript is a scripting language</pre>";
echo"<br>";
echo"string n is : $n";
    echo "replace Javascript in string n with PHP ";
    echo $n=str_replace("Javascript","PHP",$n);
echo"<br>";
    echo " to repeat 5 times the string n : ";
    echo"<br>";
echo str_repeat($n,5);
echo"<br>";
echo"trimming white spaces from left of string  : ";
echo ltrim("<pre>   Hello!</pre>");
?>
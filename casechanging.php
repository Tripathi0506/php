<?php
$str = "Prateek Tripathi";
echo $str."<br/>";
echo strtolower($str."<br/>");
echo strtoupper($str."<br/>");

$str2 = "prateek";
echo lcfirst($str2)."<br/>";        // convert first letter in lowercase
$str3 = "prateek tripathi";
echo ucfirst($str3)."<br/>";       // convert first letter in uppercase
echo ucwords($str3)."<br/>";      // convert each first letter in uppercase



//String replaced===========================================================================================>
//str_replace(find,replace,string);
$name = "This is for the testing only";
echo str_replace('testing only','xyz',$name)."<br/>";
echo $name."<br/>";


// String Reverse ===========================================================================================>
//strrev(string)............prateek as keetarp
$st = "prateek";
echo strrev($st)."<br/>";


//Substring =================================================================================================>
//substr(string,start,length);.................string-required, start-required, length-optional....kisi bhi character ko remove krne ke liye
$demo = "Hello World";
echo $demo."<br/>";
echo substr($demo,2)."<br/>";           // remove second character from starting it start counting from 0
echo substr($demo,0,3)."<br/>";                 // only print 3rd character length of string

// String word count========================================================================================>
//str_word_count();.......................count no. of words in the string
$memo = "I am a full stack developer";
echo str_word_count($memo)."<br/>";
echo strlen($memo)."<br/>";              // count no. of characters including space
echo str_repeat("Hello<br/>",10);          // negative value will not be consider



// random function============================================================================================>
echo rand(100,500);             // used for OTP password

?>
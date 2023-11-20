<?php
// random function============================================================================================>
echo rand(100,500)."<br/>";             // used for OTP password


// ceil and floor=============================================================================================>
$a = 5/2;
echo $a."Original <br/>";
echo ceil($a)."Ceil <br/>";          // ceil me original value 2.5 hai toh print 3 karega ------decimal remove krta hai
echo floor($a)."floor <br/>";       // floor me original value 2.5 hai toh ek step back 2 print karega-------decimal remove krta hai


//power and square function====================================================================================>
//pow() and sqrt()
echo pow(2,8)."<br/>";                  // power function
echo sqrt(64)."<br/>";                  // squareroot function
echo sqrt(pow(4,2));
?>
<?php
// While loop============================================================================================>
$i = 0;
while($i < 10){
    echo "Hello World<br/>";
    $i++;
}
echo "loop ends";
$j = 1;
while($j < 10){
    echo $j."<br/>";
    $j++;
}
echo "2nd loop end \n"; 
//for reverse==============================>

$k = 10;
while($k > 0){
    echo $k."<br/>";
    $k--;
}
// table of 2=============================>
$l = 1;
$num = 2;
while($l <= 10){
    echo $num." x ".$l. " = ".$l*$num."<br/>";
    $l++;
}
// For loop=========================================================================================>
echo "\nFor Loop output start from here__________________<br/>";
for($m=0; $m<10; $m++){
    echo $m."<br/>";
}
// Do While Loop====================================================================================>
$n = 1;
do{
    echo $n."<br/>";         // at least ek baar execute krega hi .....fir check krega condition ko
    $n++;
}while($n<1);
// For Each loop===================================================================================>
$arr = [
    "HTML" => 2500,   
     "CSS" => 2500,
    "JS" => 3000,
    "PHP" => 4000,
];
echo "<pre>";
print_r($arr);
echo "</pre>";

/*
foreach($arr as $key => $value){}
*/
foreach($arr as $course => $fees){
    echo "\nThe fees of $course is $fees<br/>";
};
//continue statement================================================================================>
$count = 0;
for($o=0; $o <=50; $o++){
    if($o%2 == 0){
        continue;
    }
    $count++;
    echo "$o<br/>";
}
echo "--------------------<br/>";
echo $count;
?>
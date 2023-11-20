<?php
// implode is inbuilt function in the php and it is used to convert array into string
$arr = [
    "Hello",
    "Everyone",
    "How",
    "Are",
    "You!"
];
echo "<pre>";
print_r($arr);

$str = implode(" ", $arr);          // " "----> in that place add whatever you want like (, . ! - _ etc)
echo $str;

// explode is also inbuilt function of the php it works is breaks a string into an array and returns it.====> explode(seprator,string,limit)....jahan se separator milta hai wahan se ek new key start krta hai
$stri = "Hello Everyone | How Are You!";        // "|".....separator
$ar = explode('|', $stri);
echo "<pre>";
print_r($ar);
?>
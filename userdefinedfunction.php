<?php
function p($data){
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
$x = array(
    "car0",
    "car1",
    "car2",
    "car3",
    "car4",
);
p($x);

$y = array(
    "car5",
    "car6",
    "car7",
    "car8",
    "car9",
    "car10",
);
p($y);
p(array_merge($x,$y));

function vote($age){
    if($age >= 18 && $age <= 65){
        return "Yes you can vote";
    }else{
        return "No you cannot vote";
    }
}
echo "Age 24: " .vote(24)."<br/>";
echo "Age 16: " .vote(16)."<br/>";
?>
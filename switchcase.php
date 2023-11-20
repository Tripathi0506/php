<?php
$age = 67;

switch($age){
    case ($age >= 18 && $age <= 65):
        echo "Yes you can vote";
        break;

    case (18 - $age == 1):
        echo "Please wait one more year";
        break;
    case ($age >65):
        echo "You are too old to vote";
        break;

    default:
        echo "No you cannot vote";
        break;
}
?>
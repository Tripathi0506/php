<?php
// Conditional=====================================>
    $age = 15;
    if($age >= 18){
        echo "Yes you can vote";
    }
    else{
        echo "No you cannot vote";
    }

// if-elseif and nested if - else===================>
    $ag = 67;

    if($ag >= 18){
        echo "yes you can vote";
    }
        elseif($ag == 17){
            echo "please wait one more year";
        }
            elseif($ag == 16){
                echo "Please wait two more year";
            }
                else{
                    echo "Please try later";
                }

// nested-if==========================================>
if($ag >= 18){
    if($ag<66){
        echo "Yes you can vote";
    }else{
        echo "You cannot vote anymore";
    }
} else{
    echo "You cannot vote";
}                       
?>
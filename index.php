<?php
    echo "Hello World";   //echo is used to print our value or text
    echo "\n my first php";

    //"variables":  always start with '$' sign and contain alpha numeric (A-z and 0-9) and start with _ or letter 
    $first =  15;
    echo "\n$first";

    $First = 16;
    echo $First;

    $name1 = "Prateek";
    echo "\n$name1";


    // Concatenation: conclude 2 strings together______use '.' operator with "echo 1st var . 2nd var"

    $fname = "Prateek";
    $sname = "Tripathi";

    echo "\n$fname . $sname" ."\nSatna"."\tM.P";   // also include raw string____"\t" for space b/w two terms



    // Operators: [Arithmetic(+, -, *, /, %, ++, --) Comparison(==, !=, <, >, <=, >=)  Logical(&&, ||) Conditional() Assignment(=, +=, -=, *=, /=, %=)]

    // Arithmetic======================>
    $a = 10;
    $b = 15;
    $c = $a + $b;
    echo "\nadd:". $c."\n";

    $c = $b - $a;
    echo "\nsub:".$c;

    // Comparison ======================>
    $x = 5;
    $y = 6;
    var_dump($x==$y);    // var_dump: tell me the type of data....is bool or string or any other


    // Logical==========================>
    $d = 1;
    $e = 0;
    $f = $d && $e;      //AND: if both are true then print true
                        //OR: at least one input is true then print true
    var_dump($f);



    $p = 5;
    $p > 7 ? $flag = "Yes" : $flag = "No";
    var_dump("\n$flag");


    //Assignment=========================>
    $t = 10;
    $q = 6;
    echo $t."\n";
    $t += $q;           //add and assign  $t = 10 + 6 = 16
    echo $t."\n"

   
?>
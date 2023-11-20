<?php
// index array===================================================>
$arr1 = array("car1", "car2", "car3");
$arr1[3] = "car4";          // To add values in the array
echo "<pre>";
print_r($arr1);            // "print_r"--use to print array
echo "</pre>";             // "echo "<pre>""</pre>"____is used to beautyfy the array

echo $arr1[0];             // for accessing any array



// Associate array===============================================> pair of keys and values
$arr2 = array(
    'name' => 'Prateek Tripathi',
    'college' => 'iGEC Sagar',
    'Branch' => 'Information Techonology',                          // "=>" array operator tell us key value
    'age' => 20,
    'status' => true,
);

// add vlues in the array
$arr2['test'] = "testing"; 

echo "<pre>";
print_r($arr2);            
echo "</pre>";

// Multidimensional Array===============================================>
$arr3 = array(
    'name' => 'Prateek Tripathi',
    'college' => 'iGEC Sagar',
    'Branch' => 'Information Techonology',
    'contact' => array("9109321784", "9340611707"),         // new array formed at that point
    'age' => 20,
    'status' => true,
);

echo "<pre>";
print_r($arr3);            
echo "</pre>";

// Other method to form an array=====================================================>
$arr4 = [1,2,3,4,5,6,7,8];
echo "<pre>";
print_r($arr4);            
echo "</pre>";

// Multidimensional Array==========>
$arr5 = [                   // One dimensional array
    1,
    2,
    3,
    4,
    5,
    6,
    7 => [                  // Two dimensional array
        70, 
        71 => [             // Three dimensional array
            710,                                                                  // associate me key value khud se leta hai pichli wali value ko dekh kr
            711,
            712
        ],
        72,
    ],
    8,
    9,
];
echo "<pre>";
print_r($arr5);            
echo "</pre>";
?>
<?php
echo "<h1>Naming and Shaming</h1>";
// This is a multidimensional array which is designed to display the exam results of three students: Aarron, Jamie, and Harry
$grades = array(
    "Aarron" => array(
        "Physics" => '74%',
        "English" => '69%',
        "Maths" => '70%'
    ),

    "Jamie" => array(
        "Physics" => '64%',
        "English" => '79%',
        "Maths" => '69%'
    ),

    "Harry" => array(
        "Physics" => '55%',
        "English" => '52%',
        "Maths" => '57%'
    )
);

echo "Aarron's results for Physics : ";
echo $grades['Aarron']['Physics'] . ". <br>";

echo "Jamie's results for English : ";
echo $grades['Jamie']['English'] . ". <br>";

echo "Harry's results for Maths : ";
echo $grades['Harry']['Maths'] . ". <br>";
?>

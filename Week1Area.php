<?php
  echo"<h1>Area of an object</h1>";
// This will be a mathematical operation where the multiplied value of two integers results in a third integer
$width = 10;
$height = 5;
$area = $height * $width;
// I can now make an associative array with these values

$field = array("width"=> $width, "height"=> $height, "area" => $width * $height);
echo "The width of thes object is ". $field ['width'] . "<br>";
echo "The height of the object is ". $field['height']. "<br>";
echo "The area of the object is ". $field['area']. "<br>";
?>

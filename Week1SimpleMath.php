<?php
  echo"<h1>Outputting mathematical operations involving two integers</h1>";
// This will be a mathematical operation that takes two numbers and outputs the result of adding, subtracting, multiplying, and dividing them. The program will also concatenate the two numbers into a string.
$nofive = 5;
$noeight = 8;
$sum = $noeight + $nofive;
$difference = $noeight - $nofive;
$multiplied = $noeight * $nofive;
$divided = $noeight / $nofive;

echo"Adding $nofive and $noeight will give a result of " . $sum .". ";
echo"Subtracting $nofive from $noeight will result in " . $difference .". ";
echo"Multiplying $nofive and $noeight will result in " . $multiplied .". ";
echo"Dividing of $noeight by $nofive will result in " . $divided .". ";
echo"The integers concatenated are " . strval($nofive).strval($noeight).".";

?>

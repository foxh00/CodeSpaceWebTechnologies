<?php
  echo"<h1>Age calculator</h1>";
// This will be an age calculator

$minuteInHours = 60;
$hoursInDays = 24;
$daysInYears = 365;
$age = 24;


echo"Your age is 24 years old <br>";
echo"You have lived for ". $age * $daysInYears * $hoursInDays * $minuteInHours . " minutes <br>";
echo"You have lived for ". $age * $daysInYears . " days <br>";
echo"You have lived for ". $age * $daysInYears * $hoursInDays . " hours";
?>

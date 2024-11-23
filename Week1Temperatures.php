<?php
echo"<h1>Climate of Edinburgh</h1>";
    // This associative array will show high and low temperatures in Edinburgh, Scotland
        $temperatureC = array("highSummerC" => 19, "highWinterC" => 7, "lowSummerC" => 11, "lowWinterC" => 1,);
        $temperatureF = array("highSummerF" => 66, "highWinterF" => 44.6, "lowSummerF" => 52, "lowWinterF" => 33.8,);
         
        echo "Average high (Summer) ". $temperatureC['highSummerC'] . "°C / ".$temperatureF['highSummerF']."°F <br>";
        echo "Average low (Summer) ". $temperatureC['lowSummerC'] . "°C / ".$temperatureF['lowSummerF']."°F <br>";
        echo "Average high (Winter) ".  $temperatureC['highWinterC']. "°C / ".$temperatureF['highWinterF']."°F <br>";
        echo "Average low (Winter) ".  $temperatureC['lowWinterC']. "°C / ".$temperatureF['lowWinterF']."°F <br>";

?>  

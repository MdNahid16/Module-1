<?php
define("FACTOR", 9/5);
define("OFFSET", 32);
echo "Enter temperature value: ";
$tempetature = (float)readline();
echo "Convert to (1: Fahrenheit, 2:Celsius): ";
$choice = (int) readline();
switch ($choice){
    case 1:
        $result =$tempetature *FACTOR + OFFSET;
        echo "Temperature in Fahrenheit: $result \n";
        break;
    case 2:
        $result =($tempetature - OFFSET)/FACTOR;
        echo "Temperature in Celsius: $result \n";
        break;
    default:
        echo "Invalid choice!\n";
        break;
}
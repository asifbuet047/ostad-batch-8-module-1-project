<?php

define("FACTOR", 9 / 5);
define("OFFSET", 32);
echo "Type 1 for Celcius to Fahrenheit conversion or 2 for Fahrenheit to Celcius conversion \n";
$choice = (int)readline();

switch ($choice) {
    case 1:
        echo "Please input Celcius value: ";
        break;

    case 2:
        echo "Please input Fahrenheit value: ";
        break;
    default:
        echo "Please choice between 1 or 2";
        break;
}

$value = (float)readline();

switch ($choice) {
    case 1:
        $convert_value = $value * FACTOR + 32;
        echo "$value Celcius into Fahrenheit is $convert_value";
        break;

    case 2:
        $convert_value = ($value - 32) * (1 / FACTOR);
        echo "$value Fahrenheit into Celcius is $convert_value";
        break;
}

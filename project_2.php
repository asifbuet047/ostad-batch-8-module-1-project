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
        echo "Please choice between 1 or 2 \n";
        break;
}

if ($choice == 1 || $choice == 2) {
    $value = (float)readline();

    switch ($choice) {
        case 1:
            $convert_value = $value * FACTOR + 32;
            echo sprintf("%f Celcius into Fahrenheit is %.4f", $value, $convert_value);
            break;

        case 2:
            $convert_value = ($value - 32) * (1 / FACTOR);
            echo sprintf("%f Fahrenheit into Celcius is %.4f", $value, $convert_value);
            break;
    }
} else {
    echo "Please run the program again and choose between 1 or 2";
}

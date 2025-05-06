<?php

echo "Please input Your electricity unit: ";
$unit = (float)readline();
if ($unit >= 0) {
    if ($unit <= 50) {
        $bill = $unit * 3.5;
        echo sprintf("Your electricity bill is %.2f taka", $bill);
    } elseif ($unit <= 100) {
        $bill = 50 * 3.5 + ($unit - 50) * 4.0;
        echo sprintf("Your electricity bill is %.2f taka", $bill);
    } elseif ($unit <= 200) {
        $bill = 50 * 3.5 + 50 * 4.0 + ($unit - 100) * 5.20;
        echo sprintf("Your electricity bill is %.2f taka", $bill);
    } else {
        $bill = 50 * 3.5 + 50 * 4.0 + 100 * 5.20 + ($unit - 200) * 6.50;
        echo sprintf("Your electricity bill is %.2f taka", $bill);
    }
} else {
    echo "Please input a valid unit";
}

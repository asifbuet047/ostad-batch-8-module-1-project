<?php

echo "Please input Your electricity unit: ";
$unit = (int)readline();
if ($unit <= 50) {
    $bill = $unit * 3.5;
    echo "Your electricity bill is $bill taka";
} elseif ($unit <= 100) {
    $bill = 50 * 3.5 + ($unit - 50) * 4.0;
    echo "Your electricity bill is $bill taka";
} elseif ($unit <= 200) {
    $bill = 50 * 3.5 + 50 * 4.0 + ($unit - 100) * 5.20;
    echo "Your electricity bill is $bill taka";
} else {
    $bill = 50 * 3.5 + 50 * 4.0 + 100 * 5.20 + ($unit - 200) * 6.50;
    echo "Your electricity bill is $bill taka";
}

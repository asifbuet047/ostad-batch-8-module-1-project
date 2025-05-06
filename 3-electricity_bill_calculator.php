<?php

echo "Please input Your electricity unit: ";
$unit = (int)readline();
if ($unit <= 100) {
    $bill = $unit * 5;
    echo "Your electricity bill is $bill taka";
} elseif ($unit <= 200) {
    $bill = 100 * 5 + ($unit - 100) * 10;
    echo "Your electricity bill is $bill taka";
} else {
    $bill = 100 * 5 + 100 * 10 + ($unit - 200) * 15;
    echo "Your electricity bill is $bill taka";
}

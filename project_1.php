<?php

echo "Please input a number: ";
$number = (int) readline();

if ($number === 0) {
    echo "Your input number is zero";
} elseif ($number > 0) {
    echo "Your input number $number is positive";
} else {
    echo "Your input numbe $number is negetive";
}

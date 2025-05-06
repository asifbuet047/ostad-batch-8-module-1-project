<?php

echo "Please input a number: ";
$number = (int) readline();

if ($number === 0) {
    echo "Your input number is zero";
} elseif ($number > 0) {
    echo "Your input number is positive";
} else {
    echo "Your input numbe ris negetive";
}

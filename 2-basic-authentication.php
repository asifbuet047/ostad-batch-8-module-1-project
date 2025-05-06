<?php

define("USERNAME", "asif");
define("PASSWORD", "12345");

echo "Please input Your usernmae: ";
$username = readline();
echo "Please input Your password: ";
$password = readline();

if (($username == USERNAME) && ($password == PASSWORD)) {
    echo "Successfully autheticated the user";
} else {
    echo "Username nad password are mismatched. Plase try again.";
}

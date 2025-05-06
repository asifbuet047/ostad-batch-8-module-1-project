<?php

define("USERNAME", "admin");
define("PASSWORD", "1234");

echo "Please input Your username: ";
$username = readline();
echo "Please input Your password: ";
$password = readline();

if (($username == USERNAME) && ($password == PASSWORD)) {
    echo "Login Successful!";
} else {
    echo "Invalid username or password!";
}

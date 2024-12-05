<?php

$user = "Sarah";
$pass = "1234";

$passwords = [
    "Sarah" => "1234",
    "Llano" => "5678"
];

switch ($user) {
    case "Sarah":
        if ($pass === $passwords["Sarah"]) {
            echo "You are logged in!<br>";
            echo "Welcome, Sarah!<br>";
            echo "Password is correct!<br>";
        } else {
            echo "Incorrect password!<br>";
        }
        break;

    case "Llano":
        if ($pass === $passwords["Llano"]) {
            echo "You are logged in!<br>";
            echo "Welcome, Llano!<br>";
            echo "Password is correct!<br>";
        } else {
            echo "Incorrect password!<br>";
        }
        break;

    default:
        echo "Account not found!<br>";
        break;
}


?>





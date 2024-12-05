<<<<<<< HEAD
<? php
$user = "Sarah";

switch ($user) {
    case "Sarah":
        echo "You are logged in!";
        echo "Welcome, Sarah!";
        break;

    case "Llano":
        echo "You are logged in!";
        echo "Welcome, Llano";
        break;
    
    default:
        echo "Account not found!!!!";
        break;
}



=======


$user = "Sarah";
$pass = "1234";


switch ($user) {
    case "Sarah":
        echo "You are logged in!<br>";
        echo "Welcome, Sarah!<br>";
        break;

    case "Llano":
        echo "You are logged in!<br>";
        echo "Welcome, Llano!<br>";
        break;

    default:
        echo "Account not found!<br>";
        break;
}

switch ($pass) {
    case "1234":
        echo "Password is correct!<br>";
        break;

    case "5678":
        echo "Password is correct but belongs to another user!<br>";
        break;

    default:
        echo "Incorrect password!<br>";
        break;
}




?>

>>>>>>> main



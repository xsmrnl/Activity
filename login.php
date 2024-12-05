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
        echo "Account not found!";
        break;
}
?>
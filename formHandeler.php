<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST["firstName"]);
    $lastName = htmlspecialchars($_POST["lastName"]);
    $favouritePet = htmlspecialchars($_POST["favouritePet"]);

    echo "these are the data the user submitted";
    echo "<br>";
    echo $firstName;
    echo "<br>";
    echo $lastName;
    echo "<br>";
    echo $favouritePet;
}

?>
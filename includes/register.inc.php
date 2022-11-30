<?php
require "../classes/Connection.php";
require "../classes/RegisterController.php";
require "../classes/RegisterModel.php";

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["register"])) {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password-confirm"];

    $registerCtrl = new RegisterController(
        $firstname, $lastname, $username, $email, $password, $password_confirm 
    );

    $registerCtrl->valideInput(); // valide les données
    // Insertion dans la base de données
    $registerModel = new RegisterModel($firstname, $lastname, $username, $email, $password);
    $registerModel->registerUser();
    
    header("Location: ../login.php?msg=success");
} else {
    header("Location: ../index.php");
}
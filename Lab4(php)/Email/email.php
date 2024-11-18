<?php
$nameError = "";
$email = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["email"]);
    $validCharacters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ .-";
 
    if ($name === "") {
        $nameError = "Email cannot be empty.";
    }
 
 
 
    if ($emailError) {
        echo "<p style='color: red;'>$emailError</p>";
        echo "<a href='email.html'>Go Back</a>";
    } else {
        echo "<p style='color: green;'>Email is valid: $email</p>";
    }
}
?>
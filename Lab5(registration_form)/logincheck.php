<?php
session_start();

if (isset($_POST['submit'])) {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if (empty($username) || empty($password)) {
        echo "Null username/password. <a href='login.html'>Go back</a>";
        exit;
    }

    if (
        isset($_SESSION['registered_users'][$username]) &&
        $_SESSION['registered_users'][$username]['password'] === $password
    ) {
        // Valid user
        $_SESSION['status'] = true;
        $_SESSION['username'] = $_SESSION['registered_users'][$username]['name'];
        header('location: home.php');
        exit;
    } else {
        echo "Invalid username or password. <a href='login.html'>Try again</a>";
        exit;
    }
} else {
    header('location: login.html');
    exit;
}
?>

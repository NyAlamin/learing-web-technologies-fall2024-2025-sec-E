<?php
session_start();

if (!isset($_SESSION['registered_users'])) {
    $_SESSION['registered_users'] = [
        'user1' => [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '1234567890',
            'password' => 'password1'
        ],
        'user2' => [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '0987654321',
            'password' => 'password2'
        ] ];
}

if (isset($_POST['submit'])) {
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
    $id = isset($_POST['id']) ? trim($_POST['id']) : null;
    $email = isset($_POST['email']) ? trim($_POST['email']) : null;
    $phone = isset($_POST['phone']) ? trim($_POST['phone']) : null;
    $password = isset($_POST['password']) ? trim($_POST['password']) : null;

    
    if (empty($name) || empty($id) || empty($email) || empty($phone) || empty($password)) {
        echo "All fields are required. <a href='registration.html'>Go back</a>";
        exit;
    }

    if (isset($_SESSION['registered_users'][$id])) {
        echo "User with this ID is already registered. <a href='registration.html'>Go back</a>";
        exit;
    }

    
    $_SESSION['registered_users'][$id] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'password' => $password
    ];

    echo "Registration successful! <a href='login.html'>Click here to log in</a>";
} else {
    header('location: registration.html');
    exit;
}
?>

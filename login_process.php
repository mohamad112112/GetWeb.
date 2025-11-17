<?php
session_start();
include("connection.php");

if (isset($_POST['submit'])) {
    $user_email = trim($_POST['email']);
    $user_password = trim($_POST['password']);

    $query = "SELECT * FROM users WHERE email = ? AND pass = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$user_email, $user_password]);
    $user = $stmt->fetch();
    $count = $stmt->rowCount();

    if ($count == 1) {
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['lname'] . " " . $user['fusername'];
        $_SESSION['admin'] = $user['type'] == 1 ? true : null;

        $user_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/index.php';
        $admin_url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . '/dashBorad.php';

        header('Location: ' . ($_SESSION['admin'] ? $admin_url : $user_url));
        exit();
    } else {
        $variable1 = "error";
        $variable2 = "Email and password are incorrect, try again";
        $encoded_variable1 = urlencode($variable1);
        $encoded_variable2 = urlencode($variable2);
        $url = "login.php?message=" . $encoded_variable1 . "&msg=" . $encoded_variable2;
        header('Location: ' . $url);
        exit();
    }
}
?>

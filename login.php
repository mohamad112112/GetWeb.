<?php
session_start();
include("connection.php");

if (isset($_POST['logInSubmit'])) {
    $user_email = trim($_POST['email']);
    $user_password = trim($_POST['pass']);
    $packages = isset($_GET['packages']) ? $_GET['packages'] : '';

    $query = "SELECT * FROM users WHERE email = ? AND pass = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$user_email, $user_password]);
    $user = $stmt->fetch();
    $count = $stmt->rowCount();

    if ($count == 1) {
        // حفظ بيانات المستخدم في الجلسة
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['lname'] . " " . $user['fusername'];
        $_SESSION['packages'] = $packages;
        $_SESSION['serves'] = 'EDM'; // يتم تعيين الخدمة الثابتة هنا

        // إدخال بيانات الباقة والخدمة في جدول package
        $insert_query = "INSERT INTO package (email, serves, packages, name) VALUES (?, ?, ?, ?)";
        $insert_stmt = $conn->prepare($insert_query);
        $insert_stmt->execute([$user_email, $_SESSION['serves'], $_SESSION['packages'], $_SESSION['name']]);

        // توجيه المستخدم إلى صفحة عرض المنتجات
        header("Location: productsdash.php");
        exit();
    } else {
        $msg = "Email and password are incorrect, try again";
        header("Location: login.php?error=" . urlencode($msg));
        exit();
    }
}
?>

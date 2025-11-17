<?php
include("connection.php");
session_start();

if (isset($_POST['submit'])) {
    if (!empty($_POST['lname']) && !empty($_POST['fusername']) && !empty($_POST['email']) && !empty($_POST['pwd1']) && !empty($_POST['pwd2'])) {
        $lname = trim($_POST['lname']);
        $fusername = trim($_POST['fusername']);
        $email = trim($_POST['email']);
        $password = trim($_POST['pwd1']);

        if ($password === trim($_POST['pwd2'])) {
            try {
                // إدخال البيانات في قاعدة البيانات
                $stmt = $conn->prepare("INSERT INTO users (lname, fusername, email, pass) VALUES (?, ?, ?, ?)");
                $stmt->execute([$lname, $fusername, $email, $password]);

                // تخزين البيانات في الجلسة
                $_SESSION['client_data'] = [
                    'name' => $lname . " " . $fusername,
                    'email' => $email,
                    'pass' => $password
                ];

                // إبقاء المستخدم في نفس الصفحة بدون رسائل تنبيهية
                echo "<script>window.location.href = 'sign-up.php';</script>";
            } catch (PDOException $e) {
                // يمكنك تسجيل الخطأ في ملف إذا لزم الأمر
            }
        }
    }
}
?>

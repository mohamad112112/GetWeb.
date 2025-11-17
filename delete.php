<?php
include("connection.php");

// التحقق من وجود معرف الموظف في الرابط
if (!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Invalid ID");
}

$id = $_GET['id'];

// حذف بيانات الموظف من قاعدة البيانات
try {
    $sql = "DELETE FROM employees WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    echo "<script>alert('تم الحذف بنجاح'); window.location.href='employessdash.php';</script>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

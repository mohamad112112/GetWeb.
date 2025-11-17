<?php
include("connection.php");

try {
    $query = $conn->prepare("SELECT * FROM employees");
    $query->execute();
    $results = $query->fetchAll();
    echo "<pre>";
    print_r($results); // عرض النتائج لتأكيد استلام البيانات
    echo "</pre>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

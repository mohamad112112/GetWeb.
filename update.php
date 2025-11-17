<?php
include("connection.php");

// التحقق من وجود معرف الموظف في الرابط
if (!isset($_GET['id']) || !ctype_digit($_GET['id'])) {
    die("Invalid ID");
}

$id = $_GET['id'];

// استرجاع بيانات الموظف من قاعدة البيانات
try {
    $stmt = $conn->prepare("SELECT * FROM employees WHERE id = ?");
    $stmt->execute([$id]);
    $employee = $stmt->fetch();
    if (!$employee) {
        die("Employee not found");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// تحديث بيانات الموظف
if (isset($_POST['edit'])) {
    if (!empty($_POST['namee']) && !empty($_POST['ema']) && !empty($_POST['spec'])) {
        $namee = trim($_POST['namee']);
        $ema = trim($_POST['ema']);
        $spec = trim($_POST['spec']);

        try {
            $sql = "UPDATE employees SET namee=?, ema=?, spec=? WHERE id=?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$namee, $ema, $spec, $id]);

            echo "<script>alert('تم التعديل بنجاح'); window.location.href='employessdash.php';</script>";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    } else {
        echo "<script>alert('الرجاء إدخال جميع الحقول');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <!-- main css file -->
    <link href="cssFiles/GodWebMain.css" rel="stylesheet">
    <link href="cssFiles/update.css" rel="stylesheet">
    <!-- normalize file -->
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
    <!-- font awesome files -->
    <link rel="stylesheet" href="cssFiles/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h2 class="logo">GetWeb</h2>
            <span><a href="employessdash.php"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <form method="post">
                <h2>Edit <span>Employee's info</span></h2>
                <input type="text" name="namee" id="namee" required placeholder="Employee's name" value="<?php echo htmlspecialchars($employee['namee']); ?>">
                <input type="email" name="ema" id="ema" required placeholder="Employee's email" value="<?php echo htmlspecialchars($employee['ema']); ?>">
                <div class="select-container">
                    <label for="specia">Select Your Specialty:</label>
                    <select name="spec" id="specia" required>
                        <option value="front_end" <?php echo ($employee['spec'] == 'front_end') ? 'selected' : ''; ?>>Front-end</option>
                        <option value="back_end" <?php echo ($employee['spec'] == 'back_end') ? 'selected' : ''; ?>>Back-end</option>
                        <option value="design" <?php echo ($employee['spec'] == 'design') ? 'selected' : ''; ?>>Design</option>
                        <option value="marketing" <?php echo ($employee['spec'] == 'marketing') ? 'selected' : ''; ?>>Marketing</option>
                        <option value="dbspeci" <?php echo ($employee['spec'] == 'dbspeci') ? 'selected' : ''; ?>>Data Bases</option>
                    </select>
                </div>
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($employee['id']); ?>">
                <input type="submit" name="edit" value="Update">
            </form>
        </div>
    </div>
</body>
</html>

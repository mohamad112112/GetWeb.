<?php
include("connection.php");

// استرجاع البيانات من قاعدة البيانات
try {
    $query = $conn->prepare("SELECT * FROM employees");
    $query->execute();
    $employees = $query->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees</title>
    <link href="cssFiles/GodWebMain.css" rel="stylesheet">
    <link href="cssFiles/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="cssFiles/normalize.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="logo" id="logo">
            <ul class="header-nav">
                <li><a href="">Contact Us</a></li>
                <li><a href="log-in.php">Log Out</a></li>
                <li><a href="index.php"><i class="fa-solid fa-house"></i></a></li>
            </ul>
        </div>
    </header>
    <div class="content-nav">
        <div class="navBar">
            <ul class="left-nav">
                <li class="profile">
                    <div class="img-box">
                        <img src="images/kdot.jfif" alt="kdot">
                    </div>
                    <h2>k-dot</h2>
                </li>
                <li><a href="dashBorad.php"><i class="fas fa-home"></i><p>DashBoard</p></a></li>
                <li><a href="clientsdash.php"><i class="fas fa-user-group"></i><p>Clients</p></a></li>
                <li><a href="productsdash.php"><i class="fas fa-table"></i><p>Products</p></a></li>
                <li><a class="active" href="employessdash.php"><i class="fa-solid fa-users"></i><p>Employees</p></a></li>
                <li><a href="projectsPRogress.php"><i class="fa-solid fa-list-check"></i><p>Join Requests</p></a></li>
                <li><a href="settings.php"><i class="fa-solid fa-cog"></i><p>Plans</p></a></li>
                <li class="log-out"><a href="log-in.php"><i class="fa-solid fa-sign-out"></i><p>Log Out</p></a></li>
            </ul>
        </div>
        <div class="content">
            <div class="title-info">
                <p>Employees</p>
                <i class="fas fa-chart-bar"></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Specialty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($employees as $employee) {
                        echo "<tr>
                                <td>" . htmlspecialchars($employee['id']) . "</td>
                                <td class='red-text'>" . htmlspecialchars($employee['namee']) . "</td>
                                <td class='red-text'>" . htmlspecialchars($employee['ema']) . "</td>
                                <td class='red-text'>" . htmlspecialchars($employee['spec']) . "</td>
                                <td class='action'>
                                    <a href='delete.php?id=" . $employee['id'] . "'>حذف</a>
                                    <a href='update.php?id=" . $employee['id'] . "'>تعديل</a>
                                </td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

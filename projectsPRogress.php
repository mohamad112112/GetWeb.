<?php
include("connection.php");

// تنفيذ الحذف إذا تم استلام معرّف (ID) صحيح
if (!empty($_GET["id"]) && ctype_digit($_GET["id"])) {
    try {
        $delete = $conn->prepare("DELETE FROM employees WHERE id = ?;");
        $delete->execute([$_GET["id"]]);
        // إعادة التوجيه بعد الحذف
        header('Location: projectsPRogress.php');
        exit();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

// استرجاع البيانات من قاعدة البيانات
try {
    $query = $conn->prepare("SELECT * FROM employees");
    $query->execute();
    $results = $query->fetchAll();
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Requests</title>
    <link href="cssFiles/GodWebMain.css" rel="stylesheet">
    <link href="cssFiles/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f4f4f4;
        }
        .red-text {
            color: red;
        }
        .action a {
            color: #333;
            text-decoration: none;
            margin: 0 5px;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="logo" id="logo">
            <ul class="header-nav">
                <li><a href="#">Contact Us</a></li>
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
                        <img src="images/kdot.jfif" alt="kdot"><!-- put a pic of the user -->
                    </div>
                    <h2>k-dot</h2><!-- user name -->
                </li>
                <li><a href="dashBorad.php"><i class="fas fa-home"></i><p>DashBoard</p></a></li>
                <li><a href="clientsdash.php"><i class="fas fa-user-group"></i><p>Clients</p></a></li>
                <li><a href="productsdash.php"><i class="fas fa-table"></i><p>Products</p></a></li>
                <li><a href="employessdash.php"><i class="fa-solid fa-users"></i><p>Employees</p></a></li>
                <li><a class="active" href="projectsPRogress.php"><i class="fa-solid fa-list-check"></i><p>Join Requests</p></a></li>
                <li><a href="settings.php"><i class="fa-solid fa-cog"></i><p>Plan</p></a></li>
                <li class="log-out"><a href="log-in.php"><i class="fa-solid fa-sign-out"></i><p>Log Out</p></a></li>
            </ul>
        </div>
        <div class="content">
            <div class="title-info">
                <p>Join Requests</p>
                <i class="fas fa-chart-bar"></i>
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Specialty</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($results as $row) {
                        echo "<tr>
                                <td class='red-text'>" . htmlspecialchars($row['namee']) . "</td>
                                <td class='red-text'>" . htmlspecialchars($row['ema']) . "</td>
                                <td class='red-text'>" . htmlspecialchars($row['spec']) . "</td>
                                <td class='red-text'>" . htmlspecialchars($row['dis']) . "</td>
                                <td class='action'>
                                    <a href='projectsPRogress.php?id=" . $row['id'] . "'>حذف</a>
                                    <a href='employessdash.php?namee=" . urlencode($row['namee']) . "&ema=" . urlencode($row['ema']) . "&spec=" . urlencode($row['spec']) . "'>قبول</a>
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

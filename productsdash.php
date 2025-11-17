<?php
session_start();
include("connection.php");

// جلب البيانات من جدول package
$query = "SELECT * FROM package";
$stmt = $conn->prepare($query);
$stmt->execute();
$packages = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="cssFiles/GodWebMain.css" rel="stylesheet">
    <link href="cssFiles/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <link rel="stylesheet" href="cssFiles/all.min.css">
    <title>Products</title>
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
                        <img src="images/kdot.jfif" alt="kdot"><!--put a pic of the user-->
                    </div>
                    <h2>k-dot</h2><!--user name-->
                </li>
                <li>
                    <a href="dashBorad.php">
                        <i class="fas fa-home"></i>
                        <p>DashBoard</p>
                    </a>
                </li>
                <li>
                    <a href="clientsdash.php">
                        <i class="fas fa-user-group"></i>
                        <p>Clients</p>
                    </a>
                </li>
                <li>
                    <a href="#" class="active">
                        <i class="fas fa-table"></i>
                        <p>Products</p>
                    </a>
                </li>
                <li>
                    <a href="employessdash.php">
                        <i class="fa-solid fa-users"></i>
                        <p>Employees</p>
                    </a>
                </li>
                <li>
                    <a href="projectsPRogress.php">
                        <i class="fa-solid fa-list-check"></i>
                        <p>Join Requests</p>
                    </a>
                </li>
                <li>
                    <a href="settings.php">
                        <i class="fa-solid fa-cog"></i>
                        <p>Plans</p>
                    </a>
                </li>
                <li class="log-out">
                    <a href="log-in.php">
                        <i class="fa-solid fa-sign-out"></i>
                        <p>Log Out</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content">
            <div class="title-info">
                <p>Clients</p>
                <i class="fas fa-chart-bar"></i>
           
            </div>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Service</th>
                        <th>Packages</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($packages as $package): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($package['name']); ?></td>
                            <td><?php echo htmlspecialchars($package['email']); ?></td>
                            <td><?php echo htmlspecialchars($package['serves']); ?></td>
                            <td><?php echo htmlspecialchars($package['packages']); ?></td>
                          
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

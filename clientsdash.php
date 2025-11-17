<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clients</title>
    <link rel="stylesheet" href="cssFiles/GodWebMain.css">
    <link rel="stylesheet" href="cssFiles/dashboard.css">
    <!--normalize file -->
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
    <!-- font awsome files -->
    <link rel="stylesheet" href="cssFiles/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="logo" id="logo">
            <ul class="header-nav">
                <li><a href="">Contact Us</a></li>
                <li><a href="log-in.php">Log Out</a></li>
                <li><a href=""><i class="fa-solid fa-house"></i></a></li>
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
                    <a  href="dashBorad.php">
                        <i class="fas fa-home"></i>
                        <p>DashBoard</p>
                    </a>
                </li>
                <li>
                    <a class="active" href="#">
                        <i class="fas fa-user-group"></i>
                        <p>Clients</p>
                    </a>
                </li>
                <li>
                    <a href="productsdash.php">
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
                        <p>Prjects Management</p>
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
                        <th>Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['client_data'])) {
                        $client = $_SESSION['client_data'];
                        echo "<tr>
                                <td>" . htmlspecialchars($client['name']) . "</td>
                                <td>" . htmlspecialchars($client['email']) . "</td>
                                <td>" . htmlspecialchars($client['pass']) . "</td>
                              </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

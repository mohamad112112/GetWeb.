<?php
// الاتصال بقاعدة البيانات
include("connection.php");

// حذف المنتج من قاعدة البيانات
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $sql = "DELETE FROM products WHERE pro_id = :delete_id";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':delete_id', $delete_id);
    $stmt->execute();
    header("Location: settings.php");
    exit();
}

// جلب البيانات من قاعدة البيانات لعرضها في الجدول
$sql = "SELECT * FROM products";
$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Plans</title>
    <!-- main css file -->
    <link href="cssFiles/GodWebMain.css" rel="stylesheet">
    <link href="cssFiles/dashboard.css" rel="stylesheet">
    <!--normalize file -->
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800&display=swap" rel="stylesheet">
    <!-- font awsome files -->
    <link rel="stylesheet" href="cssFiles/all.min.css">
    <style>
        td {
            color: var(--primary-color);
        }
    </style>
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
                        <p>Join Requests</p>
                    </a>
                </li>
                <li>
                    <a class="active" href="settings.php">
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
                <p>Custom Plans</p>
                <i class="fas fa-chart-bar"></i>
            </div>
            <table>
                <thead>
                    <th>Name</th>
                    <th>Number</th>
                    <th>Service/s</th>
                    <th>Hurry</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach ($result as $row) : ?>
                        <tr>
                            <td><?php echo $row['p_name']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['serv']; ?></td>
                            <td><?php echo $row['hur']; ?></td>
                            <td><?php echo $row['despro']; ?></td>
                            <td><?php echo $row['price'] . ' $'; ?></td>
                            <td>
                                <a href="upd.php?id=<?php echo $row['pro_id']; ?>">Edit</a>
                                <a href="settings.php?delete_id=<?php echo $row['pro_id']; ?>" onclick="return confirm('Are you sure?')">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

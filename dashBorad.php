<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- main css file -->
        <link href="cssFiles/GodWebMain.css" rel="stylesheet">
        <link href="cssFiles/dashboard.css" rel="stylesheet">
        <!--normalize file -->
        <link rel="stylesheet" href="cssFiles/normalize.css">
        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
        <!-- font awsome files -->
    <link rel="stylesheet" href="cssFiles/all.min.css">
    <title>dashBoard</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="logo" id="logo">
            <ul class="header-nav">
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
                <a class="active" href="#">
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
            <p>dashboard</p>
            <i class="fas fa-chart-bar"></i>
        </div>
        <div class="boxes">
            <div class="box">
                <i class="fas fa-user"></i>
                <div class="text">
                    <p>Clients</p>
                    <span>122</span><!--here you must put the number of the client from the data base-->
                </div>
            </div>
            <div class="box">
                <i class="fas fa-dollar"></i>
                <div class="text">
                    <p>Balance</p>
                    <span>231$</span><!--the value of the balance must be upgrader every time a client buys something-->
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-list-check"></i>
                <div class="text">
                    <p>Projects</p>
                    <span>132</span><!--the number of projects-->
                </div>
            </div>
            <div class="box">
                <i class="fa-solid fa-users"></i>
                <div class="text">
                    <p>Employees</p><!--the number of employees from the database-->
                    <span>132</span>
                </div>
            </div>
        </div>
        <div class="title-info">
            <p>Pricing</p>
            <i class="fas fa-chart-bar"></i>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Plan</th>
                    <th>Price</th>
                    <th>NOProjects</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>EDM</td>
                    <td>Gold</td>
                    <td class="price">100$</td>
                    <td class="NOP">3</td>
                    <td class="action"><a href="">Edit</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    </div>
</body>
</html>
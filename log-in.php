<?php
session_start();
include("connection.php");

if (isset($_POST['logInSubmit'])) {
    $user_email = trim($_POST['email']);
    $user_password = trim($_POST['pass']);

    // التحقق من وجود المستخدم
    $query = "SELECT * FROM users WHERE email = ? AND pass = ?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$user_email, $user_password]);
    $user = $stmt->fetch();
    $count = $stmt->rowCount();

    if ($count == 1) {
        $_SESSION['id_user'] = $user['id_user'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['name'] = $user['lname'] . " " . $user['fusername'];
        $_SESSION['admin'] = $user['type'] == 1 ? true : null;

        // إدخال البيانات الإضافية التي تم جلبها من GET
        $package = isset($_GET['packages']) ? $_GET['packages'] : null;
        $service = "EDM"; // ثابت حسب الطلب

        // التحقق من وجود البيانات المطلوبة لإضافتها إلى قاعدة البيانات
        if ($package && $service) {
            $insertQuery = "INSERT INTO package (email, serves, packages, name) VALUES (?, ?, ?, ?)";
            $insertStmt = $conn->prepare($insertQuery);
            $insertStmt->execute([$user['email'], $service, $package, $_SESSION['name']]);
        }

        $user_url = 'productsdash.php';
        $admin_url = 'dashBorad.php';

        header('Location: ' . ($_SESSION['admin'] ? $admin_url : $user_url));
        exit();
    } else {
        $msg = "Email and password are incorrect, try again";
        header("Location: log-in.php?msg=" . urlencode($msg));
        exit();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-in</title>
    <!-- main css file -->
    <link href="cssFiles/signInUp.css" rel="stylesheet">
    <link rel="stylesheet" href="cssFiles/GodWebMain.css">
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
    <?php
    if (empty($_SESSION['user_id'])) {
    ?>
    <header>
        <div class="container">
            <h2 class="logo">GodWeb</h2>
            <div class="text">
                <p>don't have an account?</p>
                <a href="sign-up.php">sign-up</a>
            </div>
            <span><a href="index.php"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <img src="images/SignInrealjpg.jpg" alt="">
            <div class="right-content">
                <div class="form-container">
                    <form action="" method="post">
                        <h2>Sign in</h2>
                        <input type="email" name="email" id="email" required placeholder="Email">
                        <input type="password" name="pass" id="pass" required placeholder="Password">
                        <p>Forgot password?</p>
                        <input type="submit" value="Sign-in" name="logInSubmit" id="submit">
                    </form>
                    <?php
                    if (isset($_GET['msg']) && !empty($_GET['msg'])) {
                        echo "<p class='error'>" . htmlspecialchars($_GET['msg']) . "</p>";
                    }
                    ?>
                    <p>By signing in, I agree to <a href="">GodWeb's Privacy Statement</a> and <a href="">Terms of Service</a>.</p>
                    <p>Or sign in with</p>
                    <div class="icons">
                        <div class="facebok">
                            <i class="fa-brands fa-facebook"></i>
                            <p>Facebook</p>
                        </div>
                        <div>
                            <i class="fa-brands fa-google"></i>
                            <p>Google</p>
                        </div>
                        <div>
                            <i class="fa-brands fa-apple"></i>
                            <p>Apple</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    } else {
        echo "<p>You are logged in as " . htmlspecialchars($_SESSION['name']) . "</p>";
        echo "<a href='logout.php'>Logout</a>";
    }
    ?>
</body>
</html>

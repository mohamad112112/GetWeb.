<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <!-- main css file -->
    <link href="cssFiles/signInUp.css" rel="stylesheet">
    <link rel="stylesheet" href="cssFiles/GodWebMain.css">
    <!-- normalize file -->
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
            <h2 class="logo">GodWeb</h2>
            <div class="text">
                <p>already have an account?</p>
                <a href="log-in.php">sign-in</a>
            </div>
            <span><a href="index.php"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <img src="images/sign-up.png" alt="" class="signUp">
            <div class="right-content">
                <div class="form-container">
                    <form action="save_data.php" method="post">
                        <h2>Sign Up</h2>
                        <input type="text" id="lname" name="lname" placeholder="First Name" required>
                        <input type="text" id="fusername" name="fusername" placeholder="Last Name" required>
                        <input type="email" id="email" name="email" placeholder="Email" required>
                        <input type="password" id="pwd1" placeholder="Password" name="pwd1" required>
                        <input type="password" id="pwd2" placeholder="Confirm Password" name="pwd2" required>
                        <input type="submit" value="Sign-up" name="submit" id="submit">
                    </form>
                    <p class="error">
                        <?php
                        if (isset($_GET['msg']) && !empty($_GET['msg'])) {
                            echo $_GET['msg'];
                        }
                        ?>
                    </p>
                    <p>By signing up, I agree to <a href="#">GodWeb's Privacy Statement</a> and <a href="#">Terms of Service</a>.</p>
                    <p>or sign up with</p>
                    <div class="icons">
                        <div class="facebook">
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
</body>
</html>

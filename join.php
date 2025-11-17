<?php
include("connection.php");

if (isset($_POST['add'])) {
    if (!empty($_POST['namee']) && !empty($_POST['ema'])) {
        $inputName = htmlspecialchars(trim($_POST['namee']));
        $inputETeam = htmlspecialchars(trim($_POST['e_team']));
        $inputEmail = htmlspecialchars(trim($_POST['ema']));
        $inputSpec = htmlspecialchars(trim($_POST['spec']));
        $inputDis = htmlspecialchars(trim($_POST['dis']));

        $sql = "INSERT INTO employees (namee, e_team, ema, spec, dis) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        if ($stmt->execute([$inputName, $inputETeam, $inputEmail, $inputSpec, $inputDis])) {
            header("Location: projectsPRogress.php");
            exit();
        } else {
            echo "<script>alert('حدث خطأ أثناء تقديم الطلب.')</script>";
        }
    } else {
        echo "<script>alert('يرجى ملء جميع الحقول المطلوبة.')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join Us</title>
    <link rel="stylesheet" href="cssFiles/GodWebMain.css">
    <link href="cssFiles/join.css" rel="stylesheet">
    <link rel="stylesheet" href="cssFiles/signInUp.css">
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="cssFiles/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h2 class="logo">GodWeb</h2>
            <span><a href="index.php"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <img src="images/joinusland-removebg-preview.png" alt="" class="signUp">
            <div class="right-content">
                <div class="form-container">
                    <form action="join.php" method="post">
                        <h2>Join Our Team</h2>
                        <input type="text" name="namee" id="name" placeholder="Your Name" required>
                        <input type="text" name="e_team" id="e_team" placeholder="Your Team">
                        <input type="email" name="ema" id="ema" placeholder="Email" required>
                        <textarea name="dis" id="dis" placeholder="Describe Yourself"></textarea>
                        <div class="select-container">
                            <label for="specia">Select Your Specialty:</label>
                            <select name="spec" id="specia">
                                <option value="front_end">Front-end</option>
                                <option value="back_end">Back-end</option>
                                <option value="design">Design</option>
                                <option value="marketing">Marketing</option>
                                <option value="dbspeci">Databases</option>
                            </select>
                        </div>
                        <input type="submit" value="Submit" name="add" id="submit">
                    </form>
                    <p>By submitting, I agree to <a href="#">GodWeb's Privacy Statement</a> and <a href="#">Terms of Service</a>.</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

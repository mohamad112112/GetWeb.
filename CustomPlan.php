<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Make Your Plan</title>
    <!-- main css file -->
    <link href="cssFiles/GodWebMain.css" rel="stylesheet">
    <link href="cssFiles/customPlan.css" rel="stylesheet">
    <!-- normalize file -->
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800&display=swap" rel="stylesheet">
    <!-- font awsome files -->
    <link rel="stylesheet" href="cssFiles/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <h2 class="logo">GetWeb</h2>
            <span><a href="index.php"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="content">
        <div class="container">
            <h1>Make A <span>Custom</span> Plan</h1>
            <div class="down-content">
                <form action="settings.php" method="POST">
                    <div class="item1">
                        <input type="text" name="p_name" id="p_name" placeholder="Your name" required>
                        <input type="text" name="phone" id="phone" placeholder="Your number" required>
                        <div class="check-container">
                            <p>Required Service/s:</p>
                            <div class="check-filed">
                                <input type="checkbox" name="serv[]" id="serv1" value="EDM">
                                <label for="serv1">EDM(Enterprise Data Management)</label>
                            </div>
                            <div class="check-filed">
                                <input type="checkbox" name="serv[]" id="serv2" value="e_marketing">
                                <label for="serv2">E-marketing</label>
                            </div>
                            <div class="check-filed">
                                <input type="checkbox" name="serv[]" id="serv3" value="platform">
                                <label for="serv3">Platform (Website or Mobile Application)</label>
                            </div>
                        </div>
                    </div>
                    <div class="item2">
                        <div class="radio-container">
                            <p>How Quickly Do You Need Your Project? </p>
                            <div class="radio-field">
                                <input type="radio" name="hur" id="hur1" value="very quickly">
                                <label for="hur1">As soon as possible (Less than a week)</label>
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="hur" id="hur2" value="quickly">
                                <label for="hur2">Quickly (Less than three weeks)</label>
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="hur" id="hur3" value="normal">
                                <label for="hur3">Normal (In order)</label>
                            </div>
                            <div class="radio-field">
                                <input type="radio" name="hur" id="hur4" value="slowly">
                                <label for="hur4">Take your time (The cheapest option)</label>
                            </div>
                        </div>
                        <textarea name="despro" id="despro" placeholder="Describe your project" required></textarea>
                        <input type="submit" name="sent" id="sent" value="Send">
                    </div>
                </form>
                <p>Thank you for your request! Our team will reach out shortly to discuss your project details. We'll provide a tailored proposal and pricing options once we understand your needs.</p>
            </div>
        </div>
    </div>
</body>
</html>

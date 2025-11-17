<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Data Management</title>
    <!-- main css file -->
    <link href="cssFiles/GodWebMain.css" rel="stylesheet">
    <link href="cssFiles/EDM.css" rel="stylesheet">
    <!--normalize file -->
    <link rel="stylesheet" href="cssFiles/normalize.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
    <!-- font awesome files -->
    <link rel="stylesheet" href="cssFiles/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="logo" id="logo">
            <span><a href="index.php"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="landing">
        <div class="land">
            <div class="text">
                <h1>Enterprise Data Management</h1>
                <p class="fp">Never Mind Your Data Being lost, duplicated, or stolen.</p>
                <p>Welcome to our website! At [Company Name], we believe in the power of effective data management to drive success and innovation. With a dedicated team of experienced and highly skilled engineers, we are committed to delivering top-notch data management solutions that meet the unique needs of our clients.</p>
            </div>
            <button id="goto">Make a plan</button>
        </div>
    </div>
    <h3 class="special-heading">How Do We Work?</h3>
    <p>The Best Way</p>
    <div class="HDWO">
        <div class="container">
            <div class="F">
                <h3>A Great Team Of Professional Engineers</h3>
                <p>Our team of professionals is well-versed in the latest data management techniques and technologies, ensuring that your data is secure, organized, and easily accessible. By working with us, you can rest assured that your data is in good hands and will be managed efficiently and effectively.</p>
                <i class="fa-solid fa-1"></i>
            </div>
            <div class="S">
                <h3>Strong Databases</h3>
                <p>We leverage the power of advanced databases such as [Database Name 1], [Database Name 2], and [Database Name 3] to store, organize, and manage your valuable data with utmost efficiency and security. These databases are renowned for their scalability, performance, and flexibility, enabling us to handle diverse data types and volumes with ease.</p>
                <i class="fa-solid fa-2"></i>
            </div>
            <div class="Th">
                <h3>Full-time Management</h3>
                <p>By partnering with [Company Name], you gain access to a range of full-time data management services, including data governance, data quality assurance, data security, and data integration. We work closely with you to develop customized data management strategies that align with your organizational goals and objectives.</p>
                <i class="fa-solid fa-3"></i>
            </div>
        </div>
    </div>
    <h3 class="special-heading">WHY US?</h3>
    <p>Because you need the best</p>
    <div class="features">
        <div class="container grid3">
            <div class="card">
                <img src="images/EDM1.jpg" alt="">
                <div class="text">
                    <h4>Safe Place</h4>
                    <p>You can relax and enjoy your life knowing your company's data are in the right hands.</p>
                </div>
            </div>
            <div class="card">
                <img src="images/EDMsecu.jpg" alt="">
                <div class="text">
                    <h4>Security First</h4>
                    <p>We make sure no one can know more than what he needs.</p>
                </div>
            </div>
            <div class="card">
                <img src="images/EDMworldwide.jpg" alt="">
                <div class="text">
                    <h4>Good Connection Everywhere</h4>
                    <p>Never mind your distributed data.</p>
                </div>
            </div>
        </div>
    </div>
    <h3 class="special-heading">Pricing</h3>
    <p>Choose the plan you want</p>
    <div class="Pricing">
        <div class="container grid3">
            <!-- الصفحة الرئيسية - تعديل أزرار "JOIN NOW" -->
            <div class="price-card">
                <h3>GOLD</h3>
                <h2>120$ / month</h2>
                <div class="text">
                    <ul>
                        <li>24/7 management</li>
                        <li>Editable plans</li>
                        <li>Full-time engineers dedicated to solving every possible problem</li>
                        <li>5 years guarantee</li>
                    </ul>
                </div>
                <button onclick="window.location.href='log-in.php?packages=GOLD'">JOIN NOW</button>
            </div>
            <div class="price-card">
                <h3>Silver</h3>
                <h2>100$ / month</h2>
                <div class="text">
                    <ul>
                        <li>24/7 management</li>
                        <li>Edit the plans as much as you want</li>
                        <li>Full-time engineers to stay with you so nothing gets lost</li>
                        <li>2 years guarantee</li>
                    </ul>
                </div>
                <button onclick="window.location.href='log-in.php?packages=Silver'">JOIN NOW</button>
            </div>
            <div class="price-card">
                <h3>BASIC</h3>
                <h2>75$ / month</h2>
                <div class="text">
                    <ul>
                        <li>24/7 management</li>
                        <li>Edit the plans as much as you want</li>
                        <li>Full-time engineers to stay with you so nothing gets lost</li>
                        <li>No guarantee</li>
                    </ul>
                </div>
                <button onclick="window.location.href='log-in.php?packages=BASIC'">JOIN NOW</button>
            </div>
        </div>
        <a href="#" id="customPlanLink">or you can make your custom plan</a>
    </div>
    <div class="footer">
        <p>All rights reserved for <a href="#">GetWeb</a></p>
    </div>

    <script>
        // إضافة رابط مخصص لزر "Make a plan"
        document.getElementById("goto").addEventListener("click", function() {
            window.location.href = "CustomPlan.php";
        });

        // تعديل رابط "or you can make your custom plan"
        document.getElementById("customPlanLink").setAttribute("href", "CustomPlan.php");
    </script>
</body>
</html>

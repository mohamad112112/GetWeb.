<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- main css file -->
                <link href="cssFiles/indexStyle.css" rel="stylesheet">
                <!--normalize file -->
                <link rel="stylesheet" href="cssFiles/normalize.css">
                <!-- google fonts -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
                <!-- font awsome files -->
                <link rel="stylesheet" href="cssFiles/all.min.css">  
    <title>GetWeb</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo">
                <img src="images/logo.png" alt="">
            </div>
            <ul class="nav">
                <li><a href="#lnad">Home</a></li>
                <li><a href="#servies">Services</a></li>
                <li><a href="#about">About Us</a></li>
                <li><a href="#contact">Contact Us</a></li>
                <li><a href="log-in.php">Log-in</a></li>
            </ul>
        </div>
    </header>
    <div class="landing" id="land">
        <div class="container">
            <img src="images/mainlandeme.jpg" alt="">
            <div class="text">
                <h2>Welcome To GetWeb</h2>
                <p>The best way to manage your data,social media apperance and to reach the audiance.</p>
                <p>with big teams of professional engineers dedicated to help your brand to reach the highest level of success,sales and fame.</p>
            </div>
        </div>
    </div>
    <div class="services" id="servies">
        <div class="container">
            <div class="heading">
                <h2>Our <span>Services</span></h2>
                <p>"Comprehensive Software Solutions: Web Development, Data Management, and More Tailored for Your Needs"</p>
            </div>
            <div class="cards">
                <div class="card">
                    <h3>EDM</h3>
                    <i class="fa-solid fa-database"></i>
                    <div class="text">
                        <p class="title">Enterprise Data Managment</p>
                        <p>manage your huge amount of data with the help of our professional engineers</p>
                    </div>
                    <a href="EDM.php">Read More</a>
                </div>
                <div class="card">
                    <h3>E-Marketing</h3>
                    <i class="fa-solid fa-bullhorn"></i>
                    <div class="text">
                        <p class="title">Electroni Marketing</p>
                        <p>reach more audiance and make your brand shine with the help of our professional marketing specialists</p>
                    </div>
                    <a href="Marketing.php">Read More</a>
                </div>
                <div class="card">
                    <h3>Platforms</h3>
                    <i class="fa-solid fa-laptop-code"></i>
                    <div class="text">
                        <p class="title">Websites And Mobile Apps</p>
                        <p>Create a special presence for your brand on social media</p>                
                    </div>
                    <a href="WebBuild.php">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="AboutUs" id="about">
        <div class="heading">
            <h2>About <span>Us</span></h2>
            <p>"Comprehensive Software Solutions: Web Development, Data Management, and More Tailored for Your Needs"</p>
        </div>
        <div class="container">
            <img src="images/lastAboutIndex.png" alt="" class="about">
            <div class="elements">
                <h2>Here In GetWeb</h2>
                <div class="text">our mission is to empower businesses of all sizes with the digital tools and expertise they need to thrive in the modern world. As a leading provider of software services, we are dedicated to helping our clients unlock their full potential through cutting-edge web development, robust data management solutions, and innovative e-marketing strategies.</div>
                <a href="">Learn more</a>
            </div>
        </div>
    </div>
    <div class="WhyUs">
        <div class="container">
            <div class="heading">
                <h2>Why Shoose <span>US</span></h2>
            </div>
            <div class="cards-container">
                <div class="card">
                    <i class="fa-solid fa-briefcase"></i>
                    <h2 class="title">Expertise</h2>
                    <p class="script">Our team comprises skilled professionals with extensive experience in web development, big data management, and e-marketing.</p>
                </div>
                <div class="card">
                    <i class="fa-regular fa-star"></i>
                    <h2 class="title">Tailored Solutions</h2>
                    <p class="script">We recognize that one size does not fit all; our services are customized to meet your unique requirements.</p>
                </div>
                <div class="card">
                    <i class="fa-regular fa-lightbulb"></i>
                    <h2 class="title">Innovative Approach</h2>
                    <p class="script">We stay updated with the latest industry trends and technologies to provide you with innovative solutions that keep you ahead of the competition.</p>
                </div>
                <div class="card">
                    <i class="fa-solid fa-user-group"></i>
                    <h2 class="title">Customer-Centric Focus</h2>
                    <p class="script">Your success is our priority. We are committed to delivering exceptional customer service and support throughout our partnership</p>
                </div>
            </div>
        </div>
    </div>
    <div class="contact" id="contact">
        <div class="container">
            <div class="heading">
                <h2>Contact <span>US</span></h2>
                <p>"we will response quickly"</p>
            </div>
            <div class="form-container">
                <img src="images/contactUs-removebg.png" alt="">
                <form action="question.php" method="post">
                    <div class="name">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div class="email">
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email">
                    </div>
                    <div class="text">
                        <label for="data">Your Question:</label>
                        <textarea name="question" id="data"></textarea>
                    </div>
                    <input type="submit" value="Submit" name="send" id="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="info">
                <h2>Information</h2>
                <p>this website was made as a semester project by:</p>
                <div class="names">
                    <p>Hasan Whatfa.</p>
                    <p>Mohamad Mansour.</p>
                    <p>Yazan Samoul.</p>
                    <p>Mohamad soliman.</p>
                </div>
            </div>
            <div class="links">
                <h2>Links</h2>
                <a href="#land">Home</a>
                <a href="#servies">Servies</a>
                <a href="#about">About Us</a>
                <a href="contact">Contact Us</a>
            </div>
            <div class="contact-link">
                <h2>Keep In Touch</h2>
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-telegram"></i></a>
            </div>
            <div class="log-in">
                <h2>Join Us</h2>
                <p>do you want to join our team?</p>
                <a href="join.php">Join Us Now</a>
            </div>
        </div>
    </div>
</body>
</html>
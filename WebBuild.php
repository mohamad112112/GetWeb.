<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <!-- main css file -->
                <link href="cssFiles/GodWebMain.css" rel="stylesheet">
                <link href="cssFiles/marketing.css" rel="stylesheet">
                <!--normalize file -->
                <link rel="stylesheet" href="cssFiles/normalize.css">
                <!-- google fonts -->
                <link rel="preconnect" href="https://fonts.googleapis.com">
                <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
                <link href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,300;0,500;0,800;1,200&display=swap" rel="stylesheet">
                <!-- font awsome files -->
                <link rel="stylesheet" href="cssFiles/all.min.css">
    <title>Web Building</title>
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="logo" id="logo">
            <span><a href="index.html"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="landing">
        <img src="images/WeBuildLanding.jpg" alt="">
        <div class="items">
            <div class="text">
                <h2>Welcome to GodWeb Your Destination for Custom Web and Mobile Solutions.</h2>
                <p>Empower your business with our tailored platforms designed to elevate your online presence.</p>
                <br>
                <p>Get started today and take your business to new heights.</p>
            </div>
            <button id="moveToPricing">Start Today</button>
            <script>
            </script>
        </div>
    </div> 
    <h3 class="special-heading">How Do We Work?</h3>
    <p>the best Way</p>
    <div class="HDWO"><!--this section explains the work,three cards each one has a text and some good looking things-->
        <div class="container"><!--background will be light color-->
            <div class="F">
                <h3> Discovery and Consultation</h3>
                <p>At GodWeb, we begin by understanding your vision and requirements.<br> Through in-depth consultations, we analyze your goals, target audience, and desired outcomes. This phase sets the foundation for a successful project by aligning our strategies with your objectives.</p> 
                <i class="fa-solid fa-1"></i>
            </div>
            <div class="S">
                <h3>Design and Development</h3>
                <p>Once we have a clear understanding of your needs, our expert team of designers and developers spring into action. We craft visually stunning designs and robust functionalities tailored to your specifications.<br>From wireframing to coding, every aspect is meticulously executed to bring your vision to life.</p>
                <i class="fa-solid fa-2"></i>
                
            </div>
            <div class="Th">
                <h3>Testing and Deployment</h3>
                <p>Quality assurance is paramount at GodWeb.<br> Before launch, we rigorously test every aspect of the platform to ensure seamless performance across various devices and browsers. Once the final product meets our high standards, we deploy it with precision and provide ongoing support to guarantee a smooth transition and optimal user experience.</p>
                <i class="fa-solid fa-3"></i>
            </div>
        </div>
    </div>
    <h3 class="special-heading">WHY US?</h3>
    <p>Because you need the best</p>
    <div class="features">
        <div class="container grid3">
            <div class="card">
                <div class="img-container">
                    <img src="images/webBulildTEAM.jpg" alt="">
                </div>
                <div class="text">
                    <h4>At GodWeb</h4>
                    <p>we pride ourselves on our commitment to excellence. With a team of seasoned professionals and a track record of delivering exceptional results, we guarantee top-notch quality in every project we undertake.</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="images/customerSataWebBuild.jpg" alt="">
                </div>
                <div class="text">
                    <h4>Customer satisfaction</h4>
                    <p>Customer satisfaction is at the core of everything we do. Our dedicated support team is always ready to address your needs and ensure a seamless experience from start to finish. Choose us for unparalleled customer service and a partnership built on trust.</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="images/InnvationWebBuild.jpg" alt="">
                </div>
                <div class="text">
                    <h4>Innovation</h4>
                    <p>Innovation is our driving force. We stay ahead of the curve by embracing cutting-edge technologies and creative solutions that set us apart from the competition. Partner with us for forward-thinking strategies and groundbreaking results</p>
                </div>
            </div>
        </div>
    </div>
    <h3 class="special-heading">Pricing</h3>
    <p>chose the plan you want</p>
    <div class="Pricing" id="pricing"><!--three cards with three plans,card must be made perfectly-->
        <div class="container grid3">
            <div class="price-card">
                <h3>GOLD</h3>
                <h2>120$ / month</h2>
                <div class="text">
                    <ul>
                        <li>Unlimited access to premium content and services.</li>
                        <li>Personalized support from dedicated account manager.</li>
                        <li>Advanced analytics and reporting tools for in-depth insights..</li>
                        <li>Priority scheduling for project consultations and meetings.</li>
                    </ul>
                </div>
                <button>JOIN NOW</button>
            </div>
            <div class="price-card">
                <h3>Silver</h3>
                <h2>100$ / month</h2>
                <div class="text">
                    <ul>
                        <li>Access to a curated selection of premium features.</li>
                        <li>Email support with guaranteed response within 24 hours.</li>
                        <li>Basic analytics dashboard for performance tracking.</li>
                        <li>Scheduled phone consultations for strategy discussions.</li>
                    </ul>
                </div>
                <button>JOIN NOW</button>
            </div>
            <div class="price-card">
                <h3>BASIC</h3>
                <h2>75$ / month</h2>
                <div class="text">
                    <ul>
                        <li>Essential features for a streamlined user experience.</li>
                        <li>Email support during business hours.</li>
                        <li>Limited analytics to monitor key metrics.</li>
                        <li>Standard project consultations for guidance and feedback.</li>
                    </ul>
                </div>
                <button>JOIN NOW</button>
            </div>
        </div>
        <a href="#">or you can make your custome plan</a>
    </div>
    <div class="footer">
        <p>all rights reserved for <a href="#">GodWeb</a></p>
    </div>
</body>
</html>
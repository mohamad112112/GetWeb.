<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e-markeitng</title>
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
</head>
<body>
    <header>
        <div class="container">
            <img src="images/logo.png" alt="logo" id="logo">
            <span><a href="index.html"><i class="fa-solid fa-house"></i></a></span>
        </div>
    </header>
    <div class="landing">
        <img src="images/marketingland.jpg" alt="">
        <div class="items">
            <div class="text">
                <h2>Welcome to GodWeb, your one-stop solution for all your e-marketing needs!</h2>
                <p>Are you looking to boost your online presence, drive more traffic to your website, and increase your sales?</p>
                <br>
                <p> Look no further! Our team of experts is here to help you create and implement effective e-marketing strategies that will take your business to the next level.</p>
            </div>
            <button id="moveToPricing">Start Today</button>
            <script>
                document.getElementById('moveToPricing').addEventListener('click',function(){
                    var pricingSection = document.getElementById('pricing');
                    pricingSection.scrollIntoView();
                });
            </script>
        </div>
    </div>  
    <h3 class="special-heading">How Do We Work?</h3>
    <p>the best Way</p>
    <div class="HDWO"><!--this section explains the work,three cards each one has a text and some good looking things-->
        <div class="container"><!--background will be light color-->
            <div class="F">
                <h3>Understanding Your Business</h3>
                <p>We begin by getting to know your business inside and out. Our team will conduct a comprehensive analysis of your industry, target audience, and competitors to develop a deep understanding of your unique needs and goals.</p> 
                <i class="fa-solid fa-1"></i>
            </div>
            <div class="S">
                <h3>Crafting Tailored Strategies</h3>
                <p>Armed with valuable insights, we'll create customized e-marketing strategies designed to elevate your online presence and drive results. Whether it's through email campaigns, social media management, or search engine optimization, we'll develop a plan that aligns with your business objectives.</p>
                <i class="fa-solid fa-2"></i>
                
            </div>
            <div class="Th">
                <h3> Implementation and Optimization</h3>
                <p>Once the strategies are in place, we'll put them into action. Our team will meticulously execute the e-marketing initiatives, constantly monitoring and optimizing them to ensure maximum impact. We'll provide you with regular reports and updates, keeping you informed every step of the way.</p>
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
                    <img src="images/marketingEMAIL.jpg" alt="">
                </div>
                <div class="text">
                    <h4>Targeted Email Campaigns</h4>
                    <p>Reach your audience directly with personalized and impactful email campaigns.</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="images/marketingSocil.jpg" alt="">
                </div>
                <div class="text">
                    <h4>Social Media Management</h4>
                    <p>Elevate your brand's presence across social media platforms.</p>
                </div>
            </div>
            <div class="card">
                <div class="img-container">
                    <img src="images/marketingSEO.jpg" alt="">
                </div>
                <div class="text">
                    <h4>Search Engine Optimization</h4>
                    <p>Boost your online visibility and drive organic traffic to your website through effective SEO strategies.</p>
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
                        <li>Unlimited targeted email campaigns.</li>
                        <li>Advanced social media management with analytics.</li>
                        <li>Comprehensive SEO optimization for top search engine rankings.</li>
                        <li>Personalized customer support with priority response</li>
                    </ul>
                </div>
                <button>JOIN NOW</button>
            </div>
            <div class="price-card">
                <h3>Silver</h3>
                <h2>100$ / month</h2>
                <div class="text">
                    <ul>
                        <li>Targeted email campaigns for up to 10,000 contacts.</li>
                        <li>Social media management on two platforms.</li>
                        <li>Basic SEO optimization for improved visibility.</li>
                        <li>Email support for technical assistance.</li>
                        <li>Monthly performance reports and recommendations.</li>
                    </ul>
                </div>
                <button>JOIN NOW</button>
            </div>
            <div class="price-card">
                <h3>BASIC</h3>
                <h2>75$ / month</h2>
                <div class="text">
                    <ul>
                        <li>Limited targeted email campaigns for up to 5,000 contacts.</li>
                        <li>Social media management on one platform.</li>
                        <li> Basic SEO setup for website indexing.</li>
                        <li>Standard email support during business hours.</li>
                        <li>Access to e-marketing resources and guides.</li>
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
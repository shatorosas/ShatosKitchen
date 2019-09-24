<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Omnifood is a premium food delivery service with the mission to bring affordable and healty meals to as many peaople as possible">
    <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="vendors/css/grid.css" />
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendors/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="resources/css/queries.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:200,300,300i,400&display=swap" rel="stylesheet">
    <title>Omnifood</title>

    <link rel="apple-touch-icon" sizes="180x180" href="resources/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="resources/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="resources/favicons/favicon-16x16.png">
    <link rel="manifest" href="resources/favicons/site.webmanifest">
    <link rel="mask-icon" href="resources/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" type="image/png" href="resources/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="resources/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>

<body>
    <header>
        <nav>
            <div class="row ">
                <img alt="logo" src="resources/img/logo-white.png" class="logo" />
                <a href="#"><img alt="logo" src="resources/img/logo.png" class="logo-black" /></a>
                <ul class="main-nav js--main-nav">
                    <li>
                        <a href="#section-features">Food delivery</a>
                    </li>
                    <li>
                        <a href="#section-steps">How it works</a>
                    </li>
                    <li>
                        <a href="#section-cities">Our cities</a>
                    </li>
                    <li>
                        <a href="#section-plans">Sign up</a>
                    </li>
                </ul>
                <a class="mobile-nav-icon js--nav-icon"><i class="icon ion-md-menu"></i></a>
            </div>
        </nav>
        <div class="hero-text-box">
            <h1>Goodbye junk food. <br />Hello super healthy meals.</h1>
            <a class="btn btn-full js--scroll-to-plans" href="#section-plans">I’m hungry</a>
            <a class="btn btn-ghost js--scroll-to-start" href="#section-features">Show me more</a>
        </div>
    </header>

    <section class="section-features js--section-features" id="section-features">
        <div class="row">
            <h2>
                Get food fast &mdash; not fast food.
            </h2>
            <p class="long-copy">
                Hello, we’re Omnifood, your new premium food delivery service. We know you’re always busy. No time for cooking. So let us take care of that, we’re really good at it, we promise!
            </p>
        </div>
        <div class="row js--wp1" id="wp1">
            <div class="col span-1-of-4 box">
                <i class="icon ion-md-infinite icon-big"></i>
                <h3>
                    Up to 365 days/year
                </h3>
                <p>
                    Never cook again! We really mean that. Our subscription plans include up to 365 days/year coverage. You can also choose to order more flexibly if that's your style.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="icon ion-md-stopwatch icon-big"></i>
                <h3>
                    Ready in 20 minutes
                </h3>
                <p>
                    You're only twenty minutes away from your delicious and super healthy meals delivered right to your home. We work with the best chefs in each town to ensure that you're 100% happy.
                </p>
            </div>
            <div class="col span-1-of-4 box">
                <i class="icon ion-md-nutrition icon-big"></i>
                <h3>
                    100% organic
                </h3>
                <p>
                    All our vegetables are fresh, organic and local. Animals are raised without added hormones or antibiotics. Good for your health, the environment, and it also tastes better!
                </p>
            </div>

            <div class="col span-1-of-4 box">
                <i class="icon ion-md-cart icon-big"></i>
                <h3>
                    Order anything
                </h3>
                <p>
                    We don't limit your creativity, which means you can order whatever you feel like. You can also choose from our menu containing over 100 delicious meals. It's up to you!
                </p>
            </div>


        </div>

    </section>
    <section class="section-meals" id="section-meals">
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/1.jpg" alt="Korean bibimbap with egg and vegetables" />
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/2.jpg" alt="Simple italian pizza with cherry tomatoes" />
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/3.jpg" alt="Chicken breast steak with vegetables" />
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/4.jpg" alt="Autumn pumpkin soup" />
                </figure>
            </li>
        </ul>
        <ul class="meals-showcase clearfix">
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/5.jpg" alt="Paleo beef steak with vegetables" />
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/6.jpg" alt="Healthy baguette with egg and vegetables" />
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/7.jpg" alt="Burger with cheddar and bacon" />
                </figure>
            </li>
            <li>
                <figure class="meal-photo">
                    <img src="resources/img/8.jpg" alt="Granola with cherries and strawberries" />
                </figure>
            </li>
        </ul>
    </section>
    <section class="section-steps" id="section-steps">
        <div class="row">
            <h2>
                How it works &mdash; Simple as 1, 2, 3
            </h2>
            <div class="row">
                <div class="col span-1-of-2 steps-box">
                    <img src="resources/img/app-iPhone.png" alt="Omnifood app on iPhone" class="app-screen  js--wp2" id="wp2" />
                </div>
                <div class="col span-1-of-2 steps-box">
                    <div class="works-step">
                        <div>1</div>
                        <p>Choose the subscription plan that best fits your needs and sign up today.</p>
                    </div>
                    <div class="works-step">
                        <div>2</div>
                        <p>Order your delicious meal using our mobile app or website. Or you can even call us!</p>
                    </div>
                    <div class="works-step">
                        <div>3</div>
                        <p>Enjoy your meal after less than 20 minutes. See you the next time!</p>
                    </div>

                    <a href="#" class="btn-app"><img src="resources/img/download-app.svg" alt="App Store Button" /></a>
                    <a href="#" class="btn-app"><img src="resources/img/download-app-android.png" alt="Play Store Button" /></a>
                </div>
            </div>

        </div>
    </section>
    <section class="section-cities js--wp3" id="section-cities">
        <div class="row">
            <h2>
                We're currently in these cities
            </h2>
        </div>
        <div class="row">
            <div class="col span-1-of-4 box">
                <img src="resources/img/lisbon-3.jpg" alt="Lisbon" />
                <h3>Lisbon</h3>
                <div class="city-feature">
                    <i class="icon ion-md-person icon-small"></i>
                    1600+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="icon ion-md-star icon-small"></i>
                    60+ top chefs
                </div>
                <div class="city-feature">
                    <i class="icon ion-logo-twitter icon-small"></i>
                    <a href="#">@omnifood_lx</a>
                </div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/san-francisco.jpg" alt="San Francisco" />
                <h3>San Francisco</h3>
                <div class="city-feature">
                    <i class="icon ion-md-person icon-small"></i>
                    3700+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="icon ion-md-star icon-small"></i>
                    160+ top chefs
                </div>
                <div class="city-feature">
                    <i class="icon ion-logo-twitter icon-small"></i>
                    <a href="#">@omnifood_sf</a>
                </div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/berlin.jpg" alt="Berlin" />
                <h3>Berlin</h3>
                <div class="city-feature">
                    <i class="icon ion-md-person icon-small"></i>
                    2300+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="icon ion-md-star icon-small"></i>
                    110+ top chefs
                </div>
                <div class="city-feature">
                    <i class="icon ion-logo-twitter icon-small"></i>
                    <a href="#">@omnifood_berlin</a>
                </div>
            </div>
            <div class="col span-1-of-4 box">
                <img src="resources/img/london.jpg" alt="London" />
                <h3>London</h3>
                <div class="city-feature">
                    <i class="icon ion-md-person icon-small"></i>
                    1200+ happy eaters
                </div>
                <div class="city-feature">
                    <i class="icon ion-md-star icon-small"></i>
                    60+ top chefs
                </div>
                <div class="city-feature">
                    <i class="icon ion-logo-twitter icon-small"></i>
                    <a href="#">@omnifood_london</a>
                </div>
            </div>
        </div>
    </section>
    <section class="section-testimonials" id="section-testimonials">
        <div class="row">
            <h2>
                Our customers can't live without us
            </h2>
        </div>
        <div class="row clearfix">
            <div class="col span-1-of-3">
                <blockquote>
                    Omnifood is just awesome! I just launched a startup which leaves me with no time for cooking, so Omnifood is a life-saver. Now that I got used to it, I couldn't live without my daily meals!
                </blockquote>
                <cite>
                    <img src="resources/img/customer-1.jpg" alt="Alberto Duncan" />
                    Alberto Duncan
                </cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    Inexpensive, healthy and great-tasting meals, delivered right to my home. We have lots of food delivery here in Lisbon, but no one comes even close to Omifood. Me and my family are so in love!
                </blockquote>
                <cite>
                    <img src="resources/img/customer-2.jpg" alt="Joana Silva" />
                    Joana Silva
                </cite>
            </div>
            <div class="col span-1-of-3">
                <blockquote>
                    I was looking for a quick and easy food delivery service in San Franciso. I tried a lot of them and ended up with Omnifood. Best food delivery service in the Bay Area. Keep up the great work!
                </blockquote>
                <cite>
                    <img src="resources/img/customer-3.jpg" alt="Milton Chapman" />
                    Milton Chapman
                </cite>
            </div>
        </div>
    </section>
    <section class="section-plans js--section-plans" id="section-plans">
        <div class="row">
            <h2>
                Start eating healthy today
            </h2>
            <div class="row">
                <div class="col span-1-of-3">
                    <div class="plan-box js--wp4" id="wp4">
                        <div>
                            <h3>Premium</h3>
                            <p class="plan-price">$399 <span>/ month</span></p>
                            <p class="plan-price-meal">That’s only 13.30$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> 1 meal every day </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Order 24/7 </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Access to newest creations </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Free delivery </li>
                            </ul>
                        </div>
                        <div>
                            <a class="btn btn-full" href="#">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Pro</h3>
                            <p class="plan-price">$149 <span>/ month</span></p>
                            <p class="plan-price-meal">That’s only 14.90$ per meal</p>
                        </div>
                        <div>
                            <ul>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> 1 meal 10 days/month </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Order 24/7 </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Access to newest creations </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Free delivery </li>
                            </ul>
                        </div>
                        <div>
                            <a class="btn btn-ghost" href="#">Sign up now</a>
                        </div>
                    </div>
                </div>
                <div class="col span-1-of-3">
                    <div class="plan-box">
                        <div>
                            <h3>Starter</h3>
                            <p class="plan-price">$19 <span>/ meal</span></p>
                            <p class="plan-price-meal">&nbsp;</p>
                        </div>
                        <div>
                            <ul>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> 1 meal </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Order from 8 am to 12 pm </li>
                                <li> <i class="icon ion-md-close icon-small"></i> </li>
                                <li> <i class="icon ion-md-checkmark icon-small"></i> Free delivery </li>
                            </ul>
                        </div>
                        <div>
                            <a class="btn btn-ghost" href="#">Sign up now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-form" id="section-form">
        <div class="row">
            <h2>
                We're happy to hear from you
            </h2>
            <div class="row">
                <form method="post" action="" class="contact-form">
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="name">Name:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="text" name="name" id="name" placeholder="Your name" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="email">Email:</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="email" name="email" id="email" placeholder="Your email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="find-us">How did you find us?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <select name="find-us" id="find-us">
                                <option value="friends" selected>Friends</option>
                                <option value="search">Search engine</option>
                                <option value="advertisement">Advertisement</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>Newsletter?</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="checkbox" name="news" id="news" checked> Yes, please
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label for="message">Drop us a line</label>
                        </div>
                        <div class="col span-2-of-3">
                            <textarea name="message" placeholder="Your message" id="message"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col span-1-of-3">
                            <label>&nbsp;</label>
                        </div>
                        <div class="col span-2-of-3">
                            <input type="submit" value="Send it!">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="row">
            <div class="col span-1-of-2">
                <ul class="footer-nav">
                    <li> <a href="#">About us</a> </li>
                    <li> <a href="#">Blog</a> </li>
                    <li> <a href="#">Press</a> </li>
                    <li> <a href="#">iOS App</a> </li>
                    <li> <a href="#">Android App</a> </li>
                </ul>
            </div>
            <div class="col span-1-of-2">
                <ul class="social-links">
                    <li> <a href="#"> <i class="icon ion-logo-facebook"></i></a> </li>
                    <li> <a href="#"> <i class="icon ion-logo-twitter "></i></a> </li>
                    <li> <a href="#"> <i class="icon ion-logo-googleplus "></i></a> </li>
                    <li> <a href="#"> <i class="icon ion-logo-instagram"></i></a> </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <p>Copyright &copy; 2015 by Omnifood. All rights reserved.</p>
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/scripts.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148585043-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-148585043-1');

    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COmpatible" content="IE=edge">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title> about </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        <section id="header">
            <a href="#"><img src="naveenfashions2.png" class="fashion" id ="icon" height=75px width=75px alt=""></a>
            <div>
                <ul id="navbar">
                    <li><a href="ind.php">HOME</a></li>
                    <li><a href="shop.php">SHOP</a></li>
                    
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="#" data-toggle="popover" title="<?php session_start(); echo $_SESSION['login_user']; ?>" data-placement="left"><i class="bi bi-person"></i></a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                    <li><a href="cart.html"><i class="far fa-shopping-bag" ></i></a></li>
                </ul>
            </div>
            
        </section>
        <script>
    $(document).ready(function(){
        $('[data-toggle="popover"]').popover();   
    });
    </script>
        <section id="about">
            <div class="about-1">
                
                
                
                <P><h1>ABOUT</h1></P>
                
                
                <section id="banner3">
                    <div class="banner-box">
                        
                    </div>
                    <div class="banner-box banner-box2">
        
                    </div>
                    <div class="banner-box banner-box3">
                        
                    </div>
                </section>
            
                
            </div>
            
            <div id="about-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="about-item text-center">
                                
                             
                              <h3>ECOMMERCE</h3>
                              <hr>
                              <p><strong>Ecom Express</strong> <br><br>
                                Ecom Express Limited is a leading end-to-end technology enabled logistics solutions provider to the Indian e-commerce industry. Headquartered in Gurugram, Haryana, Ecom Express was incorporated in 2012 by T. A. Krishnan, Manju Dhawan, K. Satyanarayana and Late. Sanjeev Saxena with their 100+ years of cumulative experience in the Indian logistics and distribution industry.
                                
                                The company has established its presence in the industry due to a differentiated business model which is built on delivery service capability, scalability, customization and sustainability. Ecom Express uses cutting-edge technology and automated solutions to enable first-mile pickup, processing, network optimization and last mile delivery. The company’s products include Ecom Express Services (EXS), Ecom Fulfilment Services (EFS) and Ecom Digital Services (EDS).
                                
                                Ecom Express has its presence in all 29 states of the country and operates in over 2650+ towns across 27,000+ PIN-codes in India. The company is the first private logistics company in India to envision a full-state coverage strategy, i.e., the capability to reach every doorstep in every city, town and village in a state. This full-state coverage is offered in 25 states, including Andhra Pradesh, Assam, Bihar, Chhattisgarh, Delhi, Goa, Gujarat, Haryana, Jharkhand, Karnataka, Kerala, Madhya Pradesh, Maharashtra, Odisha, Punjab, Rajasthan, Tamil Nadu, Telangana, Uttar Pradesh, and West Bengal. Through this deep reach strategy, the company has a capability to deliver to over 1.2 billion people, i.e., 95%+ of India’s population.
                                
                                After establishing a solid foothold in India, Ecom Express marked its maiden venture outside the country in early 2021 with its investment in Paperfly, Bangladesh’s largest third-party e-commerce logistics (3PL) firm.</p>                    
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <footer class="section-p1">
            <div class="col">
                <img class="logo" src="naveenfashions2.png"  height=120px width=120px alt="">
                <h4>Contact</h4>
                <p><strong>Address:</strong>RGUKT RKValley</p>
                <p><strong>Phone:</strong> 7674088344 / 9704364602</p>
                <p><strong>Hours:</strong>8:00 - 5:00, Mon-Fri</p>
                <div class="follow">
                    <h4>Follow Us on</h4>
                    <div class="icon">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-youtube"></i>
                        <i class="fab fa-linkedin"></i>
                    </div>
                </div>
            </div>
            <div class="col">
                <h4>About</h4>
                <a href="about.html">About us</a> <br> <br>
                <a href="#">DeliveryInformation</a> <br> <br>
                <a href="#">Privacy Policy</a> <br> <br>
                <a href="#">Terms & Conditions</a> <br> <br>
                <a href="#">Contact us</a> <br> <br>
            </div>
            <div class="col">
                <h4>My Account</h4> 
                <a href="#">Sign In</a> <br> <br>
                <a href="#">View Cart</a> <br> <br>
                <a href="#">My Wishlist</a> <br> <br>
                <a href="#">Track My Order</a> <br> <br>
                <a href="#">Help</a> <br> <br>
            </div>
            <div class="col install">
                <h4>Install App</h4>
                <p>From App Store or Google Play Store</p>
                <div class="row">
                    <img src="img/appleicon.png" height=57px width=120px alt="">
                    <img src="img/googlestore.png" height=50px width=120px alt="">
                </div> 
                <p>Secured Payment Gateways</p> <br> 
                <img src="img/pay.jpg" height=120px width=160px alt="">
            </div> 
            
    
            <footer class="bg-dark text-center py-3">
       <marquee style="color:white">&copy; 2023 Naveenkumar Naidu. All rights reserved.
       </marquee>
    </footer>
        </footer>
    </body>
    
</html>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-COmpatible" content="IE=edge">
    <meta name="viewreport" content="width=device-width, initial-scale=1.0">
    <title> ECOMMERCE </title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <section id="header">
        <a href="#"><img src="naveenfashions2.png" class="fashion" id ="icon" height=120px width=120px alt=""></a>
        <div>
            <ul id="navbar">
                <li><a href="ind.php">HOME</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <!--<li><i class="bi bi-person" onclick=open1() id="person"></i></li>-->
                <li><a href="#" data-toggle="popover" title="<?php session_start(); echo $_SESSION['login_user']; ?>" data-placement="left"><i class="bi bi-person"></i></a></li>
                <li><a href="ind.html">LOGOUT</a></li>
                <li><a href="cart.html"><i class="far fa-shopping-bag" ></i></a></li>
            </ul>
        </div>
        <script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>
    </section>

    <section id="hero">
        <h3>Trade-in-offer</h3>
        <h2>Super Value Deals</h2>
        <h1>On all Products</h1>
        <p> <blockquote>Save more with coupons & up to <span>70% off!</span></blockquote></p>
        <button input="CFG" onclick="#">Shop Now</button>
    </section>

    <section id="feature" class="section-p1">
        <div class="fe-box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiHJPUkPupNRF9gVi2vMQiBM-37HtXyf8o5g&usqp=CAU" width="60px" height="120px" alt="">
            <h6>Free Shipping</h6> 

        </div>
        
        <div class="fe-box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTK28_agKu1Gb-l9I_C6Ce9ZQJUYcjtX9ORYPAFIlb6UlCVCPqyKVQv-LdvV-cHqPXiCP8&usqp=CAU" width="60px" height="120px" alt="">
            <h6>Save money</h6> 

        </div>
        <div class="fe-box">
            <img src="https://www.digitalindiaadd.com/images/ecommerce.png" width="60px" height="120px" alt="">
            <h6>Promotions</h6> 

        </div>
        <div class="fe-box">
            <img src="https://files.startupranking.com/startup/thumb/29687_d29d586e862fdf244ff17524fd26f15cbf61474f_happy-sale_m.png" width="60px" height="120px" alt="">
            <h6>happysale</h6> 

        </div>
        <div class="fe-box">
            <img src="https://www.web1tech.com/wp-content/uploads/2021/07/web.png" width="60px" height="120px" alt="">
            <h6>24/7 Support</h6> 

        </div>
    </section>


    <section id="product1" class="section-p1">
        <h2>Featured Products</h2>
        <p>Season Collection</p>
        <div class="pro-container">
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20210420/UCLg/607ecc69aeb269a9e3972138/dennislingo_premium_attire_black__slim_fit_shirt_with_spread_collar.jpg" alt="">
                <div class="des">
                    <span>Dennislingo_premium_attire</span>
                    <h5>black__slim_fit_shirt_with_spread_collar</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹460</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220513/eAi1/627e2440f997dd03e2b9c264/the_bear_house_multi_checks_slim_fit_shirt.jpg" alt="">
                <div class="des">
                    <span>THe bear House</span>
                    <h5>Checks slim fit shirts </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹680</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20211013/duCz/61662fe3aeb26901108f0774/dennislingo_premium_attire_pink_full_sleeves_slim_fit_classic_shirt.jpg" alt="">
                <div class="des">
                    <span>Dennis Lingo</span>
                    <h5>Men Half Shirt </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹760</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20210728/bTPb/610067a4aeb269a9e3569ed2/the_indian_garage_co_blue_shirt_with_buttoned_flap_pockets.jpg" alt="">
                <div class="des">
                    <span>THe Indian Garage</span>
                    <h5>Shirt with butttons Flap pockets</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹560</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220412/2sS1/62559111f997dd03e2587507/wedani_pink_floral_print_high-neck_top.jpg" alt="">
                <div class="des">
                    <span>Wedani</span>
                    <h5>Floral Print High-Neck Top</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹670</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220315/WnYV/622fa5e3aeb26921afd7fb17/lee_cooper_black_low-rise_slim_fit_jeans.jpg" alt="">
                <div class="des">
                    <span>Lee Cooper</span>
                    <h5>Low rise slim fit jeans</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹1199</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220325/950S/623cd875aeb26921aff418f8/apnisha_pink_%26_black_floral_printed_saree_with_contrast_border.jpg" alt="">
                <div class="des">
                    <span>Apnisha</span>
                    <h5>Floral printed saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹399</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220309/4g6D/62284a37aeb26921afcee2b7/awesome_mustard_awesome_pure_silk_silver_zari_mini_checks_saree.jpg" alt="">
                <div class="des">
                    <span>Awesome</span>
                    <h5>Pure   Silk silver saree</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹284</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            
        </div>
    </section>
    
    <section id="banner" class="section-m1">
        <h4>Repair Services</h4>
        <h2>Up to <span>60% off</span> - For All Accessories</h2>
        <button class="normal">Explore More</button>
    </section>

    <section id="product1" class="section-p1">
        <h2>New Arrivals</h2>
        <p>Season Collection</p>
        <div class="pro-container">
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20210511/6Wq5/609988b3f997ddb31298b907/gear_blue_everyday_backpack_with_contrast_detail.jpg" alt="">
                <div class="des">
                    <span>GEAR</span>
                    <h5>Everyday Bag</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹479</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/hcd/hb1/15014834405406/safari_yellow_expedition_20_travel_backpack.jpg" alt="">
                <div class="des">
                    <span>Safari</span>
                    <h5>Expedition 20 Travel Bagpack</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹569</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220304/q8M4/622231ebf997dd03e201ca84/home_expressions_usa_multicoloured_104_tc__floral_print_cotton_double_bedsheet_with_2_pillow_covers.jpg" alt="">
                <div class="des">
                    <span>Home Expressions USA</span>
                    <h5>printed cotton double bed sheet with 2 pillow covers </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹598</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220721/3xPh/62d97104aeb26921af8ca95d/inf_frendz_light_pink_striped_top_%26_skirt_set_with_kitty_applique.jpg" alt="">
                <div class="des">
                    <span>INF FRENDZ</span>
                    <h5>Striped Top & Skirt set</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹409</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220103/rqQJ/61d311d5aeb2695cdd02a2cc/mom%27s_love_mustard_yellow_printed_sweatshirt_%26_joggers_set.jpg" alt="">
                <div class="des">
                    <span>MOMS LOVE </span>
                    <h5>Printed sweat shirt & jogger set</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹380</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220505/c8G3/6273ee25f997dd03e296e273/u.s._polo_assn._grey_slip-on_loafers_with_logo.jpg" alt="">
                <div class="des">
                    <span>US POLO assn.</span>
                    <h5>Slip-On Loafers </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹499</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220817/My52/62fcdd07f997dd394cfe6d4c/abros_grey_triumph-o_panelled_low-top_lace-up_casual_shoes.jpg" alt="">
                <div class="des">
                    <span>ABROS</span>
                    <h5>TRIUMPH-O-Panelled low-top lace-up-casual </h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹769</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            <div class="pro">
                <img src="https://assets.ajio.com/medias/sys_master/root/20220802/jJfP/62e824b7f997dd03e21560e9/adidas_originals_blue_zx_22_boost_lace-up_casual_shoes.jpg" alt="">
                <div class="des">
                    <span>Adidas Original</span> 
                    <h5>ZX 22 Boost Lace -up Casual shoes</h5>
                    <div class="star">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>₹460</h4>
                </div>
                <a href="#"><i class="fal fa-shoppig-cart cart"></i></a>
            </div>
            
        </div>
    </section>

    <section id="sm-banner" class="section-p1">
        <div class="banner-box">
            <h4>crazy deals </h4>
            <h2>Buy 1 get 1 free</h2>
            <span>The best classic dress is on sale</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-box banner-box2">
            <h4>Best suits</h4>
            <h2>Upcoming Season</h2>
            <span>The best classic dress is on sale</span>
            <button class="white">Collection</button>
        </div>

    </section>

    <section id="banner3">
        <div class="banner-box">
            <h2>SEASONAL SALE</h2>
            <h3>Rainy Collection upto 40% Off</h3>
        </div>
        <div class="banner-box banner-box2">
            <h2>NEW FOOTWARE COLLECTION</h2>
            <h3>SPRING/WINTER 2022</h3>
        </div>
        <div class="banner-box banner-box3">
            <h2>MENS SHIRTS</h2>
            <h3>NEW TRENDY PRINTS</h3>
        </div>
    </section>

    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up for Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>Special Offers</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="your email address">
            <button class="normal">Sign Up</i></button>
        </div>
    </section>

    <footer class="section-p1">
        <div class="col">
            <img class="logo" src="img/brand.png"  height=120px width=120px alt="">
            <h4>Contact</h4>
            <p><strong>Address:</strong>RGUKT RKValley</p>
            <p><strong>Phone:</strong>7674088344 / 9704364602</p>
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
    <script src="script.js"></script>
</body>

</html>
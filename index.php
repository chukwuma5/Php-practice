<?php
define("TITLE", "Home | Preshy's Restaurant");
$my_name        ="Preshy's design";
date_default_timezone_set('Africa/Lagos'); 
$today          = date("D j F, Y");
$this_year      = date("Y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/2ad8484a66.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo TITLE; ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=Dosis:wght@200;300;400&family=Great+Vibes&family=Italianno&family=Nunito:ital,wght@0,200;0,300;1,200&family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&family=Open+Sans:ital,wght@0,300;1,300&family=PT+Sans:ital@0;1&family=Parisienne&family=Poppins:ital,wght@0,100;0,200;1,100&family=Roboto+Condensed:ital,wght@0,300;1,300&family=Roboto:ital,wght@0,100;0,300;1,100&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200&family=Work+Sans:ital,wght@0,100;0,200;1,100;1,200&family=Yaldevi:wght@200;300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" media="all" href="rone.css">
    <link rel="stylesheet" media="all" href="baba.css">
</head>

<body>
    <section id="main-page" class="header">
        <nav>
            <a class="preshy" href="index.php">
                <li><i id="space" class="fas fa-hamburger"></i><span class="on-G">P</span>reshy's</li>
            </a>
            <div class="nav-links" id="navLinks">
                <span class="material-icons" onclick="hideMenu()" id="say">
                    close
                </span>
                <!--<i id="say" class="fas fa-times" onclick="hideMenu()"></i>-->
                <ul>
                    <li class="active"><a target=_blank href="index.php">HOME</a></li>
                    <li><a target=_blank href="team.php">TEAM</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="confirmation.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <div id="waka-girls">
                        <span>
                            <div class="popup" onclick="myFunction()">Shop now
                                <span class="popuptext" id="myPopup"><a class="shop-1" title="go to Login page"
                                        target=_blank href="confirmation.php">click here</a><br>
                                    To sign-in/up</span>
                            </div>
                        </span>
                        <div class="makanaki">
                            <a id="re-presh" title="go to Home" target=_blank href="index.php"><i id="space"
                                    class="fas fa-hamburger"></i><span class="on-G">P</span>reshy's</a>
                        </div>
                    </div>
                </ul>
            </div>
            <!-- <i id="say" class="fas fa-align-right" onclick="showMenu()"></i> -->
            <span class="material-icons" onclick="showMenu()" id="say">
                format_align_right
            </span>
        </nav>

        <section id="main-secs">
            <div id="container">
                <span class="dispense">
                    <strong class="spence-1"><span class="lote">Today's </span>Date : <small class="spense-2"></small>
                        <?php echo $today; ?>
                        </small>
                    </strong>

                    <span class="except">
                        <div class="guyo">
                            <a href="confirmation.php" class="ads-2">Sign-up/sign-in</a>
                            <a href="index.php#unity4" class="ads-1"><span class="least">Check</span> Our Dates</a>
                            <!--line spaces of 25px--> &nbsp;&nbsp;&nbsp;
                            <!--line spaces of 25px-->
                        </div>
                    </span>
                </span>
            </div>
        </section>
        <!-----------------------------Welcome Section------------------------------------>
        <section class="baba-2">
            <div id="container">
                <div id="myStars" class="stars">
                    <span class="xombo">
                        <span class="toss"><span id="remove">Hi there! Welcome to preshy's where we
                                never stop giving
                                you the best
                                services.<span class="iokl"> kindly
                                    enjoy your-slef as you order now &#38; get a free one too!</span></span>
                            <span class="material-icons" onclick="seeMenu()" id="may">
                                close
                            </span></span></span>

                </div>
            </div>
        </section>
        <!----------------------------Welcome Section- End-------------------------------->

        <div id="container">
            <div id="slider">
                <figure>
                    <img src="images/burger1.jpg" alt="">
                    <img src="images/burger2.jpg" alt="">
                    <img src="images/burger4.jpg" alt="">
                    <img src="images/burger5.jpg" alt="">
                    <img src="images/shop.jpg" alt="">
                </figure>
            </div>
            <div class="top">
                <h1>Fresh and Delicious <span>Meal</span></h1>
                <p>Both traditional and modern delicacy to satisfy the whole family</p>
                <a href="blog.php">Learn More</a>
            </div>
            <br>
            <div class="jsut-flex">
                <h2>Discover Metropolitan Cuisine</h2>
            </div>
            <section id="father">
                <div class="unity">
                    <div class="first">
                        <a href="menu.php" target=_blank>
                            <img src="https://static.wixstatic.com/media/a560a5_433372453339404ebb21fd73cb6083ad~mv2_d_2400_3600_s_4_2.jpg/v1/fill/w_396,h_400,al_c,q_80,usm_0.66_1.00_0.01/bevri_website_gift_card2.webp"
                                alt="menu page">
                            <div class="layer">
                                <h3>Chicken spicy</h3>
                            </div>
                        </a>
                    </div>

                    <div class="first">
                        <a href="menu.php" title="go to meu">
                            <img src="https://static.wixstatic.com/media/a560a5_a0ce25551b654359947482c3688ba1a0~mv2_d_2400_3600_s_4_2.jpg/v1/fill/w_396,h_400,al_c,q_80,usm_0.66_1.00_0.01/bevri_website_lunch_and_dinner.webp"
                                alt="menu page">
                            <div class="layer">
                                <h3>Vegetabele salad</h3>
                            </div>
                        </a>
                    </div>

                    <div class="first">
                        <a href="menu.php">
                            <img src="https://static.wixstatic.com/media/a560a5_7e7bc9bca5bc41a8b67f34adb1676e7e~mv2_d_2400_3600_s_4_2.jpg/v1/fill/w_396,h_400,al_c,q_80,usm_0.66_1.00_0.01/bevri_website_gift_card.webp"
                                alt="menu page">
                            <div class="layer">
                                <h3>Fried bread and egg</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
        </div>

        <section class="baba-nla">
            <div id="container">
                <section id="father2">
                    <h2>state</h2>
                    <div class="unity2">
                        <div class="check">
                            <h3>Lagos</h3>
                            <p class="size">
                                Lagos is the second most populous city in Africa with a
                                population of <em>14.8</em> million as of 2015 within the city proper. The Lagos
                                metropolitan
                                area
                                has a total
                                population of roughly <em>23.5</em>million as of 2018, making it the most populous
                                conurbation
                                in
                                Africa. Lagos is a major African financial centre and is the economic hub of Lagos State
                                and
                                Nigeria at large. The megacity has the fourth-highest GDP in Africa and houses one of
                                the
                                largest
                                and busiest seaports on the continent. It is one of the fastest growing cities in the
                                world.Thanks to its location, Lagos has been influenced by a variety of eastern and
                                western
                                civilizations, resulting in a unique cultural heritage.
                            </p>

                            <p>
                                <a href="https://en.wikipedia.org/wiki/Lagos">Read More</a>
                            </p>
                        </div>

                        <div class="adjust">
                            <iframe class="map"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253690.83154290248!2d3.369592662537726!3d6.5318834275917395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b0d9f68df77%3A0x2c55a83ed76a36cd!2zTGFnb3MgQ2VudHJhbCBNb3NxdWUg2YXYs9is2K8!5e0!3m2!1sen!2sng!4v1631622319653!5m2!1sen!2sng"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </section>
            </div>
            </div>
        </section>

        <section id="father3">
            <div class="jsut-flex wed">
                <h4>Our wines</h4>
            </div>
            <br>
            <div class="unity3">
                <div class="shift">
                    <img src="https://static.wixstatic.com/media/a560a5_4a4c686df7ed46b7ac7671d2c0b19599~mv2_d_3600_2400_s_4_2.jpg/v1/fill/w_1575,h_800,al_c,q_85,usm_0.66_1.00_0.01/bevri_website_supra.webp"
                        alt="">
                </div>
                <div class="shift2">
                    <div class="jsut-flex wed">
                        <h3>Lagos Wines</h3>
                    </div>
                    <p class="tied you">
                        Lagos is the second most populous city in Africa with a population of 14.8 million as of 2015
                        within the city proper. The Lagos metropolitan area has a total population of roughly
                        23.5million as of 2018, making it the most populous conurbation in Africa.
                    <blockquote class="tied"><q>Lagos uses methods of winemaking that no one can invent in today's
                            environment.You
                            could only inherit them throught the mists of thime</q></blockquote>
                    </p>

                    <p>
                        <a href="https://en.wikipedia.org/wiki/Lagos">Read More</a>
                    </p>
                </div>
            </div>
        </section>

        <div class="E-details">
            <small class="sponge">
                &copy;
                <?php echo $this_year; ?> -
                <?php echo $my_name; ?>
            </small>
        </div>
        <br>
        <br>
        <!--Footer Section-->
        <section class="finish-1">
            <div id="container">
                <footer>
                    <div id="unity4">
                        <div class="jsut-flex end">
                            <h2>Quick Links</h2>
                        </div>

                        <div class="one">
                            <ul class="singer">
                                <li class="active"><a target=_blank href="index.php">Home</a></li>
                                <li><a href="team.php">Team</a></li>
                                <li><a href="menu.php">Menu</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="confirmation.php">Order</a></li>
                                <!--php input-->
                                <article id="nono">2021&reg;</article>

                            </ul>
                            <div class="epp">
                                <a class="preshy ep" title="go back to home page" href="index.php">
                                    <li class="original"><i id="space" class="fas fa-hamburger"></i> <span
                                            class="on-G">P</span>reshy's
                                    </li>
                                </a>
                            </div>
                        </div>
                        <div class="jsut-flex end">
                            <h2>Meet Us</h2>
                        </div>
                        <div class="two">
                            <ul class="singers">
                                <address><i id="to" class="fas fa-home"></i> 7, Adoga Street, Ejigbo.Lagos</address>
                                <li><i id="we" class="fas fa-mobile"></i> +234-80-487-5457</li>
                                <li id="line-fresh"><i id="so" class="fas fa-envelope"></i><a id="over-write"
                                        href="mailto:afamefunapromise35@gmail.com">info@preshy.org</a></li>

                                <div class="vlue">
                                    <p> <strong id="forme">Work Hours</strong></p>
                                    <em><i id="po" class="fas fa-calendar-day"></i>Tuesday - Thursday</em><br>
                                    <span><i id="po" class="fas fa-clock"></i><em>1:00pm - 9:00pm</em></span><br><br>

                                    <em><i id="ro" class="fas fa-calendar-day"></i>Friday - Saturday</em><br>
                                    <span><i id="ro" class="fas fa-clock"></i><em class="lot">4:00pm -
                                            11:00pm</em></span><br><br>

                                    <em><i id="no" class="fas fa-calendar-day"></i>Sunday - Monday</em><br>
                                    <span><i id="no" class="fas fa-clock"></i><em class="lot">1:00pm -
                                            9:00pm</em></span><br>
                                    <span class="nerd"><strong>
                                            <?php include('store-hours.php'); ?>
                                        </strong></span>
                                    <!--php time zone code here-->
                                </div>
                            </ul>
                            <div class="eppp">
                                <img id="emil"
                                    src="https://images.unsplash.com/photo-1557555187-23d685287bc3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWFufGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                    alt="">
                                <figure class="fig-8">
                                    <h4>Olivia Amelia</h4>
                                    <article>Founder of Preshy's</article>
                                </figure>
                            </div>
                        </div>
                        <div class="jungo">
                            <span>
                                <a href="https://www.instagram.com/" target="Check us in Ig" target=_blank>
                                    <i id="changed" class="fab fa-instagram"></i>
                                </a>
                                <a href="https://www.linkedin.com/login" title="let's connect through linked-in">
                                    <i id="change" class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="https://www.facebook.com/" title="Our facebook handle">
                                    <i id="change" class="fab fa-facebook-f"></i>
                                </a>
                                <a href="https://ads.twitter.com/" target="blank">
                                    <i id="change" class="fab fa-twitter"></i>
                                </a>
                            </span>
                        </div>
                    </div>
                </footer>
            </div>
        </section>

        <!--Arrow section-->
        <div class="omah">
            <a href="#" title="Back to top" class="plus-1">
                <i class="fas fa-angle-double-up plus-2"></i>
            </a>
        </div>
        <!--Arrow section End-->

        <!------------------------------Script Packages-------------------------------------------------->
        <!--JS SCRIPT-->
        <script defer src="activePage.js"></script>
        <script>
            var navbarLinks = document.getElementById("navLinks")

            function showMenu() {
                navbarLinks.style.right = "0px"
                navbarLinks.style.transition = "all 0.65s ease-in-out"
            }

            function hideMenu() {
                navbarLinks.style.right = "-250px"
            }
        </script>

        <script>
            var star = document.getElementById("myStars")

            function seeMenu() {
                star.style.display = "none"
            }
        </script>

        <script>
            // When the user clicks on <div>, open the popup
            function myFunction() {
                var popup = document.getElementById("myPopup");
                popup.classList.toggle("show");
            }
        </script>
        <!------------------------------Script Packages End-------------------------------------------------->
</body>

</html>
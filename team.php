<?php
define("TITLE", "Preshy's Restaurant | Our Team");
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
    <link rel="stylesheet" href="rone.css">
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
                    <li class="active"><a href="index.php">HOME</a></li>
                    <li><a href="team.php">TEAM</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="confirmation.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <div id="waka-girls">
                        <span>
                            <div class="popup" onclick="myFunction()">Shop now
                                <span class="popuptext" id="myPopup"><a class="shop-1" href="confirmation.php">click
                                        here</a><br>
                                    To sign-in/up</span>
                            </div>
                        </span>
                        <div class="makanaki">
                            <a id="re-presh" href="index.php"><i id="space" class="fas fa-hamburger"></i>&nbsp;<span
                                    class="on-G">P</span>reshy's</a>
                        </div>
                    </div>
                </ul>
            </div>
            <!-- <i id="say" class="fas fa-align-right" onclick="showMenu()"></i> -->
            <span class="material-icons" onclick="showMenu()" id="say">
                format_align_right
            </span>
        </nav>

        <!--TEAM-->
        <div id="container">
            <section class="sect-1">
                <div class="jsut-flex wed">
                    <h2>our team</h2>
                </div>
                <div id="unity5">
                    <!--SECTION-1-->
                    <div id="loyal">
                        <img id="emily"
                            src="https://images.unsplash.com/photo-1600565193348-f74bd3c7ccdf?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8Y2hlZnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <p class="pus">
                            "Frankie is the great-grandson of the original Preshy's. He is the owner of preshy's Fine
                            Dining. He cooks a mean fritatta!".If you talk about food just as much as you eat it, you're
                            in
                            good company.
                        </p>

                        <p>
                        <h4>Frankie R.</h4>
                        <article>Food Director</article>
                        </p>
                    </div>

                    <!--SECTION-2-->
                    <div id="loyal">
                        <img id="emily"
                            src="https://media.istockphoto.com/photos/handsome-young-african-chef-standing-in-professional-kitchen-in-a-picture-id1217012868?b=1&k=20&m=1217012868&s=170667a&w=0&h=yWEbysIMlVMd2aqRyDwJ_ufV5BSd9D2ew0p6dVAtgho="
                            alt="">
                        <p class="pus">
                            "Micheal is the great-grandson of the original Preshy's. He is the owner of preshy's Fine
                            Dining. He cooks a mean fritatta!".If you talk about food just as much as you eat it, you're
                            in
                            good company.
                        </p>

                        <p>
                        <h4>Micheal O.</h4>
                        <article>Our Managing Director</article>
                        </p>
                    </div>

                    <!--SECTION-3-->
                    <div id="loyal">
                        <img id="emily"
                            src="https://media.istockphoto.com/photos/smiling-male-cook-on-gray-background-picture-id1300835557?b=1&k=20&m=1300835557&s=170667a&w=0&h=I4zIwBHR2MppJiL2w-uLl9AUEwQ2Llq3tXuOY6ha28g="
                            alt="">
                        <p class="pus">
                            "Gabriel is the great-grandson of the original Preshy's. He is the owner of preshy's Fine
                            Dining. He cooks a mean fritatta!".If you talk about food just as much as you eat it, you're
                            in
                            good company.
                        </p>

                        <p>
                        <h4>Gabriel F.</h4>
                        <article id="astro">Packaging Director</article>
                        </p>
                    </div>
                </div>
                <br>
                <div id="unity5">
                    <!--SECTION-1-->
                    <div id="loyal">
                        <img id="emily"
                            src="https://images.unsplash.com/photo-1541557435984-1c79685a082b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTA3fHxjaGVmfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <p class="pus">
                            "Anthony is the great-grandson of the original Preshy's. He is the owner of preshy's Fine
                            Dining. He cooks a mean fritatta!".If you talk about food just as much as you eat it, you're
                            in
                            good company.
                        </p>

                        <p>
                        <h4>Anthony C.</h4>
                        <article>Asst Branch Director</article>
                        </p>
                    </div>

                    <!--SECTION-2-->
                    <div id="loyal">
                        <img id="emily"
                            src="https://images.unsplash.com/photo-1622221410151-2e0c403c5c38?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzh8fGNoZWZ8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <p class="pus">
                            "Grayson is the great-grandson of the original Preshy's. He is the owner of preshy's Fine
                            Dining. He cooks a mean fritatta!".If you talk about food just as much as you eat it, you're
                            in
                            good company.
                        </p>

                        <p>
                        <h4>Grayson I.</h4>
                        <article>planning Director</article>
                        </p>
                    </div>

                    <!--SECTION-3-->
                    <div id="loyal">
                        <img id="emily"
                            src="https://images.unsplash.com/photo-1512485800893-b08ec1ea59b1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODd8fGNoZWZ8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <p class="pus">
                            "Jackson is the great-grandson of the original Preshy's. He is the owner of preshy's Fine
                            Dining. He cooks a mean fritatta!".If you talk about food just as much as you eat it, you're
                            in
                            good company.
                        </p>

                        <p>
                        <h4>Jackson K.</h4>
                        <article class="astro-2">Branch Director</article>
                        </p>
                    </div>
                </div>
        </div>
        <br>
    </section>

    <section class="incredible">
        <div id="container">
            <!--About Us-->
            <div class="jsut-flex end">
                <h5 class="no-space">About us</h5>
            </div>
            <br>

            <div class="unity6">
                <div class="space">
                    <p>
                    <blockquote class="esti"><q>
                            preshy Restaurant serves burgers and seasonal fare with a focus on fresh, local
                            ingredients. Opened by native New Yorkers, the concept was born by friends whose vision
                            was
                            to provide the neighborhood with delicious comfort food in a cozy, intimate setting.
                        </q></blockquote>
                    </p>

                    <p>
                    <article class="ties">
                        The main attraction, modeled after the Minneapolis-originated phenomenon, the “Juicy Lucy,”
                        features two thin beef short rib blend patties pinched together encasing a scoop of pimento
                        cheese, the result: a molten core of cheese oozing from the patty. Preshy's introduced their
                        take on the cult burger in 2010 to rate reviews.
                    </article>
                    </p>

                    <p>
                        <a href="https://www.instagram.com/" target="_blank" title="check us out">Check our menu</a>
                    </p>
                </div>
                <div class="jump">
                    <img class="hum"
                        src="https://images.squarespace-cdn.com/content/v1/5addf0c49d5abbdf63b094c7/1524523049402-CUZOBL2WF4PDAINI7MQN/IMG_1171a.jpg?format=1000w"
                        alt="">
                </div>
            </div>
        </div>
    </section>

    <div class="E-details">
        <small class="sponge">
            &copy; <?php echo $this_year; ?>- <?php echo $my_name; ?>
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
                            <li class="active"><a target="_blank" title="back to previous page"
                                    href="index.php">Home</a></li>
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
                            <a class="preshy ep" href="#" target="_blank" title="Home page">
                                <li class="original"><i id="space" class="fas fa-hamburger"></i><span
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
                                <span class="nerd"><strong><?php include('store-hours.php'); ?></strong></span>
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
    // When the user clicks on <div>, open the popup
    function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
    }
    </script>
    <!------------------------------Script Packages End-------------------------------------------------->
</body>

</html>
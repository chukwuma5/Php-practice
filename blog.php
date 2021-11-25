<?php
define("TITLE", "Preshy's Restaurant| Our blog");
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
                    <li class="active"><a href="index.php" title="home page" target="_blank">HOME</a></li>
                    <li><a href="team.php">TEAM</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="confirmation.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <div id="waka-girls">
                        <span>
                            <div class="popup" onclick="myFunction()">Shop now
                                <span class="popuptext" id="myPopup"><a class="shop-1" href="#">click here</a><br>
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
        </p>
        <section Id="main-secs">
            <span class="dispense">
                <strong class="spence-1"><span class="lote">Today's </span>Date : <small class="spense-2"></small>
                    <?php echo $today; ?>
                    </small>
                </strong>
            </span>
            </div>
        </section>
        <!--blog-->
        <section id="shine">
            <div>
                <h2>Latest Stories</h2>
            </div>
        </section>


        <div id="container">
            <section>
                <div class="part4">
                    <div class="most">
                        <a href="">

                            <img class="maze" src="images/cool.jpg" alt="">

                            <div class="mist">
                                <h2>14<br>sep</h2>
                            </div>
                        </a>
                        <div>
                            <figure>
                                <h3> <a target="_blank" href="#freestyle-sheet">Mini Store Annoucments &#8212; NEW!</a>
                                </h3>
                                <p>
                                    Come in and say hi to the team at our new lakeside mini preshy's store located
                                    in the Fresh meal Precinct, the bright blue neons and beautiful daily food
                                    displays s...
                                </p>

                                <p class="choke">
                                    <a class="coke" href="">Read More <i class="fas fa-long-arrow-alt-right"></i> </a>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="most">
                        <a target="_blank" href="#freestyle-sheet">
                            <img class="maze" src="images/boss.jpg" alt="">
                            <div class="mist">
                                <h2>10<br>dec</h2>
                            </div>
                        </a>
                        <div>
                            <figure>
                                <h3> <a target="_blank" href="#freestyle-sheet">Pre-order Prepearations</a></h3>
                                <p>
                                    Welcome Everyone, we are happy to annouce to you all, you can start your
                                    christmas pre-order, which is to enable us know how much snacks to make. <em>You
                                        ready, we ready.</em> ...
                                </p>

                                <p class="choke">
                                    <a href="" class="coke">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="most">
                        <a target="_blank" href="#freestyle-sheet">
                            <img class="maze" src="images/speed.jpg" alt="">
                            <div class="mist">
                                <h2>17<br>Aug</h2>
                            </div>
                        </a>
                        <div>
                            <figure>
                                <h3> <a target="_blank" href="#freestyle-sheet"> Our Head Office Opens</a></h3>
                                <p>
                                    We are excited to announce confirmation of the following new preshy’s store
                                    openings – and rest assured there are more to come for this year – keep an eye
                                    out on...
                                </p>

                                <p class="choke">
                                    <a href="" class="coke">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="most">
                        <a href="#freestyle-sheet">
                            <img class="maze" src="images/drive.jpg" alt="">
                            <div class="mist">
                                <h2>29<br>Aug</h2>
                            </div>
                        </a>
                        <div>
                            <figure>
                                <h3> <a href="#freestyle-sheet">Logistics &#38; business </a></h3>
                                <p>
                                    Feed at Home? august 2021 saw the opening of our first owned logistics centre
                                    for the delivery of our food to you our dear customers.
                                </p>

                                <p class="choke">
                                    <a href="" class="coke">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="most">
                        <a target="_blank" href="#freestyle-sheet">
                            <img class="maze" src="images/up.jpg" alt="">
                            <div class="mist">
                                <h2>5<br>nov</h2>
                            </div>
                        </a>
                        <div>
                            <figure>
                                <h3> <a target="_blank" href="#freestyle-sheet">Our saucy Meals &#8212; NEW!</a></h3>
                                <p>
                                    Nov 2021 – Stay tuned locals of ikeja as we gear up for our addition of this
                                    sumptuous and cheap meal! Check out FB and our other Social media sites for
                                    opening offers
                                </p>

                                <p class="choke">
                                    <a href="#freestyle-sheet" class="coke">Read More <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="most">
                        <a href="">
                            <img class="maze" src="images/call.jpg" alt="">
                            <div class="mist">
                                <h2>1<br>oct</h2>
                            </div>
                        </a>
                        <div>
                            <figure>
                                <h3> <a target="_blank" href="#freestyle-sheet">Festac Stores &#8212; NEW! </a></h3>
                                <p>
                                    We are thrilled to announce the introduction of our 2<sup>nd</sup> ...... sales
                                    will start from Monday 1<sup>st</sup> of
                                    october. We would like to wish our latest food distributors partner – Micheal
                                    &#38; R...
                                </p>

                                <p class="choke">
                                    <a href="#freestyle-sheet" class="coke">Read More <i
                                            class="fas fa-long-arrow-alt-right"></i></a>
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>

                <section class="pass">
                    <ul>
                        <div class="goal">
                            <li class="okeme"><i class="fas fa-long-arrow-alt-left"></i><a id="prev"
                                    href="#">&nbsp;Prev</a>
                            </li>
                            <li><a class="add" target="_blank" href="#templating">1</a></li>
                            <li><a class="me" href="#templating">2</a></li>
                            <li class="okeme"><a id="next" href="#">Next</a> <i class="fas fa-long-arrow-alt-right"></i>
                            </li>
                        </div>
        </div>
        </ul>
    </section>
    </section>
    <div class="E-details">
        <small class="sponge">
            &copy;
            <?php echo $this_year; ?>-
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
                            <li class="active"><a href="index.php">Home</a></li>
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
                            <a class="preshy ep" href="index.php">
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

    <!------------------------Java-Script packages------------------------------------------------------>
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
    <!------------------------Java-Script packages End------------------------------------------------------>
</body>

</html>
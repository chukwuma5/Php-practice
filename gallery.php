<?php
define("TITLE", "Preshy's Restaurant | Gallery");
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
            <a class="preshy" title="home page" href="index.php">
                <li><i id="space" class="fas fa-hamburger"></i><span class="on-G">P</span>reshy's</li>
            </a>
            <div class="nav-links" id="navLinks">
                <span class="material-icons" onclick="hideMenu()" id="say">
                    close
                </span>
                <!--<i id="say" class="fas fa-times" onclick="hideMenu()"></i>-->
                <ul>
                    <li class="active"><a href="index.php" title="home page">HOME</a></li>
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
                            <a id="re-presh" href="#"><i id="space" class="fas fa-hamburger"></i>&nbsp;<span
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

        <div id="container">
            <!--Gallery-->
            <section class="coko">
                <div class="jsut-flex wed">
                    <h2>food showcase</h2>
                </div>
                <div class="part1">
                    <div class="just">
                        <a href="https://www.facebook.com/" target="_blank" title="Check us on our facebook page">
                            <img class="size"
                                src="https://images.unsplash.com/photo-1603064752734-4c48eff53d05?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OHx8YnVyZ2VyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                            <div class="layer2">
                                <h2>beef burger</h2>
                            </div>
                        </a>
                    </div>

                    <div class="just">
                        <a title="Check us on our facebook page" href="https://www.facebook.com/">
                            <img class="size"
                                src="https://images.unsplash.com/photo-1610440042657-612c34d95e9f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjJ8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=60"
                                alt="">
                            <div class="layer2">
                                <h2 class="">turkey burger</h2>
                            </div>
                        </a>
                    </div>

                    <div class="just">
                        <a href="https://www.facebook.com/" title="Check us on our facebook page">
                            <img class="size"
                                src="https://images.unsplash.com/photo-1560130803-aaadb4bc913e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=60"
                                alt="">
                            <div class="layer2">
                                <h2>burger &#38; Fries</h2>
                            </div>
                        </a>
                    </div>

                    <div class="just">
                        <a title="Check us on our facebook page" href="https://www.facebook.com/">
                            <img class="size"
                                src="https://images.unsplash.com/photo-1596662951482-0c4ba74a6df6?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=60"
                                alt="">
                            <div class="layer2">
                                <h2>elk burger</h2>
                            </div>
                        </a>
                    </div>

                    <div class="just">
                        <a title="Check us on our facebook page" href="https://www.facebook.com/">
                            <img class="size"
                                src="https://images.unsplash.com/photo-1611001395137-a5795d9c9ac4?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTJ8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                            <div class="layer2">
                                <h2> sauce fries &#38; burger</h2>
                            </div>
                        </a>
                    </div>

                    <div class="just">
                        <a title="Check us on our facebook page" href="https://www.facebook.com/">
                            <img class="size"
                                src="https://images.unsplash.com/photo-1547754070-c73f90c116b5?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1000&q=60"
                                alt="">
                            <div class="layer2">
                                <h2>vegetable burger</h2>
                            </div>
                    </div>
                    </a>
                </div>
        </div>
        <!--ig handles-->
        <!--------------------------Quick line break of 5px--------------------------->
        <br>
        <!--------------------------Line break end--------------------------->
        <section>
            <div class="ig">
                <h3>Follow us on instagram</h3>
                <p>check out our post and follow us</p>
                <p><a class="done" target="_blank" href="https://www.instagram.com/">preshy's</a></p>
            </div>
        </section>
        <!--------------------------Quick line break of 5px--------------------------->
        <br>
        <!--------------------------Line break end--------------------------->
        <div id="container">
            <div class="jsut-flex wed">
                <h2 class="left-own">Some of our posts</h2>
            </div>
            <div class="unity7">
                <div class="cost">
                    <a href="confirmation.php">
                        <img class=""
                            src="https://media.istockphoto.com/photos/dinner-is-served-picture-id1324019576?b=1&k=20&m=1324019576&s=170667a&w=0&h=XFbpveKnJk5NVPiOmbifMvmECXYY1MmZtf1Sl06u9KI="
                            alt="">
                        <div class="coat">
                            <h2>steaked burger</h2>
                        </div>
                    </a>
                </div>

                <div class="cost">
                    <a href="confirmation.php">
                        <img src="https://media.istockphoto.com/photos/hamburger-french-fries-and-beer-picture-id1224393397?b=1&k=20&m=1224393397&s=170667a&w=0&h=t-HA_trAmIFrVFc1k1jR1a-UaGQovBEVFuj9n-wdgaI="
                            alt="">
                        <div class="coat">
                            <h2>Veggie burger </h2>
                        </div>
                    </a>
                </div>

                <div class="cost">
                    <a href="confirmation.php">
                        <img src="https://media.istockphoto.com/photos/delicious-homemade-hamburger-and-french-fries-picture-id1254672762?b=1&k=20&m=1254672762&s=170667a&w=0&h=nKrG40G2jj9O8wzJ8wDD2zmUKNp00mcdVWK_f_zixug="
                            alt="">
                        <div class="coat">
                            <h2>slimy pork burger</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="unity8">
                <div class="cost">
                    <a href="confirmation.php">
                        <img src="https://media.istockphoto.com/photos/burgers-and-fries-picture-id694198404?b=1&k=20&m=694198404&s=170667a&w=0&h=xVIwJyyynl5_czXopjSqcgA9KW55twCEwnJTTC7F_b4="
                            alt="">
                        <div class="coat">
                            <h2>ketchup fries &#38; <span>burger</span></h2>
                        </div>
                    </a>
                </div>
                <div class="cost">
                    <a href="confirmation.php">
                        <img src="https://images.unsplash.com/photo-1599894555091-71db8e565f63?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="coat">
                            <h2>hot fries, custard &#38; <span>burger</span></h2>
                        </div>
                    </a>
                </div>

                <div class="cost">
                    <a href="confirmation.php">
                        <img src="https://images.unsplash.com/photo-1585684277109-f6b0dda7fa54?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="coat">
                            <h2>bison burger &#38; juice</h2>
                        </div>
                    </a>
                </div>
            </div>
    </section>
    </div>

    <section class="baba-3">
        <div id="container">
            <div class="follow">
                <a href="#">check for more</a>
            </div>
            <!--social handles-->
            <section class="collow">
                <div>
                    <a href="#">
                        <i id="changed" class="fab fa-instagram"></i>
                    </a>
                    <a href="#">
                        <i id="change" class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#">
                        <i id="change" class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#">
                        <i id="change" class="fab fa-twitter"></i>
                    </a>
                </div>
        </div>
    </section>
    <br>
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
                            <a id="rollys" class="preshy ep" href="index.php">
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
                                <!-- php time zone code here-->
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
    <!------------------------------Script Packages End------------------------------------------------->
</body>

</html>
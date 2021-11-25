<!--<?php
define("TITLE", "Preshy's Restaurant | Our Menu");
$my_name        ="Preshy's design";
date_default_timezone_set('Africa/Lagos'); 
$today          = date("D j F, Y");
$this_year      = date("Y");
?>-->

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
        <!-----------------------------Menu Proper-------------------------->
        <section class="guard-2">
            <div id="container">
                <!--menu-->
                <section class="downed">
                    <div class="act">
                        <img src="images/regular.svg" alt="">
                        <h2>Shop with <br> <span>us</span></h2>
                    </div>
            </div>
        </section>

        <section>
            <div id="container">
                <div class="join">
                    <div class="rust">
                        <a
                            href="https://images.unsplash.com/photo-1551632179-37fd8131de13?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGV4cGVuc2l2ZSUyMHdpbmV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60">
                            <img src="https://images.unsplash.com/photo-1551632179-37fd8131de13?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fGV4cGVuc2l2ZSUyMHdpbmV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                            <div class="rewind">
                                <h2>&nbsp;&nbsp;Marion wine</h2>
                            </div>
                        </a>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="rust">
                        <img src="https://images.unsplash.com/photo-1571091655789-405eb7a3a3a8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="rewind">
                            <h2>turkey burger</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                            </figure>

                        </div>
                        <span class="pots">
                            <img src="https://media.istockphoto.com/photos/delicious-homemade-hamburger-and-french-fries-picture-id1254672762?b=1&k=20&m=1254672762&s=170667a&w=0&h=nKrG40G2jj9O8wzJ8wDD2zmUKNp00mcdVWK_f_zixug="
                                alt="">
                        </span>
                        <span class="leg">
                            <h2 class="wake">free</h2>
                        </span>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a class="pick" href="stock.php">free Order</a>
                                </p>
                            </figure>
                        </div>
                    </div>


                    <div class="rust">
                        <img src="https://images.unsplash.com/photo-1551782450-17144efb9c50?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8YnVyZ2VyfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="rewind">
                            <h2>fries &#38; burger </h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">order now</a>
                                </p>
                                <p>
                                    <span class="cup">-30%</span>
                                </p>
                            </figure>
                        </div>

                        <img src="https://images.unsplash.com/photo-1457460866886-40ef8d4b42a0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">

                        <span class="leg">
                            <h2>free</h2>
                        </span>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a class="pick" href="stock.php">free Order</a>
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>


                <div class="join2">
                    <div class="rust">
                        <img src="  https://media.istockphoto.com/photos/cheeseburger-and-fries-on-restaurant-table-picture-id507636912?b=1&k=20&m=507636912&s=170667a&w=0&h=k6MIhhs08ALO4SgzHHUkrw8s4JLVE0x79HpuJ1eyqV8="
                            alt="">
                        <div class="rewind">
                            <h2>hot elf burger</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now </a>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <img src="https://images.unsplash.com/photo-1585684277109-f6b0dda7fa54?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="rewind">
                            <h2 id="bug-adj">black bean burger <span> &#38; juice </span></h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <img src="https://media.istockphoto.com/photos/french-fries-and-sauce-picture-id1212626776?b=1&k=20&m=1212626776&s=170667a&w=0&h=Zx6udtMrbZ44QLBWypB3CbfPC6OB7Q9vyW92GhQUJXw="
                            alt="">
                        <div class="rewind">
                            <h2>ketchup &#38; fries</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <img src="https://media.istockphoto.com/photos/image-of-knickerbocker-glass-of-strawberry-milkshake-smoothie-topped-picture-id1286336843?b=1&k=20&m=1286336843&s=170667a&w=0&h=VCajXnWnPCY4wX4SdK4n3XciG-Oni-99SsRFHbeArgw="
                            alt="">
                        <div class="rewind">
                            <h2 id="milk-aj">milk shake</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <img src="https://media.istockphoto.com/photos/cheeseburger-and-fries-picture-id950855878?b=1&k=20&m=950855878&s=170667a&w=0&h=HOno0pgidsEm9UJO-EgxVHoNuDzfAR7Vvkl3clP7S-A="
                            alt="">
                        <div class="rewind">
                            <h2> ketchup fries &#38;<span>salmon burger</span> </h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <img src="https://media.istockphoto.com/photos/hand-holding-glass-of-orange-cocktail-on-ice-with-mint-leaf-and-lime-picture-id1296094621?b=1&k=20&m=1296094621&s=170667a&w=0&h=O3hlA99xsZsLDr7a_oK9BV_h96wvJz0izkL13nU_DTM="
                            alt="">
                        <div class="rewind">
                            <h2>Orange lemonade</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                                <p>
                                    <span class="cup">-40%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>

                <div class="join3">
                    <div class="rust">
                        <img src="https://media.istockphoto.com/photos/burgers-and-fries-picture-id694198404?b=1&k=20&m=694198404&s=170667a&w=0&h=xVIwJyyynl5_czXopjSqcgA9KW55twCEwnJTTC7F_b4="
                            alt="">
                        <div class="rewind">
                            <h2>Jago, burger <span>&#38; fries</span> </h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="rust">
                        <img src="https://media.istockphoto.com/photos/hamburger-french-fries-and-beer-picture-id1224393397?b=1&k=20&m=1224393397&s=170667a&w=0&h=t-HA_trAmIFrVFc1k1jR1a-UaGQovBEVFuj9n-wdgaI="
                            alt="">
                        <div class="rewind">
                            <h2>bison burger <span> &#38; juice </span></h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                                <p>
                                    <span class="cup">-20%</span>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="rust">
                        <img src="https://images.unsplash.com/photo-1599894555091-71db8e565f63?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                            alt="">
                        <div class="rewind">
                            <h2> fries, cutard &#38; <span>burger</span></h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="stock.php">Order Now</a>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <br>
            <section class="guard-2">
                <div id="container">
                    <section id="drawn">
                        <div class="fact">
                            <img src="images/tanks.svg" alt="">
                            <h2>Thank's for shopping <br><span>with us</span></h2>
                        </div>
                </div>
            </section>
        </section>
        <div class="E-details">
            <small class="sponge">
                &copy; <?php echo $this_year; ?> - <?php echo $my_name; ?>
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
                                <a class="preshy ep" href="#">
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
        <!------------------------------Script Packages Ends-------------------------------------------------->
</body>

</html>
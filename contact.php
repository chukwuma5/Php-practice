<?php
define("TITLE", "Preshy's Restaurant | Contact Us");
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
<main id="cont">

    <body>
        <section id="main-page" class="header">
            <nav>
                <a class="preshy" target="_blank" href="index.php">
                    <li><i id="space" class="fas fa-hamburger"></i> <span class="on-G">P</span>reshy's</li>
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
                                <a id="re-presh" href="index.php"><i id="space" class="fas fa-hamburger"></i><span
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

            <!--New contact form-->
            <section class="cyril-g">
                <!--for text-design-->
                <div class="design-right">
                    <h3>preshy’s Designs</h3>
                </div>
                <div id="container">
                    <section class="two-go">
                        <div class="jsut-flex end">
                            <h2>Contact Us</h2>
                        </div>
                    </section>
                    <?php  
        if(isset($_POST['submit'])){
            
            $result="";
            require 'PHPMailerAutoload.php';
            
            $mail = new PHPMailer;
            
           // $mail->SMTPDebug = 3;                               // Enable verbose debug output
            
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'afamefunapromise35@gmail.com';                 // SMTP username
            $mail->Password = 'chukwuma901';                           // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to
            
            $mail->setFrom($_POST['email'], $_POST['name']);
            $mail->addAddress('afamefunapromise4@gmail.com');     // Add a recipient
            
            $mail->isHTML(true);
            $mail->Subject = 'Here is the subject:' .$_POST['subject'];
            $mail->Body    = '<h1 align=center>Name :' .$_POST['name'].'<br>Email:'.$_POST['email']. '<br>Message: ' .$_POST['message']. '</h1>';

            
           if(!$mail->send()) {
           $result='<h5 id="rung">Something went wrong, Try again</h5>';
           } else {
           $result='<h5 id="pent">thanks ' .$_POST["name"].' your message has been sent</h5>';
           }
            
            }
    ?>
                    <?= @$result; ?>
                    <div class="login-box grate">
                        <div class="bizy ity">
                            <form action="" method="post">
                                <h5 id="dli">Reference</h5>
                                <div class="form-g">
                                    <label class="saka">Name:</label>
                                    <i class="fas fa-user-alt" id="sept"></i></i> <input type="text" id="name"
                                        name="name" class="form-cso" required>
                                </div><br>
                                <div class="col-sm-9 form-group">
                                    <label for="subject">Subject:</label>
                                    <i class="far fa-sticky-note" id="sent"></i> <input type="text" class="form-con"
                                        id="subject" name="subject" required>
                                </div>
                                <br>
                                <div class="col-sm-9 form-group">
                                    <label for="name" class="saka">Email:</label>
                                    <i class="fas fa-envelope" id="seat"></i> <input type="email" class="form-con"
                                        id="name" name="email" required>
                                </div><br>
                                <div class="col-sm-9 form-group">
                                    <label for="name">Message:</label>
                                    <i class="fas fa-sticky-note" id="sect"></i> <textarea class="form-con tos"
                                        type="textarea" required id="message" name="message"></textarea>
                                    <p>
                                        <button type="submit" name="submit" class="btn-pg">Send</button>
                                    </p>
                            </form>
                            </p>
                            </form>
                        </div>
                        <div class="lowkey">
                            <img src="images/adress.svg" alt="">
                        </div>
                    </div>
                </div>
                </div>
                <!--for text-design-->
                <div class="design-left">
                    &copy;
                    <?php echo $this_year; ?> -
                    <?php echo $my_name; ?>
                </div>
            </section>
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
                                        <span><i id="po" class="fas fa-clock"></i><em>1:00pm -
                                                9:00pm</em></span><br><br>

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

            </script>
            <!------------------------------Start of java-script packages------------------------------------------------>
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
            <!------------------------------End of java-script packages------------------------------------------------>

</main>
</body>

</html>
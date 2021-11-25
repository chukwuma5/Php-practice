<?php
define("TITLE", "Preshy's Restaurant | Delicious Food for you");
$my_name        ="Preshy's design";
date_default_timezone_set('Africa/Lagos'); 
$today          = date("D j F, Y");
$this_year      = date("Y");
$firstPrice     = 5;
$secondPrice    = 3;
$thirdPrice     = 55;
$fourthPrice    = 7;
$discountCut    = 0.5;
$priceReduce    = 0.2;
$primaryPrice   = ($firstPrice * $discountCut);
$secondaryPrice = ($secondPrice * $discountCut);
$tetiaryPrice   = ($thirdPrice * $priceReduce);
$finalPrice     =  ($fourthPrice * $discountCut);
$myFree         = "It's free for order!";
$ourFree        = "It's free for order!";
session_start();
if (!isset($_SESSION['username'])) {
   header('location:confirmation.php');
}
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
                    <li class="active"><a target="_blank" href="index.php">HOME</a></li>
                    <li><a href="team.php">TEAM</a></li>
                    <li><a href="menu.php">MENU</a></li>
                    <li><a href="blog.php">BLOG</a></li>
                    <li><a href="gallery.php">GALLERY</a></li>
                    <li><a href="confirmation.php">ORDER</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                    <div id="waka-girls">
                        <span>
                            <div class="popup" onclick="myFunction()">Shop now
                                <span class="popuptext" id="myPopup"><a class="shop-1" href="confirmation.php"
                                        target="_blank">click here</a><br>
                                    To sign-in/up</span>
                            </div>
                        </span>
                        <div class="makanaki">
                            <a id="re-presh" target="_blank" href="index.php"><i id="space"
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
        <div class="vert">
            <h2>Welcome
                <?php echo $_SESSION['username']; ?>
            </h2>
            <a title="Log-out from your account" target="_blank" href="logout.php">log-out</a>
        </div>

        <div id="container">
            <!--Menu Order Begins-->
            <section class="work-it">
                <div class="jsut-flex wed">
                    <h2>Delicacies For You</h2>
                </div>
                <br>

                <div class="join2">
                    <div class="rust">
                        <a href="#modal-3">
                            <img src="  https://media.istockphoto.com/photos/cheeseburger-and-fries-on-restaurant-table-picture-id507636912?b=1&k=20&m=507636912&s=170667a&w=0&h=k6MIhhs08ALO4SgzHHUkrw8s4JLVE0x79HpuJ1eyqV8="
                                alt="">
                        </a>
                        <div class="rewind">
                            <h2>hot elf burger</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p class="mark">
                                    <a href="#modal-3" data-modal-target="#modal-3">order now</a>
                                <div class="modal" id="modal-3">
                                    <div class="modal-header">
                                        <div class="title">Hot Elf Burger</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p class="eat">
                                                <img src="  https://media.istockphoto.com/photos/cheeseburger-and-fries-on-restaurant-table-picture-id507636912?b=1&k=20&m=507636912&s=170667a&w=0&h=k6MIhhs08ALO4SgzHHUkrw8s4JLVE0x79HpuJ1eyqV8="
                                                    alt=""> <span class="mama"> <span class="para"> <b> Name of
                                                            Food:</b>
                                                        <strong>Hot elf burger</strong></span><br><span class="paras">It
                                                        is
                                                        a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span>
                                                    <span class="any">price:&nbsp;$
                                                        <?php echo "$primaryPrice";?>
                                                    </span><span class="parad"> <b>Suggested
                                                            Beverage:</b> <strong>milk shake</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$primaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">

                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" value="subscribe"
                                                            id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </section>
                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" value="subscribe" name="subscribe"
                                                            id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>
                                        <section class="pok">

                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button value="submit">save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <a href="#modal-4">
                            <img src="https://images.unsplash.com/photo-1585684277109-f6b0dda7fa54?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </a>
                        <div class="rewind">
                            <h2>black bean burger <span> &#38; juice </span></h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-4" data-modal-target="#modal-4">order now</a>
                                <div class="modal" id="modal-4">
                                    <div class="modal-header">
                                        <div class="title">Black bean burger &#38; juice</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://images.unsplash.com/photo-1585684277109-f6b0dda7fa54?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjh8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt=""> <span class="mama mo"><span class="para"> <b> Name of
                                                            Food:</b>
                                                        <strong>black bean burger</strong></span><br><span
                                                        class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$finalPrice";?>
                                                    </span><span class="parad"> <b>Suggested
                                                            Beverage:</b> <strong>Apple juice</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price: $
                                                <?php echo "$finalPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <a href="#modal-header">
                            <img src="https://media.istockphoto.com/photos/french-fries-and-sauce-picture-id1212626776?b=1&k=20&m=1212626776&s=170667a&w=0&h=Zx6udtMrbZ44QLBWypB3CbfPC6OB7Q9vyW92GhQUJXw="
                                alt="">
                        </a>
                        <div class="rewind">
                            <h2>ketchup &#38; fries</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-5" data-modal-target="#modal-5">order now</a>
                                <div class="modal" id="modal-5">
                                    <div class="modal-header">
                                        <div class="title">Ketchup &#38; fries</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/french-fries-and-sauce-picture-id1212626776?b=1&k=20&m=1212626776&s=170667a&w=0&h=Zx6udtMrbZ44QLBWypB3CbfPC6OB7Q9vyW92GhQUJXw="
                                                    alt=""> <span class="mama"><span class="para"> <b> Name of Food:</b>
                                                        <strong>Ketchup &#38; fries</strong></span><br><span
                                                        class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it will also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$secondaryPrice";?>
                                                    </span><span class="parad"><b> Suggested
                                                            Beverage:</b> <strong>Orange Juice</strong></span>
                                                </span>

                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$finalPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="maii"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="nessager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button value="submit" name="contacts" type="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>


                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <a href="#modal-6">
                            <img src="https://media.istockphoto.com/photos/image-of-knickerbocker-glass-of-strawberry-milkshake-smoothie-topped-picture-id1286336843?b=1&k=20&m=1286336843&s=170667a&w=0&h=VCajXnWnPCY4wX4SdK4n3XciG-Oni-99SsRFHbeArgw="
                                alt=""></a>
                        <div class="rewind">
                            <h2 id="milk-aj">milk shake</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-6" data-modal-target="#modal-6">order now</a>
                                <div class="modal" id="modal-6">
                                    <div class="modal-header">
                                        <div class="title">Chilled milk shake</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/image-of-knickerbocker-glass-of-strawberry-milkshake-smoothie-topped-picture-id1286336843?b=1&k=20&m=1286336843&s=170667a&w=0&h=VCajXnWnPCY4wX4SdK4n3XciG-Oni-99SsRFHbeArgw="
                                                    alt=""> <span class="mama"> <span class="para"> <b> Name of
                                                            Beverage:</b>
                                                        <strong> Chilled milk shake</strong></span><br><span
                                                        class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$secondaryPrice";?>
                                                    </span><span class="parad"><b> Suggested
                                                            Food:</b> <strong>Pork burger</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price: $
                                                <?php echo "$secondaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" value="submit" type="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>

                                        </section>
                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <a href="#modal-7">
                            <img src="https://media.istockphoto.com/photos/cheeseburger-and-fries-picture-id950855878?b=1&k=20&m=950855878&s=170667a&w=0&h=HOno0pgidsEm9UJO-EgxVHoNuDzfAR7Vvkl3clP7S-A="
                                alt=""></a>
                        <div class="rewind">
                            <h2> ketchup fries &#38;<span>salmon burger</span> </h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-7" data-modal-target="#modal-7">order now</a>
                                <div class="modal" id="modal-7">
                                    <div class="modal-header">
                                        <div class="title">Ketchup fries &#38; salmon burger</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/cheeseburger-and-fries-picture-id950855878?b=1&k=20&m=950855878&s=170667a&w=0&h=HOno0pgidsEm9UJO-EgxVHoNuDzfAR7Vvkl3clP7S-A="
                                                    alt=""> <span class="mama"> <span class="para"> <b> Name of
                                                            Food:</b>
                                                        <strong>Ketchup fries &#38; salmon
                                                            burger</strong></span><br><span class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$secondaryPrice";?>
                                                    </span><span class="parad"><b> Suggested
                                                            Beverage:</b> <strong>Orange lemonade</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$secondaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button type=submit name="contacts" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <a href="#modal-8">
                            <img src="https://media.istockphoto.com/photos/hand-holding-glass-of-orange-cocktail-on-ice-with-mint-leaf-and-lime-picture-id1296094621?b=1&k=20&m=1296094621&s=170667a&w=0&h=O3hlA99xsZsLDr7a_oK9BV_h96wvJz0izkL13nU_DTM="
                                alt=""></a>
                        <div class="rewind">
                            <h2>Orange lemonade</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-8" data-modal-target="#modal-8">order now</a>
                                <div class="modal" id="modal-8">
                                    <div class="modal-header">
                                        <div class="title">Orange lemonade</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/hand-holding-glass-of-orange-cocktail-on-ice-with-mint-leaf-and-lime-picture-id1296094621?b=1&k=20&m=1296094621&s=170667a&w=0&h=O3hlA99xsZsLDr7a_oK9BV_h96wvJz0izkL13nU_DTM="
                                                    alt=""> <span class="mama"><span class="para"> <b>Name of
                                                            Beverage:</b>
                                                        <strong> Orange lemonade</strong></span><br><span
                                                        class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span> <span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$primaryPrice";?>
                                                    </span>
                                                    <span class="parad"> <b>Suggested
                                                            Food:</b> <strong>Turkey burger</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$primaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button type="submit" name="contacts" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button type="submit" name="contacts" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
            </section>

            <section class="downed">
                <div class="downes">
                    <div class="rust">
                        <a href="#modal-9">
                            <img src="images/werkss11.jpg" alt="">
                            <div class="rewind">
                                <h2>marion wine</h2>
                            </div>
                        </a>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-9" data-modal-target="#modal-9">order now</a>
                                <div class="modal" id="modal-9">
                                    <div class="modal-header">
                                        <div class="title">Marion wine</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="images/werkss11.jpg" alt=""> <span class="mama"> <span
                                                        class="para"> <b>Name of Beverage:</b>
                                                        <strong> Marion wine</strong></span><br><span class="paras">It
                                                        is
                                                        a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span> <span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$tetiaryPrice";?>
                                                    </span>
                                                    <span class="parad"> <b>Suggested
                                                            Food:</b> <strong>Ketchup &#38; fries
                                                            somerss</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$tetiaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button type="submit" name="contacts" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="suscrieb" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <a href="#modal-14">
                            <img src="https://images.unsplash.com/photo-1571091655789-405eb7a3a3a8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTN8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt="">
                        </a>
                        <div class="rewind">
                            <h2>Fried turkey burger</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-14" data-modal-target="#modal-14">order now</a>
                                <div class="modal" id="modal-14">
                                    <div class="modal-header">
                                        <div class="title">Fried Turkey burger</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/delicious-homemade-hamburger-and-french-fries-picture-id1254672762?b=1&k=20&m=1254672762&s=170667a&w=0&h=nKrG40G2jj9O8wzJ8wDD2zmUKNp00mcdVWK_f_zixug="
                                                    alt=""> <span class="mama"> <span class="para"> <b> Name of
                                                            Food:</b>
                                                        <strong>Turkey Burger</strong></span><br><span class="paras">It
                                                        is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span> <span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$fourthPrice";?>
                                                    </span>
                                                    <span class="parad"> <b> Suggested
                                                            Beverage:</b> <strong>Apple juice</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$fourthPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" mewthod="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <a href="#modal-13">
                            <img class="sege"
                                src="https://images.unsplash.com/photo-1457460866886-40ef8d4b42a0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt=""></a>
                        <span class="leg-over">
                            <h2>free</h2>
                        </span>
                        <div>
                            <figure class="champ dope">
                                <p>
                                    <a href="#modal-13" data-modal-target="#modal-13" class="timpu">free order</a>
                                <div class="modal" id="modal-13">
                                    <div class="modal-header">
                                        <div class="title">Seasoned beef burger</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://images.unsplash.com/photo-1457460866886-40ef8d4b42a0?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGJ1cmdlcnxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt=""> <span class="mama no"><span class="para"> <b> Name of
                                                            Food:</b>
                                                        <strong>Seasoned beef burger</strong></span><br><span
                                                        class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span class="any">price:&nbsp;
                                                        <?php echo "$myFree";?>
                                                    </span><span class="parad"> <b> Suggested
                                                            Beverage:</b> <strong>Orange juice</strong></span>
                                                    <span class="new">This order is not available but you can place
                                                        your<br>
                                                        order and
                                                        check your saved item.It willl be ignored.</span>
                                                </span>

                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop ke">
                                            <p>
                                                Note: Order a food to get this free order (not available)!
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="message">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="message">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="rust">
                        <a href="#modal-10">
                            <img src="https://media.istockphoto.com/photos/delicious-homemade-hamburger-and-french-fries-picture-id1254672762?b=1&k=20&m=1254672762&s=170667a&w=0&h=nKrG40G2jj9O8wzJ8wDD2zmUKNp00mcdVWK_f_zixug="
                                alt=""></a>
                        <div class="rewind">
                            <h2 id="stand-up">free</h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-10" data-modal-target="#modal-10">free order</a>
                                <div class="modal" id="modal-10">
                                    <div class="modal-header">
                                        <div class="title">Veggie burger</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/delicious-homemade-hamburger-and-french-fries-picture-id1254672762?b=1&k=20&m=1254672762&s=170667a&w=0&h=nKrG40G2jj9O8wzJ8wDD2zmUKNp00mcdVWK_f_zixug="
                                                    alt=""> <span class="mama"><span class="para"> <b>name of food:</b>
                                                        <strong>Veggie burger</strong></span><br><span class="paras">It
                                                        is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span class="any">price:&nbsp;
                                                        <?php echo "$ourFree";?>
                                                    </span><span class="parad"><b>Suggested
                                                            Beverage:</b> <strong>Orange lemonande</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop ke">
                                            <p>
                                                Note: Order a food to get this free order!
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="mesager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messger">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                            </figure>
                        </div>
                    </div>
                    <div class="rust">
                        <img src="https://media.istockphoto.com/photos/burgers-and-fries-picture-id694198404?b=1&k=20&m=694198404&s=170667a&w=0&h=xVIwJyyynl5_czXopjSqcgA9KW55twCEwnJTTC7F_b4="
                            alt="">
                        <div class="rewind">
                            <h2>bison burger <span> &#38; juice </span></h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-11 " data-modal-target="#modal-11">order now</a>
                                <div class="modal" id="modal-11">
                                    <div class="modal-header">
                                        <div class="title">bison burger &#38; Juice</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/burgers-and-fries-picture-id694198404?b=1&k=20&m=694198404&s=170667a&w=0&h=xVIwJyyynl5_czXopjSqcgA9KW55twCEwnJTTC7F_b4="
                                                    alt=""> <span class="mama mo"><span class="para"> <b> Name of
                                                            Food:</b>
                                                        <strong>Bison burger &#38; Juice</strong></span><br><span
                                                        class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$tetiaryPrice";?>
                                                    </span><span class="parad"> <b>Suggested
                                                            Beverage:</b><strong>Apple Juice</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$tetiaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <button name="contacts" type="submit" value="submit">Place
                                                        Order</button>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="rust">
                        <a href="#modal-12">
                            <img src="https://media.istockphoto.com/photos/hamburger-french-fries-and-beer-picture-id1224393397?b=1&k=20&m=1224393397&s=170667a&w=0&h=t-HA_trAmIFrVFc1k1jR1a-UaGQovBEVFuj9n-wdgaI="
                                alt=""></a>
                        <div class="rewind">
                            <h2>Jago, burger <span>&#38; fries</span> </h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-12" data-modal-target="#modal-12">order now</a>
                                <div class="modal" id="modal-12">
                                    <div class="modal-header">
                                        <div class="title">Jago burger &#38; fries</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://media.istockphoto.com/photos/hamburger-french-fries-and-beer-picture-id1224393397?b=1&k=20&m=1224393397&s=170667a&w=0&h=t-HA_trAmIFrVFc1k1jR1a-UaGQovBEVFuj9n-wdgaI="
                                                    alt=""> <span class="mama"><span class="para"> <b>Name of Food:</b>
                                                        <strong>Jago burger &#38; fries</strong></span><br><span
                                                        class="paras">It is
                                                        a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$primaryPrice";?>
                                                    </span><span class="parad"> <b>Suggested
                                                            Beverage:</b> <strong>Marion wine</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;
                                                <?php echo "$primaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="mesager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-20%</span>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="rust">
                        <a href="#modal-2">
                            <img src="https://images.unsplash.com/photo-1496930666207-e76e8253a950?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGJ1cmdlciUyMGFuZCUyMGNoaXBzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt=""></a>
                        <div class="rewind">
                            <h2> cripsy potatoe &#38; <span> salmon burger</span></h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal-2" data-modal-target="#modal-2">order now</a>
                                <div class="modal" id="modal-2">
                                    <div class="modal-header">
                                        <div class="title">Cripsy potatoe &#38; salmon burger</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://images.unsplash.com/photo-1496930666207-e76e8253a950?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjB8fGJ1cmdlciUyMGFuZCUyMGNoaXBzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt=""><span><span class="para"><b>Name of Food:</b>
                                                        <strong>Cripsy potatoe &#38; salmon
                                                            burger</strong></span><br><span class="paras">It is a
                                                        good source of protein,
                                                        irons,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$secondaryPrice";?>
                                                    </span><span class="parad"><b> Suggested
                                                            Beverage:</b> <strong>Orange Juice</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$secondaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="mesager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>

                    <div class="rust">
                        <a href="#modal">
                            <img src="https://images.unsplash.com/photo-1599894555091-71db8e565f63?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                alt=""></a>
                        <div class="rewind">
                            <h2>fries, custard &#38; <span>pork burger</span></h2>
                        </div>
                        <div>
                            <figure class="champ">
                                <p>
                                    <a href="#modal" data-modal-target="#modal">order now</a>
                                <div class="modal" id="modal">
                                    <div class="modal-header">
                                        <div class="title">Fries, custard &#38; pork burger</div>
                                        <button data-close-button class="close-button">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="cli do">
                                            <p>
                                                <img src="https://images.unsplash.com/photo-1599894555091-71db8e565f63?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjR8fGJ1cmdlciUyMGFuZCUyMGZyaWVzfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
                                                    alt=""> <span class="mama mo"> <span class="para"> <b> Name of
                                                            Food:</b>
                                                        <strong>Fries, custard &#38; pork
                                                            burger</strong></span><br><span class="paras">It is a
                                                        good source of protein,
                                                        iron,
                                                        phosphorus,
                                                        and several other nutrients. If you choose to eat your hamburger
                                                        on
                                                        a whole grain bun, it may also provide
                                                        healthy, filling fiber.<br></span><span
                                                        class="any">price:&nbsp;$
                                                        <?php echo "$tetiaryPrice";?>
                                                    </span><span class="parad"><b>Suggested
                                                            Beverage:</b> <strong>Milk shake</strong></span>
                                                </span>
                                                <span class="combo">
                                                    <a href="https://beverageuniverse.com/"
                                                        title="check to get additional beverages"
                                                        target="_blank">order-now</a>
                                                </span>
                                            </p>
                                        </div>
                                        <div class="owop">
                                            <p>
                                                price:&nbsp;$
                                                <?php echo "$tetiaryPrice";?>
                                            </p>
                                        </div>
                                        <section class="viva1">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="formhandler.php" method="post">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required>
                                                        <span class="bad"> <label for="email">Email</label> </span>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required>
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea name="message" id="messager" cols="1" rows="2"
                                                            placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="viva2">
                                            <div class="fom">
                                                <h6>Confirm Your details</h6>
                                                <form action="">
                                                    <div class="dpo">
                                                        <div class="relate1">
                                                            <label class="lin" for="name">Name</label>
                                                        </div>
                                                        <input type="text" id="name" name="uname" placeholder="Mary"
                                                            required class="real">
                                                    </div>
                                                    <div>
                                                        <div>
                                                            <label class="lin" for="email">Email</label>
                                                        </div>
                                                        <input type="email" id="email" name="mail"
                                                            placeholder="mary@gmail.com" required class="dill">
                                                    </div>
                                                    <div>
                                                        <div class="relate2">
                                                            <label for="messager">Your details</label>
                                                        </div>
                                                        <textarea class="silk" name="message" id="messager" cols="1"
                                                            rows="2" placeholder="Message" required></textarea>
                                                    </div>
                                                    <div class="relate2">
                                                        <input type="checkbox" name="subscribe" id="subscribe">
                                                        <label for="subscribe">Subscribe for news
                                                            letter</label>
                                                    </div>
                                                    <div>
                                                        <button name="contacts" type="submit" value="submit">Place
                                                            Order</button>
                                                    </div>
                                            </div>
                                            </form>
                                        </section>

                                        <section class="pok">
                                            <h2>save item</h2>
                                            <form action="check and View/select.php" method="get">
                                                <div class="relate3">
                                                    <button>save me</button>
                                                </div>
                                            </form>
                                        </section>
                                    </div>
                                </div>
                                <div id="overlay"></div>
                                </p>
                                <p>
                                    <span class="cup">-50%</span>
                                </p>
                            </figure>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <!--menu and order End-->

    <div class="E-details">
        <small class="sponge">
            &copy;
            <?php echo $this_year; ?> -
            <?php echo $my_name; ?>
        </small>
    </div>
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
                            <li class="active"><a title="home page" href="index.php">Home</a></li>
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
                            <a class="preshy ep" title="back to Home page" href="index.php">
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

    <script>
    const openModalButtons = document.querySelectorAll('[data-modal-target]')
    const closeModalButtons = document.querySelectorAll('[data-close-button]')
    const overlay = document.getElementById('overlay')

    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal)
        })
    })

    overlay.addEventListener('click', () => {
        const modals = document.querySelectorAll('.modal.active')
        modals.forEach(modal => {
            closeModal(modal)
        })
    })

    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal')
            closeModal(modal)
        })
    })

    function openModal(modal) {
        if (modal == null) return
        modal.classList.add('active')
        overlay.classList.add('active')
    }

    function closeModal(modal) {
        if (modal == null) return
        modal.classList.remove('active')
        overlay.classList.remove('active')
    }
    </script>
    <!------------------------------Script Packages End-------------------------------------------------->
</body>

</html>
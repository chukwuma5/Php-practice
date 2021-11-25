<?php
session_start();
if (!isset($_SESSION['username'])) {
   header('location:confirmation.php');
}
define("TITLE", "Carty | Your Saved item");
$my_name        ="Preshy's design";
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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/2ad8484a66.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;1,200;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="design-right">
        <span>preshy's design</span>
    </div>
    <div id="container">
        <section class="father">
            <div class="around">
                <img src="check-up.svg" alt=""><span class="tip-off">-50%</span>
            </div>
            <h1>Hello <?php echo $_SESSION['username']; ?></h1>
        </section>

        <p>
            <span class="inside"><i id="go-1" class="fas fa-exclamation-circle"></i>These are your saved details
                <?php echo $_SESSION['username']; ?>.
                You can
                always come back to check your item.</span>
        </p>

        <h3>Vital Information</h3>
        <div class="over-shadow">
            <div class="marion">
                <img src="img/chop5.jpg" alt="chop5 image"><span class="tip-off">-50%</span>
            </div>
            <div class="over-come">
                <ul>
                    <li class="">Name: <span class="same">Ketchup fries &#38; salmon burger</span> </li>
                    <li class="">Beverage: <span class="same">Orange lemonade</span> </li>
                    <li class="">price: <span class="same">$<?php echo "$secondaryPrice";?></span> </li>
                    <li class="">order-details <i onclick="onTap()" id="rote" title="click here"
                            class="fas fa-arrow-circle-right"></i> :
                        <span class="same">
                            should be delivered to _<span> <?php echo $_SESSION['add']; ?></span>
                            <div id="myGlitch">
                                <br>
                                <?php 
                                    $results= "";
                                    @$my = $_POST['adress'];
                                    $_SESSION['add'] = @$my;
                                    if(isset($_POST['add-me'])){
                                        if(empty($_POST['adress'])){
                                            $results= "<div id='mySuccess'><h5 class='wrong' onclick='tabHide()'>Empty Input! Add something</h5></div>";                                          
                                        }elseif(isset($_POST['adress'])){
                                            $results= "<div id='mySuccess'><h5 class='success' onclick='tabHide()'>Your input will be shown soon</h5></div>";
                                        }else{
                                            $results="<div id='mySuccess'><h5 class='wrong' onclick='tabHide()'>Wrong Value! Try Again</h5></div>";
                                        }
                                    }
                                    ?>
                                <form action="" method="post">
                                    <?= @$results; ?>
                                    <input type="text" name="adress" id="madress"
                                        placeholder="Input Your Valid Address"><br>
                                    <button type="submit" value="submit" name="add-me" class="btn-2">Add Me</button>
                                </form>
                            </div>
                        </span>
                    </li>
                    <li class="">Order Here &#8594; &nbsp;<a class="only" href="#">Click Here</a> </li>
                </ul>
            </div>
        </div>
        </section>
        <div class="outer">
            <form action="" method="post">
                <h4>Cancel My Details</h4>
                <?php
$result= "";
$important ="cancel my details";
                if(isset($_POST['click-me'])){
                $closed = $_POST['ucancel'];
                if ( $closed == $important) {
                $result= header('location:confirmations.php');
                }elseif ( !$closed == $important) {
                $result='  <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="wrong"><i class="fas fa-exclamation-triangle"></i>&nbsp;Empty Input! Fill something.
                </h2></div>';
                }else {
                $result='  <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="wrong"><i class="far fa-times-circle"></i>&nbsp;Incorrect word output! Try again.
                </h2></div>';
                }
                }
                ?>

                <?= @$result; ?>
                <input type="text" name="ucancel" id="ucancel">
                <article>
                    <i id="go-2" class="fas fa-info-circle"></i>&nbsp;write <span class="differ">"cancel my
                        details"</span>,
                    all in
                    short letter <span class="delete"> to
                        cancel your
                        details</span>
                </article>
                <p class="cancel">
                    <button type="submit" name="click-me" value="submit">Cancel Order</button>
                </p>
            </form>
        </div>
        <div class="design-center">
            <span>&copy; <?php echo $this_year; ?> - <?php echo $my_name; ?></span>
        </div>
    </div>


    <!-- Java Script -->
    <script>
    function onTap() {
        var pass = document.getElementById("myGlitch");
        if (pass.style.display === "block") {
            pass.style.display = "none";
        } else {
            pass.style.display = "block";
        }
    }
    </script>

    <script>
    var success = document.getElementById("mySuccess")

    function tabHide() {
        success.style.display = "none"
    }
    </script>
</body>

</html>
<?php
$result= "";
$aname = "hotelfburger and milkshake";
$bname = "blackbeanburger and apple juice";
$cname = "ketchup and fries and orange juice";
$dname = "porkburger and chilled milk shake";
$ename = "ketchupfries and salmon burger";
$fname = "turkeyburger and orange lemonade";
$gname = "marionwine and ketchup fries ";
$hname = "turkeyburger and apple juice";
$iname = "seasonedbeefburger and orange juice";
$jname = "veggieburger and juice";
$kname = "bisonburger and apple juice";
$lname = "jagoburger and fries and marion wine";
$mname = "cripsypotatoe and burger and orange juice";
$nname = "friedcustard and pork beef and milkshake";
$warning ="incorrect!";
$anam = "FFcDeba";
$bnam = "AAcRmve";
$cnam = "ZZmPlkm";
$dnam = "QQeGjik";
$enam = "TTvDous";
$fnam = "NNsAopi";
$gnam = "EElAszr";
$hnam = "CCfWghu";
$inam = "KKlObvs";
$jnam = "VViXaft";
$knam = "PPiCasd";
$lnam = "MMoTreq";
$mnam = "IIfRteq";
$nnam = "SSaHiul";
$warning ="incorrect!";
session_start();
if (!isset($_SESSION['username'])) {
   header('location:confirmation.php');
}
define("TITLE", "Carty | Add and View Your item");
$my_name        ="Preshy's Food";
$today          = date("D j F, Y");
$this_year      = date("Y");
if(isset($_POST['save-me'])){
    $entry = $_POST['product'];
    if ( $entry == $aname) {
$result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
anytime you want to view your saved items. Input this code &#8594;
<span class="passcode">FFcDeba</span>
</h2></div>';
    }elseif ( $entry == $bname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved items.Input this code &#8594;
        <span class="passcode">AAcRmve</span>
        </h2></div>';
    }elseif ( $entry == $cname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
anytime you want to view your saved itemsInput this code &#8594;
<span class="passcode">ZZmPlkm</span>
</h2></div>';
    }elseif ( $entry == $dname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved itemsInput this code &#8594;
        <span class="passcode">QQeGjik</span>
        </h2></div>';
   }elseif ( $entry == $ename) {
    $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
    anytime you want to view your saved itemsInput this code &#8594;
    <span class="passcode">TTvDous</span>
    </h2></div>';
   }elseif ( $entry == $fname) {
    $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
anytime you want to view your saved itemsInput this code &#8594;
<span class="passcode">NNsAopi</span>
</h2></div>';
    }elseif ( $entry == $gname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved itemsInput this code &#8594;
        <span class="passcode">EElAszr</span>
        </h2></div>';
    }elseif ( $entry == $hname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved itemsInput this code &#8594;
        <span class="passcode">CCfWghu</span>
        </h2></div>';
    }elseif ( $entry == $iname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved itemsInput this code &#8594;
        <span class="passcode">KKlObvs</span>
        </h2></div>';
    }elseif ( $entry == $jname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved itemsInput this code &#8594;
        <span class="passcode">VViXaft</span>
        </h2></div>';
    }elseif ( $entry == $kname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved items Input this code &#8594;
        <span class="passcode">PPiCasd</span>
        </h2></div>';
    }elseif ( $entry == $lname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved items Input this code &#8594;
        <span class="passcode">MMoTreq</span>
        </h2><div>';
    }elseif ( $entry == $mname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved items Input this code &#8594;
        <span class="passcode">IIfRteq</span>
        </h2></div>';
    }elseif ( $entry == $nname) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
        anytime you want to view your saved itemsInput this code &#8594;
        <span class="passcode">SSaHiul</span>
        </h2></div>';
}elseif (!$entry == $aname ||!$entry == $bname || !$entry == $cname || !$entry == $dname || !$entry == $ename || !$entry == $fname || !$entry == $gname || !$entry == $hname || !$entry == $iname ||!$entry == $jname || !$entry == $kname || !$entry == $lname || !$entry == $mname ||!$entry == $nname) {
    $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="wrong"><i class="fas fa-exclamation-triangle"></i>&nbsp;Empty Input! Write something.
    </h2></div>';
} else {
    $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="wrong"><i class="far fa-times-circle"></i>&nbsp;Incorrect format of text output! Try again.
    </h2></div>';
}
}
if(isset($_POST['saver'])){
    $entry = $_POST['product'];
    if ( $entry == $anam) {
        $result= header('location:second.php');
    }elseif ( $entry == $bnam) {
        $result= header('location:third.php');
    }elseif ( $entry == $cnam) {
        $result= header('location:fourth.php');
    }elseif ( $entry == $dnam) {
        $result= header('location:five.php');
   }elseif ( $entry == $enam) {
        $result= header('location:six.php');
   }elseif ( $entry == $fnam) {
         $result= header('location:seven.php');
    }elseif ( $entry == $gnam) {
        $result= header('location:first.php');
    }elseif ( $entry == $hnam) {
        $result= header('location:eight.php');
    }elseif ( $entry == $inam) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i class="fas fa-exclamation-triangle"></i>&nbsp;Not available. This is a free
        Order! go back
        </h2></div>';
    }elseif ( $entry == $jnam) {
        $result=' <div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i class="fas fa-exclamation-triangle"></i>&nbsp;Not available. This is a free
        Order! go back
        </h2></div>';
    }elseif ( $entry == $knam) {
        $result= header('location:nine.php');
    }elseif ( $entry == $lnam) {
        $result= header('location:ten.php');
    }elseif ( $entry == $mnam) {
        $result= header('location:eleven.php');
    }elseif ( $entry == $nnam) {
        $result= header('location:twelve.php');
}elseif (!$entry == $anam ||!$entry == $bnam || !$entry == $cnam || !$entry == $dnam || !$entry == $enam || !$entry == $fnam || !$entry == $gnam || !$entry == $hnam || !$entry == $inam ||!$entry == $jnam || !$entry == $knam || !$entry == $lnam || !$entry == $mnam ||!$entry == $nnam) {
    $result= '<div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="wrong"><i class="fas fa-exclamation-triangle"></i>&nbsp;Empty Field! Input something.
    </h2></div>';
} else {
    $result= '<div id="mySuccess"><h2 title="click to exit" onclick="tabHide()" class="wrong"><i class="far fa-times-circle"></i>&nbsp;Incorrect passcode! Try again.
    </h2></div>';
}
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
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;1,200;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="select.css">
</head>

<body>
    <div class="design-right">
        <span>preshy's design</span>
    </div>
    <div id="container">
        <section class="middle">
            <div class="re-size">
                <img src="baby.svg" alt="">
            </div>
            <h1>Welcome <span class="transfer"> <?php echo $_SESSION['username']; ?>...</span></h1>
        </section>
        <div class="incase">
            <p class="adjust-2">
                <span class="final"><i id="go-1" class="fas fa-exclamation-circle"></i>
                    In order to view your items with their specific order details please type them below, and endeavour
                    to
                    follow the guide.
                </span>
            </p>
        </div>
        <div class="output">
            <h3>Your Details</h3>
            <!------------------------------Reference----------------------------------
            <h5></h5>
            <h2 class="wrong"><i class="fas fa-exclamation-triangle"></i>&nbsp;Empty Input! Write something.
            </h2>
            <h2 class="wrong"><i class="far fa-times-circle"></i>&nbsp;Incorrect format of text output! Try again.
            </h2>';
            <h2 class="wrong"><i class="fas fa-exclamation-triangle"></i>&nbsp;Not available. This is a free
                Order! go back
            </h2>

            <h2 class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Item saved, thanks.Use this passcode
                anytime you want to view your saved items
                been cancelled, you can
                <a href="#" title="go back" class="back">go back</a> and view other items
            </h2>';

            <h2 class="wrong"><i class="fas fa-exclamation-triangle"></i>&nbsp;Empty Field! Input something.
            </h2>
            <h2 class="wrong"><i class="far fa-times-circle"></i>&nbsp;Incorrect passcode! Try again.
            </h2>';--------------------------------Refernce------------------------------------------->
            <?= @$result; ?>
            <form action="" method="post">
                <div class="confirm">
                    <input type="text" name="product" placeholder="Type in your item name's" class="don">
                    <span class="cover-me">
                        <article><i id="go-2" class="fas fa-info-circle"></i>&nbsp;The items should be in this
                            format<span class="twicth">"burgername(together) beverage(space)".</span>
                        </article>
                        <article><i id="go-2" class="fas fa-info-circle"></i>&nbsp;Use the passcode given to check your
                            items.
                        </article>
                        <article><i id="go-2" class="fas fa-info-circle"></i>&nbsp;You can type your order names to view
                            unlimited times.</article>
                        <article><i id="go-2" class="fas fa-info-circle"></i>&nbsp;Donot write anything in the wrong
                            format to
                            avoid errors.</article>
                    </span>
                    <p class="none-ok">
                        <button type="submit" name="save-me" value="submit" title="click here to save">save
                            here</button>
                        <button class="up" type="submit" name="saver" value="submit" title="click here to view">view
                            here</button>
                    </p>
                </div>
                <p class="none">
                    <button type="submit" name="save-me" value="submit" title="click here to save">save here</button>
                    <button class="up" type="submit" name="saver" value="submit" title="click here to view">view
                        here</button>
                </p>
            </form>

        </div>

        <div class="design-center">
            <span>&copy; <?php echo $this_year; ?> - <?php echo $my_name; ?></span>
        </div>
    </div>
    <div class="design-left">
        <span>preshy's design</span>
    </div>

    <!-- Java Script -->
    <script>
    var success = document.getElementById("mySuccess")

    function tabHide() {
        success.style.display = "none"
    }
    </script>
</body>

</html>
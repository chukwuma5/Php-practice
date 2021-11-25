<?php
define("TITLE", "Preshy's Restaurant | Re-Login Forms");
$my_name        ="Preshy's design";
date_default_timezone_set('Africa/Lagos'); 
$today          = date("D j F, Y");
$this_year      = date("Y");
$result=' <div id="myMuccess"><h2 title="click to exit" onclick="tabHide()" class="success"><i id="star" class="far fa-check-circle"></i>&nbsp;Your item/order has
been cancelled, you can
<a href="../stock.php" title="go back" class="back">go back</a> and view other items
</h2></div>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://kit.fontawesome.com/2ad8484a66.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php echo TITLE;  ?>
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cookie&family=Dosis:wght@200;300;400&family=Great+Vibes&family=Italianno&family=Nunito:ital,wght@0,200;0,300;1,200&family=Open+Sans+Condensed:ital,wght@0,300;0,700;1,300&family=Open+Sans:ital,wght@0,300;1,300&family=PT+Sans:ital@0;1&family=Parisienne&family=Poppins:ital,wght@0,100;0,200;1,100&family=Roboto+Condensed:ital,wght@0,300;1,300&family=Roboto:ital,wght@0,100;0,300;1,100&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200&family=Work+Sans:ital,wght@0,100;0,200;1,100;1,200&family=Yaldevi:wght@200;300&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../rone.css">
</head>

<body>

    <!--Login and regisration sections-->
    <section class="cyril-g">
        <p class="koto">
            <a href="../confirmation.php">refresh page</a>
        </p>

        <div id="container">
            <div class="jsut-flex end">
                <h1>Welocme</h1>
            </div>

            <div class="login-box">
                <div class="biz">
                    <h6>login Here</h6>
                    <?php if (isset($_GET["coco"])) { ?>
                    <h5 id="wrong-2">
                        <?php echo $_GET["coco"]; ?>
                    </h5>
                    <?php } ?>
                    <form action="valid.php" method="post">
                        <div class="form-g">
                            <label for="login">Username:</label>
                            <input type="text" name="user" class="form-c" placeholder="Have a lengh 0f six digits">
                        </div><br>
                        <div class="form-g">
                            <label for=password>Password:</label>
                            <input type="password" name="password" class="form-c" placeholder="Password">
                        </div><br>
                        <div id="hen">
                            <span>
                                <input type="checkbox" id="remembrance" name="remember">
                                <label id="nor" for="remebrance">Subscribe me</label>
                            </span>
                            <span class="come-up">
                                <span id="smill">New here?</span>&nbsp;&nbsp;&nbsp;<a id="try" href="#">Sign in!</a>
                            </span>
                        </div>
                        <button type="submit" name="login" class="btn">Login</button>
                    </form>
                </div>
                <div class="bizy">
                    <h6>Register Here</h6>
                    <form action="register.php" method="post">
                        <form action="registration.php" method="post">
                            <?php if (isset($_GET['cant'])) { ?>
                            <h5 class="success-2">
                                <?php echo $_GET['cant']; ?>
                            </h5>
                            <?php } ?>
                            <?php if (isset($_GET['cort'])) { ?>
                            <h5 class="wrong-2">
                                <?php echo $_GET['cort']; ?>
                            </h5>
                            <?php } ?>
                            <div class="form-g">
                                <label>Username:</label>
                                <input type="text" name="user" class="form-c" required
                                    placeholder="Have a lengh 0f six digits">
                            </div><br>
                            <div class="form-g">
                                <label>Password:</label>
                                <input type="password" name="password" class="form-c" required placeholder="Password">
                            </div><br>
                            <div class="form-g">
                                <label class="life">Email:</label>
                                <input type="email" name="email" class="form-c" required placeholder="Email Address">
                            </div><br>
                            <button type="submit" class="btn-d">Register</button>
                        </form>
                </div>
            </div>
            <div class="E-details">
                <small class="sponge">
                    &copy;
                    <?php echo $this_year; ?> -
                    <?php echo $my_name; ?>
                </small>
            </div>
        </div>
        <div class="dav">
            <a target="_blank" href="index.php">
                <i id="adjust" class="fas fa-hamburger"></i></a>
            <a title="Go to home page" href="index.php"><i id="re-adjust" class="fas fa-hamburger"></i></a>
        </div>
    </section>
    <br>
    <br>
    <?= @$result; ?>
    </div>

    <script>
    var success = document.getElementById("myMuccess")

    function tabHide() {
        success.style.display = "none"
    }
    </script>
</body>

</html>
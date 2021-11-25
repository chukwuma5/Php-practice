<?php
define("TITLE", "Preshy's | Response Message");
$my_name        ="Preshy's Food";
$today          = date("D j F, Y");
$this_year      = date("Y");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;1,200;1,300&family=Poppins:ital,wght@0,100;0,200;0,300;1,100;1,200&family=Source+Sans+Pro:ital,wght@0,200;0,300;1,200;1,300&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php

if(isset($_POST['contacts'])){
$result="";
require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'afamefunapromise35@gmail.com';                 // SMTP username
$mail->Password = 'chukwuma901';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom($_POST['mail'], $_POST['uname']);
$mail->addAddress('afamefunapromise4@gmail.com');     // Add a recipient

$mail->isHTML(true);
$mail->Subject = 'Here is the subject:' .$_POST['message'];
$mail->Body    = '<h1 align=center>Name :' .$_POST['uname'].'<br>Email:'.$_POST['mail']. '<br>Message: ' .$_POST['message']. '</h1>';

// If the subscribe checkbox was checked
if (isset($_POST['subscribe']) && $_POST['subscribe'] == 'Subscribe' ) {
			
// Add a new line to the $message
	$message .= "\r\n\r\nPlease add $email to the mailing list.\r\n";
	}

if(!$mail->send()) {
$result="<h5 class='wrong'>Something went wrong, Try again.</h5>";
} else {
$result="<h5 class='sent'>Hello our dear " .$_POST['uname']." your order has been sent</h5>";
}

}
?>

    <!-- Show success message after email has sent -->

    <div class="design-right">
        <span>preshy's design</span>
    </div>
    <main>
        <div class="adjust">
            <div class="around-me">
                <img src="images/appreciation.svg" alt="">
            </div>

            <?= @$result; ?>
            <h3>Thanks for contacting Preshy's!</h3>
            <p>Please allow 24 hours for a response.</p>
            <p><a title="back to home page" href="index.php" class="button-block">&laquo; Home Page</a></p>
            <div class="design-center">
                <span>&copy; <?php echo $this_year; ?> - <?php echo $my_name; ?></span>
            </div>
        </div>
    </main>
</body>
<!-- Show success message after email has sent -->

</html>
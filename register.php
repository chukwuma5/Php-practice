<?php

session_start();
header('location:confirmation.php');



$con = mysqli_connect('localhost','root','mothermary10');

mysqli_select_db($con, 'userbilling');

$name  = $_POST['user'];
$pass  = $_POST['password'];
$mail  = $_POST['email'];

$s = " select * from billtable where name = '$name'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    header('location:confirmation.php?cort=Username is already taken!');
    exit();
}else {
    $reg= " insert into billtable(name , password , email) values ('$name' , '$pass' , '$mail')";
    mysqli_query($con, $reg);
    header('location:confirmation.php?cant=registration successful. Kindly login here!');
    exit();
}

?>
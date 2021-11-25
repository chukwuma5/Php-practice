<?php

session_start();

$con = mysqli_connect('localhost','root','mothermary10');

mysqli_select_db($con, 'userbilling');

$name  = $_POST['user'];
$pass  = $_POST['password'];

$s = " select * from billtable where name = '$name' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $name;
header('location:stock.php');
}else {
    header('location:confirmation.php?coco=Incorrect Password or Username! Try again.');
    exit();
}
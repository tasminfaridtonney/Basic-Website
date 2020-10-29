<?php
$firstname="";
$lastname="";
$email="";
$address="";

if(isset($_GET['firstname'])) $fname=$_GET['firstname'];
if(isset($_GET['lastname'])) $lname=$_GET['lastname'];
if(isset($_GET['email'])) $email=$_GET['email'];
if(isset($_GET['address'])) $address=$_GET['address'];

echo $fname;
echo "<br/>";
echo $lname;
echo $email ;
echo $address ;


?>
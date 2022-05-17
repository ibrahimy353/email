<?php
//get data from form  
if (isset($_POST['submit'])){
$name = $_POST['name'];
$email= $_POST['emailaddress'];
$number=£_POST['mobile']
$message= $_POST['message'];

$mailto = "ihusssein@gmail.com";
$headers ="from: .$mailfrom"
$txt ="You have received an e-mail from "Name = ". $name . "\r\n  Email = " . $email ."\r\n Mobile number = ". $number. "\r\n Message =" . $message;

mail($mailTo, $subject, $txt, $headers);
header("Location: index.php?mailsend");
}
?>
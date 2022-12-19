<!-- //https://codeconia.com/contact-form-with-phpmail-for-your-website/ -->
<?php
//get data from form
$name = $_POST['name'];
$number= $_POST['number'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "vitaliym58@gmail.com";
$subject = "Mail From website NormaDent";
$txt ="Name = ". $name . "\r\n Number = " . $number . "\r\n Email = " . $email . "\r\n Message = ". $message;
$headers = "From: vitaliy.kolesnik@welcome-on.co.ua" . "\r\n" .
"CC: vitaliym58@gmail.com";
if($number!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
// header("Location:thankyou.html");
?>
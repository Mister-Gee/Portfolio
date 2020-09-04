<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenum'];
    $msg = $_POST['msg'];

    $header = "From: Your Portfolio by: ".$email."\r\n";
    $header .= "Reply-To: fakuadegbenga@gmail.com \r\n";
    $header .= "Content-type: text/html\r\n";

    $subject = "Potential Client Alert";
    $mailto = "fakuadegbenga@gmail.com";+
    $message = "You have received an email from ".$name.". \n\n". "Email address ".$email."and phone number ".$phonenumber."\n\n".$msg;

    mail($mailto, $subject, $message, $header);
    header("Location: index.html?mailsend");
}
else{
    header("Location: index.html?mailsend");
    exit(); 
}

?>-
<?php
if($_POST){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $to = "nezerworld24@gmail.com";
    $subject = "New Contact Message from Nezer World Website";

    $body = "
    Name: $name
    Email: $email
    Phone: $phone
    Message:
    $message
    ";

    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "Your message has been sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>

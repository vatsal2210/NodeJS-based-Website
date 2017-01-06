<?php 
    $to = "yourmail@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "From: " . $name .", \n\n Your Message is:" . $_POST['message'] ."\n\n Email is: " .$email;
    $message2 = "Here is a copy of your message " . $name.", \n\n" . $_POST['message'] . "\n\n Thanks for feedback " . $name . ", we will contact you shortly." ;

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
?>
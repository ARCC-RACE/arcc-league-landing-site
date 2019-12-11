<?php
if(isset($_POST['submit'])){
    $to = "caelinsutch@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $subject2 = "Copy of your form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $header = "From: contact@arcc.ai\r\n";
    $header.= "MIME-Version: 1.0\r\n";
    $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $header.= "X-Priority: 1\r\n";
    mail($to,$subject,$message,$header);
}
echo
    <p>Mail Sent. Thank you we will contact you shortly.</p>
?>

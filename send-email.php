<?php 
if(isset($_POST['submit'])){
    $to = "smccarthy@airtecperforms.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $first_name . " " . $last_name . " wrote the following:" . "\n\n" . $_POST['service-req'];
    $message2 = "Thank you for submitting your service request. Our service manager Kim has been informed regarding your needs.";
    $message2 .= "\n\n If you need to contact us immedately, please do not hesitate to call Air-Tec at (310) 549-1698."
    $message2 .= "\n\n Thank you,"
    $message2 .= "\n\n SeanLiam McCarthy"
    $message2 .= "AIR-TEC
    A Division of Clay Dunn Enterprise, Inc.
    Ph: (310) 549.1698 ext 220 | Fx: (310) 549.0735
    Email: smccarthy@airtecperforms.com
    www.airtecperforms.com
    "

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    header('Location: email-thanks.php');
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
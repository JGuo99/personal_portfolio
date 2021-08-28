<?php
    // Get Information
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    // Email From the User through the Website
    $email_from = "contact@sguo.tech";
    $email_subject = "New Form Submission";
    $email_content = "User Name: $name\n".
                     "User Email: $email\n".
                     "User Phone: $phone\n".
                     "Subject: $subject\n".
                     "Message: $message\n";
    // Email Destination (Me)
    $email_to = "sheng.guo@sguo.tech";
    $email_header = "From: $email_from \r\n";
    $email_header .= "Reply-To: $email \r\n";
    mail($email_to, $email_subject, $email_content, $email_header);
    // Redirect back to home page after submission
    header("Location:index.php");
?>
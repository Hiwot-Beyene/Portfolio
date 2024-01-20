<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "hiwotbeyene5042@gmail.com";
    $subject = "New Form Submission";
    
    // Extract form data
    $message = "Name: " . $_POST["name"] . "\n";
    $message .= "Email: " . $_POST["email"] . "\n";
    $message .= "Message: " . $_POST["message"] . "\n";
    
    // Additional headers
    $headers = "From: webmaster@example.com";

    // Send email
    mail($to, $subject, $message, $headers);

    // Redirect to a thank-you page or wherever you want after the form is submitted
    header("Location: thank_you.html");
    exit();
}
?>

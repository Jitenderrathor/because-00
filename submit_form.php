<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $message = $_POST["message"];
    
    // Validate input (you can add more validation if required)
    if (empty($name) || empty($email) || empty($company) || empty($message)) {
        echo "Please fill in all the fields.";
        exit;
    }
    
    // Set the recipient email address
    $to = "jitenderjkr19@gmail.com";
    
    // Set the email subject
    $subject = "New Form Submission";
    
    // Email message
    $mail_message = "
    <html>
    <head>
    <title>New Form Submission</title>
    </head>
    <body>
    <h2>New Form Submission</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Company:</strong> $company</p>
    <p><strong>Message:</strong><br>$message</p>
    </body>
    </html>
    ";
    
    // Set the email headers
    $headers = "From: $name <$email>\r\n";
    
    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
       // Redirect to a different page
       header("Location: thankyou.html");
       exit(); 
    } else {
       // Redirect to a different page
       header("Location: error.html");
       exit(); 
    }
}
?>
 <?php
/* if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $company = $_POST['company'];
    $message = $_POST['message'];
    
    // mail to
    $to = "jitenderjkr19@gmail.com";

    // Email subject
    $subject = 'New Form Submission from ' . $name;

    // Email message
    $mail_message = "
    <html>
    <head>
    <title>New Form Submission</title>
    </head>
    <body>
    <h2>New Form Submission</h2>
    <p><strong>Name:</strong> $name</p>
    <p><strong>Email:</strong> $email</p>
    <p><strong>Company:</strong> $company</p>
    <p><strong>Message:</strong><br>$message</p>
    </body>
    </html>
    ";
    // Headers for HTML email
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $mail_message, $headers)) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message.</p>';
    }
} */
?>

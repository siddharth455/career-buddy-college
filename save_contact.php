<?php
// Load PHPMailer (only used if you enable mailing)
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

// Get form data safely
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

// DB connection setup
$host = 'localhost';
$dbname = 'contact_form';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    header("Location: contact.php?success=0");
    exit();
}

// Prepare and insert the data
$stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $phone, $message);

if ($stmt->execute()) {
    // --- OPTIONAL EMAIL --- (currently disabled)
    /*
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'sharmasiddharth269@gmail.com';
        $mail->Password = 'YOUR_GMAIL_APP_PASSWORD';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('sharmasiddharth269@gmail.com', 'Career Buddy College Website');
        $mail->addAddress('sharmasiddharth269@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "Name: $name<br>Email: $email<br>Phone: $phone<br>Message: $message";

        $mail->send();
    } catch (Exception $e) {
        header("Location: contact.php?success=0");
        exit();
    }
    */

    header("Location: contact.php?success=1");
    exit();
} else {
    header("Location: contact.php?success=0");
    exit();
}

$stmt->close();
$conn->close();
?>

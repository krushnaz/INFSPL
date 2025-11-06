<?php
// Simple test script to verify PHPMailer and SMTP configuration
error_reporting(E_ALL);
ini_set('display_errors', 1);
header('Content-Type: text/html; charset=UTF-8');

echo "<h2>PHPMailer Configuration Test</h2>";

// Check if PHPMailer exists
if (!file_exists('php-mailer/PHPMailerAutoload.php')) {
    echo "<p style='color:red;'>❌ PHPMailer not found!</p>";
    exit;
}

echo "<p style='color:green;'>✅ PHPMailer file exists</p>";

require_once('php-mailer/PHPMailerAutoload.php');

try {
    $mail = new PHPMailer();
    echo "<p style='color:green;'>✅ PHPMailer instance created</p>";
    
    // Configure SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'krishnazarekar72@gmail.com';
    $mail->Password = 'ptjm ndpk arim vqxw';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->SMTPDebug = 2; // Enable verbose debug output
    
    echo "<p style='color:green;'>✅ SMTP configured</p>";
    
    // Set email parameters
    $mail->setFrom('krishnazarekar72@gmail.com', 'INFSPL Test');
    $mail->addAddress('contact@infspl.com', 'INFSPL');
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from Contact Form';
    $mail->Body = '<h2>This is a test email</h2><p>If you receive this, PHPMailer is working correctly!</p>';
    
    echo "<p>Attempting to send email...</p>";
    
    if ($mail->send()) {
        echo "<p style='color:green;'><strong>✅ SUCCESS! Email sent successfully!</strong></p>";
    } else {
        echo "<p style='color:red;'>❌ Email failed: " . $mail->ErrorInfo . "</p>";
    }
    
} catch (Exception $e) {
    echo "<p style='color:red;'>❌ Exception: " . $e->getMessage() . "</p>";
    if (isset($mail)) {
        echo "<p style='color:red;'>Mail Error: " . $mail->ErrorInfo . "</p>";
    }
}

echo "<hr><h3>Configuration Details:</h3>";
echo "<ul>";
echo "<li><strong>SMTP Host:</strong> smtp.gmail.com</li>";
echo "<li><strong>Port:</strong> 465 (SSL)</li>";
echo "<li><strong>Username:</strong> krishnazarekar72@gmail.com</li>";
echo "<li><strong>Password:</strong> ptjm ndpk arim vqxw</li>";
echo "</ul>";
?>


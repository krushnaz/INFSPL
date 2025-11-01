<?php
// Include Composer's autoloader to load PHPMailer
require_once('php-mailer/PHPMailerAutoload.php');

// Create a new PHPMailer instance
$mail = new PHPMailer();

// Define email variables
$emailTO = array(
    array('email' => 'contact@infspl.com', 'name' => 'Your Name')
);

// Enter Email Subject
$sitename = 'Your Site Name';

// Start the session
session_start();

if(isset($_POST["quote-request-name"]) && $_POST["quote-request-name"] != '') {
    // Retrieve the contact name from the form
    $contact_name = $_POST["quote-request-name"];

    // Combine contact name and site name for email subject
    $subject = "New Message Received from $contact_name";
} else {
    // If contact name is not provided, use default subject
    $subject = "New Message Received from $sitename";
}

$taskOptionMapping = array(
    '59' => 'Start Up',
    '60' => 'MSME',
    '61' => 'Large Enterprises',
    // Add more mappings as needed
);
// Success Messages
$msg_success = "We have successfully received your request. We'll get back to you soon.";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["quote-request-email"]) && $_POST["quote-request-email"] != '' && isset($_POST["quote-request-name"]) && $_POST["quote-request-name"] != '') {
        $qr_email   = $_POST["quote-request-email"];
        $qr_name    = $_POST["quote-request-name"];

        $qr_phone   = isset($_POST["quote-request-phone"]) ? $_POST["quote-request-phone"] : '';
        $qr_company = isset($_POST["quote-request-company"]) ? $_POST["quote-request-company"] : '';
        $qr_reach   = isset($_POST["quote-request-reach"]) ? $_POST["quote-request-reach"] : '';
        $qr_hear    = isset($_POST["quote-request-hear"]) ? $_POST["quote-request-hear"] : '';
        $qr_category_id = isset($_POST["taskOption"]) ? explode('_', $_POST["taskOption"])[0] : '';
        $qr_category = isset($taskOptionMapping[$qr_category_id]) ? $taskOptionMapping[$qr_category_id] : '';

        $qr_interest = isset($_POST["quote-request-interest"]) ? $_POST["quote-request-interest"] : array();
        if (!is_array($qr_interest)) {
            $qr_interest = array($qr_interest);
        }
        $qr_interested = implode(', ', $qr_interest);

        $qr_message = isset($_POST["quote-request-message"]) ? $_POST["quote-request-message"] : '';

        $honeypot   = isset($_POST["form-anti-honeypot"]) ? $_POST["form-anti-honeypot"] : '';

        if ($honeypot == '' && !(empty($emailTO))) {
            // Set email parameters
            $mail->isHTML(true);
            $mail->CharSet = 'UTF-8';

            $mail->setFrom($qr_email, $sitename); // Set sender email and name
            $mail->addReplyTo($qr_email); // Add reply-to email

            // Add recipient emails
            foreach ($emailTO as $to) {
                $mail->addAddress($to['email'], $to['name']);
            }

            // Customized message
            $emailBody = "
                Hello,\n\n
                You have received a new message from your website.\n\n
                Here are the details:\n\n
                Name: $qr_name\n
                Email: $qr_email\n
                Phone: $qr_phone\n
                Company: $qr_company\n
                Services Category:  $qr_category\n
                Services :   $qr_interested\n
                Time to Reach: $qr_reach\n
                Hear From: $qr_hear\n
                Message: $qr_message\n
            ";
            $mail->Subject = $subject;
            $mail->Body = $emailBody;

            if ($mail->send()) {
                $response = array('result' => "success", 'message' => $msg_success);
            } else {
                $response = array('result' => "error", 'message' => $mail->ErrorInfo);
            }
            echo json_encode($response);
        } else {
            echo json_encode(array('result' => "error", 'message' => "Bot detected! Please try later."));
        }
    } else {
        echo json_encode(array('result' => "error", 'message' => "Please fill up all required fields and try again."));
    }
}
?>

<?php
// ✅ Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ✅ Set JSON content type
header('Content-Type: application/json');

// ✅ Set timezone
date_default_timezone_set('Asia/Kolkata');

// ✅ Include PHPMailer (v5.x)
if (!file_exists('php-mailer/PHPMailerAutoload.php')) {
    echo json_encode(['result' => 'error', 'message' => 'PHPMailer library not found at: php-mailer/PHPMailerAutoload.php']);
    exit;
}

require_once('php-mailer/PHPMailerAutoload.php');

// ✅ Create mail instance
$mail = new PHPMailer();

// ✅ Email recipient
$emailTO = [
    ['email' => 'contact@infspl.com', 'name' => 'INFSPL Enquiry']
];

// ✅ Site info
$sitename = 'INFSPL';

// ✅ Start session (optional but useful)
session_start();

// ✅ Get subject
if (isset($_POST["quote-request-name"]) && $_POST["quote-request-name"] != '') {
    $contact_name = $_POST["quote-request-name"];
    $subject = "New Message Received from $contact_name";
} else {
    $subject = "New Message Received from $sitename";
}

// ✅ Category mapping
$taskOptionMapping = [
    '59' => 'Start Up',
    '60' => 'MSME',
    '61' => 'Large Enterprises',
];

// ✅ Success message
$msg_success = "We have successfully received your request. We'll get back to you soon.";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST["quote-request-email"]) && !empty($_POST["quote-request-name"])) {

        // ✅ Get form data
        $qr_email   = $_POST["quote-request-email"];
        $qr_name    = $_POST["quote-request-name"];
        $qr_phone   = $_POST["quote-request-phone"] ?? '';
        $qr_company = $_POST["quote-request-company"] ?? '';
        $qr_reach   = $_POST["quote-request-reach"] ?? '';
        $qr_hear    = $_POST["quote-request-hear"] ?? '';
        $qr_category_id = isset($_POST["taskOption"]) ? explode('_', $_POST["taskOption"])[0] : '';
        $qr_category = $taskOptionMapping[$qr_category_id] ?? '';

        $qr_interest = $_POST["quote-request-interest"] ?? [];
        if (!is_array($qr_interest)) {
            $qr_interest = [$qr_interest];
        }
        $qr_interested = implode(', ', $qr_interest);
        $honeypot = $_POST["form-anti-honeypot"] ?? '';

        // ✅ Proceed only if honeypot empty
        if ($honeypot == '' && !empty($emailTO)) {

            // ✅ Gmail SMTP configuration
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'contact@infspl.com';
            $mail->Password = 'vmiy vdmg bjek fgwd';
            $mail->SMTPSecure = 'ssl'; // For PHPMailer v5: use 'ssl' for port 465, 'tls' for port 587
            $mail->Port = 465;
            $mail->SMTPDebug = 0;
            $mail->CharSet = 'UTF-8';

            $mail->SMTPOptions = [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                ]
            ];

            // ✅ Set From and Recipient
            $mail->setFrom('contact@infspl.com', 'INFSPL Website');
            $mail->addReplyTo($qr_email, $qr_name);
            foreach ($emailTO as $to) {
                $mail->addAddress($to['email'], $to['name']);
            }

            // ✅ HTML email body
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = "
                <h2>New Website Enquiry</h2>
                <p><strong>Name:</strong> $qr_name</p>
                <p><strong>Email:</strong> $qr_email</p>
                <p><strong>Phone:</strong> $qr_phone</p>
                <p><strong>Company:</strong> $qr_company</p>
                <p><strong>Category:</strong> $qr_category</p>
                <p><strong>Services:</strong> $qr_interested</p>
                <p><strong>Time to Reach:</strong> $qr_reach</p>
                <p><strong>Heard From:</strong> $qr_hear</p>
            ";

            // ✅ Send email
            try {
                if ($mail->send()) {
                    echo json_encode(['result' => "success", 'message' => $msg_success]);
                } else {
                    echo json_encode(['result' => "error", 'message' => "Email sending failed: " . $mail->ErrorInfo]);
                }
            } catch (\Exception $e) {
                echo json_encode(['result' => "error", 'message' => "Exception: " . $e->getMessage() . " | Mail Error: " . $mail->ErrorInfo]);
            }

        } else {
            echo json_encode(['result' => "error", 'message' => "Bot detected! Please try later."]);
        }

    } else {
        echo json_encode(['result' => "error", 'message' => "Please fill all required fields and try again."]);
    }
} else {
    echo json_encode(['result' => "error", 'message' => "Invalid request method."]);
}
exit;
?>


<?php
/**
 * send-mail.php – Debug version
 * Outputs the real PHPMailer error.
 */

// ---- Suppress warnings/notices for clean JSON ----
error_reporting(0);
ini_set('display_errors', 0);

// ---- Load PHPMailer ----
require __DIR__ . '/PHPMailer/src/Exception.php';
require __DIR__ . '/PHPMailer/src/PHPMailer.php';
require __DIR__ . '/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

header('Content-Type: application/json');

function respond($success, $message = '') {
    echo json_encode(['success' => $success, 'message' => $message]);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    respond(false, 'Method not allowed.');
}

$config = require __DIR__ . '/mail-config.php';
if (!is_array($config) || !isset($config['smtp_host'])) {
    respond(false, 'Server configuration error.');
}

// ---- Collect input ----
$name    = trim(filter_input(INPUT_POST, 'cName',    FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$phone   = trim(filter_input(INPUT_POST, 'cPhone',   FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$email   = trim(filter_input(INPUT_POST, 'cEmail',   FILTER_SANITIZE_EMAIL) ?? '');
$service = trim(filter_input(INPUT_POST, 'cService', FILTER_SANITIZE_SPECIAL_CHARS) ?? '');
$message = trim(filter_input(INPUT_POST, 'cMsg',     FILTER_SANITIZE_SPECIAL_CHARS) ?? '');

// ---- Validation ----
$errors = [];
if ($name === '') $errors[] = 'Name is required.';
if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
if (!empty($errors)) {
    http_response_code(422);
    respond(false, implode(' ', $errors));
}

// ---- Build a nicer HTML email ----
function rowHtml($label, $value) {
    if ($value === '' || $value === null) return '';
    return '
    <tr>
      <td style="padding:14px 0;border-bottom:1px solid #eef1f0;">
        <div style="font-size:11px;font-weight:700;letter-spacing:1px;text-transform:uppercase;color:#b08a3e;margin-bottom:4px;">' . $label . '</div>
        <div style="font-size:15px;color:#222;line-height:1.6;">' . nl2br($value) . '</div>
      </td>
    </tr>';
}

$emailBody = '
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="margin:0;padding:0;background-color:#f4f7f6;font-family:Segoe UI, Arial, Helvetica, sans-serif;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f7f6;padding:40px 0;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 6px 24px rgba(0,0,0,0.08);">

          <!-- Header -->
          <tr>
            <td style="background:linear-gradient(120deg,#164243,#1d5657);padding:32px 40px;">
              <div style="font-size:12px;letter-spacing:2px;text-transform:uppercase;color:#e3c581;font-weight:700;margin-bottom:6px;">Vande Enterprises</div>
              <div style="font-size:22px;color:#ffffff;font-weight:800;">New Website Enquiry</div>
            </td>
          </tr>

          <!-- Body -->
          <tr>
            <td style="padding:32px 40px 8px;">
              <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                ' . rowHtml('Full Name', $name) . '
                ' . rowHtml('Email Address', $email) . '
                ' . rowHtml('Phone Number', $phone ?: 'Not provided') . '
                ' . rowHtml('Service Interested In', $service ?: 'Not specified') . '
                ' . rowHtml('Message', $message ?: 'No message provided') . '
              </table>
            </td>
          </tr>

          <!-- CTA -->
          <tr>
            <td style="padding:24px 40px 40px;">
              <a href="mailto:' . htmlspecialchars($email) . '" style="display:inline-block;background-color:#164243;color:#ffffff;text-decoration:none;font-weight:700;font-size:14px;padding:13px 28px;border-radius:8px;letter-spacing:.3px;">Reply to ' . htmlspecialchars($name) . '</a>
            </td>
          </tr>

          <!-- Footer -->
          <tr>
            <td style="background-color:#f4f7f6;padding:20px 40px;text-align:center;">
              <div style="font-size:12px;color:#999;">This enquiry was submitted through the contact form on the Vande Enterprises website.</div>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>
</body>
</html>';

$emailAltBody = "New Enquiry - Vande Enterprises\n\n"
    . "Name: {$name}\n"
    . "Email: {$email}\n"
    . "Phone: " . ($phone ?: 'Not provided') . "\n"
    . "Service: " . ($service ?: 'Not specified') . "\n"
    . "Message: " . ($message ?: 'No message provided') . "\n";

// ---- Send mail ----
$mail = new PHPMailer(true);
try {
    $mail->isSMTP();
    $mail->Host       = $config['smtp_host'];
    $mail->SMTPAuth   = true;
    $mail->Username   = $config['smtp_username'];
    $mail->Password   = $config['smtp_password'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Try SSL (465) if this fails
    $mail->Port       = $config['smtp_port']; // 587

    // ---- Fix garbled characters (â€") by forcing UTF-8 ----
    $mail->CharSet  = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->setFrom($config['from_email'], $config['from_name']);
    $mail->addAddress($config['to_email'], $config['to_name']);
    $mail->addReplyTo($email, $name);

    $mail->isHTML(true);
    $mail->Subject = "New Enquiry from {$name} - Vande Enterprises";
    $mail->Body    = $emailBody;
    $mail->AltBody = $emailAltBody;

    $mail->send();
    respond(true, 'Message sent successfully.');
} catch (Exception $e) {
    // ---- Return the real error ----
    respond(false, 'SMTP Error: ' . $mail->ErrorInfo);
}
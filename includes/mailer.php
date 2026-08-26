<?php
/**
 * Fuzurra Industries Pvt. Ltd. - Pure PHP SMTP Mailer Service
 * Zero-dependency, secure SSL/TLS authenticated email dispatcher
 */

if (!defined('SITE_NAME')) {
    require_once __DIR__ . '/config.php';
}

class FuzurraMailer
{
    /**
     * Send an enquiry / quote / dealer notification email
     *
     * @param array $data Form data array
     * @return array ['success' => bool, 'message' => string]
     */
    public static function sendEnquiryNotification(array $data): array
    {
        $formTypeLabel = self::getFormTypeLabel($data['form_type'] ?? '');
        $leadName = !empty($data['full_name']) ? $data['full_name'] : (!empty($data['name']) ? $data['name'] : 'Website Visitor');
        $subject = "New {$formTypeLabel} from {$leadName} - Fuzurra Industries";
        
        $htmlBody = self::buildHtmlTemplate($data);
        $textBody = self::buildPlainTextTemplate($data);
        
        $to = defined('NOTIFICATION_RECIPIENT_EMAIL') ? NOTIFICATION_RECIPIENT_EMAIL : 'krishnagzp@gmail.com';
        $fromEmail = defined('SMTP_FROM_EMAIL') ? SMTP_FROM_EMAIL : 'info@fuzurra.in';
        $fromName = defined('SMTP_FROM_NAME') ? SMTP_FROM_NAME : 'Fuzurra Industries Pvt. Ltd.';
        $replyTo = (!empty($data['email']) && filter_var($data['email'], FILTER_VALIDATE_EMAIL)) ? $data['email'] : $fromEmail;

        return self::sendSmtpMail($to, $subject, $htmlBody, $textBody, $fromEmail, $fromName, $replyTo);
    }

    /**
     * Raw SMTP Mail Sender via SSL/TLS Socket
     */
    public static function sendSmtpMail(
        string $toEmail,
        string $subject,
        string $htmlContent,
        string $textContent,
        string $fromEmail,
        string $fromName,
        string $replyToEmail
    ): array {
        $host = defined('SMTP_HOST') ? SMTP_HOST : 'mail.fuzurra.in';
        $port = defined('SMTP_PORT') ? SMTP_PORT : 465;
        $secure = defined('SMTP_SECURE') ? SMTP_SECURE : 'ssl';
        $user = defined('SMTP_USER') ? SMTP_USER : 'info@fuzurra.in';
        $pass = defined('SMTP_PASS') ? SMTP_PASS : '';

        $socketHost = ($secure === 'ssl') ? ('ssl://' . $host) : $host;
        $timeout = 15;

        // Open socket connection
        $socket = @fsockopen($socketHost, $port, $errno, $errstr, $timeout);
        if (!$socket) {
            error_log("FuzurraMailer Socket Connect Error: {$errstr} ({$errno})");
            return [
                'success' => false,
                'message' => "Could not connect to SMTP server: {$errstr} ({$errno})"
            ];
        }

        stream_set_timeout($socket, $timeout);

        // 1. Read Greeting
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '220') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP Greeting Error: {$res}"];
        }

        // 2. Send EHLO
        $serverHost = $_SERVER['SERVER_NAME'] ?? 'fuzurra.in';
        self::sendCommand($socket, "EHLO " . $serverHost);
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP EHLO Error: {$res}"];
        }

        // STARTTLS if configured on port 587
        if ($secure === 'tls' && $port == 587) {
            self::sendCommand($socket, "STARTTLS");
            $res = self::readResponse($socket);
            if (substr($res, 0, 3) === '220') {
                stream_socket_enable_crypto($socket, true, STREAM_CRYPTO_METHOD_TLS_CLIENT);
                self::sendCommand($socket, "EHLO " . $serverHost);
                self::readResponse($socket);
            }
        }

        // 3. AUTH LOGIN
        self::sendCommand($socket, "AUTH LOGIN");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '334') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP AUTH Initialization Error: {$res}"];
        }

        // Send Username (base64)
        self::sendCommand($socket, base64_encode($user));
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '334') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP Username Error: {$res}"];
        }

        // Send Password (base64)
        self::sendCommand($socket, base64_encode($pass));
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '235') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP Authentication Failed: {$res}"];
        }

        // 4. MAIL FROM
        self::sendCommand($socket, "MAIL FROM:<{$fromEmail}>");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP MAIL FROM Error: {$res}"];
        }

        // 5. RCPT TO
        self::sendCommand($socket, "RCPT TO:<{$toEmail}>");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250' && substr($res, 0, 3) !== '251') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP RCPT TO Error: {$res}"];
        }

        // 6. DATA
        self::sendCommand($socket, "DATA");
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '354') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP DATA Start Error: {$res}"];
        }

        // 7. Compose MIME Message
        $boundary = '=_FUZ_' . md5(uniqid(time(), true));
        $encodedSubject = '=?UTF-8?B?' . base64_encode($subject) . '?=';
        $encodedFromName = '=?UTF-8?B?' . base64_encode($fromName) . '?=';

        $headers = [];
        $headers[] = "Date: " . date('r');
        $headers[] = "From: {$encodedFromName} <{$fromEmail}>";
        $headers[] = "To: <{$toEmail}>";
        $headers[] = "Reply-To: <{$replyToEmail}>";
        $headers[] = "Subject: {$encodedSubject}";
        $headers[] = "X-Mailer: Fuzurra-Mailer/2.0";
        $headers[] = "MIME-Version: 1.0";
        $headers[] = "Content-Type: multipart/alternative; boundary=\"{$boundary}\"";

        $messageBody = implode("\r\n", $headers) . "\r\n\r\n";

        // Plain Text Part
        $messageBody .= "--{$boundary}\r\n";
        $messageBody .= "Content-Type: text/plain; charset=UTF-8\r\n";
        $messageBody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $messageBody .= $textContent . "\r\n\r\n";

        // HTML Part
        $messageBody .= "--{$boundary}\r\n";
        $messageBody .= "Content-Type: text/html; charset=UTF-8\r\n";
        $messageBody .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
        $messageBody .= $htmlContent . "\r\n\r\n";

        $messageBody .= "--{$boundary}--\r\n";
        $messageBody .= ".\r\n";

        // Send Message Body
        fputs($socket, $messageBody);
        $res = self::readResponse($socket);
        if (substr($res, 0, 3) !== '250') {
            fclose($socket);
            return ['success' => false, 'message' => "SMTP DATA Send Error: {$res}"];
        }

        // 8. QUIT
        self::sendCommand($socket, "QUIT");
        fclose($socket);

        return [
            'success' => true,
            'message' => 'Email sent successfully via SMTP.'
        ];
    }

    /**
     * Send SMTP command
     */
    private static function sendCommand($socket, string $command): void
    {
        fputs($socket, $command . "\r\n");
    }

    /**
     * Read multi-line SMTP server response
     */
    private static function readResponse($socket): string
    {
        $response = '';
        while ($line = fgets($socket, 512)) {
            $response .= $line;
            if (strlen($line) >= 4 && substr($line, 3, 1) === ' ') {
                break;
            }
        }
        return trim($response);
    }

    /**
     * Human readable form type label
     */
    private static function getFormTypeLabel(string $type): string
    {
        switch ($type) {
            case 'contact_page':
                return 'Contact Page Enquiry';
            case 'quote_request':
            case 'quick_quote_modal':
            case 'quick_quote':
                return 'Instant Quote Request';
            case 'dealer_application':
                return 'Channel Partner / Dealership Application';
            case 'pm_surya_ghar':
                return 'PM Surya Ghar Subsidy Consultation';
            case 'service_booking':
            case 'service_enquiry':
                return 'Service & Maintenance Booking';
            default:
                return 'General Lead Enquiry';
        }
    }

    /**
     * Build Premium HTML Email Template
     */
    private static function buildHtmlTemplate(array $data): string
    {
        $refId = htmlspecialchars($data['lead_id'] ?? ('FUZ-' . strtoupper(substr(md5(uniqid()), 0, 8))));
        $timestamp = htmlspecialchars($data['timestamp'] ?? date('d M Y, h:i A'));
        $formTypeLabel = htmlspecialchars(self::getFormTypeLabel($data['form_type'] ?? ''));
        $name = htmlspecialchars(!empty($data['full_name']) ? $data['full_name'] : (!empty($data['name']) ? $data['name'] : 'N/A'));
        $mobile = htmlspecialchars(!empty($data['mobile']) ? $data['mobile'] : (!empty($data['phone']) ? $data['phone'] : 'N/A'));
        $email = htmlspecialchars($data['email'] ?? 'N/A');
        $city = htmlspecialchars($data['city'] ?? 'N/A');
        $state = htmlspecialchars($data['state'] ?? '');
        $location = $city . ($state ? ", {$state}" : '');
        $company = htmlspecialchars($data['company'] ?? (!empty($data['company_name']) ? $data['company_name'] : ''));
        $businessType = htmlspecialchars($data['business_type'] ?? '');
        $product = htmlspecialchars(!empty($data['product']) ? $data['product'] : (!empty($data['product_interested']) ? $data['product_interested'] : 'General Inquiry'));
        $message = nl2br(htmlspecialchars($data['message'] ?? 'No additional notes provided.'));
        $ip = htmlspecialchars($data['ip'] ?? ($_SERVER['REMOTE_ADDR'] ?? '127.0.0.1'));

        $cleanMobile = preg_replace('/[^0-9]/', '', $mobile);
        if (strlen($cleanMobile) === 10) {
            $cleanMobile = '91' . $cleanMobile;
        }
        $whatsappLink = 'https://wa.me/' . $cleanMobile . '?text=' . urlencode("Hello {$name}, thank you for reaching out to Fuzurra Industries regarding your enquiry ({$refId}).");

        ob_start();
        ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>New Lead Notification - Fuzurra Industries</title>
<style>
  body { margin: 0; padding: 0; background-color: #0B132B; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #1e293b; line-height: 1.6; }
  .wrapper { width: 100%; max-width: 650px; margin: 20px auto; background: #ffffff; border-radius: 14px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.25); border: 1px solid #e2e8f0; }
  .header { background: linear-gradient(135deg, #070D1E 0%, #0B132B 50%, #064E3B 100%); padding: 32px 25px; text-align: center; color: #ffffff; border-bottom: 3px solid #F59E0B; }
  .header h1 { margin: 0 0 6px 0; font-size: 26px; font-weight: 800; letter-spacing: 1px; color: #F59E0B; }
  .header p { margin: 0; font-size: 13px; color: #94A3B8; font-weight: 500; text-transform: uppercase; letter-spacing: 2px; }
  .badge { display: inline-block; padding: 6px 16px; background: rgba(245, 158, 11, 0.15); color: #F59E0B; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 20px; font-size: 12px; font-weight: 700; text-transform: uppercase; margin-top: 14px; letter-spacing: 0.5px; }
  .content { padding: 30px; }
  .lead-summary { background: #F8FAFC; border-left: 4px solid #10B981; border-radius: 6px; padding: 14px 18px; margin-bottom: 25px; }
  .lead-summary p { margin: 3px 0; font-size: 14px; }
  .lead-summary strong { color: #0F172A; }
  .table-details { width: 100%; border-collapse: collapse; margin-bottom: 25px; }
  .table-details th { text-align: left; padding: 12px 14px; font-size: 13px; font-weight: 600; color: #475569; background: #F8FAFC; border-bottom: 1px solid #E2E8F0; width: 35%; }
  .table-details td { padding: 12px 14px; font-size: 14px; color: #0F172A; border-bottom: 1px solid #E2E8F0; }
  .btn-group { text-align: center; margin: 25px 0 10px 0; }
  .btn { display: inline-block; padding: 12px 22px; text-decoration: none; font-size: 13px; font-weight: 700; border-radius: 8px; margin: 0 5px 10px 5px; }
  .btn-whatsapp { background-color: #25D366; color: #ffffff !important; }
  .btn-call { background-color: #F59E0B; color: #070D1E !important; }
  .btn-email { background-color: #070D1E; color: #ffffff !important; }
  .footer { background: #F8FAFC; padding: 20px; text-align: center; font-size: 12px; color: #64748B; border-top: 1px solid #E2E8F0; }
  .footer a { color: #059669; text-decoration: none; font-weight: 600; }
</style>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <h1>FUZURRA</h1>
      <p>Feel The Excellence &bull; Fuzurra Industries Pvt. Ltd.</p>
      <div class="badge"><?php echo $formTypeLabel; ?></div>
    </div>

    <div class="content">
      <div class="lead-summary">
        <p><strong>Lead Reference:</strong> <?php echo $refId; ?></p>
        <p><strong>Date &amp; Time:</strong> <?php echo $timestamp; ?></p>
        <p><strong>Submission Channel:</strong> <?php echo $formTypeLabel; ?> (fuzurra.in)</p>
      </div>

      <h3 style="font-size: 16px; margin: 0 0 15px 0; color: #0F172A; border-bottom: 2px solid #E2E8F0; padding-bottom: 8px;">
        Lead Details &amp; Contact Info
      </h3>

      <table class="table-details">
        <tr>
          <th>Customer Name</th>
          <td><strong><?php echo $name; ?></strong></td>
        </tr>
        <tr>
          <th>Mobile Number</th>
          <td>
            <a href="tel:<?php echo $mobile; ?>" style="color: #059669; font-weight: 700; text-decoration: none;">
              <?php echo $mobile; ?>
            </a>
          </td>
        </tr>
        <tr>
          <th>Email Address</th>
          <td>
            <?php if ($email !== 'N/A' && !empty($email)): ?>
              <a href="mailto:<?php echo $email; ?>" style="color: #0284C7; text-decoration: none;">
                <?php echo $email; ?>
              </a>
            <?php else: ?>
              <span style="color: #94A3B8;">Not Provided</span>
            <?php endif; ?>
          </td>
        </tr>
        <tr>
          <th>City / Location</th>
          <td><?php echo $location; ?></td>
        </tr>
        <?php if (!empty($company)): ?>
        <tr>
          <th>Company / Entity</th>
          <td><strong><?php echo $company; ?></strong></td>
        </tr>
        <?php endif; ?>
        <?php if (!empty($businessType)): ?>
        <tr>
          <th>Business Profile</th>
          <td><?php echo $businessType; ?></td>
        </tr>
        <?php endif; ?>
        <tr>
          <th>Product / Requirement</th>
          <td><strong style="color: #D97706;"><?php echo $product; ?></strong></td>
        </tr>
        <tr>
          <th>Customer Message</th>
          <td><?php echo $message; ?></td>
        </tr>
        <tr>
          <th>Client IP Address</th>
          <td style="font-size: 12px; color: #64748B;"><?php echo $ip; ?></td>
        </tr>
      </table>

      <!-- Quick Action Buttons -->
      <div class="btn-group">
        <a href="<?php echo $whatsappLink; ?>" target="_blank" class="btn btn-whatsapp">
          💬 Reply via WhatsApp
        </a>
        <a href="tel:<?php echo $mobile; ?>" class="btn btn-call">
          📞 Call Customer
        </a>
        <?php if ($email !== 'N/A' && !empty($email)): ?>
        <a href="mailto:<?php echo $email; ?>?subject=Re:%20Fuzurra%20Industries%20Enquiry%20<?php echo $refId; ?>" class="btn btn-email">
          ✉️ Send Email
        </a>
        <?php endif; ?>
      </div>
    </div>

    <div class="footer">
      <p style="margin: 0 0 6px 0;">
        This is an automated notification from <a href="https://fuzurra.in">Fuzurra Industries Pvt. Ltd.</a>
      </p>
      <p style="margin: 0;">
        Support: +91 99585 92900 | Email: <a href="mailto:info@fuzurra.in">info@fuzurra.in</a>
      </p>
    </div>
  </div>
</body>
</html>
        <?php
        return ob_get_clean();
    }

    /**
     * Build Plain Text Fallback Template
     */
    private static function buildPlainTextTemplate(array $data): string
    {
        $refId = $data['lead_id'] ?? ('FUZ-' . strtoupper(substr(md5(uniqid()), 0, 8)));
        $timestamp = $data['timestamp'] ?? date('d M Y, h:i A');
        $formTypeLabel = self::getFormTypeLabel($data['form_type'] ?? '');
        $name = !empty($data['full_name']) ? $data['full_name'] : (!empty($data['name']) ? $data['name'] : 'N/A');
        $mobile = !empty($data['mobile']) ? $data['mobile'] : (!empty($data['phone']) ? $data['phone'] : 'N/A');
        $email = $data['email'] ?? 'N/A';
        $city = $data['city'] ?? 'N/A';
        $state = $data['state'] ?? '';
        $company = $data['company'] ?? (!empty($data['company_name']) ? $data['company_name'] : '');
        $product = !empty($data['product']) ? $data['product'] : (!empty($data['product_interested']) ? $data['product_interested'] : 'General Inquiry');
        $message = $data['message'] ?? 'No notes provided.';

        $text = "====================================================\n";
        $text .= "FUZURRA INDUSTRIES - NEW LEAD NOTIFICATION\n";
        $text .= "====================================================\n\n";
        $text .= "Form Source: {$formTypeLabel}\n";
        $text .= "Reference ID: {$refId}\n";
        $text .= "Received At: {$timestamp}\n\n";
        $text .= "CUSTOMER DETAILS:\n";
        $text .= "----------------------------------------------------\n";
        $text .= "Name: {$name}\n";
        $text .= "Mobile: {$mobile}\n";
        $text .= "Email: {$email}\n";
        $text .= "City / State: {$city}" . ($state ? ", {$state}" : '') . "\n";
        if (!empty($company)) {
            $text .= "Company: {$company}\n";
        }
        $text .= "Product Required: {$product}\n";
        $text .= "Message / Notes:\n{$message}\n\n";
        $text .= "====================================================\n";
        $text .= "Fuzurra Industries Pvt. Ltd. | Support: +91 99585 92900 | Email: info@fuzurra.in\n";

        return $text;
    }
}

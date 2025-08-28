<?php
// contact.php
// Fully functional contact page: saves to DB (uses db.php) and sends email notification.
//
// Place this file in the same folder as your db.php (which should define $pdo).
// It expects the contacts table to exist (db.php previously provided creates it).
// NOTE: PHP's mail() may not work on some hosting environments. See comments below for SMTP/PHPMailer instructions.
 
require_once 'db.php';
 
$errors = [];
$success = '';
// Pre-fill variables for sticky form behavior
$name = '';
$email = '';
$phone = '';
$message = '';
 
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Basic sanitization
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');
 
    // Validation
    if ($name === '') $errors[] = 'Please enter your full name.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Please enter a valid email address.';
    if ($message === '') $errors[] = 'Please enter your message.';
 
    if (empty($errors)) {
        // Insert into database
        try {
            $stmt = $pdo->prepare("INSERT INTO contacts (name, email, phone, message) VALUES (:name, :email, :phone, :message)");
            $stmt->execute([
                ':name' => $name,
                ':email' => $email,
                ':phone' => $phone,
                ':message' => $message
            ]);
 
            // Prepare email notification
            $to = 'info@rehan.education'; // change to your desired recipient
            $subject = 'New contact message — Rehan.Education Clone';
            $siteName = 'Rehan.Education';
            $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
 
            $email_body = "You have received a new message from the website contact form.\n\n";
            $email_body .= "Name: " . $name . "\n";
            $email_body .= "Email: " . $email . "\n";
            $email_body .= "Phone: " . ($phone ?: 'N/A') . "\n";
            $email_body .= "Message:\n" . $message . "\n\n";
            $email_body .= "IP: $ip\n";
            $email_body .= "Date: " . date('Y-m-d H:i:s') . "\n";
 
            // Headers
            $headers = "From: " . htmlspecialchars($name) . " <" . $email . ">\r\n";
            $headers .= "Reply-To: " . $email . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
 
            // Try to send via PHP mail()
            $mailSent = false;
            if (function_exists('mail')) {
                // suppress warnings and capture boolean result
                $mailSent = @mail($to, $subject, $email_body, $headers);
            }
 
            // Optionally: if mail() fails, you can attempt SMTP with PHPMailer (see comments below)
            if ($mailSent) {
                $success = "Thanks — your message has been sent and we'll contact you soon!";
                // Clear form fields
                $name = $email = $phone = $message = '';
            } else {
                // Mail failed — still saved to DB. Inform the user politely.
                $success = "Thanks — your message has been saved. (Email notification could not be sent from this server.)";
            }
 
        } catch (Exception $e) {
            $errors[] = "There was an error saving your message. Please try again later.";
            // For debugging only: uncomment the next line if you need the exact DB error while developing
            // $errors[] = "Debug: " . $e->getMessage();
        }
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Contact — Rehan.Education Clone</title>
  <style>
    :root{--accent:#0056b3;--muted:#666;--bg:#f6f9fc}
    *{box-sizing:border-box}
    body{font-family:Inter,Arial,Helvetica,sans-serif;background:var(--bg);margin:0;color:#111}
    .container{max-width:900px;margin:0 auto;padding:24px}
    header{background:#fff;padding:12px 0;box-shadow:0 1px 6px rgba(10,20,40,.06)}
    nav a{margin-right:12px;text-decoration:none;color:#111;font-weight:600}
    .card{background:#fff;padding:20px;border-radius:10px;box-shadow:0 6px 18px rgba(10,20,40,.04)}
    h1{margin-top:0}
    label{display:block;margin-top:12px;font-weight:600}
    input[type="text"], input[type="email"], textarea{width:100%;padding:10px;border-radius:8px;border:1px solid #d7dbe0;margin-top:6px;font-size:15px}
    button{background:var(--accent);color:#fff;border:none;padding:10px 14px;border-radius:8px;margin-top:12px;cursor:pointer;font-weight:700}
    .muted{color:var(--muted)}
    .errors{color:#b00020;margin-top:8px}
    .success{background:#e6ffef;border:1px solid #b7f0d0;padding:12px;border-radius:8px;margin-top:8px;color:#0b6b2b}
    @media(max-width:700px){.two-col{display:block}}
  </style>
</head>
<body>
  <header>
    <div class="container" style="display:flex;justify-content:space-between;align-items:center">
      <div style="font-weight:800">Rehan.Education</div>
      <div>
        <a href="index.php">Home</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="facilitators.php">Facilitators</a>
        <a href="contact.php">Contact</a>
      </div>
    </div>
  </header>
 
  <main class="container" style="margin-top:18px">
    <div class="card">
      <h1>Contact Us</h1>
      <p class="muted">Call / WhatsApp: <a href="tel:+447418359852">+44 7418 359852</a><br>Email: <a href="mailto:info@rehan.education">info@rehan.education</a></p>
 
      <?php if (!empty($errors)): ?>
        <div class="errors">
          <?php foreach ($errors as $err) echo '<div>' . htmlspecialchars($err) . '</div>'; ?>
        </div>
      <?php endif; ?>
 
      <?php if ($success): ?>
        <div class="success"><?php echo htmlspecialchars($success); ?></div>
      <?php endif; ?>
 
      <form method="post" action="contact.php" style="margin-top:12px" novalidate>
        <div style="display:flex;gap:12px" class="two-col">
          <div style="flex:1">
            <label for="name">Full name</label>
            <input id="name" name="name" type="text" value="<?php echo htmlspecialchars($name); ?>" required>
          </div>
          <div style="flex:1">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" value="<?php echo htmlspecialchars($email); ?>" required>
          </div>
        </div>
 
        <label for="phone">Phone (optional)</label>
        <input id="phone" name="phone" type="text" value="<?php echo htmlspecialchars($phone); ?>">
 
        <label for="message">Message</label>
        <textarea id="message" name="message" rows="6" required><?php echo htmlspecialchars($message); ?></textarea>
 
        <button type="submit">Send Message</button>
      </form>
    </div>
 
    <div style="margin-top:12px;color:var(--muted)">
      <strong>Address:</strong> Seri Chowk, Near Arqam School, Bank Colony Phulgran, Barakahu, Islamabad (example address).
    </div>
  </main>
 
  <footer class="container" style="margin-top:18px;color:var(--muted)">
    © <?php echo date('Y'); ?> Rehan.Education Clone
  </footer>
</body>
</html>
 

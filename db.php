<?php
// db.php
// Database connection using PDO. Adjust error mode as needed.
 
$DB_HOST = 'localhost';
$DB_NAME = 'dbde9gm2yotcfh';        // <-- your DB
$DB_USER = 'ur9iyguafpilu';        // <-- your DB user
$DB_PASS = '51gssrtsv3ei';         // <-- your DB password
$DB_CHARSET = 'utf8mb4';
 
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];
 
try {
    $pdo = new PDO(
        "mysql:host={$DB_HOST};dbname={$DB_NAME};charset={$DB_CHARSET}",
        $DB_USER,
        $DB_PASS,
        $options
    );
} catch (PDOException $e) {
    // Friendly error for debugging (remove or change for production)
    die("Database connection failed: " . htmlspecialchars($e->getMessage()));
}
 
// Create contacts table if not exists (for contact form)
$createContactsSQL = "
CREATE TABLE IF NOT EXISTS contacts (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL,
  phone VARCHAR(50) DEFAULT NULL,
  message TEXT NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
";
 
$pdo->exec($createContactsSQL);
 

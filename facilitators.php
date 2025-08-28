<?php
require_once 'db.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <title>Facilitators — Rehan.Education Clone</title>
  <style>
    body{font-family:Inter,Arial;background:#f5f8fb;margin:0;color:#111}
    .container{max-width:1000px;margin:0 auto;padding:24px}
    header{background:#fff;padding:12px 0;box-shadow:0 1px 6px rgba(10,20,40,.06)}
    nav a{margin-right:12px;text-decoration:none;color:#111;font-weight:600}
    .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:14px;margin-top:18px}
    .person{background:#fff;padding:14px;border-radius:10px;box-shadow:0 8px 18px rgba(10,20,40,.04);text-align:center}
    .person img{width:120px;height:120px;border-radius:10px;object-fit:cover}
    .social{margin-top:8px}
    .social a{margin:0 6px;text-decoration:none;color:#666}
    @media(max-width:900px){.grid{grid-template-columns:1fr 1fr}}
    @media(max-width:600px){.grid{grid-template-columns:1fr}}
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
 
  <main class="container">
    <h2>Our Facilitators</h2>
    <p style="color:#666">Experienced educators and industry practitioners guiding students through each module.</p>
 
    <div class="grid">
      <div class="person">
        <img src="https://via.placeholder.com/240x240.png?text=Facilitator+1" alt="Facilitator 1">
        <h3>Rehan Allahwala</h3>
        <div style="color:#666">Founder & Lead Educator</div>
        <p style="color:#666;font-size:14px">Focus: digital strategy, entrepreneurship, and building online learning systems.</p>
        <div class="social">
          <a href="#" target="_blank">Twitter</a>
          <a href="#" target="_blank">LinkedIn</a>
        </div>
      </div>
 
      <div class="person">
        <img src="https://via.placeholder.com/240x240.png?text=Facilitator+2" alt="Facilitator 2">
        <h3>Ms. Aisha</h3>
        <div style="color:#666">AI & Curriculum Specialist</div>
        <p style="color:#666;font-size:14px">Focus: AI tool integration, lesson design & student mentorship.</p>
        <div class="social">
          <a href="#" target="_blank">Instagram</a>
          <a href="#" target="_blank">LinkedIn</a>
        </div>
      </div>
 
      <div class="person">
        <img src="https://via.placeholder.com/240x240.png?text=Facilitator+3" alt="Facilitator 3">
        <h3>Mr. Ahmed</h3>
        <div style="color:#666">Technology & Media</div>
        <p style="color:#666;font-size:14px">Focus: content creation, video production, and online teaching tech.</p>
        <div class="social">
          <a href="#" target="_blank">YouTube</a>
          <a href="#" target="_blank">LinkedIn</a>
        </div>
      </div>
    </div>
 
    <p style="color:#666;margin-top:18px">Want to join as a facilitator? <a href="contact.php">Contact us</a>.</p>
  </main>
 
  <footer class="container" style="margin-top:18px;color:#666">
    © <?php echo date('Y'); ?> Rehan.Education Clone — Facilitators list inspired by the original site. :contentReference[oaicite:3]{index=3}
  </footer>
</body>
</html>
 

<?php
require_once 'db.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Curriculum — Digital Mastery</title>
  <style>
    body{font-family:Inter,Arial;background:#f4f7fb;margin:0;color:#111}
    .container{max-width:1000px;margin:0 auto;padding:24px}
    header{background:#fff;padding:12px 0;box-shadow:0 1px 6px rgba(10,20,40,.06);position:sticky;top:0}
    nav a{margin-right:12px;text-decoration:none;color:#111;font-weight:600}
    .hero{background:#fff;padding:22px;border-radius:12px;margin-top:18px}
    .grid{display:grid;grid-template-columns:repeat(2,1fr);gap:14px;margin-top:18px}
    .module{background:#fff;padding:16px;border-radius:10px;box-shadow:0 6px 16px rgba(10,20,40,.04)}
    .module h4{margin:0 0 8px}
    footer{margin-top:22px;color:#666;font-size:14px}
    @media(max-width:800px){.grid{grid-template-columns:1fr}}
  </style>
</head>
<body>
  <header>
    <div class="container">
      <div style="display:flex;justify-content:space-between;align-items:center">
        <div style="font-weight:800">Rehan.Education</div>
        <div>
          <a href="index.php">Home</a>
          <a href="curriculum.php">Curriculum</a>
          <a href="facilitators.php">Facilitators</a>
          <a href="contact.php">Contact</a>
        </div>
      </div>
    </div>
  </header>
 
  <main class="container">
    <div class="hero">
      <h2>Curriculum Overview</h2>
      <p style="color:#666">A hands-on curriculum integrating digital skills, AI tools, and online teaching methods — built to prepare teens for digital careers and online income streams.</p>
 
      <div class="grid">
        <div class="module">
          <h4>Foundations of Digital Literacy</h4>
          <p style="color:#666">Basic computer skills, digital citizenship, online safety, and productivity tools.</p>
          <ul style="color:#666;margin-top:8px">
            <li>Internet basics & online safety</li>
            <li>Productivity with Google/Office</li>
            <li>Digital portfolios & resumes</li>
          </ul>
        </div>
 
        <div class="module">
          <h4>AI Tools & Applications</h4>
          <p style="color:#666">Practical AI: prompt engineering, using AI for content, automation, and creative projects.</p>
          <ul style="color:#666;margin-top:8px">
            <li>Intro to AI tools & ethics</li>
            <li>Prompt design and fine-tuning workflows</li>
            <li>AI-assisted content creation (audio, video, writing)</li>
          </ul>
        </div>
 
        <div class="module">
          <h4>Online Teaching & Course Creation</h4>
          <p style="color:#666">Skills to design lessons, record courses, and teach online effectively.</p>
          <ul style="color:#666;margin-top:8px">
            <li>Lesson planning & pedagogy for remote learners</li>
            <li>Recording, editing & publishing courses</li>
            <li>Assessment & feedback online</li>
          </ul>
        </div>
 
        <div class="module">
          <h4>Digital Entrepreneurship</h4>
          <p style="color:#666">Monetization channels, freelancing, building online services and products.</p>
          <ul style="color:#666;margin-top:8px">
            <li>Freelance marketplaces & profiles</li>
            <li>Building an online brand</li>
            <li>Project-based earning (services, content, courses)</li>
          </ul>
        </div>
      </div>
 
      <div style="margin-top:18px;color:#666">
        <strong>Program format:</strong> Modular, project-driven, with weekly hands-on assignments and mentor feedback. (Mirrors the structure on the original site.) :contentReference[oaicite:2]{index=2}
      </div>
    </div>
  </main>
 
  <footer class="container">
    © <?php echo date('Y'); ?> Rehan.Education Clone
  </footer>
</body>
</html>
 

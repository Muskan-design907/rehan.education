<?php
require_once 'db.php';
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Digital Mastery for a Connected World — Rehan.Education Clone</title>
  <style>
    /* Internal CSS — responsive, modern, simple */
    :root{--accent:#0056b3;--muted:#6b7280;--bg:#f7f9fc}
    *{box-sizing:border-box}
    body{margin:0;font-family:Inter,system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;background:var(--bg);color:#111}
    .container{max-width:1100px;margin:0 auto;padding:24px}
    header{background:#fff;padding:14px 0;box-shadow:0 1px 6px rgba(10,20,40,.06);position:sticky;top:0;z-index:10}
    .nav{display:flex;align-items:center;justify-content:space-between}
    .brand{display:flex;gap:12px;align-items:center}
    .brand img{height:44px;width:44px;border-radius:8px;object-fit:cover}
    nav a{margin-left:14px;text-decoration:none;color:#111;font-weight:600}
    .hero{display:grid;grid-template-columns:1fr 420px;gap:28px;align-items:center;padding:36px 0}
    .hero h1{font-size:28px;margin:0 0 10px}
    .hero p{color:var(--muted);line-height:1.6}
    .cta{margin-top:16px}
    .btn{background:var(--accent);color:#fff;padding:10px 16px;border-radius:8px;text-decoration:none;display:inline-block}
    .features{display:grid;grid-template-columns:repeat(3,1fr);gap:18px;margin-top:28px}
    .card{background:#fff;padding:18px;border-radius:12px;box-shadow:0 4px 14px rgba(15,20,30,.03)}
    .founder{display:flex;gap:16px;margin-top:28px;align-items:center}
    .founder img{width:98px;height:98px;border-radius:12px;object-fit:cover}
    footer{margin-top:36px;padding:24px 0;color:var(--muted);font-size:14px}
    /* responsive */
    @media (max-width:900px){
      .hero{grid-template-columns:1fr; text-align:center}
      .features{grid-template-columns:1fr}
      nav a{display:none}
    }
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <div class="container nav">
      <div class="brand">
        <img src="https://rehan.education/wp-content/uploads/2022/10/rehan-logo.png" alt="Logo" onerror="this.style.display='none'">
        <div>
          <div style="font-weight:800">Rehan.Education</div>
          <div style="font-size:12px;color:var(--muted)">AI-Enabled Online Academy</div>
        </div>
      </div>
      <nav>
        <a href="index.php">Home</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="facilitators.php">Facilitators</a>
        <a href="founders-message.php" onclick="alert('This is a placeholder link. See Founder excerpt below.');return false;">Founder’s Message</a>
        <a href="contact.php">Contact Us</a>
      </nav>
    </div>
  </header>
 
  <main class="container">
    <section class="hero">
      <div>
        <h1>Digital Mastery for a Connected World</h1>
        <p>We prepare teens to unleash their digital skills, harness AI tools, and become confident online educators and creators. A pragmatic curriculum focused on real-world projects, digital entrepreneurship and AI literacy.</p>
        <div class="cta">
          <a class="btn" href="curriculum.php">Explore Curriculum</a>
          <a style="margin-left:8px;color:var(--muted);text-decoration:none" href="contact.php">Contact Admissions</a>
        </div>
 
        <div class="features" aria-label="Key features">
          <div class="card">
            <h3>AI-Enabled Education</h3>
            <p style="color:var(--muted)">Learn practical AI tools integrated within lessons and projects.</p>
          </div>
          <div class="card">
            <h3>Digital Skills</h3>
            <p style="color:var(--muted)">Web, content creation, social media, online teaching & entrepreneurship.</p>
          </div>
          <div class="card">
            <h3>Online Teaching Proficiency</h3>
            <p style="color:var(--muted)">Methods to teach online, build courses, and create engaging learning experiences.</p>
          </div>
        </div>
      </div>
 
      <aside class="card" style="padding:22px">
        <h3 style="margin-top:0">Join our mission</h3>
        <p style="color:var(--muted)">Our goal: equip students to positively impact 10 million lives and achieve financial independence through digital mastery.</p>
 
        <div style="margin-top:12px">
          <strong>Contact</strong>
          <div style="color:var(--muted);font-size:14px;margin-top:6px">
            Call / WhatsApp: <a href="tel:+447418359852">+44 7418 359852</a><br>
            <div style="margin-top:6px">
              Follow:
              <a href="https://facebook.com" target="_blank">Facebook</a> •
              <a href="https://instagram.com" target="_blank">Instagram</a> •
              <a href="https://twitter.com" target="_blank">X</a>
            </div>
          </div>
        </div>
      </aside>
    </section>
 
    <section class="founder">
      <img src="https://rehan.education/wp-content/uploads/2022/10/rehan-founder.jpg" alt="Founder" onerror="this.style.display='none'">
      <div>
        <h3>Founder's Message (excerpt)</h3>
        <p style="color:var(--muted);max-width:720px">"We aim to mentor the next generation of innovative leaders — equipping them with both digital and ethical skills to thrive in an AI-enabled world." — Rehan Education.</p>
        <a class="btn" href="about.php" style="margin-top:8px;display:inline-block">Read More</a>
      </div>
    </section>
  </main>
 
  <footer class="container">
    <div style="display:flex;justify-content:space-between;align-items:center;flex-wrap:wrap">
      <div>© <?php echo date('Y'); ?> Rehan.Education Clone — Built for demonstration</div>
      <div style="color:var(--muted)">Designed to mirror the structure of the original site. :contentReference[oaicite:1]{index=1}</div>
    </div>
  </footer>
</body>
</html>
 

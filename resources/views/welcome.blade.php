<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>youth2youthzambia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    :root {
      --primary-color: #001f3f; /* Navy Blue */
      --secondary-color: #87CEEB; /* Sky Blue */
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      scroll-behavior: smooth;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: var(--primary-color);
      color: var(--secondary-color);
    }
    
    .hero {
      background: url('/assets/images/WhatsApp%20Image%202026-01-23%20at%2011.24.47.jpeg') no-repeat center center;
      background-size: cover;
      color: white;
      padding: 160px 0;
      margin-top: 56px;
      text-align: center;
    }
    
    .hero h1 {
      font-size: 3.5rem;
      font-weight: 900;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
      animation: fadeInUp 0.8s ease;
    }
    
    .hero p {
      font-size: 1.3rem;
      margin-top: 15px;
      opacity: 0.95;
    }
    
    .hero .btn {
      background: #fff;
      color: #667eea;
      border: none;
      font-weight: 700;
      padding: 12px 40px;
      margin-top: 20px;
      border-radius: 50px;
      transition: transform 0.3s, box-shadow 0.3s;
    }
    
    .hero .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      color: #764ba2;
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    .section-padding {
      padding: 100px 0;
    }
    
    #about {
      background: white;
    }
    
    #about h2 {
      font-size: 2.5rem;
      font-weight: 800;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 30px;
    }
    
    #about p {
      font-size: 1.1rem;
      line-height: 1.8;
      color: #555;
    }
    
    #about img {
      border-radius: 15px;
      box-shadow: 0 10px 40px rgba(102, 126, 234, 0.2);
      transition: transform 0.3s;
    }
    
    #about img:hover {
      transform: scale(1.05);
    }
    
    #services {
      background: var(--primary-color);
      color: white;
    }
    
    #services h2, #services h3, #services h4, #services h5, #services h6 {
      color: var(--secondary-color);
    }
    
    .card {
      border: none;
      border-radius: 15px;
      background: white;
      transition: all 0.3s;
      overflow: hidden;
    }
    
    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 20px 50px rgba(102, 126, 234, 0.3);
    }
    
    .card h5 {
      font-weight: 700;
      color: #667eea;
      margin-bottom: 15px;
    }
    
    .card p {
      color: #666;
      line-height: 1.6;
    }
    
    #portfolio {
      background: white;
    }
    
    #portfolio h2 {
      font-size: 2.5rem;
      font-weight: 800;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin-bottom: 50px;
    }
    
    .portfolio-item {
      position: relative;
      overflow: hidden;
      border-radius: 15px;
      transition: all 0.3s;
      cursor: pointer;
    }
    
    .portfolio-item img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-radius: 15px;
      transition: transform 0.4s;
    }
    
    .portfolio-item:hover img {
      transform: scale(1.1);
    }
    
    .portfolio-item h6 {
      margin-top: 15px;
      font-weight: 700;
      color: #333;
      transition: color 0.3s;
    }
    
    .portfolio-item:hover h6 {
      color: #667eea;
    }
    
    #contact {
      background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
      color: white;
    }
    
    #contact h2 {
      font-weight: 800;
      margin-bottom: 30px;
      font-size: 2.2rem;
    }
    
    #contact .form-control {
      border-radius: 10px;
      border: none;
      padding: 12px 15px;
      background: rgba(255,255,255,0.1);
      color: white;
      transition: all 0.3s;
    }
    
    #contact .form-control::placeholder {
      color: rgba(255,255,255,0.7);
    }
    
    #contact .form-control:focus {
      background: rgba(255,255,255,0.2);
      box-shadow: 0 0 0 0.2rem rgba(255,255,255,0.25);
      color: white;
      border-color: white;
    }
    
    #contact .btn-primary {
      background: var(--secondary-color);
      color: var(--primary-color);
      border: none;
      font-weight: 700;
      border-radius: 10px;
      padding: 10px 30px;
      transition: all 0.3s;
    }
    
    #contact .btn-primary:hover {
      background: var(--primary-color);
      color: var(--secondary-color);
      transform: translateY(-2px);
    }
    
    footer {
      background: linear-gradient(135deg, #1a1a1a 0%, #333 100%);
      color: white;
      padding: 30px 0;
      font-weight: 500;
    }
    
    .navbar {
      background: var(--primary-color) !important;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .navbar-brand {
      color: var(--secondary-color);
      font-weight: 800;
      font-size: 1.5rem;
      letter-spacing: 1px;
    }
  </style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="/assets/images/image0.jpeg" alt="Youth2Youth Logo" style="height: 40px; width: auto; vertical-align: middle;">
      Youth2Youth
    </a>
    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navMenu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- HERO SECTION -->
<section class="hero text-center">
  <div class="container">
    <h1 class="display-4 fw-bold">Empowering Youth. Leading Change.</h1>
    <p class="lead mt-3">A generation of young people aspiring to inspire others by changing the definition of who they are and shaping the future.</p>
    <a href="#contact" class="btn btn-primary btn-lg mt-4">Get Involved</a>
  </div>
</section>



<!-- ABOUT -->
<section id="about" class="section-padding">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h2>Who We Are</h2>
        <p>
          We are a local youth-led organization focused on leadership, education,
          community service, and innovation. Our mission is to empower young people
          to take action and shape a better future.
        </p>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.24.49 (1).jpeg') }}" class="img-fluid rounded" alt="Youth team">
      </div>
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services" class="bg-light section-padding">
  <div class="container text-center">
    <h2 class="mb-5">Our Services</h2>
    <div class="row g-4">
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Youth Leadership</h5>
            <p class="card-text">Training programs that develop leadership, confidence, and teamwork.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Community Outreach</h5>
            <p class="card-text">Volunteer projects that address local challenges and social issues.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card h-100 shadow-sm">
          <div class="card-body">
            <h5 class="card-title">Skill Development</h5>
            <p class="card-text">Workshops on technology, entrepreneurship, and creative skills.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section id="portfolio" class="section-padding">
  <div class="container">
    <h2 class="mb-5 text-center">Our Portfolio</h2>
    <div class="row g-4">
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.20.09.jpeg') }}" alt="Community Cleanup">
          <h6 class="mt-3"> Community Cleanup</h6>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.20.10.jpeg') }}" alt="Youth Workshop">
          <h6 class="mt-3">Youth Workshop</h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.20.10 (1).jpeg') }}" alt="Leadership Summit">
          <h6 class="mt-3"> Leadership Summit</h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.20.10 (2).jpeg') }}" alt="Skills Training">
          <h6 class="mt-3"> Skills Training</h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.24.47.jpeg') }}" alt="Community Service">
          <h6 class="mt-3"> Community Service</h6>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.24.48.jpeg') }}" alt="Team Building">
          <h6 class="mt-3"> Team Building</h6>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.24.48 (1).jpeg') }}" alt="Mentorship Program">
          <h6 class="mt-3">Mentorship Program</h6>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="portfolio-item">
          <img src="{{ asset('assets/images/WhatsApp Image 2026-01-23 at 11.24.49 (2).jpeg') }}" alt="Innovation Workshop">
          <h6 class="mt-3">Innovation Workshop</h6>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- CONTACT -->
<section id="contact" class="bg-dark text-light section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2>Contact Us</h2>
        <p>Email: y2yzambia@gmail.com.</p>
        <p>Phone: +260974781165 <br>
          +260776745169 <br>
          +260978310789
        </p>
        <p>Location:Mosi otunya building room 316 <br>



          City: Livingstone<br>
          
          
          Country: Zambia</p><br>
      </div>
      <div class="col-md-6">
        <form action="https://formspree.io/f/mnjdddve" method="POST">
          <div class="mb-3">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>
          <div class="mb-3">
            <input type="email" name="email" class="form-control" placeholder="Your Email" required>
          </div>
          <div class="mb-3">
            <textarea name="message" class="form-control" rows="4" placeholder="Your Message" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer class="text-center py-4">
  <p class="mb-0">&copy; 2026 Youth2youthzambia. All Rights Reserved. </p>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>

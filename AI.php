<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Advanced Web Development</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
  <?php
  include('header.php');
 ?>
<!-- HERO -->

<section class="web-hero">
    <div class="container">
        <div class="hero-content">
<h1>Artificial Intelligence (AI)</h1>

<p>
Learn Artificial Intelligence from fundamentals to real-world applications.
Master Machine Learning, Generative AI, Prompt Engineering, ChatGPT,
Computer Vision, and AI tools to build intelligent solutions and start
a successful career in the AI industry.
</p>

            <a href="https://nsis.navttc.gov.pk/sign-in" class="hero-btn">
    Apply Now
</a>
        </div>
    </div>
</section>
 
<!-- WHAT YOU WILL LEARN -->

<section class="py-5">

<div class="container">
<h2 class="section-title">
What You Will Learn In Artificial Intelligence
</h2>

<p class="section-subtitle mb-5">
Develop practical AI skills including Machine Learning, Prompt Engineering,
Computer Vision, and Generative AI using industry-standard tools..
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-brain"></i>
<h5>Machine Learning</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-robot"></i>
<h5>Generative AI</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-comments"></i>
<h5>Prompt Engineering</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-eye"></i>
<h5>Computer Vision</h5>
</div>
</div>

</div>

</div>

</section>


 

<!-- CURRICULUM -->

<section class="py-5">

<div class="container">

<h2 class="section-title">
Course Curriculum
</h2>

<div class="row g-4 mt-4">

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 1</h5>

<ul>
<li>Introduction to Artificial Intelligence</li>
<li>History of AI</li>
<li>Types of AI</li>
<li>AI Applications</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>

<ul>
<li>Machine Learning Basics</li>
<li>Prompt Engineering</li>
<li>ChatGPT & AI Tools</li>
<li>Data Processing</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>

<ul>
<li>Computer Vision</li>
<li>Generative AI</li>
<li>AI Project Development</li>
<li>Live AI Project</li>
</ul>
</div>
</div>

</div>

</div>

</section>



<!-- TRAINING ADVANTAGES -->

<section class="py-5">

<div class="container">

<h2 class="section-title">
Brightlancer Training Advantages
</h2>

<div class="row mt-5">

<div class="col-md-6">

<div class="adv-box">
<i class="fas fa-user-graduate"></i>

<div>
<h5>Expert AI Trainers</h5>
<p>Learn from experienced AI engineers and industry professionals through practical training sessions.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-laptop-code"></i>

<div>
<h5>Hands-on AI Projects</h5>
<p>Build real-world Artificial Intelligence projects using modern AI tools and technologies.</p>
</div>

</div>

</div>

<div class="col-md-6">

<div class="adv-box">
<i class="fas fa-award"></i>

<div>
<h5>NAVTTC Certified Program</h5>
<p>Receive an industry-recognized certification to enhance your professional AI career.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-rocket"></i>

<div>
<h5>Career & Freelancing Support</h5>
<p>Prepare for AI jobs, freelancing opportunities, and future careers in Artificial Intelligence.</p>
</div>

</div>

</div>

</div>

</div>

</section>
<!-- CTA -->

<section class="py-5">

<div class="container">

<div class="cta">
<h2>Start Your Artificial Intelligence Career Today</h2>

<p class="my-3">
Join our practical Artificial Intelligence training program and master
Machine Learning, Generative AI, Prompt Engineering, and modern AI tools
to build a successful career.
</p>

<a href="https://nsis.navttc.gov.pk/sign-in" class="btn-course">
Enroll Now
</a>

</div>

</div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
 <?php
   include('footer.php');
   ?> 
<script>
document.addEventListener("DOMContentLoaded", function() {

    const cards = document.querySelectorAll(".learn-card");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry, index) => {

            if (entry.isIntersecting) {

                setTimeout(() => {
                    entry.target.classList.add("show");
                }, index * 150);

            }

        });

    }, {
        threshold: 0.2
    });

    cards.forEach(card => {
        observer.observe(card);
    });

});
document.addEventListener("DOMContentLoaded", function() {

    const cards = document.querySelectorAll(".curriculum-card");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry, index) => {

            if (entry.isIntersecting) {

                setTimeout(() => {
                    entry.target.classList.add("show");
                }, index * 200);

            }

        });

    }, {
        threshold: 0.2
    });

    cards.forEach(card => {
        observer.observe(card);
    });

});
document.addEventListener("DOMContentLoaded", function() {

    const boxes = document.querySelectorAll(".adv-box");

    const observer = new IntersectionObserver((entries) => {

        entries.forEach((entry, index) => {

            if (entry.isIntersecting) {

                setTimeout(() => {
                    entry.target.classList.add("show");
                }, index * 150);

            }

        });

    }, {
        threshold: 0.2
    });

    boxes.forEach(box => {
        observer.observe(box);
    });

});
</script>
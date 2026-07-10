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
            <h1>Advanced Python Development</h1>

<p>
    Master Python Programming, Automation, Data Analysis,
    Web Development and AI applications with practical projects
    and industry-focused training.
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
What You Will Learn In Advanced Python Development
</h2>

<p class="section-subtitle mb-5">
Build powerful Python applications and gain professional
programming skills for modern software development.
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="learn-card">
 <i class="fas fa-code"></i>
    <h5>Core Python Programming</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
 <i class="fas fa-robot"></i>
    <h5>Automation & Scripting</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
 <i class="fas fa-chart-line"></i>
    <h5>Data Analysis</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
    <i class="fas fa-brain"></i>
    <h5>AI & Machine Learning</h5>
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
    <li>Python Fundamentals</li>
    <li>Variables & Data Types</li>
    <li>Functions & Modules</li>
    <li>Object-Oriented Programming</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>

<ul>
    <li>File Handling</li>
    <li>Automation Scripts</li>
    <li>Web Scraping</li>
    <li>API Integration</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>

<ul>
    <li>NumPy & Pandas</li>
    <li>Data Visualization</li>
    <li>Machine Learning Basics</li>
    <li>Final Live Project</li>
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
<h5>Expert Python Trainers</h5>
<p>Learn from experienced Python professionals.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-users"></i>

<div>
<h5>Project-Based Learning</h5>
<p>Build practical automation and software projects.</p>
</div>

</div>

</div>

<div class="col-md-6">

<div class="adv-box">
<i class="fas fa-award"></i>

<div>
<h5>NAVTTC Certified Program</h5>
<p>Industry-recognized certification for career growth.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-laptop-code"></i>

<div>
<h5>Career & Freelancing Guidance</h5>
<p>Prepare for jobs, freelancing and real-world development.</p>
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

<h2>Start Your Python Development Career Today</h2>

<p class="my-3">
Join our practical Python training program and build real-world applications.
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
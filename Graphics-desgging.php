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
 <h1>Advanced Graphic Designing</h1>

<p>
    Master visual communication, branding, digital design,
    and creative tools with practical projects and industry-focused training.
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
What You Will Learn In Advanced Graphic Designing
</h2>

<p class="section-subtitle mb-5">
Learn professional design skills and create stunning visuals
for print, digital and branding projects.
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="learn-card">
 <i class="fas fa-pencil-ruler"></i>
<h5>Design Fundamentals</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-image"></i>
<h5>Adobe Photoshop</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-bezier-curve"></i>
<h5>Adobe Illustrator</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
   <i class="fas fa-palette"></i>
<h5>Brand Identity Design</h5>
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
<li>Introduction to Graphic Design</li>
<li>Color Theory</li>
<li>Typography</li>
<li>Layout & Composition</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>

<ul>
<li>Adobe Photoshop Basics</li>
<li>Photo Editing</li>
<li>Image Retouching</li>
<li>Poster Design</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>

<ul>
<li>Adobe Illustrator</li>
<li>Logo Design</li>
<li>Vector Illustration</li>
<li>Live Design Projects</li>
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
<h5>Expert Design Instructors</h5>
<p>Learn from professional graphic designers.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-users"></i>

<div>
<h5>Practical Design Projects</h5>
<p>Create logos, posters and branding materials.</p>
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
<h5>Portfolio & Freelancing Support</h5>
<p>Build a professional portfolio and start freelancing.</p>
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

<h2>Start Your Graphic Designing Career Today</h2>

<p class="my-3">
Join our practical graphic designing training program and build a professional creative portfolio.
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
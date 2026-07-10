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
 <h1>Freelancing</h1>

<p>
    Learn how to build a successful freelancing career,
    attract international clients, create winning proposals,
    and earn online through global marketplaces.
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
What You Will Learn In Freelancing
</h2>

<p class="section-subtitle mb-5">
Develop professional freelancing skills and learn how to
find clients, manage projects, and grow your online business.
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-user-tie"></i>
<h5>Professional Profile Building</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-file-signature"></i>
<h5>Winning Proposal Writing</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-handshake"></i>
<h5>Client Communication</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-dollar-sign"></i>
<h5>Online Earning Strategies</h5>
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
<li>Introduction to Freelancing</li>
<li>Freelancing Platforms Overview</li>
<li>Profile Creation & Optimization</li>
<li>Personal Branding</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>

<ul>
<li>Proposal Writing Techniques</li>
<li>Client Communication Skills</li>
<li>Project Management</li>
<li>Handling International Clients</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>

<ul>
<li>Pricing & Payment Methods</li>
<li>Portfolio Development</li>
<li>Freelancing Growth Strategies</li>
<li>Live Freelancing Projects</li>
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
<h5>Expert Freelancing Mentors</h5>
<p>Learn from successful freelancers with real-world experience.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-briefcase"></i>

<div>
<h5>Practical Marketplace Training</h5>
<p>Get hands-on experience with Upwork, Fiverr and other platforms.</p>
</div>

</div>

</div>

<div class="col-md-6">

<div class="adv-box">
<i class="fas fa-award"></i>

<div>
<h5>NAVTTC Certified Program</h5>
<p>Earn an industry-recognized certification for career growth.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-rocket"></i>

<div>
<h5>Career & Business Growth Support</h5>
<p>Learn strategies to scale your freelancing business successfully.</p>
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
<h2>Start Your Freelancing Career Today</h2>

<p class="my-3">
Join our practical freelancing training program and learn how to earn from global clients.
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
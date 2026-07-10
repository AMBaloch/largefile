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
<h1>E-Commerce</h1>

<p>
Master the complete process of building and managing successful online
stores. Learn product management, digital marketing, payment gateways,
customer service, and modern e-commerce platforms to grow your online
business.
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
What You Will Learn In E-Commerce
</h2>

<p class="section-subtitle mb-5">
Gain practical skills to launch, manage, and scale successful online
businesses using modern e-commerce tools and strategies.
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
    <div class="learn-card">
        <i class="fas fa-store"></i>
        <h5>Online Store Setup</h5>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="learn-card">
        <i class="fas fa-box-open"></i>
        <h5>Product Management</h5>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="learn-card">
        <i class="fas fa-credit-card"></i>
        <h5>Payment Gateways</h5>
    </div>
</div>

<div class="col-lg-3 col-md-6">
    <div class="learn-card">
        <i class="fas fa-chart-line"></i>
        <h5>Digital Marketing</h5>
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
    <li>Introduction to E-Commerce</li>
    <li>Business Models</li>
    <li>Online Store Planning</li>
    <li>E-Commerce Platforms</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>

<ul>
    <li>Product Listing</li>
    <li>Inventory Management</li>
    <li>Payment Integration</li>
    <li>Order Management</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>

<ul>
    <li>Digital Marketing</li>
    <li>Social Media Marketing</li>
    <li>Customer Support</li>
    <li>Live E-Commerce Project</li>
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
<h5>Expert E-Commerce Trainers</h5>
<p>Learn from experienced professionals with practical knowledge of online business and digital commerce.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-laptop"></i>

<div>
<h5>Hands-on Store Management</h5>
<p>Build and manage real online stores while working on practical e-commerce projects.</p>
</div>

</div>

</div>

<div class="col-md-6">

<div class="adv-box">
<i class="fas fa-award"></i>

<div>
<h5>NAVTTC Certified Program</h5>
<p>Earn an industry-recognized certification to strengthen your professional career.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-rocket"></i>

<div>
<h5>Career & Freelancing Support</h5>
<p>Develop skills to work with online businesses or launch your own successful e-commerce store.</p>
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
<h2>Start Your E-Commerce Career Today</h2>

<p class="my-3">
Join our practical E-Commerce training program and learn how to build,
manage, and grow successful online businesses using the latest
e-commerce tools and strategies.
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
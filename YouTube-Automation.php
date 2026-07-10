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
<h1>YouTube Automation</h1>

<p>
    Learn how to build and scale profitable YouTube channels
    without showing your face by creating engaging content,
    automating workflows, and monetizing your audience.
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
What You Will Learn In YouTube Automation
</h2>

<p class="section-subtitle mb-5">
Master content creation, channel growth strategies,
video optimization and monetization techniques.
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-lightbulb"></i>
<h5>Content Research</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-video"></i>
<h5>Video Production</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-chart-line"></i>
<h5>Channel Growth</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-money-bill-wave"></i>
<h5>Monetization Strategies</h5>
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
<li>Introduction to YouTube Automation</li>
<li>Niche Selection</li>
<li>Keyword Research</li>
<li>Content Planning</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>

<ul>
<li>Script Writing</li>
<li>Voiceover Creation</li>
<li>Video Editing</li>
<li>Thumbnail Design</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>

<ul>
<li>YouTube SEO</li>
<li>Audience Growth Strategies</li>
<li>Channel Monetization</li>
<li>Live Channel Project</li>
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
<h5>Expert YouTube Mentors</h5>
<p>Learn from professionals with successful YouTube experience.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-laptop"></i>

<div>
<h5>Hands-On Channel Building</h5>
<p>Create and manage a real YouTube automation channel.</p>
</div>

</div>

</div>

<div class="col-md-6">

<div class="adv-box">
<i class="fas fa-award"></i>

<div>
<h5>NAVTTC Certified Program</h5>
<p>Receive industry-recognized certification upon completion.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-rocket"></i>

<div>
<h5>Monetization & Growth Support</h5>
<p>Learn proven methods to grow and monetize YouTube channels.</p>
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
<h2>Start Your YouTube Automation Journey Today</h2>

<p class="my-3">
Join our practical YouTube Automation training program and build profitable channels.
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
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
            <h1>Advanced Web Development</h1>

            <p>
                Master Front-End & Back-End Development with practical projects,
                modern frameworks and freelancing skills.
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
What You Will Learn In Advanced Web Development
</h2>

<p class="section-subtitle mb-5">
Build complete web applications from scratch and gain
industry-level development skills.
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-code"></i>
<h5>Front-End Development</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-database"></i>
<h5>Back-End Programming</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-layer-group"></i>
<h5>Full Stack Frameworks</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-project-diagram"></i>
<h5>Live Web Projects</h5>
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
<li>HTML5</li>
<li>CSS3</li>
<li>Bootstrap 5</li>
<li>Responsive Design</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>
<ul>
<li>JavaScript ES6</li>
<li>DOM Manipulation</li>
<li>AJAX</li>
<li>API Integration</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>
<ul>
<li>PHP & MySQL</li>
<li>Laravel Basics</li>
<li>Authentication</li>
<li>Live Projects</li>
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
<h5>Expert Development Instructors</h5>
<p>Learn from professional developers.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-users"></i>

<div>
<h5>Small Practical Classes</h5>
<p>Individual support and guidance.</p>
</div>

</div>

</div>

<div class="col-md-6">

<div class="adv-box">
<i class="fas fa-award"></i>

<div>
<h5>NAVTTC Certified Program</h5>
<p>Recognized training certification.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-laptop-code"></i>

<div>
<h5>Hands-On Web Projects</h5>
<p>Develop real websites and systems.</p>
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

<h2>Start Your Web Development Career Today</h2>

<p class="my-3">
Join our practical training program and build real-world projects.
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
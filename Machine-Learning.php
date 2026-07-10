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
 <h1>Machine Learning</h1>

<p>
    Learn Machine Learning algorithms, predictive modeling,
    data analysis, and Artificial Intelligence applications
    through practical projects and real-world datasets.
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
What You Will Learn In Machine Learning
</h2>

<p class="section-subtitle mb-5">
Build intelligent systems, analyze data, and develop machine
learning models for real-world applications.
</p>

<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-database"></i>
<h5>Data Preprocessing</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-chart-line"></i>
<h5>Predictive Analytics</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
<i class="fas fa-brain"></i>
<h5>Machine Learning Models</h5>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="learn-card">
  <i class="fas fa-robot"></i>
<h5>AI Applications</h5>
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
<li>Introduction to Machine Learning</li>
<li>Python for ML</li>
<li>Data Collection & Cleaning</li>
<li>Data Visualization</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 2</h5>

<ul>
<li>Supervised Learning</li>
<li>Regression Models</li>
<li>Classification Algorithms</li>
<li>Model Evaluation</li>
</ul>
</div>
</div>

<div class="col-lg-4">
<div class="curriculum-card">
<h5>Module 3</h5>

<ul>
<li>Unsupervised Learning</li>
<li>Clustering Techniques</li>
<li>Introduction to Deep Learning</li>
<li>Final Machine Learning Project</li>
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
<h5>Expert AI Instructors</h5>
<p>Learn from experienced Machine Learning professionals.</p>
</div>

</div>

<div class="adv-box">
<i class="fas fa-users"></i>

<div>
<h5>Hands-On ML Projects</h5>
<p>Work on real datasets and industry-based projects.</p>
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
<i class="fas fa-laptop-code"></i>

<div>
<h5>Career & Research Guidance</h5>
<p>Prepare for AI, Data Science and Machine Learning careers.</p>
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
<h2>Start Your Machine Learning Career Today</h2>

<p class="my-3">
Join our practical Machine Learning training program and build intelligent solutions for the future.
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
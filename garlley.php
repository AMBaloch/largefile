<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>garlley</title> 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- ✅ Add This -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>
<?php
  include('header.php');
 ?>
 <!-- hero section garlley -->
  
<section class="hero-garlley">

    <div class="overlay"></div>
    <div class="grid-overlay"></div>

    <div class="container">
        <div class="gallery-tag">
            <i class="fa-regular fa-image"></i>
            BRIGHTLANCER GALLERY
        </div>
        <div class="row align-items-center min-vh-100">
            <!-- LEFT -->
            <div class="col-lg-7">
                <h1 class="hero-title">
                   BrightLancer Gallery  <br>showcases inspiring <br>
                    <span class="green">moments from our</span> <br>training programs <br>
                    <span class="orange">across</span> 
                    <span class="orange">Pakistan.</span>
                </h1>
                <p class="hero-text">
                 

                    From Dera Ismail Khan to Bannu to Bajaur lucky peshawar Mardan Tank karak waziristan —
                    BrightLancer is transforming thousands of lives
                    through world-class free digital skills training.

                </p>

                <div class="hero-buttons">

                    <a href="#dikhan" class="btn-gallery">

                        <i class="fa-regular fa-image"></i>
                        View Gallery

                    </a>

                    <a href="https://nsis.navttc.gov.pk/sign-in" class="btn-enroll">

                        <i class="fa-solid fa-graduation-cap"></i>
                        Enroll Free

                    </a>

                </div>

            </div>

            <!-- RIGHT -->

            <div class="col-lg-5">

                <div class="training-card">

                    <div class="icon green-bg">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <h5>Training in D.I Khan</h5>
                        <p>Advance Python • AI • E-Commerce • Web Dev</p>
                    </div>

                </div>

                <div class="training-card">

                    <div class="icon orange-bg">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <h5>Training in Bannu</h5>
                        <p>E-Commerce • Certificate Distribution</p>
                    </div>

                </div>

                <div class="training-card">

                    <div class="icon pink-bg">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>

                    <div>
                        <h5>Training in Bajaur</h5>
                        <p>Digital Skills • Freelancing • Open House</p>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- training in dikhan -->
 <div class="lightbox" id="lightbox">
    <button class="lb-close" id="lbClose">✕</button>
    <img id="lbImg" src="">
</div>
<section class="training-section light" id="dikhan">

  <!-- <div class="deco-circle" style="width:320px;height:320px;background:rgba(79,209,197,.06);top:-100px;right:-80px;filter:blur(60px);"></div> -->

  <div class="container">

    <div class="row align-items-center">
      <div class="col-md-8">

        <div class="sec-eyebrow light-badge">
          <i class="fas fa-map-marker-alt"></i> Dera Ismail Khan
        </div>

        <div class="sec-divider div-teal"></div>

        <h2 class="sec-title dark-text">
          Training in <span class="accent-teal">D.I. Khan</span>
        </h2>

        <p class="sec-desc dark-muted">
          BrightLancer launched its flagship Free eSkill Center in Dera Ismail Khan in partnership with PSEB. Students here receive hands-on training in Advance Python, Artificial Intelligence, E-Commerce, Web Development, and Digital Marketing.
        </p>

      </div>
    </div>

      <!-- Gallery -->

    <div class="gal-grid gal-layout-a">

      <div class="gal-item g-big" onclick="openLb(this)">
        <img src="assets/images/pic46 (5).jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer D.I Khan</small>
            Launching ceremony
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>
       <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/img24.jpg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>Web Development</small>
            Visiting Officer
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

      <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic89.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>Web Development</small>
            Practical Session
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

    </div>

    <!-- 2nd garlley -->


<div class="gal-grid second-gallery mt-4">

    <!-- Row 1 -->
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic46 (8).jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer D.I Khan</small>
            Training Session
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/not 12.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer D.I Khan</small>
            Advanced Python Training
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic64.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>Artificial Intelligence</small>
              Practical Session
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/img9.jpg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer D.I.Khan</small>
             Visiting Officer
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>

<!-- THIRD GALLERY -->


<div class="gal-grid third-gallery mt-4">
<div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic62.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer D.I.Khan</small>
            Training Session
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/not 8.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>web Development Batch 1</small>
            Certificate Distribution
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic46 (7).jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer D.I.Khan</small>
            Ecommerece Paractical Classes
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>

  
  </div>
  <!-- training  in banuu -->
   
<section class="training-section light" id="dikhan">


  <div class="container">

    <div class="row align-items-center">
      <div class="col-md-8">

        <div class="sec-eyebrow light-badge">
          <i class="fas fa-map-marker-alt"></i> Bannu
        </div>

        <div class="sec-divider div-teal"></div>

        <h2 class="sec-title dark-text">
          Training in <span class="accent-teal">Bannu</span>
        </h2>

        <p class="sec-desc dark-muted">
          BrightLancer launched its flagship Free eSkill Center in Bannu in partnership with PSEB. Students here receive hands-on training in Advance Python, Artificial Intelligence, E-Commerce, Web Development, and Digital Marketing.
        </p>

      </div>
    </div>

      <!-- Gallery -->

    <div class="gal-grid gal-layout-a">

      <div class="gal-item g-big" onclick="openLb(this)">
        <img src="assets/images/pic56.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>Training in Bannu</small>
            
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>
       <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic57.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>Training in Bannu</small>
            Official Classes
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

      <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic58.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>Training in Bannu</small>
            PSEB Internship caremony
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

    </div>

    <!-- 2nd garlley -->


<div class="gal-grid second-gallery mt-4">

    <!-- Row 1 -->
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic50.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>Training in Bannu</small>
            Paractical Classes
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/img23.jpg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>Training in Bannu</small>
            Computer Lab
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic81.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer(PVT) LTD</small>
            certification
                       
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic82.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>Training in Bannu</small>
            
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>

<!-- THIRD GALLERY -->


<div class="gal-grid third-gallery mt-4">
<div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic83.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Banuu</small>
            Training Session
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic84.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Banuu</small>
            Interview
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic85.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bannu</small>
            Training Session
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>
</div>
</section>
   
  </div>
  <!-- traning in Bajaur -->
<section class="training-section light" id="dikhan">

  <!-- <div class="deco-circle" style="width:320px;height:320px;background:rgba(79,209,197,.06);top:-100px;right:-80px;filter:blur(60px);"></div> -->

  <div class="container">

    <div class="row align-items-center">
      <div class="col-md-8">

        <div class="sec-eyebrow light-badge">
          <i class="fas fa-map-marker-alt"></i>Bajaur
        </div>

        <div class="sec-divider div-teal"></div>

        <h2 class="sec-title dark-text">
          Training in <span class="accent-teal">Bajaur</span>
        </h2>

        <p class="sec-desc dark-muted">
          BrightLancer launched its flagship Free eSkill Center in Bajaur in partnership with PSEB. Students here receive hands-on training in Advance Python, Artificial Intelligence, E-Commerce, Web Development, and Digital Marketing.
        </p>

      </div>
    </div>

      <!-- Gallery -->

    <div class="gal-grid gal-layout-a">

      <div class="gal-item g-big" onclick="openLb(this)">
        <img src="assets/images/pic87.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
            training Session
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>
       <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic88.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
            Paractical Classes
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

      <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic51.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

    </div>

    <!-- 2nd garlley -->


<div class="gal-grid second-gallery mt-4">

    <!-- Row 1 -->
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic82.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic27.jpg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
            Training in Bajaur
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic47.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic90.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>

<!-- THIRD GALLERY -->


<div class="gal-grid third-gallery mt-4">
<div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic55.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic91.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
            paractical Classes
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/img13.jpg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer Bajaur</small>
            paractical Classes
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>
  </div>
</section>
  </div>
  <!-- training in peshawar   -->

 <!-- <div class="lightbox" id="lightbox"> -->
   
<section class="training-section light" id="dikhan">
  <div class="container">

    <div class="row align-items-center">
      <div class="col-md-8">

        <div class="sec-eyebrow light-badge">
          <i class="fas fa-map-marker-alt"></i>Lucky Peshawar
        </div>

        <div class="sec-divider div-teal"></div>

        <h2 class="sec-title dark-text">
          Training in <span class="accent-teal">lucky , peshawar</span>
        </h2>

        <p class="sec-desc dark-muted">
          BrightLancer launched its flagship Free eSkill Center in lucky peshawar in partnership with PSEB. Students here receive hands-on training in Advance Python, Artificial Intelligence, E-Commerce, Web Development, and Digital Marketing.
        </p>

      </div>
    </div>

      <!-- Gallery -->

    <div class="gal-grid gal-layout-a">

      <div class="gal-item g-big" onclick="openLb(this)">
        <img src="assets/images/pic92.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer in peshawar</small>
            
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>
       <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic94.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer in peshawar</small>
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

      <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic41.jpg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer in peshawar</small>
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

    </div>

    <!-- 2nd garlley -->


<div class="gal-grid second-gallery mt-4">

    <!-- Row 1 -->
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic31.jpg" alt="">
  >

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in peshawar</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/img9.jpg" alt="">
      

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in peshawar</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
   
     <img src="assets/images/pic96.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in lucky</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic95.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in lucky</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>

<!-- THIRD GALLERY -->


<div class="gal-grid third-gallery mt-4">
<div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic97.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in lucky</small>
           
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic98.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in lucky</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic99.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in lucky</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>
</div>
</section>
  </div>
  <!-- training in tank karak waziristan    -->
   
<section class="training-section light" id="dikhan">
  <div class="container">

    <div class="row align-items-center">
      <div class="col-md-8">

        <div class="sec-eyebrow light-badge">
          <i class="fas fa-map-marker-alt"></i>Mardan Tank Karak Waziristan 
        </div>

        <div class="sec-divider div-teal"></div>

        <h2 class="sec-title dark-text">
          Training in <span class="accent-teal">Mardan Tank karak waziristan </span>
        </h2>

        <p class="sec-desc dark-muted">
          BrightLancer launched its flagship Free eSkill Center in Mardan Tank karak waziristan  in partnership with PSEB. Students here receive hands-on training in Advance Python, Artificial Intelligence, E-Commerce, Web Development, and Digital Marketing.
        </p>

      </div>
    </div>

      <!-- Gallery -->

    <div class="gal-grid gal-layout-a">

      <div class="gal-item g-big" onclick="openLb(this)">
        <img src="assets/images/pic100.jpeg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer in Mardan </small>
            
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>
       <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic25.jpg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer in Tank</small>
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

      <div class="gal-item" onclick="openLb(this)">
        <img src="assets/images/pic5.jpg" alt="">
        <div class="gal-overlay">
          <div class="gal-overlay-text">
            <small>BrightLancer in karak </small>
          </div>
        </div>
        <div class="zoom-icon">
          <i class="fas fa-expand"></i>
        </div>
      </div>

    </div>

    <!-- 2nd garlley -->


<div class="gal-grid second-gallery mt-4">

    <!-- Row 1 -->
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic11.jpg" alt="">
  >

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in  waziristan </small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic101.jpeg" alt="">
      

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in Mardan </small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
   
     <img src="assets/images/pic102.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in karak</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>
   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic10.jpg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in Tank  </small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>

<!-- THIRD GALLERY -->


<div class="gal-grid third-gallery mt-4">
<div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic103.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in waziristan</small>
           
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic105.jpeg" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in Mardan</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

   <div class="gal-item" onclick="openLb(this)">
    <img src="assets/images/pic104.png" alt="">

    <div class="gal-overlay">
        <div class="gal-overlay-text">
            <small>BrightLancer in karak</small>
        </div>
    </div>

    <div class="zoom-icon">
        <i class="fas fa-expand"></i>
    </div>
</div>

</div>

    <div class="info-strip mt-4">

      <div class="info-chip light-chip">
        <div class="chip-icon">
          <i class="fas fa-users"></i>
        </div>
        <div>
          <div class="chip-num navy">100+</div>
          <div class="chip-lbl dark">Students Trained</div>
        </div>
      </div>

      <div class="info-chip light-chip">
        <div class="chip-icon gold-icon">
          <i class="fas fa-laptop-code"></i>
        </div>
        <div>
          <div class="chip-num navy">8</div>
          <div class="chip-lbl dark">Active Courses</div>
        </div>
      </div>

      <div class="info-chip light-chip">
        <div class="chip-icon">
          <i class="fas fa-certificate"></i>
        </div>
        <div>
          <div class="chip-num navy">PSEB</div>
          <div class="chip-lbl dark">Certified Center</div>
        </div>
      </div>

      <div class="info-chip light-chip">
        <div class="chip-icon gold-icon">
          <i class="fas fa-star"></i>
        </div>
        <div>
          <div class="chip-num navy">8.9★</div>
          <div class="chip-lbl dark">Student Rating</div>
        </div>
      </div>

    </div>
</div>
</section>

  </section>
   </body>
</html>
  <?php
   include('footer.php');
   ?> 
 <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  
 <script>
document.addEventListener("DOMContentLoaded", function(){

    const lb = document.getElementById("lightbox");
    const lbImg = document.getElementById("lbImg");
    const lbClose = document.getElementById("lbClose");

    document.querySelectorAll(".gal-item").forEach(item => {

        item.addEventListener("click", function(){

            const img = this.querySelector("img");

            lbImg.src = img.src;

            lb.style.display = "flex";

        });

    });

    lbClose.addEventListener("click", function(){

        lb.style.display = "none";

    });

});
</script>

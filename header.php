<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bightlancer website</title> 
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- ✅ Add This -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>


<body>
 
 
<!-- TOP BAR (Desktop Only) -->
  <div class="top-bar d-none d-lg-flex align-items-center">
      <div class="container d-flex justify-content-between align-items-center">
        <div class="top-left d-flex align-items-center gap-4">
          <div class="top-item">
            <i class="fas fa-envelope"></i>
            <span>brightlancer@gmail.com</span>
          </div>

          <div class="top-item">
            <i class="fas fa-phone"></i>
            <span>+92 336 1965865</span>
          </div>

          <div class="top-item">
            <i class="fas fa-location-dot"></i>
            <span>   KPK ,Peshawar ,Pakistan</span>
          </div>
        </div>

        <div class="top-right d-flex align-items-center gap-2">
          <a href="https://www.facebook.com/share/p/193StZMa5X/" class="social-icon">
            <i class="fab fa-facebook-f"></i>
          </a>

          <a href="#" class="social-icon">
            <i class="fab fa-instagram"></i>
          </a>

          <!-- <a href="#" class="social-icon">
            <i class="fab fa-tiktok"></i>
          </a> -->

          <a href="#" class="social-icon">
            <i class="fab fa-whatsapp"></i>
          </a>
        </div>
      </div>
    </div>

<!-- ================= NAVBAR ================= -->

<nav class="navbar navbar-expand-lg custom-navbar">

  <div class="container">

    <!-- LOGO -->

    <a class="navbar-brand" href="#">
      <img src="assets/images/logo.png" class="logo-img" alt="logo">
    </a>

    <!-- TOGGLER -->

    <button class="navbar-toggler custom-toggler d-lg-none"
            type="button"
            id="menuToggle">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- MENU -->

    <div class="navbar-collapse" id="mobileMenu">

      <!-- MOBILE HEADER -->

      <div class="drawer-header d-lg-none">
        <img src="assets/images/logo.png" width="80" alt="logo">

        <button class="close-btn" id="closeMenu">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <!-- NAV LINKS -->

      <ul class="navbar-nav mx-auto">

        <li class="nav-item">
          <a class="nav-link active" href="index.php">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php">Services</a>
        </li>

        <!-- COURSES -->

        <li class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
             Courses
       <i class="fas fa-chevron-down dropdown-icon"></i>
          </a>

          <div class="dropdown-menu">
            <div class="dropdown-grid">
              <div>
                <h5 class="dropdown-title">Development</h5>

               <a class="team-dropdown-item" href="web.php">Advanced web Development</a>
              <a class="team-dropdown-item" href="Advanced-python.php">Advanced python</a>
              <a class="team-dropdown-item" href="Graphics-desgging.php">Graphics desgging</a>
                 <a class="team-dropdown-item" href="Machine-Learning.php">Machine Learning</a>
                 <a class="team-dropdown-item" href="Machine-Learning.php">Artificial Intelligence</a>
            
              </div>
              <div>
                <h5 class="dropdown-title">Marketing</h5>

             <a class="team-dropdown-item" href="Freelancing.php">Freelancing</a>
              <a class="team-dropdown-item" href="YouTube-Automation.php">YouTube Automation</a>
              <a class="team-dropdown-item" href="English-itels.php">English itels</a>
            <a class="team-dropdown-item" href="Amazon.php">Amazon</a>
               <a class="team-dropdown-item" href="Amazon.php">E-Commerece</a>
              </div>

            </div>

          </div>
        </li>

        <!-- SERVICES -->

       <!-- ================= TEAM DROPDOWN ================= -->

<li class="nav-item dropdown">

  <a class="nav-link dropdown-toggle" href="#" role="button">
    Team
    <i class="fas fa-chevron-down dropdown-icon"></i>
  </a>

  <div class="team-dropdown-menu">

    <!-- <h5 class="team-dropdown-title">Design</h5> -->

    <a class="team-dropdown-item" href="https://nsis.navttc.gov.pk/sign-in">ADM FORM</a>
    <a class="team-dropdown-item" href="garlley.php">Gallery</a>
   

  </div>

</li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li> -->

        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contact</a>
        </li>

      </ul>

      <!-- BUTTON -->

      <a href="#" class="quote-btn">
        Get Started
      </a>

    </div>
  </div>
</nav>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>
</body>

</html>
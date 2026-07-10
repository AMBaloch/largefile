<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>final code final project </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
<link rel="stylesheet" href="assets/css/style.css">

<style>


/* HERO SECTION  */

#home {
  position: relative;

  background-image:
    linear-gradient(rgba(7, 59, 76, 0.65), rgba(7, 59, 76, 0.65)),
    url("assets/images/back.png");

  background-size: cover;
  background-position: center -1%;
  background-repeat: no-repeat;

  width: 100%;
  min-height: 100vh;

  display: flex;
  align-items: center;
  justify-content: center;

  text-align: center;
 /* padding: 317px 20px; */
   padding-bottom: 270px;
   
  overflow: hidden;
}

/* Optional Dark Overlay */

#home::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.2);
}

.home-content {
  position: relative;
  z-index: 2;
  max-width: 850px;
}

/* ================= HERO HEADING ================= */
.home-content h2 {
  color: #ffffff;
  font-size: 68px;
  font-weight: 800;
  line-height: 1.1;
  letter-spacing: -3px;
  text-transform: capitalize;

  text-shadow:
    0 4px 15px rgba(0, 0, 0, 0.45),
    0 0 25px rgba(7, 59, 76, 0.7);

  /* margin-bottom: 25px; */
  margin-top: 99px;

  animation: fadeUp 1.2s ease;
}



/* Animation */
@keyframes fadeUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }

  to {
    opacity: 1;
    transform: translateY(0);
  }
}
/* ================= HERO TEXT ================= */

.home-content p {
  color: #f1f5f9;
  font-size: 17px;
  line-height: 1.8;

  margin: 20px auto 35px;
  max-width: 700px;
   animation: fadeUp 1.2s ease;
}

/* ================= HERO BUTTONS ================= */

.hero-btns {
  display: flex;
  justify-content: center;
  gap: 18px;
  flex-wrap: wrap;
   animation: fadeUp 1.2s ease;
}

/* BOTH BUTTONS */

.home-btn,
.blue-btn {
  display: inline-block;
  padding: 14px 34px;

  border-radius: 50px;

  text-decoration: none;
  font-weight: 700;
  font-size: 15px;
 animation: fadeUp 1.2s ease;
  transition: 0.4s ease;
}

/* PRIMARY BUTTON */
.home-btn{
    background:#073b4c;
    color:#fff !important;
    border:2px solid #073b4c;
    transition:all .4s ease;
}

.home-btn:hover{
    background:transparent;
    border:2px solid #fff;
    color:#fff !important;
}


/* SECOND BUTTON */

.blue-btn {
  background: white;
  color: #073b4c;
  border: 2px solid white;
}

.blue-btn:hover {
  background: transparent;
  color: white;

  transform: translateY(-5px);
}

/* =========================
   COURSES SECTION (CLEAN FIXED)
========================= */

.courses {
  width: 100%;
  padding: 80px 4%;
  background: #f8fafc;

  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 22px;
}

/* RESPONSIVE GRID */
@media (max-width: 1200px) {
  .courses {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 768px) {
  .courses {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 480px) {
  .courses {
    grid-template-columns: 1fr;
  }
}

/* =========================
   CARD
========================= */

.course-card {
  background: #fff;
  border-radius: 20px;
  padding: 20px;

  position: relative;

  box-shadow: 0 8px 25px rgba(0,0,0,0.06);

  transition: 0.4s ease;

  display: flex;
  flex-direction: column;
}

.course-card:hover {
  transform: translateY(-8px);
}

/* TOP LINE */
.course-card::before {
  content: "";

  position: absolute;
  top: 0;
  left: 10px;

  width: calc(100% - 20px);
  height: 5px;

  border-radius: 50px;

  background: linear-gradient(
    90deg,
    #073b4c,
    #0b556d,
    #11738f
  );
}

/* =========================
   ICON (IMPORTANT FIX)
========================= */

.icon {
  width: 60px;
  height: 60px;

  border-radius: 16px;

  display: flex;
  align-items: center;
  justify-content: center;

  margin-bottom: 15px;

  color: #fff;
  font-size: 26px;
  flex-shrink: 0;
}

.icon i {
  font-size: 26px;
}

/* =========================
   TEXT
========================= */

.course-card h2 {
  font-size: 20px;
  font-weight: 700;
  margin-bottom: 10px;
  color: #0f172a;
}

.course-card p {
  font-size: 13px;
  line-height: 1.6;
  color: #64748b;
  margin-bottom: 15px;
}

/* TAGS */

.tags {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
  margin-bottom: 18px;
}

.tags span {
  font-size: 11px;
  padding: 6px 10px;
  border-radius: 20px;
  background: #f1f5f9;
  font-weight: 600;
}

/* BOTTOM */

.bottom {
  margin-top: auto;
  border-top: 1px solid #e2e8f0;
  padding-top: 15px;

  display: flex;
  flex-direction: column;
  gap: 10px;
}

.bottom small {
  font-size: 12px;
  font-weight: 600;
  color: #475569;
}

/* BUTTON FIX */
.bottom button {
  width: 100%;
  padding: 10px;

  border-radius: 30px;
  border: 1px solid transparent;

  background: #073b4c;
  color: white;

  font-size: 13px;
  font-weight: 700;

  transition: 0.3s;
}

.bottom button:hover {
  background: white;
  color: #073b4c;
  border: 1px solid #073b4c;
}

/* =========================
   ICON COLORS
========================= */

.marketing .icon { background: #ef4444; }
.design .icon { background: #8b5cf6; }
.python .icon { background: #22c55e; }
.ecommerce .icon { background: #f59e0b; }
.graphic .icon { background: #ec4899; }
.amazon .icon { background: #38bdf8; }

.freelancing .icon { background: #14b8a6; }
.youtube .icon { background: #ff0000; }
.ielts .icon { background: #3b82f6; }
.machine .icon { background: #7c3aed; }
/* =========================
   RESPONSIVE
========================= */

@media (max-width: 1400px) {
  .courses {
    grid-template-columns: repeat(4, 1fr);
  }
}

@media (max-width: 1100px) {
  .courses {
    grid-template-columns: repeat(3, 1fr);
  }
}

@media (max-width: 768px) {
  .courses {
    grid-template-columns: repeat(2, 1fr);

    padding: 60px 5%;
  }
}

@media (max-width: 480px) {
  .courses {
    grid-template-columns: 1fr;
  }
}

/* ================= RESPONSIVE ================= */

@media (max-width: 992px) {
  .home-content h2 {
    font-size: 46px;
  }

  .home-content p {
    font-size: 16px;
  }
}

@media (max-width: 768px) {
  #home {
    padding: 100px 20px;
  }

  .home-content h2 {
    font-size: 38px;
  }

  .home-content p {
    font-size: 15px;
    line-height: 1.7;
  }

  .home-btn,
  .blue-btn {
    width: 100%;
    max-width: 260px;
    text-align: center;
  }
}

@media (max-width: 480px) {
  .home-content h2 {
    font-size: 30px;
    line-height: 1.3;
  }

  .home-content p {
    font-size: 14px;
  }

  .hero-btns {
    gap: 12px;
  }
}
@media (max-width: 768px) {
  .home-content h2 {
    font-size: 42px;
  }
}

@media (max-width: 480px) {
  .home-content h2 {
    font-size: 32px;
    line-height: 1.3;
  }
}


/* =========================
   SECTION HEADING
========================= */

.course-heading{
    text-align:center;
    padding:80px 20px 20px;
    background:#f8fafc;
}

.course-heading h5{
    color:#073b4c;
    font-size:26px;
    font-weight:700;
    letter-spacing:3px;
    margin-bottom:10px;
    text-transform:uppercase;
}

.course-heading h2{
    font-size:48px;
    font-weight:800;
    color:#073b4c;
    margin-bottom:15px;
}

.course-heading p{
    max-width:700px;
    margin:auto;
    font-size:16px;
    color:#64748b;
    line-height:1.8;
}

/* Responsive */

@media(max-width:768px){

    .course-heading h2{
        font-size:34px;
    }

    .course-heading p{
        font-size:14px;
    }
}

@media(max-width:480px){

    .course-heading h2{
        font-size:28px;
    }

    .course-heading h5{
        font-size:14px;
    }
}



/* why choose brightlancer  */

/* About us section  */
/* ===========================
   WHY BRIGHTLANCER
=========================== */

.why-brightlancer{
    background:#f8fafc;
    padding:80px 0;
}

.why-wrapper{
    background:#073b4c;
    border-radius:35px;
    padding:55px;
    overflow:hidden;
}

.left-content h2,
.right-box h2{
    color:#fff;
    font-size:39px;
    font-weight:800;
    margin-bottom:25px;
}

.left-content p,
.top-text{
    color:#dbe8ec;
    line-height:1.8;
    font-size:17px;
}

.why-btns{
    display:flex;
    gap:25px;
    flex-wrap:wrap;
    margin-top:30px;
}

.why-btn{
    background:#fff;
    color:#073b4c;
    text-decoration:none;
    padding:14px 28px;
    border-radius:15px;
    font-weight:700;
    transition:.4s;
}

.why-btn:hover{
    background:transparent;
    border:2px solid #fff;
    color:#fff;
}

.stats-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:15px;
    margin-top:60px;
}

.stat-card{
    background:rgba(255,255,255,.08);
    border:1px solid rgba(255,255,255,.1);
    padding:15px;
    border-radius:20px;
}

.stat-card h3{
    color:#fff;
    font-size:48px;
    font-weight:800;
}

.stat-card span{
    color:#dbe8ec;
}

.right-box{
    background:rgba(255,255,255,.08);
    padding:35px;
    border-radius:30px;
    border:1px solid rgba(255,255,255,.08);
}

.feature-card{
    display:flex;
    gap:20px;
    align-items:center;
    background:rgba(255,255,255,.06);
    padding:25px;
    border-radius:20px;
    margin-top:25px;
}

.feature-card i{
    font-size:32px;
    color:#fff;
}

.feature-card h5{
    color:#fff;
    margin-bottom:5px;
}

.feature-card p{
    color:#dbe8ec;
    margin:0;
}

/* LEFT ANIMATION */

.slide-left{
    opacity:0;
    transform:translateX(-100px);
    transition:1s ease;
}

.slide-left.show{
    opacity:1;
    transform:translateX(0);
}

/* RIGHT ANIMATION */

.slide-right{
    opacity:0;
    transform:translateX(100px);
    transition:1s ease;
}

.slide-right.show{
    opacity:1;
    transform:translateX(0);
}

/* RESPONSIVE */

@media(max-width:991px){

    .why-wrapper{
        padding:30px;
    }

    .left-content h2,
    .right-box h2{
        font-size:38px;
    }

    .stats-grid{
        grid-template-columns:1fr;
    }
}

@media(max-width:576px){

    .left-content h2,
    .right-box h2{
        font-size:30px;
    }

    .feature-card{
        flex-direction:column;
        text-align:center;
    }
}
/* Remove background circles */

.why-brightlancer::before,
.why-brightlancer::after,
.why-wrapper::before,
.why-wrapper::after{
    display:none !important;
    content:none !important;
}
  /* review section  */

/* Review Section */
.testimonial-section{
    background:#eef0fb;
    padding:80px 0;
}

.testimonial-card{
    background:#fff;
    border-radius:30px;
    padding:40px 25px;
    text-align:center;
    position:relative;
    overflow:hidden;
    height:100%;
    transition:0.3s ease;
}

.testimonial-card:hover{
    transform:translateY(-8px);
}

.fw-bold{
    color:  #073B4C;

}
.fw-p{
    color:  #073B4C;
    font-size: 19px;
}
.quote-corner{
    position:absolute;
    top:0;
    right:0;
    width:110px;
    height:110px;
    background:#073B4C;
    border-radius:0 0 0 100%;
    color:#fff;
    font-size:60px;
    display:flex;
    align-items:center;
    justify-content:center;
}

.student-img{
    width:100px;
    height:100px;
    border-radius:50%;
    object-fit:cover;
    border:6px solid #eef0fb;
    margin-bottom:20px;
}

.testimonial-card h3{
    color:#073B4C;
    font-weight:700;
    margin-bottom:10px;
    font-size:24px;
}

.testimonial-card span{
    display:block;
    color:#777;
    margin-bottom:15px;
    font-size:15px;
}

.stars{
    color:#f7941d;
    font-size:22px;
    margin-bottom:20px;
}

.testimonial-card p{
    color:#666;
    line-height:1.9;
    font-size:16px;
}

.swiper{
    padding-bottom:20px;
}


/* =========================
   Tablet (768px)
========================= */
@media (max-width: 768px){

    .testimonial-section{
        padding:60px 0;
    }

    .testimonial-card{
        padding:35px 20px;
        border-radius:25px;
    }

    .quote-corner{
        width:90px;
        height:90px;
        font-size:45px;
    }

    .student-img{
        width:85px;
        height:85px;
    }

    .testimonial-card h3{
        font-size:22px;
        
    }

    .testimonial-card p{
        font-size:15px;
        line-height:1.8;
    }
}


/* Mobile View */
@media (max-width:576px){

    .testimonial-card{
        width:90%;
        margin:0 auto;
        padding:25px 15px;
    }

    .student-img{
        width:65px;
        height:65px;
    }

    .testimonial-card h3{
        font-size:18px;
    }

    .testimonial-card p{
        font-size:13px;
        line-height:1.6;
    }

    .quote-corner{
        width:60px;
        height:60px;
        font-size:25px;
    }
}

/* Very Small Devices */
@media (max-width:400px){

    .testimonial-card{
        width:85%;
        padding:20px 12px;
    }

    .testimonial-card h3{
        font-size:16px;
    }

    .testimonial-card span{
        font-size:12px;
    }

    .testimonial-card p{
        font-size:12px;
    }
}

/* HOW TO APPLY */

.how-apply{
    background:#f5f8ff;
    position:relative;
    overflow:hidden;
}

.section-tag{
    color:#073B4C;
    font-size:14px;
    font-weight:700;
    letter-spacing:3px;
}

.section-title{
    font-size:48px;
    font-weight:800;
    color:#073B4C;
    margin-top:10px;
}

.section-desc{
    max-width:650px;
    margin:auto;
    color:#666;
    margin-top:15px;
}

.apply-card{
    background:#fff;
    border-radius:25px;
    padding:40px 30px;
    text-align:center;
    position:relative;
    overflow:hidden;
    transition:.4s ease;
    height:100%;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
}

.apply-card:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(13,110,253,.18);
}

.step-number{
    position:absolute;
    top:15px;
    right:20px;
    font-size:60px;
    font-weight:800;
    /* color:rgba(13,110,253,.08); */
    color: #073B4C;
    line-height:1;
}

.icon-box{
    width:90px;
    height:90px;
    margin:auto;
    border-radius:50%;
    background:#073B4C;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-bottom:25px;
}

.icon-box i{
    color:#fff;
    font-size:35px;
}

.apply-card h4{
    font-size:24px;
    font-weight:700;
    margin-bottom:15px;
    color:#073B4C;
}

.apply-card p{
    color:#666;
    line-height:1.8;
    margin-bottom:0;
}

/* Responsive */

@media(max-width:991px){

    .section-title{
        font-size:38px;
    }

    .apply-card{
        padding:35px 25px;
    }
}

@media (max-width: 576px){

    .apply-card{
        width:85%;
        margin:0 auto;
        padding:20px 15px;
    }

    .apply-card h4{
        font-size:18px;
    }

    .apply-card p{
        font-size:14px;
        line-height:1.6;
    }

}
   /* our paractical classes */
   .practical-classes{
    background:#fff;
    color:#fff;
}

.practical-card{
    background:#073B4C;
    backdrop-filter:blur(10px);
    border:1px solid #073B4C;
    padding:35px 25px;
    border-radius:20px;
    transition:.4s;
    height:100%;
}



.practical-card i{
    font-size:45px;
    margin-bottom:20px;
    color:#fff;
}

.practical-card h4{
    font-weight:700;
    margin-bottom:15px;
}

.practical-card p{
    color:#fff;
}



.section-title{
    font-size:48px;
    font-weight:800;
    margin:15px 0;
}

.section-desc{
    max-width:700px;
    margin:auto;
    color:#073B4C;
}

@media(max-width:768px){
    .section-title{
        font-size:32px;
    }
}
@media (max-width: 576px){

    .practical-card{
        width: 88%;
        margin: 0 auto;
        padding: 25px 18px;
    }

    .practical-card i{
        font-size: 38px;
    }

    .practical-card h4{
        font-size: 20px;
    }

    .practical-card p{
        font-size: 14px;
    }

}

/* team section  */
/* team section  */


.team-section{
    padding:80px 0;
    background:#f8fafc;
}

/* TITLE */
.section-title {
  text-align: center;
  margin-bottom: 50px;
}

.section-title h2 {
  font-size: 36px;
  font-weight: 800;
  color: #073b4c;
}

.section-title p {
  color: #64748b;
  font-size: 15px;
  margin-top: 10px;
}

/* ROW FIX */
.team-section .row {
  align-items: stretch;
}

/* CARD */
.team-card{
    background:#fff;
    border-radius:20px;
    padding:25px;
    text-align:center;
    height:100%;
    box-shadow:0 10px 25px rgba(0,0,0,.08);
    /* transition:.4s; */
}
.team-card{
    display:block !important;
    visibility:visible !important;
    opacity:1 !important;
 } 


/* IMAGE */
.team-img{
    width:120px;
    height:120px;
    margin:0 auto 20px;
    border-radius:50%;
    overflow:hidden;
    border:4px solid #073B4C;
}

.team-img img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* CONTENT */
.team-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.team-content h4{
    color:#073B4C;
    font-weight:700;
}

.team-content span{
    display:block;
    margin-bottom:10px;
    color:#777;
}

.team-short{
    font-size:14px;
    color:#666;
    line-height:1.7;
}


/* SOCIAL */
.team-social{
    display:flex;
    justify-content:center;
    gap:10px;
    margin:15px 0;
}

.team-social a{
    width:40px;
    height:40px;
    border-radius:50%;
    background:#073B4C;
    color:#fff;
    display:flex;
    align-items:center;
    justify-content:center;
    text-decoration:none;
}

.team-social a:hover {
  background: #073b4c;
  color: #fff;
}

/* BUTTON */
.team-btn{
    display:inline-block;
    padding:10px 22px;
    background:#073B4C;
    color:#fff;
    border-radius:30px;
    text-decoration:none;
    cursor:pointer;
}

.team-btn:hover {
  background: transparent;
  color: #073b4c;
}

.modal{
    z-index: 99999 !important;
}

.modal-backdrop{
    z-index: 99998 !important;
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .team-section {
    padding: 70px 0;
  }

  .section-title h2 {
    font-size: 28px;
  }
}.modal-header{
  background:#073b4c;
  color:#fff;
}

.modal-body{
  padding:30px;
  line-height:1.8;
}

.modal-body h5{
  color:#073b4c;
  font-weight:700;
}

.social-links{
  display:flex;
  gap:12px;
  flex-wrap:wrap;
}

.social-links a{
  background:#073b4c;
  color:#fff;
  padding:10px 18px;
  border-radius:30px;
  text-decoration:none;
}
/* =========================
   BRAND STORY SECTION
========================= */

.bl-story-section{
    background:#f8fbfd;
    overflow:hidden;
}

.bl-story-tag{
    display:inline-block;
    background:#0b4f63;
    color:#fff;
    padding:10px 22px;
    border-radius:50px;
    font-size:14px;
    font-weight:600;
    margin-bottom:20px;
}

.bl-story-title{
    font-size:42px;
    font-weight:800;
    color:#073b4c;
    margin-bottom:15px;
}

.bl-story-subtitle{
    max-width:700px;
    margin:auto;
    color:#666;
    font-size:17px;
}

.bl-story-image{
    background:#fff;
    border-radius:25px;
    padding:40px;
    text-align:center;
    box-shadow:0 15px 40px rgba(0,0,0,0.08);
    transition:.4s;
}

.bl-story-image:hover{
    transform:translateY(-8px);
}

.bl-story-image img{
    max-width:100%;
    height:auto;
    transition:.4s;
}

.bl-story-image:hover img{
    transform:scale(1.05);
}

.bl-story-content h3{
    color:#073b4c;
    font-size:32px;
    font-weight:700;
    margin-bottom:20px;
}

.bl-story-content p{
    color:#555;
    line-height:1.9;
    font-size:16px;
    margin-bottom:15px;
}

/* Scroll Animation */

.reveal-left,
.reveal-right{
    opacity:0;
    transition:all 1s ease;
}

.reveal-left{
    transform:translateX(-80px);
}

.reveal-right{
    transform:translateX(80px);
}

.reveal-left.active,
.reveal-right.active{
    opacity:1;
    transform:translateX(0);
}

/* Responsive */

@media(max-width:991px){

    .bl-story-title{
        font-size:34px;
    }

    .bl-story-content{
        text-align:center;
    }

    .bl-story-content h3{
        font-size:28px;
    }
}

@media(max-width:576px){

    .bl-story-title{
        font-size:28px;
    }

    .bl-story-content h3{
        font-size:24px;
    }

    .bl-story-image{
        padding:25px;
    }
}

/* counter section */
/* Counter Section */

.counter-section{
    background:#f5f9fc;
}

.counter-subtitle{
    display:inline-block;
    color:#073B4C;
    font-size:27px;
    font-weight:700;
    letter-spacing:3px;
    text-transform:uppercase;
    margin-bottom:15px;
}


.counter-box{
    background:#fff;
    border-radius:20px;
    padding:20px 25px;
    text-align:center;
    transition:.4s;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
  
}

.counter-box:hover{
    transform:translateY(-10px);
    box-shadow:0 20px 40px rgba(0,0,0,.15);
}

.counter-icon{
    width:90px;
    height:90px;
    background:#073B4C;
    color:#fff;
    margin:auto;
    border-radius:50%;
    display:flex;
    justify-content:center;
    align-items:center;
    font-size:34px;
    margin-bottom:25px;
}

.counter{
    font-size:48px;
    color:#073b4c;
    font-weight:700;
}

.counter::after{
    content:"+";
    color:#073B4C;
}

.counter-box h5{
    margin-top:15px;
    font-size:20px;
    font-weight:600;
    color:#073B4C;
}

/* Responsive */

@media(max-width:991px){

.counter-title{
    font-size:34px;
}

.counter{
    font-size:40px;
}

}

@media(max-width:767px){

.counter-box{
    padding:30px 20px;
}

.counter-title{
    font-size:28px;
}

.counter{
    font-size:36px;
}

.counter-icon{
    width:75px;
    height:75px;
    font-size:28px;
}

}
/*==========================
 Brightlancer Facilities
==========================*/

.bl-facilities{
    background:#f7f8fb;
    overflow:hidden;
}

.bl-tag{
    display:inline-block;
    background:#073B4C;
    color:#fff;
    padding:8px 22px;
    border-radius:30px;
    font-size:14px;
    font-weight:600;
    letter-spacing:2px;
    margin-bottom:15px;
}

.bl-heading{
    color:#073B4C;
    font-size:42px;
    font-weight:700;
}

.bl-subtitle{
    max-width:700px;
    margin:auto;
    color:#666;
    margin-top:15px;
    font-size:17px;
}

.facility-card{

    background:#fff;
    border-radius:28px;
    padding:30px 35px;
    height:99%;
    position:relative;
    overflow:hidden;
    border-top: 5px solid #073B4C ;
    box-shadow:0 15px 35px rgba(0,0,0,.08);

    transition:.4s;

    opacity:0;
    transform:translateY(70px);

}

.facility-card.show{

    opacity:1;
    transform:translateY(0);

}



.facility-number{

    font-size:95px;
    font-weight:900;
    line-height:1;

    margin-bottom:35px;

    -webkit-text-fill-color:transparent;

}

.red{

    -webkit-text-stroke:2px #073B4C;
    text-shadow:10px 10px rgba(12, 61, 17, 0.18);

}

.blue{

   -webkit-text-stroke:2px #073B4C;
    text-shadow:10px 10px rgba(12, 61, 17, 0.18);

}

.facility-card h3{

    color:#073B4C;
    font-weight:700;
    font-size:34px;
    margin-bottom:20px;

}

.facility-card p{

    color:#666;
    font-size:20px;
    line-height:1.9;

}

/* Hover Line */





/* Responsive */

@media(max-width:991px){

.bl-heading{

    font-size:34px;

}

.facility-number{

    font-size:80px;

}

.facility-card h3{

    font-size:28px;

}

}

@media(max-width:767px){

.bl-heading{

    font-size:28px;

}

.facility-card{

    padding:30px 25px;

}

.facility-number{

    font-size:70px;

}

.facility-card h3{

    font-size:24px;

}

.facility-card p{

    font-size:17px;

}

}
/* garlley */

/*=========================
      Gallery Section
==========================*/

.gallery-section{
    background:#f5f5f5;
}

.gallery-heading{
    color:#073B4C;
    font-size:42px;
    font-weight:700;
    text-transform:uppercase;
    margin-bottom:50px;
}

.photo-card{
    position:relative;
    overflow:hidden;
    cursor:pointer;
    border-radius:10px;
}

.photo-card img{
    width:100%;
    height:220px;
    object-fit:cover;
    transition:.6s;
}
/* / Responsive */
/* Tablet */
@media (max-width:991px){

    .gallery-heading{
        font-size:34px;
    }

    .photo-card{
        border-radius:8px;
    }

    .photo-card img{
        height:180px;
    }    

}

/* Mobile */
@media (max-width:767px){

    .gallery-section{
        padding:40px 0;
    }

    .gallery-heading{
        font-size:28px;
        margin-bottom:30px;
    }

    .row.g-4{
        --bs-gutter-x:14px;
        --bs-gutter-y:14px;
    }

    .photo-card{
        border-radius:8px;
    }

    .photo-card img{
        height:150px;
    }

   }

/* Small Mobile */
@media (max-width:576px){

    .col-sm-6{
        width:50%;
    }

    .photo-card img{
        height:120px;
    }   

}
</style>

</head>
<body>
<?php
  include('header.php');
 ?>

    <!-- ================= HERO SECTION ================= -->

    <section id="home">
      <div class="home-content text-center">
        <h2>
          Enhance Your Future With

          <span>Brightlancer Technologies</span>
        </h2>

        <p>
         At Brightlancer, we provide practical training in Web Development, Machine Learning, Freelancing, 
         Amazon Virtual Assistance, YouTube Automation, IELTS Preparation, and other high-demand digital skills.
          Our mission is to help you gain real-world expertise and achieve professional success.
        </p>

        <div class="hero-btns">
          <a href="https://nsis.navttc.gov.pk/sign-in" class="home-btn"> Enroll Now </a>

          <a href="#courses" class="blue-btn"> Visit Courses </a>
        </div>
      </div>
    </section>

   <!-- Brand Story Section -->
<section class="bl-story-section py-5">
    <div class="container">

        <!-- Heading -->
        <div class="text-center mb-5">
            <span class="bl-story-tag">
                <i class="fas fa-book-open me-2"></i>Our Story
            </span>

            <h2 class="bl-story-title">
                How Brightlancer Started
            </h2>

            <p class="bl-story-subtitle">
                The journey behind our mission to empower youth through technology.
            </p>
        </div>

        <!-- Content Row -->
        <div class="row align-items-center g-5">

            <!-- Image -->
            <div class="col-lg-6">
                <div class="bl-story-image reveal-left">
                    <img src="assets/images/logoo-removebg-preview.png"
                        alt="Brightlancer Story"
                        class="img-fluid">
                </div>
            </div>

            <!-- Content -->
            <div class="col-lg-6">
                <div class="bl-story-content reveal-right">

                    <h3>Empowering Youth Through Digital Innovation</h3>

                    <p>
                        Brightlancer was founded with a vision to bridge the gap
                        between education and modern industry requirements.
                    </p>

                    <p>
                        We observed that many talented students and young
                        professionals lacked access to practical digital skills
                        needed to compete in today's global economy.
                    </p>

                    <p>
                        To solve this challenge, Brightlancer launched technology
                        training programs, software development services,
                        freelancing mentorship, and digital business solutions.
                    </p>

                    <p>
                        Today, Brightlancer continues to empower thousands of
                        learners, entrepreneurs, and organizations through
                        innovative technology education.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>

<!-- courses section  -->
 
    <!-- course card-- -->
<!-- ================= COURSES SECTION ================= -->
<section class="course-heading" id="courses">
    <h5>OUR COURSES</h5>
    <h2>Explore Professional Training Programs</h2>
    <p>
        Learn the most in-demand digital skills from industry experts and
        build a successful career with practical training.
    </p>
</section>
<section class="courses">
    <!-- SECTION HEADING -->


  <!-- CARD 1 -->
  <div class="course-card marketing">
    
    <div class="icon"><i class="fa-solid fa-robot"></i></div>

    <h2>AI</h2>

    <p>
      Learn Artificial Intelligence with smart tools, automation,
      chatbots, and modern AI technologies used worldwide.
    </p>

    <div class="tags">
      <span>ChatGPT</span>
      <span>Automation</span>
      <span>AI Tools</span>
    </div>

    <div class="bottom">
      <small>2 Months</small>
  <button onclick="window.location.href='AI.php'">
    Enroll Now →
</button>
    </div>
  </div>

  <!-- CARD 2 -->
  <div class="course-card design">
  

    <div class="icon"><i class="fa-solid fa-code"></i></div>

    <h2>Web Development</h2>

    <p>
      Build responsive websites using HTML, CSS, JavaScript,
      and modern frontend development skills.
    </p>

    <div class="tags">
      <span>HTML</span>
      <span>CSS</span>
      <span>JavaScript</span>
    </div>

    <div class="bottom">
      <small>3 Months</small>
     <button onclick="window.location.href='web.php'">
    Read More →
</button>
    </div>
  </div>

  <!-- CARD 3 -->
  <div class="course-card python">
   

    <div class="icon"><i class="fa-brands fa-python"></i></div>

    <h2>Python</h2>

    <p>
      Learn Python programming from basics to advanced projects,
      automation, and problem-solving.
    </p>

    <div class="tags">
      <span>Core Python</span>
      <span>Projects</span>
      <span>Automation</span>
    </div>

    <div class="bottom">
      <small>2.5 Months</small>
      <button onclick="window.location.href='Advanced-python.php'">
    Read More →
</button>
    </div>
  </div>

  <!-- CARD 4 -->
  <div class="course-card ecommerce">
   
    <div class="icon"><i class="fa-solid fa-cart-shopping"></i></div>

    <h2>E-Commerece</h2>

    <p>
      Start your online business and learn product selling,
      digital stores, and branding strategies.
    </p>

    <div class="tags">
      <span>Shopify</span>
      <span>Daraz</span>
      <span>Marketing</span>
    </div>

    <div class="bottom">
      <small>2 Months</small>
     <button onclick="window.location.href='E-Commerece.php'">
      Read More →
</button>
    </div>
  </div>

  <!-- CARD 5 -->
  <div class="course-card graphic">
 

    <div class="icon"><i class="fa-solid fa-pen-nib"></i></div>

    <h2>Graphic Design</h2>

    <p>
      Create logos, banners, thumbnails, and social media
      designs using professional tools.
    </p>

    <div class="tags">
      <span>Photoshop</span>
      <span>Canva</span>
      <span>Illustrator</span>
    </div>

    <div class="bottom">
      <small>2 Months</small>
     <button onclick="window.location.href='Graphics-desgging.php'">
      Read More →
</button>
    </div>
  </div>

  <!-- CARD 6 -->
  <div class="course-card amazon">
  

    <div class="icon"><i class="fa-brands fa-amazon"></i></div>

    <h2>Amazon</h2>

    <p>
      Learn product hunting, listing, sourcing, and account
      management for Amazon business growth.
    </p>

    <div class="tags">
      <span>FBA</span>
      <span>Hunting</span>
      <span>Listing</span>
    </div>

    <div class="bottom">
      <small>3 Months</small>
     <button onclick="window.location.href='Amazon.php'">
    Read More →
</button>
    </div>
  </div>
  <!-- CARD 7 -->
<div class="course-card freelancing">

  <div class="icon">
  <i class="fa-solid fa-briefcase"></i>
  </div>

  <h2>Freelancing</h2>

  <p>
    Learn Fiverr, Upwork, client hunting, proposal writing,
    and build your online earning career professionally.
  </p>

  <div class="tags">
    <span>Fiverr</span>
    <span>Upwork</span>
    <span>Clients</span>
  </div>

  <div class="bottom">
    <small>2 Months</small>
   <button onclick="window.location.href='Freelancing.php'">
      Read More →
</button>
  </div>
</div>

<!-- CARD 8 -->
<div class="course-card youtube">

  <div class="icon">
    <i class="fa-brands fa-youtube"></i>
  </div>

  <h2>YouTube Automation</h2>

  <p>
    Learn channel automation, video optimization,
    content strategy, and YouTube monetization techniques.
  </p>

  <div class="tags">
    <span>Automation</span>
    <span>SEO</span>
    <span>Monetization</span>
  </div>

  <div class="bottom">
    <small>2.5 Months</small>
  <button onclick="window.location.href='YouTube-Automation.php'">
    Read More →
</button>
  </div>
</div>

<!-- CARD 9 -->
<div class="course-card ielts">

  <div class="icon">
    <i class="fa-solid fa-language"></i>
  </div>

  <h2>English IELTS</h2>

  <p>
    Improve speaking, writing, listening, and reading
    skills to achieve high IELTS band scores.
  </p>

  <div class="tags">
    <span>Speaking</span>
    <span>Grammar</span>
    <span>IELTS</span>
  </div>

  <div class="bottom">
    <small>3 Months</small>
   <button onclick="window.location.href='English-itels.php'">
    Read More →
</button>
  </div>
</div>

<!-- CARD 10 -->
<div class="course-card machine">

  <div class="icon">
    <i class="fa-solid fa-brain"></i>
  </div>

  <h2>Machine Learning</h2>

  <p>
    Learn machine learning algorithms, data analysis,
    predictive models, and AI-powered applications.
  </p>

  <div class="tags">
    <span>ML</span>
    <span>Data Science</span>
    <span>AI Models</span>
  </div>

  <div class="bottom">
    <small>4 Months</small>
    <button onclick="window.location.href='Machine-Learning.php'">
   Read More →
</button>
  </div>
</div>

</section>
<!-- countersection -->
 
<!-- Counter Section -->
<section class="counter-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="counter-subtitle">OUR ACHIEVEMENTS</span>
           
        
        </div>

        <div class="row g-4">

            <!-- Counter 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>

                    <h2 class="counter" data-target="2500">0</h2>
                    <h5>Students Trained</h5>
                </div>
            </div>

            <!-- Counter 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>

                    <h2 class="counter" data-target="180">0</h2>
                    <h5>Projects Completed</h5>
                </div>
            </div>

            <!-- Counter 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-users"></i>
                    </div>

                    <h2 class="counter" data-target="85">0</h2>
                    <h5>Expert Trainers</h5>
                </div>
            </div>

            <!-- Counter 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-box">
                    <div class="counter-icon">
                        <i class="fas fa-award"></i>
                    </div>

                    <h2 class="counter" data-target="35">0</h2>
                    <h5>Training Programs</h5>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- Brightlancer Facilities -->
<section class="bl-facilities py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="bl-tag">Our Professional IT Training Facilities</span>
            <h2 class="bl-heading">Brightlancer Facilities</h2>
            <p class="bl-subtitle">
                We provide industry-standard learning facilities that help students
                build practical skills for successful careers.
            </p>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="facility-card">

                    <h1 class="facility-number red">01.</h1>

                    <h3>Practical IT Training</h3>

                    <p>
                        We provide hands-on practical training in networking,
                        CCTV surveillance, cyber security and web development.
                        Students work on live projects to gain real-world skills.
                    </p>

                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="facility-card">

                    <h1 class="facility-number blue">02.</h1>

                    <h3>Digital Marketing Training</h3>

                    <p>
                        Learn SEO, Social Media Marketing, Blogging,
                        Google Ads, Facebook Marketing and complete freelancing
                        strategies from industry professionals.
                    </p>

                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="facility-card">

                    <h1 class="facility-number red">03.</h1>

                    <h3>International Certification</h3>

                    <p>
                        Prepare for globally recognized IT certifications
                        with professional guidance, modern labs and
                        practical testing environments.
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>
<!-- why choose brightlancer  -->
 

<!-- new section  -->
 <section class="why-brightlancer py-5">
    <div class="container-fluid p-3">

        <div class="why-wrapper">

            <div class="row align-items-center g-5">

                <!-- LEFT SIDE -->
                <div class="col-lg-6">

                    <div class="left-content slide-left">

                        <h2>Why Choose BrightLancer?</h2>

                        <p>
                            BrightLancer provides trusted freelancers, quality
                            services, fast project delivery and professional
                            support — all in one platform to help businesses
                            grow and succeed.
                        </p>

                        <div class="why-btns">
                            <a href="https://nsis.navttc.gov.pk/sign-in" class="why-btn">Get Started</a>
                            <a href="services.php" class="why-btn">Explore Services</a>
                        </div>

                        <div class="stats-grid">

                            <div class="stat-card">
                                <h3>1200+</h3>
                                <span>Active Users</span>
                            </div>

                            <div class="stat-card">
                                <h3>350+</h3>
                                <span>Top Freelancers</span>
                            </div>

                            <div class="stat-card">
                                <h3>980+</h3>
                                <span>Projects Completed</span>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- RIGHT SIDE -->
                <div class="col-lg-6">

                    <div class="right-box slide-right">

                        <h2>Why BrightLancer?</h2>

                        <p class="top-text">
                            Quick results, clean communication and professional
                            process from start to finish.
                        </p>

                        <div class="feature-card">
                            <i class="fas fa-user-graduate"></i>

                            <div>
                                <h5>Expert Trainers</h5>
                                <p>Learn from experienced instructors.</p>
                            </div>
                        </div>

                        <div class="feature-card">
                            <i class="fas fa-laptop-code"></i>

                            <div>
                                <h5>Practical Projects</h5>
                                <p>Hands-on training with real projects.</p>
                            </div>
                        </div>

                        <div class="feature-card">
                            <i class="fas fa-award"></i>

                            <div>
                                <h5>Certificates</h5>
                                <p>Recognized course completion certificates.</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>
</section>


<!-- ================= TEAM SECTION ================= -->
<section class="team-section">
  <div class="container">

    <div class="section-title text-center mb-5">
      <h2>Meet Our Expert Team</h2>
      <p>Professional mentors helping students build successful careers.</p>
    </div>

    <div class="row g-4 justify-content-center">

      <!-- CARD 1 -->
    <div class="col-lg-4 col-md-6">
  <div class="team-card h-100">

          <div class="team-img">
            <img src="assets/images/haiderali.jpeg" alt="Haider Ali Zaigham">
          </div>

          <div class="team-content">
            <h4>Haider Ali Zaigham</h4>
            <span>Founder & Website Development Trainer</span>

            <p class="team-short">
              8+ Years Experience in Web Development, AI Solutions & Digital Marketing.
            </p>

            <div class="team-social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

            <a class="team-btn"
               data-bs-toggle="modal"
               data-bs-target="#haiderModal">
               View Profile
            </a>
          </div>

        </div>
      </div>


  

      <!-- CARD 2 -->
    <div class="col-lg-4 col-md-6">
  <div class="team-card h-100">
          <div class="team-img">
            <img src="assets/images/saeedullah.jpeg" alt="Saeed Ullah">
          </div>

          <div class="team-content">
            <h4>Saeed Ullah</h4>
            <span>English Language Trainer</span>

            <p class="team-short">
              M.Phil Education with 6 years teaching experience in English language.
            </p>

            <div class="team-social">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
            </div>

            <a class="team-btn"
               data-bs-toggle="modal"
               data-bs-target="#saeedModal">
               View Profile
            </a>
          </div>

        </div>
      </div>

      <!-- CARD 3 -->
   <div class="col-lg-4 col-md-6">
  <div class="team-card h-100">

          <div class="team-img">
            <img src="assets/images/Muhammdsultan.jpeg" alt="Sultan Munir">
          </div>

          <div class="team-content">
            <h4>Muhammad Sultan Munir</h4>
            <span>Graphic Design Trainer</span>

            <p class="team-short">
              7+ Years Experience in Graphic Designing, Freelancing & Training.
            </p>

            <div class="team-social">
              <a href="http://www.behance.net/arbabsultan"><i class="fa-solid fa-envelope"></i></a>
              <a href="inkedin.com/in/muhammadsultanmunir"><i class="fab fa-linkedin-in"></i></a>
              <a href="arbabsultan888@gmail.com"><i class="fab fa-google"></i></a>
            </div>

            <a class="team-btn"
               data-bs-toggle="modal"
               data-bs-target="#sultanModal">
               View Profile
            </a>
          </div>

        </div>
      </div>

      <!-- CARD 4 -->
   <div class="col-lg-4 col-md-6">
  <div class="team-card h-100">

          <div class="team-img">
            <img src="assets/images/Adeel.png" alt="Dr. Muhammad Adeel">
          </div>

          <div class="team-content">
            <h4>Dr. Muhammad Adeel</h4>
            <span>Assistant Professor in Management Sciences</span>

            <p class="team-short">
              PhD Scholar, Researcher & E-commerce Trainer with 15+ years experience.
            </p>

            <div class="team-social">
              <a href="mailto:m.adeelparacha@gmail.com"><i class="fa-solid fa-envelope"></i></a>
              <a href="https://scholar.google.com" target="_blank"><i class="fab fa-google"></i></a>
              <a href="https://www.linkedin.com/in/adeelparacha/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <a class="team-btn"
               data-bs-toggle="modal"
               data-bs-target="#adeelModal">
               View Profile
            </a>
          </div>

        </div>
      </div>
     
<!-- card-6 --- -->
<div class="col-lg-4 col-md-6">
  <div class="team-card h-100">

    <div class="team-img">
      <img src="assets/images/amirullahburki.jpeg" alt="Amirullah Barki">
    </div>

    <div class="team-content">
      <h4>Amirullah Barki</h4>

      <span>Senior AI & Software Engineer</span>

      <p class="team-short">
        Specialist in AI, Data Engineering, .NET, React JS,
        Python and Enterprise Software Development.
      </p>

      <div class="team-social">
        <a href="mailto:amirbarki785@gmail.com">
          <i class="fa-solid fa-envelope"></i>
        </a>

        <a href="tel:+923459840785">
          <i class="fa-solid fa-phone"></i>
        </a>
      </div>

      <a class="team-btn"
         data-bs-toggle="modal"
         data-bs-target="#amirModal">
         View Profile
      </a>

    </div>

  </div>
</div>
    </div>
  </div>
</section>
   
     



    <!-- model----- -->
    <div class="modal fade" id="haiderModal"  data-bs-backdrop="static"
     data-bs-keyboard="false" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Haider Ali Zaigham</h4>
        <button type="button" class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>Founder, Adorable Solution</h5>

        <p>
          Founder of Adorable Solution, a professional digital services company
          providing Website Development, Software Development, AI Solutions,
          Digital Marketing, Graphic Designing, and Creative Designing services.
        </p>

        <p>
          I have 8+ years of professional experience working with national and
          international clients, helping businesses build their digital presence
          through modern websites, software solutions, branding, and online
          marketing strategies.
        </p>

        <p>
          Along with this, I have worked as a Website Development Trainer with
          reputed programs and organizations including KPITB, UNDP, and NAVTTC.
        </p>

        <h6 class="mt-4">Profession</h6>

        <ul>
          <li>Founder, Adorable Solution</li>
          <li>Website Development Trainer</li>
        </ul>

        <h6 class="mt-4">Experience</h6>

        <ul>
          <li>8+ Years Professional Experience</li>
          <li>Website Development</li>
          <li>Software Development</li>
          <li>AI Solutions</li>
          <li>Digital Marketing</li>
          <li>Graphic Designing</li>
          <li>Training & Skill Development</li>
        </ul>

        <div class="social-links mt-4">
          <a href="https://www.facebook.com/share/1CrG9HPv25/" target="_blank">Facebook</a>
          <a href="https://www.linkedin.com/in/haider-ali-zagham" target="_blank">LinkedIn</a>
          <a href="https://www.instagram.com/haideralizaigham" target="_blank">Instagram</a>
        </div>

      </div>

    </div>
  </div>
</div>

<div class="modal fade" id="saeedModal" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Saeed Ullah</h4>
        <button type="button" class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>English Language Trainer</h5>

        <p>
          Mr. Saeed Ullah holds an M.Phil in Education from Gomal University
          and an Advanced Diploma in English Language from NUML Islamabad.
        </p>

        <p>
          He is an English Language Instructor at Expressive English Language
          Center with 6 years of teaching experience.
        </p>

        <h6 class="mt-4">Professional Experience</h6>

        <ul>
          <li>6 Years Teaching Experience</li>
          <li>English Language Instructor</li>
          <li>Spoken English Training</li>
          <li>English Grammar</li>
          <li>Vocabulary Development</li>
          <li>Writing Skills</li>
          <li>Communication Skills</li>
          <li>Lesson Planning & Classroom Management</li>
          <li>Student Assessment</li>
          <li>Educational Leadership Research</li>
        </ul>

        <p>
          Dedicated to helping learners develop confidence and proficiency in
          English for academic, professional, and personal success.
        </p>

      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="sultanModal"
     data-bs-backdrop="static"
     data-bs-keyboard="false"
     tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Muhammad Sultan Munir</h4>
        <button type="button" class="btn-close btn-close-white"
          data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>Graphic Design Trainer</h5>

        <p>
          Muhammad Sultan Munir is a Government Teacher, Graphic Designer,
          and Professional Trainer with 7 years of experience in online and
          offline education.
        </p>

        <h6 class="mt-4">Professional Experience</h6>

        <ul>
          <li>7 Years Teaching & Training Experience</li>
          <li>Government Teacher</li>
          <li>Graphic Designer</li>
          <li>Professional Trainer</li>
          <li>Graphic Design Trainer at Finskars</li>
          <li>International Freelancing Experience</li>
          <li>Fiverr Professional</li>
          <li>Upwork Professional</li>
          <li>LinkedIn Professional Network</li>
          <li>UNDP Trainer</li>
          <li>KPITB Trainer</li>
        </ul>

        <p>
          Passionate about helping students and professionals build
          industry-relevant graphic design and freelancing skills.
        </p>

      </div>

    </div>
  </div>
</div>
<!-- ADEEL MODAL -->
<div class="modal fade" id="adeelModal"   data-bs-backdrop="static"
     data-bs-keyboard="false" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Dr. Muhammad Adeel</h4>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
      </div>

      <div class="modal-body">

        <h5>Assistant Professor in Management Sciences</h5>

        <p>
          PhD in Management Sciences with over 15 years of experience in teaching,
          research, and academic leadership. Specialized in digital marketing,
          e-commerce, organizational behavior and entrepreneurial studies.
        </p>

        <h6>Experience Highlights</h6>
        <ul>
          <li>Lecturer since 2005</li>
          <li>Assistant Professor since 2016</li>
          <li>Research Supervisor since 2015</li>
          <li>NAVTTC Ecommerce Trainer (Bright Lancer Technologies)</li>
          <li>UNDP & KPITB Training Programs Resource Person</li>
        </ul>

        <h6>Education</h6>
        <ul>
          <li>Ph.D Management Sciences – Qurtuba University</li>
          <li>MS Management Sciences – Qurtuba University</li>
          <li>MBA (Finance) – Gomal University</li>
          <li>BBA – Gomal University</li>
        </ul>

        <h6>Contact</h6>
        <p>
           m.adeelparacha@gmail.com <br>
           Dera Ismail Khan, Pakistan
        </p>

      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="amirModal"  data-bs-backdrop="static"
     data-bs-keyboard="false" tabindex="-1">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title">Amirullah Barki</h4>

        <button type="button"
          class="btn-close btn-close-white"
          data-bs-dismiss="modal">
        </button>
      </div>

      <div class="modal-body">

        <h5>Senior AI & Software Engineer</h5>

        <p>
          Accomplished Software Developer with expertise in .NET Framework,
          ASP.NET MVC/Core, Node JS, React JS, PHP MVC, Python,
          Android Development, Xamarin, Data Engineering and AI Solutions.
        </p>

        <h6>Professional Experience</h6>

        <ul>
          <li>Senior Software Engineer — Emcentrix</li>
          <li>Senior Software Engineer — Inspark Intelligent Business Solution</li>
          <li>Senior Data Engineer — Delta Logic International</li>
          <li>Senior AI Developer — Al Farabii Tech Sol</li>
          <li>Senior Data & AI Engineer — SCKI International Tech Sol</li>
        </ul>

        <h6>Education</h6>

        <ul>
          <li>MS Computer Science — Qurtuba University</li>
          <li>BS Computer Science (Gold Medalist)</li>
        </ul>

        <h6>Technical Skills</h6>

        <ul>
          <li>.NET Framework</li>
          <li>ASP.NET MVC & Core</li>
          <li>Node JS</li>
          <li>React JS</li>
          <li>PHP MVC</li>
          <li>Python</li>
          <li>AI Applications Development</li>
          <li>Android Development</li>
          <li>Data Engineering</li>
        </ul>

        <div class="social-links mt-4">
          <a href="mailto:amirbarki785@gmail.com">
            Email
          </a>

          <a href="tel:03459840785">
            Contact
          </a>
        </div>

      </div>

    </div>
  </div>
</div>


<!-- how to apply  -->
 <!-- HOW TO APPLY SECTION -->
<section class="how-apply py-5">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-tag">BRIGHTLANCER PROCESS</span>
            <h2 class="section-title">How To Apply</h2>
            <p class="section-desc">
                Follow these simple steps to start your professional journey with Brightlancer.
            </p>
        </div>

        <div class="row g-4">

            <!-- Card 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="apply-card">
                    <div class="step-number">01</div>

                    <div class="icon-box">
                        <i class="fas fa-user-plus"></i>
                    </div>

                    <h4>Fill Registration Form</h4>

                    <p>
                        Click the Register button and complete your details.
                    </p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="apply-card">
                    <div class="step-number">02</div>

                    <div class="icon-box">
                        <i class="fas fa-building"></i>
                    </div>

                    <h4>Visit Training Center</h4>

                    <p>
                        Submit required documents and confirm your seat.
                    </p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-4 col-md-6 mx-md-auto">
                <div class="apply-card">
                    <div class="step-number">03</div>

                    <div class="icon-box">
                        <i class="fas fa-graduation-cap"></i>
                    </div>

                    <h4>Start Your Journey</h4>

                    <p>
                        Begin learning and become a professional Web Developer.
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- review section  -->
 

 <!-- review section  -->
  <section class="testimonial-section py-5">
    <div class="container">

        <div class="text-center mb-5">
            <h2 class="fw-bold">Student Success Stories & Testimonials</h2>
            <p class="fw-p">Read real feedback from our students about their learning experience and success after completing professional IT training courses at
Brightlancer Technologies Peshawar.</p>
        </div>

        <div class="swiper testimonialSwiper">

            <div class="swiper-wrapper">

                <!-- CARD 1 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>

                        <img src="assets/images/sufyan sadozai.png" class="student-img">

                        <h3>Muhmmad Sufyan Sadozai</h3>
                        <span>web Senior Student</span>

                        <div class="stars">
                            ★★★★★
                        </div>

                        <p>
                        .I am truly grateful for your commitment to teaching. Your supportive approach, valuable insights, and continuous motivation have inspired me to learn more and strive for excellence every day.</p>
                        
                    </div>
                </div>

               
 <!-- CARD 4 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>
                        <img src="assets/images/arshad.jpeg" class="student-img">
                        <h3>Muhmmad Arshad</h3>
                        <span>Web Senior Student</span>
                        <div class="stars">★★★★★</div>
                       <p>Your teaching style is inspiring and easy to follow. Every lesson is well-structured, engaging, and filled with valuable knowledge that has helped me improve both academically and personally.</p>
                    </div>
                </div>
                <!-- CARD 3 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>
                        <img src="assets/images/image2.png" class="student-img">
                        <h3>Ayesha Moin</h3>
                        <span>web Senior Student</span>
                        <div class="stars">★★★★★</div>
                        <p>Thank you for your exceptional teaching and mentorship. Your dedication & support  have true shape my learning journey. Thank you for sharing your knowledge and experience so generously.</p>
                    </div>
                </div>
 <!-- CARD 2 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>
                        <img src="assets/images/image2.png" class="student-img">
                        <h3>Sadia Khan</h3>
                        <span>Junior student</span>
                        <div class="stars">★★★★★</div>
                        <p>Your guidance and encouragement have made a significant impact on my growth. The way you explain complex concepts with clarity and patience has helped me build confidence and achieve my goals.</p>
                    </div>
                </div>
               
 <!-- CARD 7 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>
                        <img src="assets/images/image2.png" class="student-img">
                        <h3>Samreen Saddiqa</h3>
                        <span> web student</span>
                        <div class="stars">★★★★★</div>
                       <p>Thank you for always believing in your students. Your constructive feedback and continuous support have given me the confidence to overcome challenges and achieve success.</p>

                    </div>
                </div>
                 <!-- CARD 8 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>
                        <img src="assets/images/image2.png" class="student-img">
                        <h3>Dure Shahwar</h3>
                        <span>senior student</span>
                        <div class="stars">★★★★★</div>
                        <p>Your dedication to education goes beyond the classroom. The practical skills, discipline, and mindset you have taught me will remain valuable throughout my career.</p>
                    </div>
                </div>
                <!-- CARD 5 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>
                        <img src="assets/images/abdul malik.jpeg" class="student-img">
                        <h3>Abdul Malik</h3>
                        <span>E-commerce Student</span>
                        <div class="stars">★★★★★</div>
                        <p>Thank you for sharing your knowledge and experience so generously. Your dedication to helping students succeed has created a positive learning environment that makes every lesson engaging and meaningful.</p>
                    </div>
                </div>

                <!-- CARD 6 -->
                <div class="swiper-slide">
                    <div class="testimonial-card">
                        <div class="quote-corner">❞</div>
                        <img src="assets/images/ashraib.png" class="student-img">
                        <h3>Asharib Maavia</h3>
                        <span>AI Student</span>
                        <div class="stars">★★★★★</div>
                        <p>Learning under your guidance has been an incredible experience. Your patience, encouragement, and commitment to excellence have motivated me to reach my full potential.</p>
                    </div>
                </div>

               

               

            </div>

        </div>

    </div>
</section>


 <!-- our paractical classes  -->
  
<section class="practical-classes py-5">
    <div class="container text-center">

       

        <h2 class="section-title">Practical Classes</h2>

        <p class="section-desc">
            At Brightlancer, we believe in learning by doing. Our practical classes provide real-world experience, live projects, and industry-based assignments to help students build confidence and professional skills.
        </p>

        <div class="row g-4 mt-4">

            <div class="col-lg-4 col-md-6">
                <div class="practical-card">
                    <i class="fas fa-laptop-code"></i>
                    <h4>Live Coding Practice</h4>
                    <p>Work on real coding exercises and projects under expert guidance.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="practical-card">
                    <i class="fas fa-briefcase"></i>
                    <h4>Industry Projects</h4>
                    <p>Gain hands-on experience through practical assignments and client-based tasks.</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mx-md-auto">
                <div class="practical-card">
                    <i class="fas fa-certificate"></i>
                    <h4>Career Ready Skills</h4>
                    <p>Develop professional skills that prepare you for freelancing and jobs.</p>
                </div>
            </div>

        </div>

    </div>
</section>
 
 <!-- garlley  -->
  <section class="gallery-section py-5">
    <div class="container">

        <h2 class="gallery-heading text-center mb-5">Gallery</h2>

        <div class="row g-4">

               <!-- Card 1 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                    <img src="assets/images/garlley1.jpeg" alt="">
                    
                </div>

               
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                   <img src="assets/images/garlley2.jpg" alt="">
                   
                </div>

               
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                    <img src="assets/images/garlley3.JPG" alt="">
                   
                </div>

              
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                 <img src="assets/images/garlley4.jpeg" alt="">
                  
                </div>

              
            </div>

            <!-- More Cards -->
            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                  <img src="assets/images/garlley5.jpeg" alt="">
                   
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                   <img src="assets/images/garlly6.JPG" alt="">
                   
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                  <img src="assets/images/garlly7.jpg" alt="">
                    
                </div>
            </div>

            <div class="col-lg-3 col-md-4 col-6">
                <div class="photo-card">
                   <img src="assets/images/garlly8.jpg" alt="">
                  
                </div>
            </div>
             

        </div>

    </div>
</section>
<?php
   include('footer.php');
   ?> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

</body>
</html>
<script>

document.addEventListener("DOMContentLoaded",()=>{

const elements = document.querySelectorAll('.slide-left,.slide-right');

const observer = new IntersectionObserver((entries)=>{

entries.forEach(entry=>{

if(entry.isIntersecting){
entry.target.classList.add("show");
}

});

},{
threshold:0.25
});

elements.forEach(el=>{
observer.observe(el);
});

});

  //  review section java 
  
  

  //  review section java 
var swiper = new Swiper(".testimonialSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,

    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
    },

    breakpoints: {
        0: {
            slidesPerView: 1
        },
        768: {
            slidesPerView: 2
        },
        1200: {
            slidesPerView: 3
        }
    }
});
//    team section 
 const exploreBtn = document.getElementById("exploreBtn");
const moreTeam = document.getElementById("moreTeam");

if(exploreBtn && moreTeam){

  exploreBtn.addEventListener("click", () => {

    if(moreTeam.style.display === "grid"){

      moreTeam.style.display = "none";
      exploreBtn.innerText = "Explore More";

    }else{

      moreTeam.style.display = "grid";
      exploreBtn.innerText = "Show Less";

    }

  });

}

// new 
// TEAM CARD SCROLL ANIMATION

const teamCards = document.querySelectorAll(".team-card");

const teamObserver = new IntersectionObserver((entries)=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){
            entry.target.classList.add("show");
        }

    });

},{
    threshold:0.2
});

teamCards.forEach(card=>{
    teamObserver.observe(card);
});


// brand Selection

const reveals = document.querySelectorAll('.reveal-left, .reveal-right');

window.addEventListener('scroll', revealElements);
revealElements();

function revealElements() {

    reveals.forEach(item => {

        const windowHeight = window.innerHeight;
        const elementTop = item.getBoundingClientRect().top;

        if(elementTop < windowHeight - 100){
            item.classList.add('active');
        }
    });

}
// counter 
  const counters = document.querySelectorAll(".counter");
const counterSection = document.querySelector(".counter-section");

let started = false;

function startCounter() {

    counters.forEach(counter => {

        const target = parseInt(counter.getAttribute("data-target"));
        let count = 0;

        const speed = target / 150;

        function updateCounter() {

            count += speed;

            if (count < target) {

                counter.innerText = Math.ceil(count);
                requestAnimationFrame(updateCounter);

            } else {

                counter.innerText = target;

            }

        }

        updateCounter();

    });

}

window.addEventListener("scroll", () => {

    const sectionTop = counterSection.getBoundingClientRect().top;

    if (sectionTop < window.innerHeight - 100 && !started) {

        started = true;
        startCounter();

    }

});


// facilities section 
const cards = document.querySelectorAll(".facility-card");

const observer = new IntersectionObserver((entries)=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            entry.target.classList.add("show");

        }

    });

},{
    threshold:0.25
});

cards.forEach(card=>{

    observer.observe(card);

});
</script>

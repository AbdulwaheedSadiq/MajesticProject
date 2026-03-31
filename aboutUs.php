<!DOCTYPE html>
<html lang="zxx">


<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>
    
    <?php  include 'pages/headerLinks.php' ?>
     <?php
    $toursData = include 'helpers/toursDataHelper.php';

    $settings = $toursData['settings'] ?? [];
    ?>

</head>

<body>
        <!-- ==========header-section========== -->

        <?php  include 'pages/header.php' ?>  

        <!-- ==========header-section========== -->

     <section class="hero-section">
        <div class="hero-area bg_img" data-background="assets/images/about/hero-bg.jpg">
            <div class="container">
                <h1 class="title">about us</h1>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    about us
                </li>
            </ul>
        </div>
    </section>

 <section class="about-us-section course-details padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-us-thumb">
                        <div class="thumb1">
                            <img src="assets/images/bara/lakes/tanganyika2.jpg" alt="about">
                        </div>
                        <div class="thumb2">
                            <img src="assets/images/bara/lakes/tanganyika3.jpeg" alt="about">
                        </div>
                        <div class="thumb3">
                            <img src="assets/images/bara/lakes/lakeVictoria1.jpg" alt="about">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="section-header left-style mb-low mw-100 mt-down">
                        <h2 class="title">About Majestic</h2>
                        <span class="d-inline-block mx-auto shape-header"></span>
                        <p>At Majestic Experience, we don’t just arrange travel — we craft timeless journeys that awaken the senses and leave an indelible mark on the soul.
                        Born from a deep love for Tanzania’s untamed beauty and Zanzibar’s serene elegance, we exist to create more than 
                        vacations. We design transformative escapes — where every sunrise over the Serengeti feels like a private revelation, 
                        every spice-scented breeze in Zanzibar whispers ancient stories, and every encounter with the land and its people feels
                         intimate, respectful, and profoundly meaningful.</p>
                    </div>
                    <div class="about-swim-area ">
                          <div class="about-swim-item">
                            <h4 class="title">Our Mission</h4>
                            <p>At Majestic Experience, our mission is to deliver world-class, luxury travel experiences across Tanzania. 
                                We create unforgettable journeys that combine elegance, comfort, and authentic cultural encounters — treating 
                                every guest like royalty while ensuring personalized service and sustainable practices that honor both people 
                                and nature.</p>
                        </div>
                        <div class="about-swim-item">
                            <h4 class="title">Our Vision</h4>
                            <p>To become Africa’s leading luxury travel brand, renowned for redefining elegance and creating majestic
                                 experiences that inspire, connect, and endure.</p>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- ==========instructor-section========== -->
    <section class="instructor-section padding-top">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-md-12">
                    <div class="section-header left-style">
                        <h2 class="title">our best instructor</h2>
                        <span class="d-inline-block mx-auto shape-header"></span>
                        <p>We have staff to assist in all stages of your holiday, from travel advise & best prices to ground handling & support during your holiday.</p>
                    </div>
                </div>
                <!-- <div class="col-md-5 text-md-right discover-button">
                    <a href="instructors.html" class="custom-button">discover more</a>
                </div> -->
            </div>
            <div class="row mb-30-none justify-content-center">
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="assets/images/client/client08.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">Ruddra Mesud</a>
                            </h4>
                            <span class="d-block">Junior Instructor</span>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="assets/images/client/client11.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">Ridoy Rajoan</a>
                            </h4>
                            <span class="d-block">Race Guide</span>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-10">
                    <div class="instructor-item instructor-item-two">
                        <div class="c-thumb">
                            <a href="instructor-profile.html">
                                <img src="assets/images/client/client10.jpg" alt="instructor">
                            </a>
                        </div>
                        <div class="instructor-content">
                            <h4 class="sub-title">
                                <a href="instructor-profile.html">Panna Rahman</a>
                            </h4>
                            <span class="d-block">Senior Instructor</span>
                            <ul class="social">
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#0">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========instructor-section========== -->

    <!-- ==========client-section========== -->
   <section class="client-section padding-bottom bg-light py-5">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-md-7">
                <div class="section-header left-style">
                    <h2 class="title mb-2">What Our Travelers Say</h2>
                    <span class="d-inline-block shape-header mb-2"></span>
                    <p class="text-muted mb-0">
                        Real stories from guests who explored Tanzania and Zanzibar with Majestic Company.
                    </p>
                </div>
            </div>
            <div class="col-md-5 text-md-right mt-3 mt-md-0">
                <a href="#contact" class="btn btn-primary custom-button px-4 py-2">
                    Share Your Journey
                </a>
            </div>
        </div>

        <!-- Auto-sliding carousel – no arrows -->
        <div id="clientCarousel" class="carousel slide" data-ride="carousel" data-interval="5500" data-pause="hover">
            
            <!-- Indicators (dots) -->
            <ol class="carousel-indicators">
                <li data-target="#clientCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#clientCarousel" data-slide-to="1"></li>
            </ol>

            <div class="carousel-inner">
                <!-- Group 1 -->
                <div class="carousel-item active">
                    <div class="row mx-0">
                        <!-- Card 1 -->
                        <div class="col-12 col-sm-6 col-lg-4 px-2 mb-4">
                            <div class="client-card bg-white shadow-sm rounded p-3 h-100">
                                <div class="text-center mb-3">
                                    <div class="avatar mx-auto" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 3px solid #e9ecef;">
                                        <img src="assets/images/client/client04.jpg" alt="Client" class="img-fluid">
                                    </div>
                                </div>
                                <blockquote class="blockquote text-center mb-0">
                                    <p class="font-italic mb-2" style="font-size: 0.95rem; line-height: 1.45; color: #444;">
                                        "Serengeti was breathtaking! Guide spotted Big Five fast. Zanzibar was perfect end. Flawless trip!"
                                    </p>
                                    <footer class="blockquote-footer mt-2 mb-0" style="font-size: 0.85rem;">
                                        Michael<br>
                                        <small class="text-muted">UK • Couple</small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="col-12 col-sm-6 col-lg-4 px-2 mb-4">
                            <div class="client-card bg-white shadow-sm rounded p-3 h-100">
                                <div class="text-center mb-3">
                                    <div class="avatar mx-auto" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 3px solid #e9ecef;">
                                        <img src="assets/images/client/client07.png" alt="Client" class="img-fluid">
                                    </div>
                                </div>
                                <blockquote class="blockquote text-center mb-0">
                                    <p class="font-italic mb-2" style="font-size: 0.95rem; line-height: 1.45; color: #444;">
                                        "Kids loved Ngorongoro & balloon ride. Safe, fun, perfectly organized family safari."
                                    </p>
                                    <footer class="blockquote-footer mt-2 mb-0" style="font-size: 0.85rem;">
                                        Ryan & Family<br>
                                        <small class="text-muted">Australia</small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="col-12 col-sm-6 col-lg-4 px-2 mb-4">
                            <div class="client-card bg-white shadow-sm rounded p-3 h-100">
                                <div class="text-center mb-3">
                                    <div class="avatar mx-auto" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 3px solid #e9ecef;">
                                        <img src="assets/images/client/client08.jpg" alt="Client" class="img-fluid">
                                    </div>
                                </div>
                                <blockquote class="blockquote text-center mb-0">
                                    <p class="font-italic mb-2" style="font-size: 0.95rem; line-height: 1.45; color: #444;">
                                        "Solo trip amazing. Serengeti sunrises + Zanzibar spices. Warm & professional team."
                                    </p>
                                    <footer class="blockquote-footer mt-2 mb-0" style="font-size: 0.85rem;">
                                        James Kariuki<br>
                                        <small class="text-muted">Kenya • Solo</small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Group 2 -->
                <div class="carousel-item">
                    <div class="row mx-0">
                        <!-- Card 4 -->
                        <div class="col-12 col-sm-6 col-lg-4 px-2 mb-4">
                            <div class="client-card bg-white shadow-sm rounded p-3 h-100">
                                <div class="text-center mb-3">
                                    <div class="avatar mx-auto" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 3px solid #e9ecef;">
                                        <img src="assets/images/client/client06.jpg" alt="Client" class="img-fluid">
                                    </div>
                                </div>
                                <blockquote class="blockquote text-center mb-0">
                                    <p class="font-italic mb-2" style="font-size: 0.95rem; line-height: 1.45; color: #444;">
                                        "Luxury camp + Zanzibar beaches. Incredible wildlife & caring service. We'll return!"
                                    </p>
                                    <footer class="blockquote-footer mt-2 mb-0" style="font-size: 0.85rem;">
                                        James Rossi<br>
                                        <small class="text-muted">Italy • Luxury</small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Card 5 -->
                        <div class="col-12 col-sm-6 col-lg-4 px-2 mb-4">
                            <div class="client-card bg-white shadow-sm rounded p-3 h-100">
                                <div class="text-center mb-3">
                                    <div class="avatar mx-auto" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 3px solid #e9ecef;">
                                        <img src="assets/images/client/client05.jpg" alt="Client" class="img-fluid">
                                    </div>
                                </div>
                                <blockquote class="blockquote text-center mb-0">
                                    <p class="font-italic mb-2" style="font-size: 0.95rem; line-height: 1.45; color: #444;">
                                        "Dream honeymoon! Private drives & romantic dinners. Majestic thought of everything."
                                    </p>
                                    <footer class="blockquote-footer mt-2 mb-0" style="font-size: 0.85rem;">
                                         Raj<br>
                                        <small class="text-muted">India • Honeymoon</small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>

                        <!-- Card 6 -->
                        <div class="col-12 col-sm-6 col-lg-4 px-2 mb-4">
                            <div class="client-card bg-white shadow-sm rounded p-3 h-100">
                                <div class="text-center mb-3">
                                    <div class="avatar mx-auto" style="width: 70px; height: 70px; border-radius: 50%; overflow: hidden; border: 3px solid #e9ecef;">
                                        <img src="assets/images/client/client09.jpg" alt="Client" class="img-fluid">
                                    </div>
                                </div>
                                <blockquote class="blockquote text-center mb-0">
                                    <p class="font-italic mb-2" style="font-size: 0.95rem; line-height: 1.45; color: #444;">
                                        "Group trip fantastic – cheetahs to Stone Town. Great value & perfect organization."
                                    </p>
                                    <footer class="blockquote-footer mt-2 mb-0" style="font-size: 0.85rem;">
                                        David & Friends<br>
                                        <small class="text-muted">USA • Group</small>
                                    </footer>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- ==========client-section========== -->

    <!-- ==========footer-section========== -->
   <?php  include 'pages/footer.php' ?>
    <!-- ==========footer-section========== -->


    <!-- ==========footer-Links & Scripts ========== -->
   <?php  include 'pages/footerLinks.php' ?>
    <!-- ==========footer-Links========== -->
</body>


<!-- index.html  22 Nov 2019 04:16:40 GMT -->
</html>
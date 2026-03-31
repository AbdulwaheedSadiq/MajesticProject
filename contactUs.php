<!DOCTYPE html>
<html lang="zxx">


<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>
    
<?php  include 'pages/headerLinks.php' ?>
    <?php
    $toursData = include 'helpers/toursDataHelper.php';

    $settings = $toursData['settings'] ?? [];
    ?>

<style>
    .a-social {
    display: flex;
    background: #fff;
    height: 45px;
    width: 45px;
    margin: 0 15px;
    border-radius: 8px;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 6px 6px 10px -1px rgba(0,124,196,0.15),
                -6px -6px 10px -1px rgba(255,255,255,0.7);
                border: 1px solid rgba(0, 124, 196, 0);
    transition: 0.5s;
    }

    .a-social i {
    font-size: 22px;
    color: #777;
    transition: 0.5s;
    }

    /* ✅ FIXED hover */
    .a-social:hover {
    box-shadow: inset 4px 4px 6px rgba(0,0,0,0.2),
                inset -4px -4px 6px rgba(255,255,255,0.7);
    transform: translateY(2px);
    }

    .a-social:hover i {
    transform: scale(0.9);
    }

    /* Brand colors */
    .a-social:hover .fa-facebook { color: #3b5998; }
    .a-social:hover .fa-instagram { color: #f14843; }
    .a-social:hover .fa-youtube { color: #ff0000; }
    .a-social:hover .fa-whatsapp { color: #25d366; }
</style>


</head>

<body>
        <!-- ==========header-section========== -->

        <?php  include 'pages/header.php' ?>  

        <!-- ==========header-section========== -->

  <section class="hero-section">
        <div class="hero-area bg_img" data-background="assets/images/about/hero-bg.jpg">
            <div class="container">
                <h1 class="title">contact us</h1>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    contact
                </li>
            </ul>
        </div>
    </section>


  <!-- ==========Vector-Maps Section========== -->
    <section class="vector-maps-section padding-bottom padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div id="vmap">
                        <div class="position-1">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">Gerd Muller</h6>
                                <p class="area">From: Argentina</p>
                            </div>
                        </div>
                        <div class="position-2">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">P Pique</h6>
                                <p class="area">From: Netherland</p>
                            </div>
                        </div>
                        <div class="position-3">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">Marcelo Viera</h6>
                                <p class="area">From: Spain</p>
                            </div>
                        </div>
                        <div class="position-4">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">Zabaleta</h6>
                                <p class="area">From: Brazil</p>
                            </div>
                        </div>
                        <div class="position-5">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">Mesud</h6>
                                <p class="area">From: Africa</p>
                            </div>
                        </div>
                        <div class="position-6">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">Mesud</h6>
                                <p class="area">From: Africa</p>
                            </div>
                        </div>
                        <div class="position-7">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">Diego Costa</h6>
                                <p class="area">From: Italy</p>
                            </div>
                        </div>
                        <div class="position-8">
                            <span class="dot"></span>
                            <div class="details">
                                <h6 class="name">Rosario</h6>
                                <p class="area">From: Argentina</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="tab contact-tab">
                        <ul class="tab-menu">
                            <li>Tanzania Bara</li>
                            <li>Zanzibar</li>
                            <!-- <li>georgia(ga)</li> -->
                        </ul>
                        <div class="tab-area">
                            <div class="tab-item">
                                <div class="alaska">
                                    <p>We are committed to providing exceptional service and creating tailor-made travel experiences across Tanzania and Zanzibar.  
                                        Whether you have questions about our tours, want to customize your itinerary, 
                                        or simply need more information, our friendly team is here to help.</p>
                                    <div class="address-area">
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-placeholder"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Address</h4>
                                                <ul>
                                                    <li>Dar es salaam,</li>
                                                    <li>Ilala 07  - 1230</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-paper-plane"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Email Address</h4>
                                                <ul>
                                                    <li>
                                                        <a href="Mailto:mesud@gmail.com">mesud@gmail.com</a>
                                                    </li>
                                                    <li>
                                                        <a href="Mailto:mesud@gmail.com">mesud@gmail.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">phone number</h4>
                                                <ul>
                                                    <li>
                                                        <a href="Tel:+255 717 725 454">+255 717 725 454</a>
                                                    </li>
                                                    <li>
                                                        <a href="Tel:+255 717 725 454">+255 717 725 454</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-clock"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Opening Hours</h4>
                                                <ul>
                                                    <li>
                                                        Monday to Saturday
                                                    </li>
                                                    <li>
                                                        10: 00 am to 06: 00 pm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="alaska">
                                    <p>Roslacus mi, morbi rutrum facilisis interdum purus mattis sit. Quis malesuada
                                    mauris convallis enim eu semper, dolor a amet massa sociis. Ipsum id tortor
                                    viverra donec a, non et, vestibulum varius. Velit donec amet amet a npharetra.
                                    In a augue, integer volutpat in turpis amet mus nisl posuere pede necessitati
                                    </p>
                                    <div class="address-area">
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-placeholder"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Address</h4>
                                                <ul>
                                                    <li>Mji Mkongwe, AD /589</li>
                                                    <li>Mizingani 08  - 1230</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-paper-plane"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Email Address</h4>
                                                <ul>
                                                    <li>
                                                        <a href="Mailto:mesud@gmail.com">mesud@gmail.com</a>
                                                    </li>
                                                    <li>
                                                        <a href="Mailto:mesud@gmail.com">mesud@gmail.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">phone number</h4>
                                               <ul>
                                                    <li>
                                                        <a href="Tel:+255 717 725 454">+255 717 725 454</a>
                                                    </li>
                                                    <li>
                                                        <a href="Tel:+255 717 725 454">+255 717 725 454</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-clock"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Opening Hours</h4>
                                                <ul>
                                                    <li>
                                                        Sunday to Friday
                                                    </li>
                                                    <li>
                                                        10: 00 am to 06: 00 pm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                              <!-- Social Media Icons - Using your exact style -->
        <div style="display:flex; justify-content:center; margin-top:25px; gap:20px">

            <a href="#" class="a-social">
                <i class="fab fa-facebook"></i>
            </a>

            <!-- <a href="#" class="a-social">
                <i class="fab fa-linkedin"></i>
            </a> -->

            <a href="#" class="a-social">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="#" class="a-social">
                <i class="fab fa-youtube"></i>
            </a>

        </div>
                            <!-- <div class="tab-item">
                                <div class="alaska">
                                    <p>Roslacus mi, morbi rutrum facilisis interdum purus mattis sit. Quis malesuada
                                    mauris convallis enim eu semper, dolor a amet massa sociis. Ipsum id tortor
                                    viverra donec a, non et, vestibulum varius. Velit donec amet amet a npharetra.
                                    In a augue, integer volutpat in turpis amet mus nisl posuere pede necessitati
                                    </p>
                                    <div class="address-area">
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-placeholder"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Address</h4>
                                                <ul>
                                                    <li>Georgia, GA /589</li>
                                                    <li>Sector 07 Dhaka - 1230</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-paper-plane"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Email Address</h4>
                                                <ul>
                                                    <li>
                                                        <a href="Mailto:diveon@gmail.com">diveon@gmail.com</a>
                                                    </li>
                                                    <li>
                                                        <a href="Mailto:demodeo@gmail.com">demodeo@gmail.com</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-phone-call"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">phone number</h4>
                                                <ul>
                                                    <li>
                                                        <a href="Tel:777788889999">7777-8888-9999</a>
                                                    </li>
                                                    <li>
                                                        <a href="Tel:888833336666">8888-3333-6666</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="address-item">
                                            <div class="icon">
                                                <i class="flaticon-clock"></i>
                                            </div>
                                            <div class="content">
                                                <h4 class="title">Opening Hours</h4>
                                                <ul>
                                                    <li>
                                                        Sunday to Friday
                                                    </li>
                                                    <li>
                                                        10: 00 am to 06: 00 pm
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Vector-Maps Section========== -->

    <!-- ==========Contact-Section========== -->
    <section class="contact-section">
        <div class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-lg-6 p-0">
                    <div class="w-100 h-100 overview-video bg_img" style="background-color:#000000;"
                        data-background="assets/images/bara/lakes/lakeVictoria1.jpg">
                        <!-- <a href="https://www.youtube.com/embed/GT6-H4BRyqQ" class="video"
                            data-rel="lightcase:myCollection">
                            <i class="flaticon-play-button"></i>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-6 p-0">
                    <div class="w-100 h-100 overview-event bg-ash padding-bottom padding-top">
                        <div class="content">
                            <div class="section-header left-style mw-100 mb-low">
                                <h2 class="title">hello with us</h2>
                                <span class="d-inline-block mx-auto shape-header"></span>
                                <p>We’d love to hear from you and help plan your perfect Tanzania adventure </p>
                            </div>
                            <form class="contact-form" id="contact_form_submit">
                                <div class="form-group">
                                    <input type="text" placeholder="Name" id="name" name="name">
                                </div>
                                <div class="form-group">
                                    <input type="text" placeholder="Email" id="email" name="email">
                                </div>
                                <!-- <div class="form-group w-100">
                                    <select class="select-bar" name="kisu" id="select">
                                        <option value="">-Select Subject-</option>
                                        <option value="s2">-Competetion-</option>
                                        <option value="s3">-Swim Course-</option>
                                        <option value="s4">-Want to be a Swimer-</option>
                                        <option value="s5">-Kids Swiming-</option>
                                        <option value="s6">-Buy Something-</option>
                                    </select>
                                </div> -->
                                <div class="form-group w-100">
                                    <textarea id="message"  placeholder="Type Message"></textarea>
                                </div>
                                <div class="form-group w-100">
                                    <input type="submit" value="Send Message">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Contact-Section========== -->


    <!-- ==========footer-section========== -->
   <?php  include 'pages/footer.php' ?>
    <!-- ==========footer-section========== -->


    <!-- ==========footer-Links & Scripts ========== -->
   <?php  include 'pages/footerLinks.php' ?>
    <!-- ==========footer-Links========== -->


</body>


<!-- index.html  22 Nov 2019 04:16:40 GMT -->
</html>
<!DOCTYPE html>
<html lang="zxx">


<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>
    
<?php  include 'pages/headerLinks.php' ?>

    <?php
    $toursData = include 'helpers/toursDataHelper.php';

    $id = (int)($_GET['id'] ?? 0);
    $cat = $_GET['cat'] ?? 'sea-tours';
   $pageName = urldecode($_GET['pageName'] ?? '');  // Decode back to normal string

    // Validate category exists
    if (!isset($toursData[$cat]) || !is_array($toursData[$cat])) {
        http_response_code(404);
        echo "<h1>Category not found</h1>";
        exit;
    }

    // Get only the tours from the requested category
    $categoryToursData = $toursData[$cat];


    // Find the tour across ALL categories
    $tour = null;
    foreach ($categoryToursData as $t) {

            if ($t['id'] === $id) {
                $tour = $t;
                break;
            }
    }

    if (!$tour) {
        http_response_code(404);
        echo "<h1>Tour not found</h1>";
        exit;
    }
    ?>


    


</head>

<body>
        <!-- ==========header-section========== -->

        <?php  include 'pages/header.php' ?>  

        <!-- ==========header-section========== -->

  <section class="hero-section">
        <div class="hero-area bg_img" data-background="assets/images/about/hero-bg.jpg">
            <div class="container">
                <h1 class="title"><?= $tour['title'] ?></h1>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    <a href="seaTours"><?= $pageName ?></a>
                </li>
                <li>
                    <?= $tour['title'] ?>
                </li>
            </ul>
        </div>
    </section>

<?php  
/* echo "<pre>";
print_r($tours);
echo "</pre>";
 */?> 

<!-- ==========about-us-section========== -->
    <section class="about-us-section padding-top padding-bottom">
        <div class="container">
            <div class="row flex-wrap-reverse">
                <div class="col-lg-7">
                    <div class="section-header left-style mb-low mw-100 mt-down">
                        <h2 class="title"><?= $tour['title'] ?></h2>
                        <span class="d-inline-block mx-auto shape-header"></span>
                        <p> <?= nl2br($tour['description']) ?> </p>
                    </div>
                    
                </div>
                <div class="col-lg-5">
                    <div class="about-us-thumb">
                        <div class="thumb1 wow slideInUp">
                            <img src="<?= $tour['image'] ?>" alt="tour">
                        </div>
                        <div class="thumb2 wow bounceInRight" data-wow-delay=".5s">
                            <img src="<?= $tour['image1'] ?>" alt="tour">
                        </div>
                        <div class="thumb3 wow zoomIn" data-wow-delay="1s">
                            <img src="<?= $tour['image2'] ?>" alt="tour">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========about-us-section========== -->


     <!-- ==========booking-section========== -->
     <?php  include 'pages/booking.php' ?>  
    <!-- ==========booking-section========== -->

    <!-- ==========footer-section========== -->
   <?php  include 'pages/footer.php' ?>
    <!-- ==========footer-section========== -->


    <!-- ==========footer-Links & Scripts ========== -->
   <?php  include 'pages/footerLinks.php' ?>
    <!-- ==========footer-Links========== -->


</body>


<!-- index.html  22 Nov 2019 04:16:40 GMT -->
</html>
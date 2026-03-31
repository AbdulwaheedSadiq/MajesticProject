<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="zxx">


<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>
    
<?php  include 'pages/headerLinks.php' ?>

    <?php
    $toursData = include 'helpers/toursDataHelper.php';

    $tours = $toursData['lakes'] ?? [];
    ?>

    
</head>

<body>
        <!-- ==========header-section========== -->

        <?php  include 'pages/header.php' ?>  

        <!-- ==========header-section========== -->

  <section class="hero-section">
        <div class="hero-area bg_img" data-background="assets/images/about/hero-bg.jpg">
            <div class="container">
                <h1 class="title">Mountains Safaris</h1>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    Mountains Safaris
                </li>
            </ul>
        </div>
    </section>

<?php  
/* echo "<pre>";
print_r($tours);
echo "</pre>";
 */?> 

        <!-- ==========course-section========== -->
    <section class="course-section padding-top padding-bottom">
        <div class="container">
            <div class="row justify-content-center mb-30-none">
                <?php foreach ($tours as $tour): ?>
                    <div class="col-md-6 col-sm-10 col-lg-4">
                        <div class="course-item">
                            <div class="c-thumb course-thumb">
                                <a href="toursDetails.php?id=<?= $tour['id'] ?>&pageName=<?= urlencode('Lakes Safaris')?>&cat=lakes ">
                                    <img src="<?= $tour['image'] ?>" alt="tour">
                                </a>
                                <div class="price-tag">
                                    <h3 class="price"><?= $tour['price'] ?></h3>
                                    <span class="time"><?= $tour['duration'] ?></span>
                                </div>
                            </div>
                            <div class="course-content">
                                <h4 class="title">
                                    <a href="seaTours.php?id=<?= $tour['id'] ?>">
                                        <?= $tour['title'] ?>
                                    </a>
                                </h4>
                                <p><?= substr($tour['description'], 0, 100) ?>...</p>
                                <a href="toursDetails.php?id=<?= $tour['id'] ?>&pageName=<?= urlencode('Lakes Safaris')?>&cat=lakes ">Read More</a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- ==========course-section========== -->


    <!-- ==========footer-section========== -->
   <?php  include 'pages/footer.php' ?>
    <!-- ==========footer-section========== -->


    <!-- ==========footer-Links & Scripts ========== -->
   <?php  include 'pages/footerLinks.php' ?>
    <!-- ==========footer-Links========== -->


</body>


<!-- index.html  22 Nov 2019 04:16:40 GMT -->
</html>
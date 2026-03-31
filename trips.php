<!DOCTYPE html>
<html lang="zxx">


<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>
    
<?php  include 'pages/headerLinks.php' ?>

    <?php
    $toursData = include 'helpers/toursDataHelper.php';

    $trips = $toursData['trips'] ?? [];

    $perPage = 6; // number of cards per page
    $totalTours = count($trips);
    $totalPages = ceil($totalTours / $perPage);

    // current page (default = 1)
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

    // prevent invalid pages
    if ($page < 1) $page = 1;
    if ($page > $totalPages) $page = $totalPages;

    // calculate slice
    $start = ($page - 1) * $perPage;
    $paginatedTours = array_slice($trips, $start, $perPage);

    function e($value) {
         return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
    }

    
    ?>

    <style>
     
        .tour-cards {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            justify-content: center;
        }

        .parent {
            height: 380px;
            width: 280px;
            perspective: 1000px;
        }

        .card {
            height: 100%;
            width: 100%;
            border-radius: 12px;
            background-position: center;
            background-size: cover;
            transform-style: preserve-3d;
            transition: all 0.5s ease-in-out;
            position: relative;
        }

        .card:hover {
            background-position: 80% 20%;
            transform: rotate3d(0.5, 1, 0, 15deg);
        }

        .content-box {
            position: absolute;
            bottom: 0;
            width: 100%;
            background: rgba(255, 255, 255, 0.85);
            border-radius: 0 0 12px 12px;
            padding: 20px;
            color: #fff;
            transform: translateZ(40px);
        }

        .card-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .card-content {
            font-size: 13px;
            color:rgb(0, 0, 0);
        }

        .see-more {
            display: inline-block;
            margin-top: 10px;
            font-size: 12px;
            font-weight: bold;
            color:rgb(4, 4, 4);
            text-decoration: none;
        }

        .see-more:hover {
            text-decoration: underline;
            color: #ffd800;
        }

        .date-box {
            position: absolute;
            top: 15px;
            right: 15px;
            /* background: #ffd800; */
            border-radius: 10px;
            padding: 8px 10px;
            color: #fff;
            text-align: center;
            transform: translateZ(50px);
        }

        .date-box .month {
            font-size: 11px;
            display: block;
        }

        .date-box .date {
            font-size: 14px;
            font-weight: bold;
        }

        .pagination a {
            margin: 5px;
            padding: 8px 14px;
            border-radius: 6px;
            text-decoration: none;
            display: inline-block;
        }

        .pagination .btn-warning {
            background: #ffd800;
            color: #fff;
        }

        .pagination .btn-light {
            background: #eee;
            color: #333;
        }

        .pagination .btn-dark {
            background: #333;
            color: #fff;
        }

        .blog-pagination li a {
        /* display: inline-block;
        padding: 8px 12px; */
        /* border-radius: 6px; */
        /* background: #eee;
        color: #333;
        text-decoration: none; */
        transition: 0.3s;

            width: 45px;
            height: 45px;
            text-align: center;
            color: #777777;
            font-weight: 600;
            border: 1px solid #e5e5e5;
            line-height: 45px;
    }

.blog-pagination li a:hover {
    background: #ffd800;
    color: #fff;
}

.blog-pagination li a.active {
    background: #ffd800;
    color: #fff;
    font-weight: bold;
}

    </style>

    
</head>

<body>
        <!-- ==========header-section========== -->

        <?php  include 'pages/header.php' ?>  

        <!-- ==========header-section========== -->

  <section class="hero-section">
        <div class="hero-area bg_img" data-background="assets/images/about/hero-bg.jpg">
            <div class="container">
                <h1 class="title">Short Trips</h1>
            </div>
        </div>
        <div class="container">
            <ul class="breadcrumb">
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    Short Trips
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
    <div class="container  tour-cards" style="margin-top: 10px;">

    <?php foreach ($paginatedTours as $tour): 
        $title = e($tour['title']);
        $image = e($tour['image']);
        $price = e($tour['price']);
        $duration = e($tour['duration']);

        $words = explode(' ', strip_tags($tour['description']));
        $shortDesc = implode(' ', array_slice($words, 0, 20));

        $detailsUrl = "#";
    ?>

        <div class="parent">
            <div class="card" style="background-image: url('<?= $image ?>');">

                <div class="content-box">
                    <h3 class="card-title"><?= $title ?></h3>

                    <p class="card-content">
                        <?= $shortDesc ?>...
                    </p>

                    <a href="<?= $detailsUrl ?>" class="see-more">
                        View Details
                    </a>
                </div>

                <div class="date-box">
                    <span class="month"><?= $duration ?></span>
                    <span class="date"><?= $price ?></span>
                </div>

            </div>
        </div>

    <?php endforeach; ?>

    </div>

    <ul class="blog-pagination" style="justify-content: center; display: flex; gap: 8px; list-style: none; padding: 0; margin-top: 30px;">

    <!-- Previous arrow (always shown) -->
    <li>
        <a href="?page=<?= max(1, $page - 1) ?>"><i class="fas fa-angle-left"></i></a>
    </li>

    <!-- Page numbers -->
    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
        <li>
            <a href="?page=<?= $i ?>" class="<?= ($i == $page) ? 'active' : '' ?>">
                <?= $i ?>
            </a>
        </li>
    <?php endfor; ?>

    <!-- Next arrow (always shown) -->
    <li>
        <a href="?page=<?= min($totalPages, $page + 1) ?>"><i class="fas fa-angle-right"></i></a>
    </li>

</ul>


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
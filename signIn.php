<!DOCTYPE html>
<html lang="zxx">


<!-- index.html  22 Nov 2019 04:12:25 GMT -->
<head>
    
<?php  include 'pages/headerLinks.php' ?>

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



      <!-- ==========privacy-section========== -->
    <section class="account-section padding-top padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="sign-in-form-area">
                        <h3 class="title">Welcome to Majestic ! Please login</h3>
                        <form class="sign-in-form">
                            <div class="form-group">
                                <label for="email01">Email</label>
                                <input type="text" name="email" id="email01" placeholder="Enter your phone number or email">
                            </div>
                            <div class="form-group">
                                <label for="pass01">Password</label>
                                <div class="pass-item">
                                    <input type="password" id="pass01" placeholder="Please enter your password">
                                    <span class="view-pass" id="view-pass-01">
                                        <i class="flaticon-eye"></i>
                                    </span>
                                </div>
                                <!-- <p class="mt-2 d-flex flex-wrap justify-content-between"><a href="sign-up.html">New Member? Register Here</a><a href="#0">Forgot Password?</a></p> -->
                            </div>
                            <div class="form-group">
                                <input type="submit" value="sign in">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="different-sign-in">
                        <h5 style="color:#fff">
                            With deep roots in Tanzania,<br> Majestic designs personalized safaris and Zanzibar getaways that go beyond
                             the ordinary — sustainable, authentic, and filled with wonder. <br><br>
                             <span style="font-style: italic;">"Let us turn your dream African adventure into reality". </span> 
                        </h5>
                        <!-- <h3 class="title">Or Sign In with </h3> -->
                        <!-- <ul>
                            <li>
                                <a class="facebook" href="#0"><i class="fab fa-facebook-f"></i> facebook</a>
                            </li>
                            <li>
                                <a class="twitter" href="#0"><i class="fab fa-twitter"></i> twitter</a>
                            </li>
                        </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ==========privacy-section========== -->


    <!-- ==========footer-section========== -->
   <?php  include 'pages/footer.php' ?>
    <!-- ==========footer-section========== -->


    <!-- ==========footer-Links & Scripts ========== -->
   <?php  include 'pages/footerLinks.php' ?>
    <!-- ==========footer-Links========== -->


</body>


<!-- index.html  22 Nov 2019 04:16:40 GMT -->
</html>
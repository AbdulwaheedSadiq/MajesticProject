    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.ripples-min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/countdown.min.js"></script>
    <script src="assets/js/odometer.min.js"></script>
    <script src="assets/js/viewport.jquery.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/owlcarousel.min.js"></script>
    
<script>
  document.querySelectorAll("[data-background]").forEach(function(el) {
    el.style.backgroundImage = "url(" + el.getAttribute("data-background") + ")";
  });
</script>

    <script>

  // Highlight active nav link
  const currentLocation = window.location.pathname;
  const menuItems = document.querySelectorAll('.nav-link');
  
  menuItems.forEach(item => {
    if (item.getAttribute('href') === currentLocation.split("/").pop()) {
      item.classList.add('active');
    }
  });
</script>

<script>
  $(document).ready(function(){
    $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    // nav:true,
    dots: false,
    autoplay:true,
    autoplayTimeout:2500,
    responsive:{
        0:{ items:1 },
        600:{ items:2 },
        1000:{ items:3 } // shows 3 cards at once on desktop
    }
})
  });
</script>

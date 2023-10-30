<?php include("../_dbConnect.php"); ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $email = $_POST["email"];

  $insertContactdata = "INSERT INTO `newslatter` (`email`) VALUES ('$email')";
  $quesyInsertContactData = mysqli_query($conn, $insertContactdata);

  if ($quesyInsertContactData) {
    echo '
      <script>
          alert("Thanks for Subscribing")
      </script>
      ';
  } else {
    echo '
      <script>
          alert("Something wents wrong!")
      </script>
      ';
  }
}
?>

<footer id="footer" class="footer style_1">
  <div class="widgets_row">
    <div class="container">
      <div class="footer_widgets">
        <div class="row">
          <div class="col-sm-6 col-xs-12">


            <h4 class="widget_title">Saponite Technologies Pvt. Ltd.</h4>

            <p>SAPONITE is a global technology company specialized in providing ERP consulting, training, and IT
              outsourcing services. We have a proven track record in different parts of the
              world with our strategic partners across the globe.</p>
          </div>

          <!-- <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <section id="recent-posts-4" class="widget widget_recent_entries">
      <h4 class="widget_title">recent news</h4>
        <ul>
           <li>
               <a href="">A digital prescription for the pharma industry</a>
                  <span class="post-date">September 3, 2021</span>
           </li>
           <li>
               <a href="">Harvest great ideas from your company best assets</a>
                  <span class="post-date">August 25, 2021</span>
           </li>
         </ul>
    </section>
  </div> -->

          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <section id="nav_menu-2" class="widget widget_nav_menu">
              <h4 class="widget_title">extra links</h4>
              <div class="menu-extra-links-container">
                <ul id="menu-extra-links" class="menu">
                  <li class="menu-item ">
                    <a href="../company.php">Company</a>
                  </li>
                  <li class="menu-item">
                    <a href="../careers.php">Careers</a>
                  </li>
                  <li class="menu-item">
                    <a href="../contactus.php">Contact Us</a>
                  </li>
                  <li class="menu-item">
                    <a href="../privacypolicy.php">Privacy Policy</a>
                  </li>
                  <li class="menu-item">
                    <a href="../termsandconditions.php">Terms & Conditions</a>
                  </li>
                
                </ul>
              </div>
            </section>
          </div>


          <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
            <section class="form_widget">
              <h4 class="widget_title">Newsletter</h4>
              <form class="" action="" method="post">
                <div class="mc4wp-form-fields">
                  <div class="input-group mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Enter your email" required="">
                    <span class="input-group-btn">
                      <button class="btn" title="submit" type=""><i class="far fa-envelope"></i></button>
                    </span>
                  </div>
                  <p>Get latest updates and offers.</p>
                </div>
              </form>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="copyright_row">
    <div class="container">
      <div class="copyright_row_wr">
        <div class="socials">
          <ul>
            <li>
              <a href="" target="_blank" class="social-facebook">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li>
              <a href="" target="_blank" class="social-twitter">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
          </ul>
        </div>

        <div class="copyright">&copy 2023 <a href="" target="_blank">Saponite Technologies</a> Design by <a
            href="https://asdrinfotech.com/" target="_blank">ASDR Infotech</a>
        </div>

      </div>
    </div>
  </div>
</footer>



<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: block;">
  <i class="fas fa-long-arrow-alt-up"></i></a>

<!---
      <a href="https://api.whatsapp.com/send?phone=919312812&text=Hello." class="float" target="_blank">
<img src="img/whatsapp-button.png" class="img-fluid"/>
</a>
    ---->

<a class='blantershow-chat'
  href="https://api.whatsapp.com/send?phone=8287657228&text=if you have any query please contact us ?."
  title='Show Chat'>
  <svg width="20" viewBox="0 0 24 24">
    <defs />
    <path fill="#eceff1"
      d="M20.5 3.4A12.1 12.1 0 0012 0 12 12 0 001.7 17.8L0 24l6.3-1.7c2.8 1.5 5 1.4 5.8 1.5a12 12 0 008.4-20.3z" />
    <path fill="#4caf50"
      d="M12 21.8c-3.1 0-5.2-1.6-5.4-1.6l-3.7 1 1-3.7-.3-.4A9.9 9.9 0 012.1 12a10 10 0 0117-7 9.9 9.9 0 01-7 16.9z" />
    <path fill="#fafafa"
      d="M17.5 14.3c-.3 0-1.8-.8-2-.9-.7-.2-.5 0-1.7 1.3-.1.2-.3.2-.6.1s-1.3-.5-2.4-1.5a9 9 0 01-1.7-2c-.3-.6.4-.6 1-1.7l-.1-.5-1-2.2c-.2-.6-.4-.5-.6-.5-.6 0-1 0-1.4.3-1.6 1.8-1.2 3.6.2 5.6 2.7 3.5 4.2 4.2 6.8 5 .7.3 1.4.3 1.9.2.6 0 1.7-.7 2-1.4.3-.7.3-1.3.2-1.4-.1-.2-.3-.3-.6-.4z" />
  </svg> Chat with Us</a>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../js/jquery-3.3.1.slim.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script src="../js/jquery-3.3.1.min.js"></script>
<script src="../js/wow.min.js"></script>



<script type="text/javascript" src="../js/rev-slider/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="../js/rev-slider/jquery.themepunch.tools.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>

<script type="text/javascript" src="../js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="../js/jquery.waypoints.min.js"></script>

<script>
  $(document).ready(function ($) {
    var $element = $('.counter');
    if ($element.length > 0) {
      $element.counterUp({
        delay: 10,
        time: 1000
      });
    }
  });
</script>

<script>
  $('.testimonial-slider').slick({
    slidesToShow: 3,
    dots: false,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow: '<i class="fas fa-chevron-left prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right next"></i>',
    swipe: true,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        // centerMode: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        infinite: true,

      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]


  });

</script>

<script>
  $('.client-slider').slick({
    slidesToShow: 6,
    dots: false,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow: '<i class="fas fa-chevron-left prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right next"></i>',
    swipe: true,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        // centerMode: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 2,
        dots: false,
        infinite: true,

      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]


  });

</script>

<script>
  $('.project-slider').slick({
    slidesToShow: 4,
    dots: false,
    arrows: true,
    autoplay: false,
    autoplaySpeed: 3000,
    prevArrow: '<i class="fas fa-chevron-left prev"></i>',
    nextArrow: '<i class="fas fa-chevron-right next"></i>',
    swipe: true,
    swipeToSlide: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        // centerMode: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: false,
        infinite: true,

      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]


  });

</script>




<script src="../js/wow.min.js"></script>
<script>
  new WOW().init();
</script>



<script>
  $('.blog-slider').slick({
    speed: 500,
    slidesToShow: 2,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    dots: true,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        // centerMode: true,
      }
    }, {
      breakpoint: 800,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 2,
        dots: false,
        infinite: true,

      }
    }, {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
      }
    }]
  });
</script>





<script>
  $(document).ready(function () {
    $(window).scroll(function () {//scroll--top---indicator---arrow-jquery----//
      if ($(window).scrollTop() > 600) {//---position---600----px scroll-----//
        $("#scrollUp").fadeIn();
      }
      else {
        $("#scrollUp").css("display", "none");
      }
    });
  });

</script>




<script>
  $(document).ready(function () {
    $(window).scroll(function () {
      if ($(window).scrollTop() < 90) { //-navbar-----scrolltop---fixed---jquery--/
        $('#navigation').removeClass('navbar-scroll');
      }
      else {
        $('#navigation').addClass('navbar-scroll');
      }
    });

  });

</script>






<script type="text/javascript">
  jQuery(document).ready(function () {
    // revolution slider
    var revapi;
    revapi = jQuery('#revolution-slider-half')
      .revolution({
        delay: 9000,
        startwidth: 1170,
        startheight: 570,
        onHoverStop: "on",
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 3,
        touchenabled: "on",
        stopAtSlide: -1,
        stopAfterLoops: -1,
        touchenabled: "on",
        navigationType: "none",
        navigationArrows: "solo",
        navigationStyle: "preview1",
        touchenabled: "on",
        onHoverStop: "on",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        keyboardNavigation: "on",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        dottedOverlay: "",
        fullWidth: "on",
        stopAfterLoops: 0,
        stopAtSlide: 1,
        shadow: 0
      });

    revapi = jQuery('#revolution-slider-full')
      .revolution({
        delay: 9000,
        startwidth: 960,
        startheight: 630,
        onHoverStop: "on",
        thumbWidth: 100,
        thumbHeight: 50,
        thumbAmount: 3,
        touchenabled: "on",
        stopAtSlide: -1,
        stopAfterLoops: -1,
        touchenabled: "on",
        navigationType: "none",
        navigationArrows: "solo",
        navigationStyle: "preview1",
        touchenabled: "on",
        onHoverStop: "on",
        swipe_velocity: 0.7,
        swipe_min_touches: 1,
        swipe_max_touches: 1,
        drag_block_vertical: false,
        keyboardNavigation: "on",
        navigationHAlign: "center",
        navigationVAlign: "bottom",
        navigationHOffset: 0,
        navigationVOffset: 20,
        soloArrowLeftHalign: "left",
        soloArrowLeftValign: "center",
        soloArrowLeftHOffset: 20,
        soloArrowLeftVOffset: 0,
        soloArrowRightHalign: "right",
        soloArrowRightValign: "center",
        soloArrowRightHOffset: 20,
        soloArrowRightVOffset: 0,
        dottedOverlay: "",
        fullWidth: "on",
        fullScreen: "on",
        stopAfterLoops: 0,
        stopAtSlide: 1,
        shadow: 0
      });

    // revolution slider ver 2
    var revext = jQuery;
    var revapi;
    revext(document).ready(function () {
      if (revext("#rev-commerce").revolution == undefined) {
        revslider_showDoubleJqueryError("#rev-commerce");
      } else {
        revapi = revext("#rev-commerce").show().revolution({
          sliderType: "standard",
          jsFileLocation: "revolution/js/",
          sliderLayout: "auto",
          dottedOverlay: "none",
          delay: 9000,
          navigation: {
            keyboardNavigation: "off",
            keyboard_direction: "horizontal",
            mouseScrollNavigation: "off",
            mouseScrollReverse: "default",
            onHoverStop: "on",
            touch: {
              touchenabled: "on",
              swipe_threshold: 75,
              swipe_min_touches: 50,
              swipe_direction: "horizontal",
              drag_block_vertical: false
            }
            ,
            arrows: {
              style: "gyges",
              enable: true,
              hide_onmobile: false,
              hide_onleave: false,
              tmp: '',
              left: {
                h_align: "right",
                v_align: "bottom",
                h_offset: 160,
                v_offset: 0
              },
              right: {
                h_align: "right",
                v_align: "bottom",
                h_offset: 80,
                v_offset: 0
              }
            }
          },
          responsiveLevels: [1240, 1024, 778, 480],
          visibilityLevels: [1240, 1024, 778, 480],
          gridwidth: [1200, 1024, 778, 480],
          gridheight: [600, 600, 600, 600],
          lazyType: "single",
          parallax: {
            type: "scroll",
            origo: "slidercenter",
            speed: 400,
            levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 55],
            type: "scroll",
          },
          shadow: 0,
          spinner: "off",
          stopLoop: "off",
          stopAfterLoops: -1,
          stopAtSlide: -1,
          shuffle: "off",
          autoHeight: "off",
          disableProgressBar: "on",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          debugMode: false,
          fallbacks: {
            simplifyAll: "off",
            nextSlideOnWindowFocus: "off",
            disableFocusListener: false,
          }
        });
      }
    });

  });
</script>


</body>

</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Car Dealer - The Best Car Dealer Automotive Responsive HTML5 Template" />
        <meta name="author" content="potenzaglobalsolutions.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <title>
          Efem Rent A Car | Araç Kiralama
        </title>
      
        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.ico" />
      
        <!-- bootstrap -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/bootstrap.min.css" />
      
        <!-- flaticon -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/flaticon.css" />
      
        <!-- mega menu -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/mega-menu/mega_menu.css" />
      
        <!-- mega menu -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/font-awesome.min.css" />
      
        <!-- owl-carousel -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/owl-carousel/owl.carousel.css" />
      
        <!-- magnific-popup -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/magnific-popup/magnific-popup.css" />
      
        <!-- jquery-ui -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/jquery-ui.css" />
      
        <!-- revolution -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/revolution/css/settings.css" />
      
        <!-- main style -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/style.css" />
      
        <!-- responsive -->
        <link rel="stylesheet" type="text/css" href="{{asset('assets')}}/css/responsive.css" />
      </head>
<body>

    
  <div id="loading">
    <div id="loading-center">
      <img src="{{asset('assets')}}/images/loader4.gif" alt="" />
    </div>
  </div>

  <livewire:project.menu-component /> 

    {{$slot}}
    
    <livewire:project.footer-component /> 


    <div class="car-top">
        <span><img src="{{asset('assets')}}/images/car.png" alt="" /></span>
      </div>
    
      <!--=================================
     back to top -->
    
      <!--=================================
     jquery -->
    
      <!-- jquery  -->
      <script type="text/javascript" src="{{asset('assets')}}/js/jquery-3.6.0.min.js"></script>
    
      <!-- bootstrap -->
      <script type="text/javascript" src="{{asset('assets')}}/js/popper.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/js/bootstrap.min.js"></script>
    
      <!-- mega-menu -->
      <script type="text/javascript" src="{{asset('assets')}}/js/mega-menu/mega_menu.js"></script>
    
      <!-- appear -->
      <script type="text/javascript" src="{{asset('assets')}}/js/jquery.appear.js"></script>
    
      <!-- counter -->
      <script type="text/javascript" src="{{asset('assets')}}/js/counter/jquery.countTo.js"></script>
    
      <!-- isotope -->
      <script type="text/javascript" src="{{asset('assets')}}/js/isotope/isotope.pkgd.min.js"></script>
    
      <!-- owl-carousel -->
      <script type="text/javascript" src="{{asset('assets')}}/js/owl-carousel/owl.carousel.min.js"></script>
    
      <!-- magnific popup -->
      <script type="text/javascript" src="{{asset('assets')}}/js/magnific-popup/jquery.magnific-popup.min.js"></script>
    
      <!-- jquery-ui -->
      <script type="text/javascript" src="{{asset('assets')}}/js/jquery-ui.js"></script>
    
      <!-- select -->
      <script type="text/javascript" src="{{asset('assets')}}/js/select/jquery-select.js"></script>
      <!-- revolution -->
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/jquery.themepunch.tools.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/jquery.themepunch.revolution.min.js"></script>
      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="{{asset('assets')}}/revolution/js/extensions/revolution.extension.video.min.js"></script>
    
      <!-- custom -->
      <script type="text/javascript" src="{{asset('assets')}}/js/custom.js"></script>
    
      <script type="text/javascript">
        var tpj = jQuery;
    
        var revapi6;
        tpj(document).ready(function () {
          if (tpj("#rev_slider_6_1").revolution == undefined) {
            revslider_showDoubleJqueryError("#rev_slider_6_1");
          } else {
            revapi6 = tpj("#rev_slider_6_1")
              .show()
              .revolution({
                sliderType: "standard",
                sliderLayout: "fullwidth",
                dottedOverlay: "none",
                delay: 9000,
                navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  mouseScrollReverse: "default",
                  onHoverStop: "off",
                  arrows: {
                    style: "hesperiden",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: "",
                    left: {
                      h_align: "left",
                      v_align: "center",
                      h_offset: 20,
                      v_offset: 0,
                    },
                    right: {
                      h_align: "right",
                      v_align: "center",
                      h_offset: 20,
                      v_offset: 0,
                    },
                  },
                },
                responsiveLevels: [1240, 1024, 778, 480],
                visibilityLevels: [1240, 1024, 778, 480],
                gridwidth: [1270, 1024, 778, 480],
                gridheight: [450, 450, 500, 500],
                lazyType: "none",
                shadow: 0,
                spinner: "spinner0",
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
                },
              });
          }
        }); /*ready*/
      </script>
</body>
</html>
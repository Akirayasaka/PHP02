<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Register Page
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 
  <meta name="keywords" content="iTaiwan,wifi,hotspot">
  <meta name="description" content="iTaiwan hotspot">
  <meta name="author" content="泰山網頁設計班">

  <meta property="og:title" content="iTaiwan熱點">
  <meta property="og:image" content="./assets/img/wifi.png">
  <meta property="og:description" content="iTaiwan熱點介紹網">
  <meta property="og:site_name" content="臺灣鐵路管理局iTaiwan熱點">

  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="../assets/css/fonts.css" />
  <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="../assets/css/material-dashboard.minf066.css" rel="stylesheet" />

</head>

<body class="off-canvas-sidebar">

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
      <div class="navbar-wrapper">
        <a class="navbar-brand" href="#pablo">Register Page</a>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
        <span class="sr-only">Toggle navigation</span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
        <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="material-icons">dashboard</i> Dashboard
            </a>
          </li>
          <li class="nav-item  active ">
            <a href="register.php" class="nav-link">
              <i class="material-icons">person_add</i> Register
            </a>
          </li>
          <li class="nav-item ">
            <a href="login.php" class="nav-link">
              <i class="material-icons">fingerprint</i> Login
            </a>
          </li>
          <li class="nav-item ">
            <a href="lock.php" class="nav-link">
              <i class="material-icons">lock_open</i> Lock
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper wrapper-full-page">
    <div class="page-header register-page header-filter" filter-color="black" style="background-image: url('../assets/img/register.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-10 ml-auto mr-auto">
            <div class="card card-signup">
              <h2 class="card-title text-center">Register</h2>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-5 ml-auto">
                    <div class="info info-horizontal">
                      <div class="icon icon-rose">
                        <i class="material-icons">timeline</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Marketing</h4>
                        <p class="description">
                          We've created the marketing campaign of the website. It was a very interesting collaboration.
                        </p>
                      </div>
                    </div>
                    <div class="info info-horizontal">
                      <div class="icon icon-primary">
                        <i class="material-icons">code</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Fully Coded in HTML5</h4>
                        <p class="description">
                          We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
                        </p>
                      </div>
                    </div>
                    <div class="info info-horizontal">
                      <div class="icon icon-info">
                        <i class="material-icons">group</i>
                      </div>
                      <div class="description">
                        <h4 class="info-title">Built Audience</h4>
                        <p class="description">
                          There is also a Fully Customizable CMS Admin Dashboard for this product.
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-5 mr-auto">
                    <div class="social text-center">
                      <button class="btn btn-just-icon btn-round btn-twitter">
                        <i class="fa fa-twitter"></i>
                      </button>
                      <button class="btn btn-just-icon btn-round btn-dribbble">
                        <i class="fa fa-dribbble"></i>
                      </button>
                      <button class="btn btn-just-icon btn-round btn-facebook">
                        <i class="fa fa-facebook"> </i>
                      </button>
                      <h4 class="mt-3"> Join Now! </h4>
                    </div>

                    <form class="form" method="" action="" id="RegisterValidation">
                      <div class="form-group has-default">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">face</i>
                            </span>
                          </div class="form-group">
                          <label for="reg_name" class="bmd-label-floating"> </label>
                          <input type="text" class="form-control" id="reg_name" placeholder="User Name..." name="name">
                        </div>
                      </div>
                      <div class="form-group has-default">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">mail</i>
                            </span>
                          </div>
                          <label for="reg_mail" class="bmd-label-floating"></label>
                          <input type="email" class="form-control" placeholder="Email..." id="reg_mail" name="mail"> 
                        </div>
                      </div>
                      <div class="form-group has-default">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text">
                              <i class="material-icons">lock_outline</i>
                            </span>
                          </div>
                          <label for="reg_pw" class="bmd-label-floating"></label>
                          <input type="password" placeholder="Password..." class="form-control" id="reg_pw" name="pw" minLength="4">
                        </div>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input class="form-check-input" type="checkbox" value="" checked="">
                          <span class="form-check-sign">
                            <span class="check"></span>
                          </span>
                          I agree to the
                          <a href="#something">terms and conditions</a>.
                        </label>
                      </div>
                      <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-round mt-4" id="reg_btn">Get Started</button>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container">
          <nav class="float-left">
            <ul>
              <li>
                <a href="javascript:void(0);">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  About Us
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  Blog
                </a>
              </li>
              <li>
                <a href="javascript:void(0);">
                  Licenses
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made by
            <a href="javascript:void(0);" target="_blank">Sidney</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="../assets/js/plugins/jquery.validate.min.js"></script>
  <script src="../assets/js/plugins/sweetalert2.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <script async defer src="../assets/js/buttons.js"></script>
  <script src="../assets/js/plugins/chartist.min.js"></script>
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <script src="../assets/js/material-dashboard.minf066.js?v=2.1.0" type="text/javascript"></script>


  <script>
    $(document).ready(function() {
      $().ready(function() {
        $sidebar = $('.sidebar');

        $sidebar_img_container = $sidebar.find('.sidebar-background');

        $full_page = $('.full-page');

        $sidebar_responsive = $('body > .navbar-collapse');

        window_width = $(window).width();

        fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

        if (window_width > 767 && fixed_plugin_open == 'Dashboard') {
          if ($('.fixed-plugin .dropdown').hasClass('show-dropdown')) {
            $('.fixed-plugin .dropdown').addClass('open');
          }

        }

        $('.fixed-plugin a').click(function(event) {
         
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-color', new_color);
          }

          if ($full_page.length != 0) {
            $full_page.attr('filter-color', new_color);
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.attr('data-color', new_color);
          }
        });

        $('.fixed-plugin .background-color .badge').click(function() {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function() {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function() {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function() {
              $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
              $full_page_background.fadeIn('fast');
            });
          }

          if ($('.switch-sidebar-image input:checked').length == 0) {
            var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
            $full_page_background.css('background-image', 'url("' + new_image_full_page + '")');
          }

          if ($sidebar_responsive.length != 0) {
            $sidebar_responsive.css('background-image', 'url("' + new_image + '")');
          }
        });

        $('.switch-sidebar-image input').change(function() {
          $full_page_background = $('.full-page-background');

          $input = $(this);

          if ($input.is(':checked')) {
            if ($sidebar_img_container.length != 0) {
              $sidebar_img_container.fadeIn('fast');
              $sidebar.attr('data-image', '#');
            }

            if ($full_page_background.length != 0) {
              $full_page_background.fadeIn('fast');
              $full_page.attr('data-image', '#');
            }

            background_image = true;
          } else {
            if ($sidebar_img_container.length != 0) {
              $sidebar.removeAttr('data-image');
              $sidebar_img_container.fadeOut('fast');
            }

            if ($full_page_background.length != 0) {
              $full_page.removeAttr('data-image', '#');
              $full_page_background.fadeOut('fast');
            }

            background_image = false;
          }
        });

        $('.switch-sidebar-mini input').change(function() {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function() {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          // we simulate the window Resize so the charts will get updated in realtime.
          var simulateWindowResize = setInterval(function() {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          // we stop the simulation of Window Resize after the animations are completed
          setTimeout(function() {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <!-- Sharrre libray -->
  <script src="../assets/demo/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function() {


      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('facebook');
        },
        template: '<i class="fab fa-facebook-f"></i> Facebook',
        url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
      });

      $('#google').sharrre({
        share: {
          googlePlus: true
        },
        enableCounter: false,
        enableHover: false,
        enableTracking: true,
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('googlePlus');
        },
        template: '<i class="fab fa-google-plus"></i> Google',
        url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
      });

      $('#twitter').sharrre({
        share: {
          twitter: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        buttons: {
          twitter: {
            via: 'CreativeTim'
          }
        },
        click: function(api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
      });


      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46172202-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

      ! function(f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function() {
          n.callMethod ?
            n.callMethod.apply(n, arguments) : n.queue.push(arguments)
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = '2.0';
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s)
      }(window,
        document, 'script', '../assets/js/plugins/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
    $(document).ready(function() {
      md.checkFullPageBackgroundImage();
      setFormValidation('#RegisterValidation');
      setFormValidation('#TypeValidation');
      setFormValidation('#LoginValidation');
      setFormValidation('#RangeValidation');
    });

    function setFormValidation(id) {
      $(id).validate({
        highlight: function (element) {
          $(element).closest('.form-group').removeClass('has-success').addClass('has-danger');
          $(element).closest('.form-check').removeClass('has-success').addClass('has-danger');
        },
        success: function (element) {
          $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');
          $(element).closest('.form-check').removeClass('has-danger').addClass('has-success');
        },
        errorPlacement: function (error, element) {
          $(element).closest('.form-group').append(error);
        },

          submitHandler: function (form) {

            // alert("123");

            let acc = $("#reg_name").val();
            let pw = $("#reg_pw").val();
            let mail=$("#reg_mail").val();

            // console.log(acc+"+"+pw+"+"+mail);

            if(acc=="" || pw=="" || mail==""){
                      Swal({
                          type: 'error',
                          title: 'Error',
                          text: 'Invaild Value for registry!',
                          }).then(function(){
                          setTimeout(() => {
                          location.href="register.php";
                          }, 300);
                       });
            }else{
              $.post("../api.php?do=reg", {acc,pw,mail}, function(res) {

                // console.log(res);

                switch (res) {

                   case "1":

                   Swal.fire({
                      type: 'success',
                      title: 'Register Success!',
                      
                      }).then(function(){
                      setTimeout(() => {
                      location.href="login.php";
                      }, 500);
                   });

                  break;

                  case "2":

                    Swal.fire({
                      type: 'warning',
                      title: 'Sorry!',
                      text: 'Email already exists!',
          
                      }).then(function(){
                      setTimeout(() => {
                      location.href="register.php";
                      }, 200);
                    });

                   break;

                   case "3":

                      Swal({
                        type: 'warning',
                        title: 'Sorry',
                        text: 'Account already exists!',
                        }).then(function(){
                        setTimeout(() => {
                        location.href="register.php";
                        }, 200);
                    });

                    break;

                   
                  }

              })
            }

             

          }

      });

    }


  </script>
</body>

</html>
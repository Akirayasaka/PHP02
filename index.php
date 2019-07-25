<?php
    include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    臺灣鐵路管理局iTaiwan熱點
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <meta name="keywords" content="iTaiwan,wifi,hotspot">
  <meta name="description" content="iTaiwan hotspot">
  <meta name="author" content="泰山網頁設計班">

  <meta property="og:title" content="iTaiwan熱點">
  <meta property="og:image" content="./assets/img/wifi.png">
  <meta property="og:description" content="iTaiwan熱點介紹網">
  <meta property="og:site_name" content="臺灣鐵路管理局iTaiwan熱點">

  <link rel="stylesheet" type="text/css" href="./assets/css/fonts.css" />
  <link rel="stylesheet" href="./assets/css/all.min.css">

  <link href="./assets/css/material-dashboard.minf066.css" rel="stylesheet" />
  <link href="./assets/demo/demo.css" rel="stylesheet" />

  <link rel="manifest" href="./manifest.json">
</head>

<body class="">

  <div class="wrapper ">
    <div class="sidebar" data-color="rose" data-background-color="black" data-image="./assets/img/sidebar-1.jpg">
  
      <div class="logo">
        <a href="javascript:void(0);" class="simple-text logo-mini" style="cursor:default;">
          <i class="fas fa-wifi"></i>
        </a>
        <a href="javascript:void(0);" class="simple-text logo-normal" style="cursor:default;">
          iTaiwan Wifi Info
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">

        <?php

            if(!empty($_SESSION['login'])){
              $user=find("user",['acc'=>$_SESSION['login']]);
            ?>
              <div class="photo">
            <img src="./assets/img/faces/<?=$user['file'];?>" />
          </div>
          <div class="user-info">
            <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                <?=$user['acc'];?>
                <b class="caret"></b>
              </span>
            </a>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                
                <li class="nav-item">
                  <a class="nav-link" href="?do=user">
                    <span class="sidebar-mini"> EP </span>
                    <span class="sidebar-normal"> Edit Profile </span>
                  </a>
                </li>

              </ul>
            </div>
          </div>

            <?php
          }else{
            ?>
            <div class="photo">
            <img src="./assets/img/default-avatar.png" />
          </div>
          <div class="user-info">
            <a class="username">
              <span>
                Guest    
              </span>
            </a>
            
          </div>

            <?php
          }
        ?>

          

        </div>

        <ul class="nav">
          <li class="nav-item active ">
            <a class="nav-link" href="index.php">
              <i class="material-icons">dashboard</i>
              <p> Overview </p>
            </a>
          </li>
          
          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#tablesExamples">
              <i class="material-icons">grid_on</i>
              <p> Tables
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="tablesExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="?do=datatables">
                    <span class="sidebar-mini"> DT </span>
                    <span class="sidebar-normal"> DataTables</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" data-toggle="collapse" href="#mapsExamples">
              <i class="material-icons">place</i>
              <p> Maps
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse" id="mapsExamples">
              <ul class="nav">
                <li class="nav-item ">
                  <a class="nav-link" href="?do=map">
                    <span class="sidebar-mini"> GM </span>
                    <span class="sidebar-normal"> Google Maps </span>
                  </a>
                </li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item ">
            <a class="nav-link" href="?do=profile">
              <i class="material-icons">widgets</i>
              <p> About </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?do=chart">
              <i class="material-icons">timeline</i>
              <p> Charts </p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="?do=calendar">
              <i class="material-icons">date_range</i>
              <p> Calendar </p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-minimize">
              <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
              </button>
            </div>
            <!-- <span class="navbar-brand">Slide</span> -->
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">

                <?php

                      if(!empty($_SESSION['login'])){
                        ?>

                        <a class="nav-link" href="http://example.com/" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">notifications</i>
                        <span class="notification">5</span>
                        <p class="d-lg-none d-md-block">
                          Some Actions
                        </p>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Mike John responded to your email</a>
                        <a class="dropdown-item" href="#">You have 5 new tasks</a>
                        <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                        <a class="dropdown-item" href="#">Another Notification</a>
                        <a class="dropdown-item" href="#">Another One</a>
                      </div> 
                      
                    <?php
                    
                    }else{
                        ?>
                        
                        <a class="nav-link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="demo.showSwal('plogin')">
                        <i class="material-icons">notifications</i>
                        
                        <p class="d-lg-none d-md-block">
                          Some Actions
                        </p>
                        </a>
                       
                      <?php
                      }
                        ?>

              </li>
              <li class="nav-item dropdown">
                <?php
                    if(!empty($_SESSION['login'])){

                        if($_SESSION['login'] == 'admin'){
                          ?>
                              <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="material-icons">person</i>
                               <p class="d-lg-none d-md-block">
                                 Account
                               </p>
                                </a>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="admin.php">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?do=logout">Log out</a>
                                </div>
                          <?php
                        }else{
                            ?>

                                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="material-icons">person</i>
                               <p class="d-lg-none d-md-block">
                                 Account
                               </p>
                                </a>
                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                                <a class="dropdown-item" href="?do=user">Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="?do=logout">Log out</a>
                                </div>

                          <?php
                        }
                      ?>


                

                <?php
                    }else{
                      ?>

                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="./pages/login.php">Login</a>
                  <a class="dropdown-item" href="./pages/register.php">Register</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="./pages/lock.php">Forgot?</a>
                </div>

                <?php
                    }

                  ?>

              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <?php

        $do=(!empty($_GET['do']))?$_GET['do']:"home";

        switch($do){

            case "home":
              include "home.php";
            break;

            case "calendar":
              include "calendar.php";
            break;

            case "datatables":
              include "./tables/datatables.php";
            break;

            case "logout":
              unset($_SESSION['login']);
              jsm('index.php');
            break;

            case "chart":
              include "chart.php";
            break;

            case "profile":
              include "profile.php";
            break;

            case "map":
              include "map.php";
            break;

            case "user":
              include "user.php";
            break;
        }

      ?>
      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
              <a href="https://github.com/Akirayasaka" target="_blank" alt="GitHub" title="GitHub">
              <i class="fab fa-github fa-2x"></i>
              </a> 
                
              </li>
              <li>
                <a href="https://www.facebook.com/" target="_blank" alt="Facebook" title="Facebook">
                <i class="fab fa-facebook-square fa-2x"></i>
                </a>
              </li>
              <li>
                <a href="https://twitter.com/" target="_blank" alt="Twitter" title="Twitter">
                <i class="fab fa-twitter fa-2x"></i>
                </a>
              </li>
              <li>
                <a href="https://www.instagram.com" target="_blank" alt="Instagram" title="Instagram">
                <i class="fab fa-instagram fa-2x"></i>
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright float-right">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script>, made by
            <a href="#" >Sidney</a> .
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Sidebar Background</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger background-color">
            <div class="ml-auto mr-auto">
              <span class="badge filter badge-black active" data-background-color="black"></span>
              <span class="badge filter badge-white" data-background-color="white"></span>
              <span class="badge filter badge-red" data-background-color="red"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger">
            <p>Sidebar Mini</p>
            <label class="ml-auto">
              <div class="togglebutton switch-sidebar-mini">
                <label>
                  <input type="checkbox">
                  <span class="toggle"></span>
                </label>
              </div>
            </label>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger">
            <p>Sidebar Images</p>
            <label class="switch-mini ml-auto">
              <div class="togglebutton switch-sidebar-image">
                <label>
                  <input type="checkbox" checked="">
                  <span class="toggle"></span>
                </label>
              </div>
            </label>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-1.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-2.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="./assets/img/sidebar-4.jpg" alt="">
          </a>
        </li>

        <li class="adjustments-line">
          <br>
        </li>
        
      </ul>
    </div>
  </div>
 
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <script src="./assets/js/plugins/sweetalert2.js"></script>
  <script src="./assets/js/plugins/jquery.validate.min.js"></script>
  <script src="./assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <script src="./assets/js/plugins/bootstrap-selectpicker.js"></script>
  <script src="./assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <script src="./assets/js/plugins/jquery.dataTables.min.js"></script>
  <script src="./assets/js/plugins/bootstrap-tagsinput.js"></script>
  <script src="./assets/js/plugins/jasny-bootstrap.min.js"></script>
  <script src="./assets/js/plugins/fullcalendar.min.js"></script>
  <script src="./assets/js/plugins/jquery-jvectormap.js"></script>
  <script src="./assets/js/plugins/nouislider.min.js"></script>
  <script src="./assets/js/core/core.js"></script>
  <script src="./assets/js/plugins/arrive.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB2Yno10-YTnLjjn_Vtk0V8cdcY5lC4plU"></script>
  <script async defer src="./assets/js/buttons.js"></script>
  <script src="./assets/js/plugins/chartist.min.js"></script>
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <script src="./assets/js/material-dashboard.minf066.js" type="text/javascript"></script>

  <script src="./assets/demo/demo.js"></script>

  <script>
    $(document).ready(function () {
      $().ready(function () {
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

        $('.fixed-plugin a').click(function (event) {
          if ($(this).hasClass('switch-trigger')) {
            if (event.stopPropagation) {
              event.stopPropagation();
            } else if (window.event) {
              window.event.cancelBubble = true;
            }
          }
        });

        $('.fixed-plugin .active-color span').click(function () {
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

        $('.fixed-plugin .background-color .badge').click(function () {
          $(this).siblings().removeClass('active');
          $(this).addClass('active');

          var new_color = $(this).data('background-color');

          if ($sidebar.length != 0) {
            $sidebar.attr('data-background-color', new_color);
          }
        });

        $('.fixed-plugin .img-holder').click(function () {
          $full_page_background = $('.full-page-background');

          $(this).parent('li').siblings().removeClass('active');
          $(this).parent('li').addClass('active');


          var new_image = $(this).find("img").attr('src');

          if ($sidebar_img_container.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            $sidebar_img_container.fadeOut('fast', function () {
              $sidebar_img_container.css('background-image', 'url("' + new_image + '")');
              $sidebar_img_container.fadeIn('fast');
            });
          }

          if ($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0) {
            var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

            $full_page_background.fadeOut('fast', function () {
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

        $('.switch-sidebar-image input').change(function () {
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

        $('.switch-sidebar-mini input').change(function () {
          $body = $('body');

          $input = $(this);

          if (md.misc.sidebar_mini_active == true) {
            $('body').removeClass('sidebar-mini');
            md.misc.sidebar_mini_active = false;

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar();

          } else {

            $('.sidebar .sidebar-wrapper, .main-panel').perfectScrollbar('destroy');

            setTimeout(function () {
              $('body').addClass('sidebar-mini');

              md.misc.sidebar_mini_active = true;
            }, 300);
          }

          var simulateWindowResize = setInterval(function () {
            window.dispatchEvent(new Event('resize'));
          }, 180);

          setTimeout(function () {
            clearInterval(simulateWindowResize);
          }, 1000);

        });
      });
    });
  </script>
  <!-- Sharrre libray -->
  <script src="./assets/demo/jquery.sharrre.js"></script>
  <script>
    $(document).ready(function () {


      $('#facebook').sharrre({
        share: {
          facebook: true
        },
        enableHover: false,
        enableTracking: false,
        enableCounter: false,
        click: function (api, options) {
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
        click: function (api, options) {
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
        click: function (api, options) {
          api.simulateClick();
          api.openPopup('twitter');
        },
        template: '<i class="fab fa-twitter"></i> Twitter',
        url: 'https://demos.creative-tim.com/material-dashboard-pro/examples/dashboard.html'
      });


      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46172202-1']);
      _gaq.push(['_trackPageview']);

      (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
          '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
      })();

      // Facebook Pixel Code Don't Delete
      ! function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
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

        document, 'script', './assets/js/plugins/fbevents.js');

      try {
        fbq('init', '111649226022273');
        fbq('track', "PageView");

      } catch (err) {
        console.log('Facebook Track Error:', err);
      }

    });
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=111649226022273&amp;ev=PageView&amp;noscript=1" />
  </noscript>
  <script>
    $(document).ready(function () {
      md.initDashboardPageCharts();

      md.initVectorMap();

      md.initFullCalendar();

      demo.showSwal();

      // demo.initCharts();

      

      $('#datatables').DataTable({
        "pagingType": "full_numbers",
        "lengthMenu": [
          [10, 25, 50, -1],
          [10, 25, 50, "All"]
        ],
        responsive: true,
        language: {
          search: "_INPUT_",
          searchPlaceholder: "Search records",
        }
      });


      var table = $('#datatable').DataTable();

      // Edit record
      table.on('click', '.edit', function() {
        $tr = $(this).closest('tr');
        var data = table.row($tr).data();
        alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
      });

      // Delete a record
      table.on('click', '.remove', function(e) {
        $tr = $(this).closest('tr');
        table.row($tr).remove().draw();
        e.preventDefault();
      });

      //Like record
      table.on('click', '.like', function() {
        alert('You clicked on Like button');
      });

    });

    

  </script>

</body>

</html>
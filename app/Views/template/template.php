<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Materialize - Material Design Admin Template</title>
  <!-- For Windows Phone -->
  <!-- CORE CSS-->
  <link href="<?= base_url() ?>/assets/dashboard/css//materialize.css" type="text/css" rel="stylesheet">
  <link href="<?= base_url() ?>/assets/dashboard/css//style.css" type="text/css" rel="stylesheet">
  <!-- Custome CSS-->
  <link href="<?= base_url() ?>/assets/dashboard/css/custom/custom.css" type="text/css" rel="stylesheet">
  <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
  <link href="<?= base_url() ?>/assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
</head>

<body>
  <!-- Start Page Loading -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <!-- End Page Loading -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START HEADER -->
  <header id="header" class="page-topbar">
    <!-- start header nav-->
    <div class="navbar-fixed">
      <nav class="navbar-color gradient-45deg-purple-amber">
        <div class="nav-wrapper">
          <ul class="left">
            <li>
              <h1 class="logo-wrapper">
                <a href="" class="brand-logo darken-1">
                  <img src="<?= base_url() ?>/assets/dashboard/images/logo/materialize-logo.png" alt="materialize logo">
                  <span class="logo-text hide-on-med-and-down">Materialize</span>
                </a>
              </h1>
            </li>
          </ul>
          <ul class="right hide-on-med-and-down">
            <li>
              <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                <span class="avatar-status avatar-online">
                  <img src="<?= base_url() ?>/assets/dashboard/images/avatar/avatar-7.png" alt="avatar">
                  <i></i>
                </span>
              </a>
            </li>
          </ul>
          <!-- profile-dropdown -->
          <ul id="profile-dropdown" class="dropdown-content">
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">face</i> Profile</a>
            </li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">settings</i> Settings</a>
            </li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">live_help</i> Help</a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">lock_outline</i> Lock</a>
            </li>
            <li>
              <a href="#" class="grey-text text-darken-1">
                <i class="material-icons">keyboard_tab</i> Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    <!-- end header nav-->
  </header>
  <!-- END HEADER -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->
  <!-- START MAIN -->
  <div id="main">
    <!-- START WRAPPER -->
    <div class="wrapper">
      <!-- START LEFT SIDEBAR NAV-->
      <aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
          <li class="user-details cyan darken-2">
            <div class="row">
              <div class="col col s4 m4 l4">
                <img src="<?= base_url() ?>/assets/dashboard/images/avatar/avatar-7.png" alt="" class="circle responsive-img valign profile-image cyan">
              </div>
              <div class="col col s8 m8 l8">
                <p class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown-nav">John Doe<i class="mdi-navigation-arrow-drop-down right"></i></p>
                <p class="user-roal">Administrator</p>
              </div>
            </div>
          </li>
          <li class="no-padding">
            <ul class="collapsible" data-collapsible="accordion">
              <li class="bold">
                <a href="index.html" class="waves-effect waves-cyan">
                  <i class="material-icons">pie_chart_outlined</i>
                  <span class="nav-text">Dashboard</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
        <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only">
          <i class="material-icons">menu</i>
        </a>
      </aside>
      <!-- END LEFT SIDEBAR NAV-->
      <!-- //////////////////////////////////////////////////////////////////////////// -->
      <!-- START CONTENT -->
      <section id="content">
        <!--start container-->
        <div class="container">
          <!--card widgets start-->
          <div id="card-widgets">
            <div class="row">
              <div class="col s12 m4 l4">
              </div>
              <div class="col s12 m12 l4">
              </div>
              <div class="col s12 m4 l4">
              </div>
            </div>
          </div>
          <!--card widgets end-->
          <!-- //////////////////////////////////////////////////////////////////////////// -->
        </div>
        <!--end container-->
      </section>
      <!-- END CONTENT -->
    </div>
    <!-- END WRAPPER -->
  </div>
  <!-- END MAIN -->
  <!-- //////////////////////////////////////////////////////////////////////////// -->


  <!-- START FOOTER -->
  <footer class="page-footer gradient-45deg-purple-amber">
    <div class="footer-copyright">
      <div class="container">
        <span>Copyright ©
          <script type="text/javascript">
            document.write(new Date().getFullYear());
          </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank">PIXINVENT</a> All
          rights reserved.</span>
        <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-2" href="https://pixinvent.com/">PIXINVENT</a></span>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->
  <!-- ================================================
    Scripts
    ================================================ -->
  <!-- jQuery Library -->
  <script type="text/javascript" src="<?= base_url() ?>/assets/dashboard/vendors/jquery-3.2.1.min.js"></script>
  <!--materialize js-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/dashboard/js/materialize.min.js"></script>
  <!--scrollbar-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/dashboard/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!--plugins.js - Some Specific JS codes for Plugin Settings-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/dashboard/js/plugins.js"></script>
  <!--custom-script.js - Add your own theme custom JS-->
  <script type="text/javascript" src="<?= base_url() ?>/assets/dashboard/js/custom-script.js"></script>
</body>

</html>
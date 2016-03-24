<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>static/img/favicon.png">

    <title>Profile | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo base_url(); ?>static/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="<?php echo base_url(); ?>static/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="<?php echo base_url(); ?>static/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>static/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="<?php echo base_url(); ?>static/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>static/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="index.html" class="logo">Orchsoft <span class="lite">Admin</span></a>
            <!--logo end-->



      </header>
      <!--header end-->

      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">

          <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_document_alt"></i>
                          <span>Department</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url(); ?>index.php/Profile/department">Add Department</a></li>
                          <li><a class="" href="<?php echo base_url(); ?>index.php/Profile/departmentinfo">View Department</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                              <a href="javascript:;" class="">
                                  <i class="icon_document_alt"></i>
                                  <span>Designation</span>
                                  <span class="menu-arrow arrow_carrot-right"></span>
                              </a>
                              <ul class="sub">
                                  <li><a class="" href="<?php echo base_url(); ?>index.php/Profile/designation">Add Designation</a></li>
                                  <li><a class="" href="<?php echo base_url(); ?>index.php/Profile/designationinfo">View Designation</a></li>
                              </ul>
                          </li>


                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Employee Profile</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url(); ?>index.php/Profile/employee">Add Profile</a></li>
                          <li><a class="" href="<?php echo base_url(); ?>index.php/Profile/employeeinfo">View Profile</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Employee Leave</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/">Add Leave</a></li>
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/viewleave">View Leave</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Holidays</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/holiday">Add Holiday</a></li>
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/viewholiday">View Holidays</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Shift Timings</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/shift">Add Shift Timings</a></li>
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/viewshift">View Shift Timings</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_desktop"></i>
                          <span>Overtime</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/overtime">Add Overtime</a></li>
                          <li><a class="" href="<?php echo base_url(); ?>index.php/leave/viewovertime">View Overtime</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->

      </section>
      <!-- container section end -->
      <!-- javascripts -->
      <script src="<?php echo base_url(); ?>static/js/jquery.js"></script>
      <script src="<?php echo base_url(); ?>static/js/bootstrap.min.js"></script>
      <!-- nice scroll -->
      <script src="<?php echo base_url(); ?>static/js/jquery.scrollTo.min.js"></script>
      <script src="<?php echo base_url(); ?>static/js/jquery.nicescroll.js" type="text/javascript"></script>
      <!-- jquery knob -->
      <script src="<?php echo base_url(); ?>static/assets/jquery-knob/js/jquery.knob.js"></script>
      <!--custome script for all page-->
      <script src="<?php echo base_url(); ?>static/js/scripts.js"></script>

      <script>

      //knob
      $(".knob").knob();

      </script>


      </body>
      </html>

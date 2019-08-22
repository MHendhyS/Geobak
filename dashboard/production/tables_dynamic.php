<?php

//index.php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/icon.png" type="image/ico" />

    <title>Dashboard | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <?php 
      include '../../koneksi/koneksi.php';
    ?>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <br/>
               <!--  <?php 
                  if(!isset($_SESSION["name"])){
                ?>
                  <script>window.location.href="Login/index.php"</script>
                <?php }else{ ?>
                <h2><?php echo $_SESSION["name"];?></h2>
              <?php } ?> -->
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="customer.php">Customer</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="tables_dynamic.php">Table Data</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>

        <!-- top navigation -->
        <!-- <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt=""><?php echo $_SESSION["name"];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="Login/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div> -->
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Customer</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Join Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <?php
                       $data = mysqli_query($koneksi,"select * from customer");
                       while($d = mysqli_fetch_array($data)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo "$d[name_customer]"; ?></td>
                          <td width="70%"><?php echo "$d[phone_customer]"; ?></td>
                          <td width="70%"><?php echo "$d[email_customer]"; ?></td>
                          <td width="70%"><?php echo "$d[password_customer]"; ?></td>
                          <td width="70%"><?php echo "$d[date_join_customer]"; ?></td>
                          <!-- <td width="100px"><img src='images/<?php echo "$d[image]";?>' width="100px" height="100px"></td> -->
                          <td width="50px">
                            <button type="button" class="btn btn-success" onclick="window.location.href='editCustomer.php?id_customer=<?php echo $d['id_customer']; ?>'">Edit</button>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='deleteCustomer.php?id_customer=<?php echo $d['id_customer']; ?>'">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Price</th>
                          <th>Unit</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <?php
                       $data = mysqli_query($koneksi,"select * from products");
                       while($d = mysqli_fetch_array($data)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo "$d[name_product]"; ?></td>
                          <td width="70%"><?php echo "$d[description_product]"; ?></td>
                          <td width="70%"><?php echo "$d[price_unit]"; ?></td>
                          <td width="70%"><?php echo "$d[unit]"; ?></td>
                          <!-- <td width="100px"><img src='images/<?php echo "$d[image]";?>' width="100px" height="100px"></td> -->
                          <td width="50px">
                            <button type="button" class="btn btn-success" onclick="window.location.href='editAboutUs.php?id=<?php echo $d['id']; ?>'">Edit</button>
                            <button type="button" class="btn btn-warning" onclick="window.location.href='editAboutUs.php?id=<?php echo $d['id']; ?>'">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Product Category</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Type</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <?php
                       $data = mysqli_query($koneksi,"select * from product_category");
                       while($d = mysqli_fetch_array($data)){
                      ?>
                      <tbody>
                        <tr>
                          <td ><?php echo "$d[name_category]"; ?></td>
                          <td ><?php echo "$d[type]"; ?></td>
                          <td width="15%">
                            <button type="button" class="btn btn-success" onclick="window.location.href='editPortfolio.php?id=<?php echo $d['id']; ?>'">Edit</button>
                            <button type="submit" class="btn btn-warning" onclick="window.location.href='deletePortfolio.php?id=<?php echo $d['id']; ?>'">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Seller</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Address</th>
                          <th>Zipcode</th>
                          <th>Phone Number</th>
                          <th>Email</th>
                          <th>Password</th>
                          <th>Join Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <?php
                       $data = mysqli_query($koneksi,"select * from seller");
                       while($d = mysqli_fetch_array($data)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo "$d[name_seller]"; ?></td>
                          <td><?php echo "$d[address_seller]"; ?></td>
                          <td><?php echo "$d[zipcode]"; ?></td>
                          <td><?php echo "$d[phone_seller]"; ?></td>
                          <td><?php echo "$d[email_seller]"; ?></td>
                          <td><?php echo "$d[password_seller]"; ?></td>
                          <td><?php echo "$d[date_join_seller]"; ?></td>
                          <td width="50px">
                            <button type="button" class="btn btn-success" onclick="window.location.href='editTeam.php?id=<?php echo $d['id']; ?>'">Edit</button>
                            <button type="submit" class="btn btn-warning" onclick="window.location.href='deleteTeam.php?id=<?php echo $d['id']; ?>'">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>About Us</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Date Add</th>
                          <th>Date Edit</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <?php
                       $data = mysqli_query($koneksi,"select * from company_profile");
                       while($d = mysqli_fetch_array($data)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo "$d[title_content]"; ?></td>
                          <td><?php echo "$d[content]"; ?></td>
                          <td><?php echo "$d[date_add]"; ?></td>
                          <td><?php echo "$d[date_edit]"; ?></td>
                          <td width="50px">
                            <button type="button" class="btn btn-success" onclick="window.location.href='editCustomer.php?id=<?php echo $d['id']; ?>'">Edit</button>
                            <button type="submit" class="btn btn-warning" onclick="window.location.href='deleteCustomer.php?id=<?php echo $d['id']; ?>'">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Article</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Title</th>
                          <th>Content</th>
                          <th>Date Add</th>
                          <th>Date Edit</th>
                          <th>Status</th>
                          <th>Editor</th>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <?php
                       $data = mysqli_query($koneksi,"select * from article");
                       while($d = mysqli_fetch_array($data)){
                      ?>
                      <tbody>
                        <tr>
                          <td><?php echo "$d[title_article]"; ?></td>
                          <td><?php echo "$d[content_article]"; ?></td>
                          <td><?php echo "$d[date_add]"; ?></td>
                          <td><?php echo "$d[date_edit]"; ?></td>
                          <td><?php echo "$d[publish_status]"; ?></td>
                          <td><?php echo "$d[id_admin]"; ?></td>
                          <td width="50px">
                            <button type="button" class="btn btn-success" onclick="window.location.href='editCustomer.php?id=<?php echo $d['id']; ?>'">Edit</button>
                            <button type="submit" class="btn btn-warning" onclick="window.location.href='deleteCustomer.php?id=<?php echo $d['id']; ?>'">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                      <?php 
                      }
                    ?>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>
<?php session_start();
if(!$_SESSION['username']=="")
{ 
  include("../admin/services/functions.php");
  $ysql="select * from tbl_category where category_id in (select category_id from tbl_item)";
    $xsql="select * from tbl_sub_category where sub_category_id in (select sub_category_id from tbl_item)";
    $wsql="select * from tbl_brand where brand_id in (select brand_id from tbl_item)";
    $y=select($ysql);
    $x=select($xsql);
    $w=select($wsql);

  $itemsql="SELECT * FROM `tbl_item` WHERE `item_stock`IN (SELECT MAX(`item_stock`) from tbl_item)";
  $item=select($itemsql);
  $a=$item[0]['category_id'];
  $b=$item[0]['sub_category_id'];
  $c=$item[0]['brand_id'];
  $catsql="select * from tbl_category where category_id='$a'";
  $cat=select($catsql);
  $subcatsql="select * from tbl_sub_category where sub_category_id='$b'";
  $subcat=select($subcatsql);
  $brandsql="select * from tbl_brand where brand_id='$c'";
  $brand=select($brandsql);

  $user=$_SESSION['username'];
  $customersql="SELECT * FROM `tbl_customer` WHERE `login_id` IN (SELECT `login_id` FROM tbl_login WHERE user_name = '$user')";
  $customer=select($customersql);
  $cust=$customer[0]['customer_id'];
  $custsql="SELECT * FROM `tbl_customer` WHERE `customer_id`='$cust'";
  $cus=select($custsql);

  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rizwiz Cycles: Home</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

          <!-- Topbar -->
          <div style="background: black" id="topbar">

            <nav class="navbar navbar-expand navbar-dark  static-top shadow">
              <div style="padding-top: 1rem;padding-left: 1rem;" id="logo">
                <h1><a style="text-decoration: none;" href="index.php" >RizWiz Cycles<br><h6>Online Cycle Shop</h6></a></h1>
              </div>
            </nav>
            <nav class="topbar navbar-expand navbar-dark bg-dark mb-4 static-top shadow">
              <!-- Topbar Navbar -->
              <ul class="navbar-nav ml-auto">

               <!-- Nav Item -->
               <li class="nav-item  mx-1">
                <a class="nav-link active font-weight-bold text-white" href="index.php">
                  HOME
                </a>
              </li>

              <!-- Nav Item -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle font-weight-bold text-white" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  CYCLES
                </a>
                <!-- Dropdown - Alerts -->
                <div class=" dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                 <div class="row">
                   <div style="padding: 0;" class="col">
                    <h2 class="dropdown-header">
                      Cycles by age
                    </h2>
                    <?php  foreach($y as $row) { ?>
                      <a class="dropdown-item d-flex align-items-center" href="cycles.php?cat=<?php echo $row['category_id']?>&check=cat">
                        <div>
                          <span class="font-weight-bold"><?php echo $row['category_name']?></span>
                        </div>
                      </a>
                    <?php  } ?>
                  </div>
                  <div style="padding: 0;" class="col">
                    <h2 class="dropdown-header">
                      Cycles by type
                    </h2>
                    <?php  foreach($x as $row) { ?>
                      <a class="dropdown-item d-flex align-items-center" href="cycles.php?subcat=<?php echo $row['sub_category_id']?>&check=subcat">
                        <div>
                          <span class="font-weight-bold"><?php echo $row['sub_category_name']?></span>
                        </div>
                      </a>
                    <?php  } ?>
                  </div>
                  <div style="padding: 0;" class="col">
                    <h2 class="dropdown-header">
                      Cycles by brand
                    </h2>
                    <?php  foreach($w as $row) { ?>
                      <a class="dropdown-item d-flex align-items-center" href="cycles.php?brand=<?php echo $row['brand_id']?>&check=brand">
                        <div>
                          <span class="font-weight-bold"><?php echo $row['brand_name']?></span>
                        </div>
                      </a>
                    <?php  } ?>
                  </div>
                  <div style="padding: 0;" class="col">
                    <a class="dropdown-header dropdown-item d-flex align-items-center" href="cycles.php?check=">
                      <div>
                        <span class="font-weight-bold">All cycles</span>
                      </div>
                    </a>
                  </div>              
                </div>
              </li>

              <!-- Nav Item -->
              <li class="nav-item mx-1">
                <a class="nav-link font-weight-bold text-white" href="contact.php">
                  CONTACT US
                </a>
              </li>

              <!-- Nav Item -->
              <li class="nav-item mx-1">
                <a class="nav-link font-weight-bold text-white" href="about.php">
                  ABOUT US
                </a>
              </li>

              <!-- Nav Item -->
             <?php $cartcountsql="SELECT COUNT(*) FROM tbl_order_child WHERE order_master_id IN (SELECT order_master_id FROM tbl_order_master WHERE order_status='oncart')";
            $cartcount=select($cartcountsql);
            ?>
              <li  class="nav-item no-arrow">
                <a class="nav-link font-weight-bold text-white" href="cart.php">
                  <i class="fas fa-cart-plus fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter"><?php echo $cartcount[0]['COUNT(*)']?></span>
                  <span class="mr-2 d-none d-lg-inline ">CART</span>
                </a>
              </li>

              <!-- Nav Item -->
              <li class="nav-item mx-1">
                <a class="nav-link font-weight-bold text-white" href="profile.php">
                  MY PROFILE
                </a>
              </li>

            </ul>

          </nav>
        </div>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h4 class="m-0 font-weight-bold text-primary">Profile<a style="float: right" class="btn btn-info" href="logout.php">Logout</a></h4>

            </div>
            <div class="card-body"> 
              <div class="row container-fluid">
                <!-- Sidebar -->
                <ul class=" navbar-nav bg-gradient-dark sidebar mb-4 sidebar-dark accordion" id="accordionSidebar">
                  <li class="nav-item  no-arrow mx-1">
                    <div style="padding: 1rem;" class="row justify-content-center">
                      <img class=" btn-circle" style="height: 100%;width: 5rem;" src="img/head.png">
                      
                    </div>
                    <hr>
                     <div style="padding: 1rem;">
                      <a  class="-header -item d-flex align-items-center" href="profile.php">
                        <div>
                          <h6><span class=" font-weight-bold">View Profile</span></h6>
                        </div>
                      </a>
                    </div>
                    <div style="padding: 1rem;">
                      <a  class="-header -item d-flex align-items-center" href="editprofile.php">
                        <div>
                          <h6><span class=" font-weight-bold">Edit Profile</span></h6>
                        </div>
                      </a>
                    </div>
                    <div style="padding: 1rem;">
                      <a  class="-header -item d-flex align-items-center" href="myorders.php">
                        <div>
                          <h6><span class=" font-weight-bold">My Orders</span></h6>
                        </div>
                      </a>
                    </div>
    
                    
                  </li>
                </ul>
                <!-- End of Sidebar -->
                <div class="card-body shadow mb-4">
                  <div class="container-fluid">
                    <form action="" method="post" id="register" >
                <div><br>
                  <h2>Update Deails</h2>
                  <table>
                    <tbody>
                      <tr>
                        <td><label>First Name</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_fname']?>" class="form-control" name="fname" size="40" maxlength="254" /></td>
                      </tr>
                      <tr>
                        <td><label>Last Name</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_lname']?>"  class="form-control" name="lname" size="40" maxlength="128"/></td>
                      </tr>
                      <tr>
                        <td><label>Date Of Birth</label></td>
                        <td><input type="date" required="" value="<?php echo $cus[0]['customer_dob']?>" class="form-control" name="dob" size="40" maxlength="128"/></td>
                      </tr>
                      <tr>
                        <td><label>Gender</label></td>
                        <td><input id="radcheck" checked="" required="" type="radio" name="gender" value="male"/>Male</td>
                        <td><input id="radcheck" required=""  type="radio" name="gender" value="female"/>Female</td>
                      </tr>
                      <tr>
                        <td><label>House name or House number</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_house']?>" class="form-control" name="house_name" size="40" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td><label>Street</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_street']?>" class="form-control" name="street" size="40" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td><label>City</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_city']?>" class="form-control" name="city" size="40" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td><label>District</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_district']?>" class="form-control" name="district" size="40" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td><label>Pin</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_pin']?>" class="form-control" name="pin" size="40" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td><label>Email</label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_email']?>" class="form-control" name="email" size="40" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td><label>Mobile Number </label></td>
                        <td><input type="text" required="" value="<?php echo $cus[0]['customer_phno']?>" class="form-control" name="user_mobile_number" size="40" maxlength="255" /></td>
                      </tr>
                      <tr>
                        <td><label></label></td>
                        <td><?php include("services/useredit.php");  ?></td>
                      </tr>
                    </tbody>
                  </table><br>
                  <input id="submit" class="btn btn-primary" type="submit" name="edituser" value="Save Changes"/> <br><br>
                </div>
              </form>
        
                  </div>
                </div>
              </div>
            </div>


          </div>
          <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-dark text-white">
          <div class="container my-auto">
            <div class="row">

              <div class="col-md-7 footer-info">
                <h3><a href="index.php" >RizWiz Cycles</a></h3>
                <p>RIDE LIKE WIND WITH US! <br>
                  At <strong>Rizwiz</strong> - we believe that cycling makes it a good day for the rider . Buy the best ride that fits you to 'Feel the Freshness of Cycling'.Even it is your first bicycle ride or a triumph over tough terrain or a best buy for your profession we are here to get you the best riding experiance. Explore cycles from top brands like BSA, Hercules, Schwinn, Mach City, Montra, Ridley and many more.</p>
                </div>

                <div class="col footer-links">
                  <h4>Useful Links</h4>

                  <li><a href="inde.php">Home</a></li>
                  <li><a href="cycles.php?check=">Cycles</a></li>
                  <li><a href="about.php">About us</a></li>
                  <li><a href="t&c.html">Terms of service</a></li>
                  <li><a href="privacy.html">Privacy policy</a></li>

                </div>

                <div class="col footer-contact">
                  <h4>Contact Us</h4>
                  <p>
                    RizWiz Cycles,(India)Ltd
                    Ernakulam <br>
                    Kerala, 683532<br>
                    <strong>Phone:</strong> +91 9876543210 <br>
                    <strong>Email:</strong> cycles@rizwiz.com <br>
                  </p>
                </div>


              </div>
              <div class="copyright text-center my-auto">
               <div class="copyright">
                 &copy; Copyright <strong>2019 RizWiz</strong>. All rights reserved.
               </div><br>
               <div class="credits">
                 Designed by <a href="">RizWiz Tech Solutions</a>
               </div>
             </div>
           </div>
         </footer>
         <!-- End of Footer -->

       </div>
       <!-- End of Content Wrapper -->

     </div>
     <!-- End of Page Wrapper -->

     <!-- Scroll to Top Button-->
     <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

  </body>

  </html>
<?php } 
else
{
  include("../admin/services/functions.php");
  alert("You are not signed in.Please login to continue!");
  echo("<script>location.href='../index.php'</script>");
}
?>
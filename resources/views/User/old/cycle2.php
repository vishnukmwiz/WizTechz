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


  $view=$_GET['view'];

$productsql="select * from tbl_item where item_id='$view'";
$product=select($productsql);

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
      <?php 
      $a=$product[0]['category_id'];
      $b=$product[0]['sub_category_id'];
      $c=$product[0]['brand_id'];
      $catsql="select * from tbl_category where category_id='$a'";
      $cat=select($catsql);
      $subcatsql="select * from tbl_sub_category where sub_category_id='$b'";
      $subcat=select($subcatsql);
      $brandsql="select * from tbl_brand where brand_id='$c'";
      $brand=select($brandsql); ?>
      <div class="container-fluid " style="padding-bottom: 0;">
        <div class="card shadow mb-4">
          <div class="card-header py-3">
            <div class="row">
              <h4 class="col-md-8 m-0 font-weight-bold text-primary">Product Details</h4>

            </div>
          </div>
          <div class="row card-body" style="padding-bottom: 0;">
            <img style="height: 50%; width: 50%; padding-bottom: 0;" class="col btn" src="../admin/<?php echo $product[0]['item_image'];?>">
            <div class="col" style="padding-bottom: 0;">

              <img style=" width: 30%;" class="row btn" src="../admin/<?php echo $brand[0]['brand_logo'];?>">
              <h4 class="row m-0 font-weight-bold text-primary"><?php echo $brand[0]['brand_name']." ".$product[0]['item_name']." ".$product[0]['item_measurements']?></h4>

              <hr width="0">
              <a href="#" class=" btn btn-secondary ">
                Price : Rs. <?php echo  $product[0]['item_sellprice']?> /-
              </a><hr width="0">
              <form method="POST">
                  <input type="number" style="width: 4rem;" required="" class="form-control " value="1" name="nval"><label>Piece(s)</label><br>
                  <input type="submit" name="submitbuy" class="btn btn-primary" value="Buy Now">&nbsp;<input type="submit" name="submitcart" class="btn btn-info" value="Add to Cart"><hr width="0"><?php include("services/cart.php")?></form>
              
            </div>
          </div>
          <hr width="0">
          <div class="col container-fluid" style="padding-top: 0;">
            <div class=" tab">
              <button class="col-md-6 tablinks card-header py-3 font-weight-bold text-primary" onclick="openTab(event, 'Basic')">Basic Description</button>
              <button class="col-md-6 tablinks card-header py-3 font-weight-bold text-primary active" onclick="openTab(event, 'Advanced')">About Product</button>
            </div>

            <?php $data=$product[0]['item_id'];
            $d1sql="SELECT * FROM `tbl_item_desc_basic` WHERE `item_id`='$data'";
            $desc=select($d1sql);?>
            <div class="card shadow mb-4">
              <div class="card-body">
                <div id="Basic" class="col tabcontent " style="display: none;">
                  <center>
                    <div class="col ">
                      <table class="divtable">
                        <tbody>
                          <tr>
                            <td><label>Gear type</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['gear_type']; ?>" /></td>
                          </tr>
                          <tr>
                            <td><label>Gender</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['gender_type']; ?>" /></td>
                          </tr>
                          <tr>
                            <td><label>Road type</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['road_type']; ?>" name="roadtype" size="40" maxlength="255" /></td>
                          </tr>
                          <tr>
                            <td><label>Fork type</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['fork_type']; ?>" name="forktype" size="40" maxlength="255" /></td>
                          </tr>
                          <tr>
                            <td><label>Suspension</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['suspension']; ?>" name="suspension" size="40" maxlength="255" /></td>
                          </tr>
                          <tr>
                            <td><label>Usage Type</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['usage_type']; ?>" name="usagetype" size="40" maxlength="255" /></td>
                          </tr>
                          <tr>
                            <td><label>Frame</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['frame_fsize']; ?>" name="frame_fsize" size="40" maxlength="255" /></td>
                          </tr>
                          <tr>
                            <td><label>Tire Size</label></td>
                            <td><input type="text" class="form-control" value="<?php echo $desc[0]['tire_size']; ?>" name="tiresize" size="40" maxlength="255" /></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </center>
                </div>
                <div id="Advanced" class="tabcontent" style="display: block;">
                  <center>
                    <div class="col card-body">
                      <label><?php echo $cat[0]['category_desc']?><br><br><?php echo $subcat[0]['sub_category_desc']?><br><br><?php echo $brand[0]['brand_desc']?></label>
                    </div>
                  </center>
                </div>

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

<script>
  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  }
</script>

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
  echo("<script>location.href='../signin.php'</script>");
  if(isset($_GET['view']))
  {
    $_SESSION['viewitem']=$_GET['view'];
  }

}
?>

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
      <div id="content-wrapper">

        <!-- Main Content -->
        <div id="content">
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- Begin Page Content -->
       
            <?php 
           
                      $totprice=0;
                      $user=$_SESSION['username'];
                      $customersql="SELECT * FROM `tbl_customer` WHERE `login_id` IN (SELECT `login_id` FROM tbl_login WHERE user_name = '$user')";
                      $customer=select($customersql);
                      $cust=$customer[0]['customer_id'];
                      $custsql="SELECT * FROM `tbl_customer` WHERE `customer_id`='$cust'";
                      $cus=select($custsql);
                      $omastersql="SELECT * FROM tbl_order_master WHERE order_status='oncart' and customer_id='$cust'";
                      $ord=select($omastersql); 
                      $mid=$ord[0]['order_master_id'];
                      $ochildsql="SELECT * FROM tbl_order_child WHERE order_master_id='$mid'";
                      $ord2=select($ochildsql);?><?php 
                        foreach ($ord2 as $j => $row2) {
                          $pid=$row2['item_id'];
                          $prosql="SELECT * FROM tbl_item WHERE item_id='$pid' ";
                          $pro=select($prosql);?>      
                <?php } ?>
              


          <!-- Page Heading -->
          <div class=" align-items-center mb-4">
            <h1 class="h3 text-info">Enter Card Details</h1>
          </div>
          <div class="col-md-4 card shadow mb-4">           
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered" id="dataTable"  cellspacing="0">
                    <form action="" method="post">
                      <label>Card Number</label>
                      <input type="number" class="form-control" name="cardnumber" maxlength="16" required="">
                      <label>Expiry Date</label>
                      <input type="month" class="form-control" name="date" min="<?php echo date('Y-m-d'); ?>" required="">
                      <label>CVV</label>
                      <input type="Number" class="form-control" name="cvv" size="3" maxlength="3" pattern="[1-9] {3}" max="999" min="000" title="3 digit cvv on the back of your card" required="">
                      <input type="submit" class="btn btn-primary" name="submitorder2" value="Pay">
                    </form>


                </table> <?php include("services/cart.php"); ?>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      
     </div>
     <!-- End of Content Wrapper -->

   </div>
   <!-- End of Page Wrapper -->

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
}
?>
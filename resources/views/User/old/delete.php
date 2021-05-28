<?php
include("../admin/services/functions.php");
$id=$_GET['id'];
$sql="DELETE FROM tbl_order_child where order_child_id='$id'";
if(mysqli_query($conn,$sql))
{
$sql1="SELECT order_master_id FROM tbl_order_master where order_status='oncart'";
$res=select($sql1);
$id1=$res[0]['order_master_id'];
$sql2="SELECT COUNT(*) FROM tbl_order_child where order_master_id='$id1'";
$res2=select($sql2);
$COUNT=$res2[0]['COUNT(*)'];
if($COUNT==0)
	{
		$sql3="DELETE FROM tbl_order_master where order_master_id='$id1'";
		$res1=delete($sql3);
		echo("<script>location.href='cycles.php?check='</script>");
	}
	else
	{
		echo("<script>location.href='cart.php'</script>");
	}
exit;
}
else
{
 echo "Error deleting record ";
}
?>
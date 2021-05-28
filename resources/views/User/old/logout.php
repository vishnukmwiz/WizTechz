<?php
session_start();
$_SESSION['username']="";

session_unset();
$_SESSION['username']="";
echo("<script>location.href='../index.php'</script>");
?>

<?php
session_start();
require_once "../../connectDB.php";


$uid = $_GET['uid'];

  $query = "DELETE FROM `user` WHERE user_id = '$uid'";
  if( mysqli_query($conn, $query)){
    $_SESSION['success'] = "ลบข้อมูลสมาชิกสำเร็จ";
    echo '<script>alert("ลบข้อมูลสมาชิกสำเร็จ"); window.location="/project/admin/membertables.php";</script>';
  }else{
    $_SESSION['error'] = "ลบข้อมูลสมาชิกผิดพลาด";
    echo '<script>alert("ลบข้อมูลสมาชิกผิดพลาด"); window.location="/project/admin/membertables.php";</script>';
  }

?>

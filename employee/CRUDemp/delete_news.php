<?php
session_start();
require_once "../../connectDB.php";


$id = $_GET['id'];

  $query = "DELETE FROM `new` WHERE new_id = '$id'";
  if( mysqli_query($conn, $query)){
    $_SESSION['success'] = "ลบข้อมูลข่าวประชาสัมพันธ์สำเร็จ";
    echo '<script>alert("ลบข้อมูลข่าวประชาสัมพันธ์สำเร็จ"); window.location="/project/employee/news.php";</script>';
  }else{
    $_SESSION['error'] = "ลบข้อมูลข่าวประชาสัมพันธ์ผิดพลาด";
    echo '<script>alert("ลบข้อมูลข่าวประชาสัมพันธ์ผิดพลาด"); window.location="/project/employee/news.php";</script>';
  }

?>

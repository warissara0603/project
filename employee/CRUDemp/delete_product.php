<?php
session_start();
require_once "../../connectDB.php";


$id = $_GET['id'];

  $query = "DELETE FROM `product` WHERE product_id = '$id'";
  if( mysqli_query($conn, $query)){
    $_SESSION['success'] = "ลบข้อมูลสินค้าสำเร็จ";
    echo '<script>alert("ลบข้อมูลสินค้าสำเร็จ"); window.location="/project/employee/consignment.php";</script>';
  }else{
    $_SESSION['error'] = "ลบข้อมูลสินค้าผิดพลาด";
    echo '<script>alert("ลบข้อมูลสินค้าผิดพลาด"); window.location="/project/employee/consignment.php";</script>';
  }

?>

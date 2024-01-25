<?php
session_start();
require_once "../../connectDB.php";


$id = $_GET['id'];

  $query = "DELETE FROM `promotion` WHERE promotion_id = '$id'";
  if( mysqli_query($conn, $query)){
    $_SESSION['success'] = "ลบข้อมูลโปรโมชั่นสำเร็จ";
    echo '<script>alert("ลบข้อมูลโปรโมชั่นสำเร็จ"); window.location="/project/employee/board.php";</script>';
  }else{
    $_SESSION['error'] = "ลบข้อมูลโปรโมชั่นผิดพลาด";
    echo '<script>alert("ลบข้อมูลโปรโมชั่นผิดพลาด"); window.location="/project/employee/board.php";</script>';
  }

?>

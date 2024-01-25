<?php
session_start();
require_once "../../connectDB.php";


  $id = $_SESSION['userid'];

  $query = "DELETE FROM `user` WHERE user_id = '$id'";
  $result = mysqli_query($conn, $query);

    if($result){
      session_destroy();
      $_SESSION['success'] = "ลบบัญชีสมาชิกสำเร็จ";
      echo '<script>alert("ลบบัญชีสมาชิกสำเร็จ"); window.location="/project/index.php";</script>'; 
    }else{
      $_SESSION['error'] = "ลบบัญชีสมาชิกผิดพลาด";
      echo '<script>alert("ลบบัญชีสมาชิกผิดพลาด"); window.location="/project/index.php";</script>'; 
    }

?>

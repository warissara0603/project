<?php
session_start();
require_once "../../connectDB.php";

if(isset($_POST['submitUpdateUser'])){
  $name = $_POST['name'];
  $username = $_POST['username'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  $uid = $_POST['user_id'];


  $query = "UPDATE `user` SET `username`='$username',`name`='$name',`email`='$email',`phone`='$phone',`address`='$address' WHERE user_id = '$uid'";
  $result = mysqli_query($conn, $query);

    if($result){
      $_SESSION['success'] = "แก้ไขข้อมูลสมาชิกสำเร็จ";
      echo '<script>alert("แก้ไขข้อมูลสมาชิกสำเร็จ"); window.location="/project/admin/membertables.php";</script>'; 
    }else{
      $_SESSION['error'] = "แก้ไขข้อมูลสมาชิกผิดพลาด";
      echo '<script>alert("แก้ไขข้อมูลสมาชิกผิดพลาด"); window.location="/project/admin/profile.php";</script>'; 
    }
}
?>

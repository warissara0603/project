<?php
session_start();
require_once "connectDB.php";

if(isset($_POST['submitregister'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];
  

  $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
  $result = mysqli_query($connectdb,$user_check);
  $user = mysqli_fetch_assoc($result);

  if($user['username']===$username){
    echo "<script>alert('ชื่อผู้ใช้นี้มีคนใช้แล้ว');</script>";
    
  }else{
    $passwordenc = md5($password);

    $query = "INSERT INTO user (username, password, name, email, phone, address, status)
              VALUE('$username','$passwordenc','$name','$email','$phone','$address','m')";

    $result = mysqli_query($connectdb, $query);

    if($result){
      $_SESSION['success'] = "เพิ่มข้อมูลสมาชิกสำเร็จ";
      header("Location: index.php");
    }else{
      $_SESSION['error'] = "เพิ่มข้อมูลสมาชิกผิดพลาด";
      header("Location: index.php");
    }


  }
}
?>

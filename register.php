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
  $result = mysqli_query($conn,$user_check);
  $user = mysqli_fetch_assoc($result);

  

  if($user['username']===$username){
    echo '<script>alert("ชื่อผู้ใช้ซ้ำ"); window.location="/project/index.php";</script>'; 
    
  }else{
    $passwordenc = md5($password);

    $query = "INSERT INTO `user`(`username`, `password`, `name`, `email`, `phone`, `address`, `status`) VALUES ('$username','$passwordenc','$name','$email','$phone','$address','m')";

    $result2 = mysqli_query($conn, $query);

    if($result2){
      $_SESSION['success'] = "เพิ่มข้อมูลสมาชิกสำเร็จ";
      echo '<script>alert("เพิ่มข้อมูลสมาชิกสำเร็จ"); window.location="/project/index.php";</script>'; 
    }else{
      $_SESSION['error'] = "เพิ่มข้อมูลสมาชิกผิดพลาด";
      echo '<script>alert("เพิ่มข้อมูลสมาชิกผิดพลาด"); window.location="/project/index.php";</script>'; 
    }


  }
}
?>

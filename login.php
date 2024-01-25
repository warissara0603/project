<?php
session_start();
require_once "connectDB.php";

if(isset($_POST['submitlogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $passwordenc = md5($password);

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1){
      $row = mysqli_fetch_array($result);

      $_SESSION['userid'] = $row['user_id'];
      $_SESSION['username'] = $row['name'];
      $_SESSION['status'] = $row['status'];

      if($_SESSION['status'] == 'a'){
        header("Location: /project/admin/index.php");
      }

      if($_SESSION['status'] == 'm'){
        header("Location: /project/member/index.php");
      }

      if($_SESSION['status'] == 'c'){
        header("Location: /project/cooperative/index.php");
      }

      if($_SESSION['status'] == 'e'){
        header("Location: /project/employee/index.php");
      }

      if($_SESSION['status'] == 'g'){
        header("Location: /project/manager/index.php");
      }
    } else {
      echo '<script>alert("ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง"); window.location="/project/index.php";</script>'; 
      // header("Location: /project/index.php");
    } 
  }
?>
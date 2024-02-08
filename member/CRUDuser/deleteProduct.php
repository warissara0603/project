<?php
    session_start();
    require_once "../../connectDB.php";

    $id = $_GET['id'];

    $query = "DELETE FROM `cart` WHERE `cart_id` = '$id'";

    if( mysqli_query($conn, $query)){
        $_SESSION['success'] = "ลบสินค้าสำเร็จ";
        echo '<script>alert("ลบสินค้าสำเร็จ"); window.location="/project/member/cart.php";</script>';
      }else{
        $_SESSION['error'] = "ลบสินค้าผิดพลาด";
        echo '<script>alert("ลบสินค้าผิดพลาด");</script>'; 
      }
?>
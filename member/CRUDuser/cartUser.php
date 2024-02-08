<?php
session_start();
require_once "../../connectDB.php";


  $pid = $_GET['pid'];
  $id = $_SESSION['userid'];
  $amount = 1;
  $status = "รอการตรวจสอบ";

  $product_check = "SELECT * FROM cart WHERE user_id = '$id'";
  $result = mysqli_query($conn,$product_check);
  $cart = mysqli_fetch_assoc($result);
  echo "1";
  $std=0;
  while($row = mysqli_fetch_array($result)){
    if ($row["product_id"] === $pid) {
        $std = 1;
    }
  }
  //เช็คชื่อสินค้าซ้ำในฐานข้อมูล
  if($std == 1){
    $_SESSION['error'] = "เพิ่มข้อมูลโปรโมชันผิดพลาด";
    $query2 = "UPDATE `cart` SET `amount`= `amount` + 1 WHERE `product_id` = $pid AND `user_id` = $id";
    $result2 = mysqli_query($conn, $query2);
    echo '<script>alert("เพิ่มสินค้า จำนวน 1 ชิ้น"); window.location="/project/member/shop.php";</script>';
    
  }else{
    
    $query = "INSERT INTO `cart`(`product_id`, `user_id`, `amount`, `status`) VALUES ('$pid','$id','$amount','$status')";

    $result2 = mysqli_query($conn, $query);

    if($result2){
      $_SESSION['success'] = "เพิ่มสินค้าสำเร็จ";
      echo '<script>alert("เพิ่มสินค้าสำเร็จ"); window.location="/project/member/cart.php";</script>'; 
    }else{
      $_SESSION['error'] = "เพิ่มสินค้าผิดพลาด";
      echo '<script>alert("เพิ่มสินค้าผิดพลาด"); window.location="/project/member/shop.php";</script>'; 
    }
  }


?>

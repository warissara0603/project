<?php
session_start();
require_once "../../connectDB.php";

if(isset($_POST['submitaddproduct'])){
  $name = $_POST['name'];
  $name_product = $_POST['name_product'];
  $detail = $_POST['detail'];
  $price = $_POST['price'];
  $type_pro = $_POST['type_pro'];
  $amount = $_POST['amount'];
  $dateadd = $_POST['dateadd'];

  //อัพโหลดรูปภาพ
  if(is_uploaded_file($_FILES['pic_product']['tmp_name'])){
    $newimages = 'product_'.uniqid().".".pathinfo(basename($_FILES['pic_product']['name']), PATHINFO_EXTENSION);
    $pathimage = "../../assets/img/products/".$newimages;
    move_uploaded_file($_FILES['pic_product']['tmp_name'], $pathimage);
  }

  $product_check = "SELECT * FROM product WHERE name_product = '$name_product' LIMIT 1";
  $result = mysqli_query($conn,$product_check);
  $product = mysqli_fetch_assoc($result);

  //เช็คชื่อสินค้าซ้ำในฐานข้อมูล
  if($product['name_product']===$name_product){
    echo '<script>alert("ชื่อสินค้านี้มีอยู่ในระบบแล้ว"); window.location="/project/employee/addproduct.php";</script>'; 
    
  }else{

    $query = "INSERT INTO `product`(`name`, `name_product`, `detail`, `price`, `type_pro`, `pic_product`, `amount`, `dateadd`) VALUES ('$name','$name_product','$detail','$price','$type_pro','$newimages','$amount','$dateadd')";

    $result2 = mysqli_query($conn, $query);

    if($result2){
      $_SESSION['success'] = "เพิ่มสินค้าสมาชิกสำเร็จ";
      echo '<script>alert("เพิ่มสินค้าสมาชิกสำเร็จ"); window.location="/project/employee/consignment.php";</script>'; 
    }else{
      $_SESSION['error'] = "เพิ่มสินค้าสมาชิกผิดพลาด";
      echo '<script>alert("เพิ่มสินค้าสมาชิกผิดพลาด"); window.location="/project/employee/addproduct.php";</script>'; 
    }
  }
}
?>

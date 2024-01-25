<?php
session_start();
require_once "../../connectDB.php";

if(isset($_POST['submitUpdateProduct'])){
    $name = $_POST['name'];
    $name_product = $_POST['name_product'];
    $detail = $_POST['detail'];
    $price = $_POST['price'];
    $type_pro = $_POST['type_pro'];
    $amount = $_POST['amount'];
    $dateadd = $_POST['dateadd'];
    $proid = $_POST['product_id'];

        if(is_uploaded_file($_FILES['pic_product']['tmp_name'])){
            $newimages = 'editimg_'.uniqid().".".pathinfo(basename($_FILES['pic_product']['name']), PATHINFO_EXTENSION);
            $pathimage = "../../assets/img/products/".$newimages;
            move_uploaded_file($_FILES['pic_product']['tmp_name'], $pathimage);
        }else{
            $newimages = $_POST['imgpro'];
        }

  $query = "UPDATE product SET name = '$name', name_product = '$name_product', detail = '$detail', price = '$price', type_pro = '$type_pro', pic_product = '$newimages', amount = '$amount', dateadd = '$dateadd' WHERE product_id = '$proid'";
  $result = mysqli_query($conn, $query);

    if($result){
      $_SESSION['success'] = "แก้ไขข้อมูลสินค้าสำเร็จ";
      echo '<script>alert("แก้ไขข้อมูลสินค้าสำเร็จ"); window.location="/project/employee/consignment.php";</script>'; 
    }else{
      $_SESSION['error'] = "แก้ไขข้อมูลสินค้าผิดพลาด";
      echo '<script>alert("แก้ไขข้อมูลสินค้าผิดพลาด"); window.location="/project/employee/consignment.php";</script>'; 
    }
}
?>

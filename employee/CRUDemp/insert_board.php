<?php
session_start();
require_once "../../connectDB.php";

if(isset($_POST['submitaddpromotion'])){
  $title = $_POST['title'];
  $detail = $_POST['detail'];


  //อัพโหลดรูปภาพ
  if(is_uploaded_file($_FILES['pic_promotion']['tmp_name'])){
    $newimages = 'promotion_'.uniqid().".".pathinfo(basename($_FILES['pic_promotion']['name']), PATHINFO_EXTENSION);
    $pathimage = "../../assets/img/promotion/".$newimages;
    move_uploaded_file($_FILES['pic_promotion']['tmp_name'], $pathimage);
  }

  $promotion_check = "SELECT * FROM promotion WHERE title = '$title' LIMIT 1";
  $result = mysqli_query($conn,$promotion_check);
  $promotion = mysqli_fetch_assoc($result);

  //เช็คชื่อสินค้าซ้ำในฐานข้อมูล
  if($promotion['title']===$title){
    echo '<script>alert("ชื่อโปรโมชันนี้มีอยู่ในระบบแล้ว"); window.location="/project/employee/addboard.php";</script>'; 
    
  }else{

    $query = "INSERT INTO `promotion`(`title`, `detail`, `pic_promotion`) VALUES ('$title','$detail','$newimages')";

    $result2 = mysqli_query($conn, $query);

    if($result2){
      $_SESSION['success'] = "เพิ่มข้อมูลโปรโมชันสำเร็จ";
      echo '<script>alert("เพิ่มข้อมูลโปรโมชันสำเร็จ"); window.location="/project/employee/board.php";</script>'; 
    }else{
      $_SESSION['error'] = "เพิ่มข้อมูลโปรโมชันผิดพลาด";
      echo '<script>alert("เพิ่มข้อมูลโปรโมชันผิดพลาด"); window.location="/project/employee/addboard.php";</script>'; 
    }
  }
}
?>

<?php
session_start();
require_once "../../connectDB.php";

if(isset($_POST['submitaddnews'])){
  $title = $_POST['title'];
  $detail = $_POST['detail'];


  //อัพโหลดรูปภาพ
  if(is_uploaded_file($_FILES['pic_new']['tmp_name'])){
    $newimages = 'news_'.uniqid().".".pathinfo(basename($_FILES['pic_new']['name']), PATHINFO_EXTENSION);
    $pathimage = "../../assets/img/latest-news/".$newimages;
    move_uploaded_file($_FILES['pic_new']['tmp_name'], $pathimage);
  }

  $news_check = "SELECT * FROM new WHERE title = '$title' LIMIT 1";
  $result = mysqli_query($conn,$news_check);
  $news = mysqli_fetch_assoc($result);

  //เช็คชื่อสินค้าซ้ำในฐานข้อมูล
  if($news['title']===$title){
    echo '<script>alert("ชื่อข่าวประชาสัมพันธ์นี้มีอยู่ในระบบแล้ว"); window.location="/project/employee/addnews.php";</script>'; 
    
  }else{

    $query = "INSERT INTO `new`(`title`, `detail`, `pic_new`) VALUES ('$title','$detail','$newimages')";

    $result2 = mysqli_query($conn, $query);

    if($result2){
      $_SESSION['success'] = "เพิ่มข้อมูลข่าวประชาสัมพันธ์สำเร็จ";
      echo '<script>alert("เพิ่มข้อมูลข่าวประชาสัมพันธ์สำเร็จ"); window.location="/project/employee/news.php";</script>'; 
    }else{
      $_SESSION['error'] = "เพิ่มข้อมูลข่าวประชาสัมพันธ์ผิดพลาด";
      echo '<script>alert("เพิ่มข้อมูลข่าวประชาสัมพันธ์ผิดพลาด"); window.location="/project/employee/addnews.php";</script>'; 
    }
  }
}
?>

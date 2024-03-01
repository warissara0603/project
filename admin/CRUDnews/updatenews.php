<?php
session_start();
require_once "../../connectDB.php";

if(isset($_POST['submitupdatenews'])){
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    $id = $_POST['new_id'];

        if(is_uploaded_file($_FILES['pic_new']['tmp_name'])){
            $newimages = 'editimg_'.uniqid().".".pathinfo(basename($_FILES['pic_new']['name']), PATHINFO_EXTENSION);
            $pathimage = "../../assets/img/latest-news/".$newimages;
            move_uploaded_file($_FILES['pic_new']['tmp_name'], $pathimage);
        }

  $query = "UPDATE new SET title = '$title', detail = '$detail', pic_new = '$newimages'  WHERE new_id = '$id'";
  $result = mysqli_query($conn, $query);

    if($result){
      $_SESSION['success'] = "แก้ไขข้อมูลข่าวประชาสัมพันธ์สำเร็จ";
      echo '<script>alert("แก้ไขข้อมูลข่าวประชาสัมพันธ์สำเร็จ"); window.location="/project/admin/news.php";</script>'; 
      
    }else{
      $_SESSION['error'] = "แก้ไขข้อมูลข่าวประชาสัมพันธ์ผิดพลาด";
      echo '<script>alert("แก้ไขข้อมูลข่าวประชาสัมพันธ์ผิดพลาด"); window.location="/project/admin/editoreditornews.php";</script>'; 
    }
}
?>

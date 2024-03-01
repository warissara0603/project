<?php
session_start();
require_once "../../connectDB.php";

if(isset($_POST['submitupdatepromotion'])){
    $title = $_POST['title'];
    $detail = $_POST['detail'];
    $proid = $_POST['promotion_id'];

        if(is_uploaded_file($_FILES['pic_promotion']['tmp_name'])){
            $newimages = 'editimg_'.uniqid().".".pathinfo(basename($_FILES['pic_promotion']['name']), PATHINFO_EXTENSION);
            $pathimage = "../../assets/img/promotion/".$newimages;
            move_uploaded_file($_FILES['pic_promotion']['tmp_name'], $pathimage);
        }

  $query = "UPDATE promotion SET title = '$title', detail = '$detail', pic_promotion = '$newimages'  WHERE promotion_id = '$proid'";
  $result = mysqli_query($conn, $query);

    if($result){
      $_SESSION['success'] = "แก้ไขข้อมูลโปรโมชั่นสำเร็จ";
      echo '<script>alert("แก้ไขข้อมูลโปรโมชั่นสำเร็จ"); window.location="/project/admin/board.php";</script>'; 
    }else{
      $_SESSION['error'] = "แก้ไขข้อมูลโปรโมชั่นผิดพลาด";
      echo '<script>alert("แก้ไขข้อมูลโปรโมชั่นผิดพลาด"); window.location="/project/admin/editorboard.php";</script>'; 
    }
}
?>

<?php
    session_start();
    require_once "../../connectDB.php";

    if(isset($_POST['submitOrder'])){
        $id = $_SESSION['userid'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $price = $_POST['price'];
        $date = $_POST['date'];
        $datetime = $_POST['datetime'];

        //เพิ่มรูปภาพสลิป
        if(is_uploaded_file($_FILES['profile_pic']['tmp_name'])){
            $newimages = 'order_'.uniqid().".".pathinfo(basename($_FILES['profile_pic']['name']), PATHINFO_EXTENSION);
            $pathimage = "../../assets/img/orders/".$newimages;
            move_uploaded_file($_FILES['profile_pic']['tmp_name'], $pathimage);
          }

        $order_check = "INSERT INTO `oder`(`user_id`, `name`, `address`, `phone`, `price`, `date`, `datetime`, `img_order`) VALUES ('$id','$name','$address','$phone','$price','$date','$datetime','$newimages')";
        $result = mysqli_query($conn,$order_check);
        $product = mysqli_fetch_assoc($result);

        if($result){
            $_SESSION['success'] = "ยืนยันคำสั่งสำเร็จ";
            echo '<script>alert("ยืนยันคำสั่งสำเร็จ"); window.location="/project/member/index.php";</script>'; 
            die(); 
        }else{
            $_SESSION['error'] = "เพิ่มสินค้าผิดพลาด";
            echo '<script>alert("เพิ่มสินค้าผิดพลาด"); window.location="/project/member/cart.php";</script>';
            die(); 
        }
    }
?>
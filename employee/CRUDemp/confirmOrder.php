<?php
    session_start();
    require_once "../../connectDB.php";

    if(isset($_POST['confirmOrder'])){
        $tracknumber = $_POST['tracking_number'];
        $id = $_GET['id'];

        $query = "INSERT INTO `deilver`(`cart_id`, `tracking_number`) VALUES ('$id','$tracknumber')";
    }
?>
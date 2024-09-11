<?php
include_once('connect.php');
if(isset($_GET['delete'])){
    $get_id = $_GET['delete'];
    $sql = "DELETE FROM `data_table` WHERE id = $get_id";
    $result = mysqli_query($conn , $sql);
    // print_r($result) or die();
    if($result){
        header("location:display.php");
    }
    else{
        header('location:display.php');
    }

}





?>
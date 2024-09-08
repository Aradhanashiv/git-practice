<?php
include_once ("connect.php");

// if(isset($_POST['submit'])){
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $age = $_POST['age'];
//     $phone = $_POST['phone'];
//     $gender = $_POST['gender'];
//     $sql = "INSERT INTO `data_table` (`name`, `email`, `age`, `phone`, `gender`) 
//     VALUES ('$name','$email','$age','$phone','$gender')";
//     $result = mysqli_query($conn , $sql);
//     if($result){
//         echo "Insertion Successful";
//     }
//     else{
//         echo "insertion lost";
//     }

// }

$nameErr = $emailErr = $ageErr = $phoneErr = $genderErr = "";


if($_SERVER['REQUEST_METHOD'] == "POST"){

    function test_input($data){
        $data = trim($data);
        $data = htmlspecialchars($data);
        $data = stripslashes($data);
        return $data;
    }

    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $age = test_input($_POST['age']);
    $phone = test_input($_POST['phone']);
    $gender = test_input($_POST['gender']);

    if(!preg_match("/^[a-zA-Z' ]*$/" , $name)){
        $nameErr = "Only aplhabets and whitespace are Required";
    }

    if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $emailErr = "Email address is not valid";
    }

    if(!preg_match("/^[0-9]{10)$/" , $phone)){
        $ageErr = "Only aplhabets and whitespace are Required";
    }

    $sql = "INSERT INTO `data_table` (`name`, `email`, `age`, `phone`, `gender`) 
     VALUES ('$name','$email','$age','$phone','$gender')";
     $result = mysqli_query($conn , $sql);
     if($result){
         echo "Insertion Successful";
     }
     else{
         echo "insertion lost";
     }



    
}











?>
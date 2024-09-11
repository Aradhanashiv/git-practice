<?php
include_once ("connect.php");
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
    $profession = test_input($_POST['profession']);
    $phone = test_input($_POST['phone']);
    $gender = test_input($_POST['gender']);

    if(!preg_match("/^[a-zA-Z' ]*$/" , $name)){
        $nameErr = "Only aplhabets and whitespace are Required";
    }

    if(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $emailErr = "Email address is not valid";
    }

    if(!preg_match("/^[0-9]{10}$/" , $phone)){
        $ageErr = "Only aplhabets and whitespace are Required";
    }

    $sql = "INSERT INTO `data_table` (`name`, `email`, `age`,`profession`, `phone`, `gender`) 
     VALUES ('$name','$email','$age', '$profession', '$phone','$gender')";
     $result = mysqli_query($conn , $sql);
     if($result){
         header('location:display.php');
     }
     else{
        header('location:display.php');
     }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crud Form Application</h1>
    <form action="" method="POST">
        Name: <input type="text" placeholder="name" name="name" required>
        <span><?php echo $nameErr; ?></span>
        <br>
        <br>Email: <input type="text" placeholder="email" name="email" required><br>
        <br>Age: <input type="number" placeholder="age" name="age" required><br>
        <br>Profession: <input type="profession" placeholder="designation" name="profession" required><br>
        <br>Phone: <input type="phone" placeholder="phone" name="phone" required><br>
        <br>Gender:<select name="gender" required>
        <option value="Choose">Choose</option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Others">Others</option>
    </select><br>
    <br><button style="background-color:pink" type="submit" value="submit" name="submit">Submit</button>
    </form>
</body>
</html>
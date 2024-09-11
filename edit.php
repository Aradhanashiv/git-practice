<?php  include_once('connect.php'); 
if(isset($_POST['edit'])){
    $take_id = $_POST['person_id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $profession = $_POST['profession'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `data_table` SET  `name` = '$name', `email` = '$email', 
    `age`= '$age' ,`profession` = '$profession', `phone`= '$phone', `gender` = '$gender' where id = $take_id";
     
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
    <title>Edit Form</title>
</head>
<body>
<form action="" method="POST">
<?php
if(isset($_GET['edit'])){
    $get_id = $_GET['edit'];
   $sql = "SELECT * FROM `data_table` where id = $get_id";
   $result = mysqli_query($conn,$sql);
   $data = mysqli_fetch_assoc($result);
?> <input type="hidden"  name="person_id" value="<?php echo $data['id'];    ?>">
        Name: <input type="text" value="<?php echo $data['name'];    ?>" name="name" required>
        <br>
        <br>Email: <input type="text" value="<?php echo $data['email'];    ?>" name="email" required><br>
        <br>Age: <input type="number" value="<?php echo $data['age'];    ?>" name="age" required><br>
        <br>Profession: <input type="profession" value="<?php echo $data['profession'];    ?>" name="profession" required><br>
        <br>Phone: <input type="phone" value="<?php echo $data['phone'];    ?>" name="phone" required><br>
        <br>Gender:<select name="gender" required>
        <option><?php echo $data['gender'];    ?></option>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Others">Others</option>
    </select><br>
    <br><button style="background-color:pink" type="submit" value="submit" name="edit">Update</button>

    <?php
    }
    ?>
    </form>
</body>
</html>
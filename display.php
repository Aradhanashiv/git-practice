<?php 
include_once ('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table{
            margin:3rem;
        }
    </style>
</head>
<body>
    <h1>Data Table</h1>
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email</th>
      <th>Age</th>
      <th>Profession</th>
      <th>Phone</th>
      <th>Gender</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
  <?php


$sql = "SELECT * FROM `data_table`";
$result = mysqli_query($conn , $sql);
$row = mysqli_num_rows($result);
$r_id = 1;
if($row > 0){
    while($row_data = mysqli_fetch_assoc($result)){
       
  
?>
    <tr>
      <th><?php echo ($r_id);  ?></th>
      <td><?php echo $row_data['name'];  ?></td>
      <td><?php echo $row_data['email'];  ?></td>
      <td><?php echo $row_data['age'];  ?></td>
      <td><?php echo $row_data['profession'];  ?></td>
      <td><?php echo $row_data['phone'];  ?></td>
      <td><?php echo $row_data['gender'];  ?></td>
      <td><a href="edit.php?edit=<?php echo $row_data['id'];  ?>">edit</a></td>
      <td><a href="delete.php?delete=<?php echo $row_data['id'];  ?>">delete</a></td>
    </tr>
   
  </tbody>

  <?php
  $r_id++;
  }
  
}
  ?>
</table>
</body>
</html>










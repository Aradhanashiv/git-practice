<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crud Form Application</h1>
    <form action="insert.php" method="POST">
        Name: <input type="text" placeholder="name" name="name" required>
        <span><?php echo $nameErr; ?></span>
        <br>
        <br>Email: <input type="text" placeholder="email" name="email" required><br>
        <br>Age: <input type="number" placeholder="age" name="age" required><br>
        <br>Phone: <input type="phone" placeholder="phone" name="phone" required><br>
        <br>Gender:<select name="gender" required>
            <option value="Female">Female</option>
            <option value="Male">Male</option>
            <option value="Others">Others</option>
    </select><br>
    <br><button style="background-color:pink" type="submit" value="submit" name="submit">Submit</button>
    </form>
</body>
</html>
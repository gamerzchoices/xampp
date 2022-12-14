<?php

include 'connection.php';

$id = $_GET['id'];

$editQuery = "SELECT * FROM users WHERE id = '$id'";
$editResult = $conn->query($editQuery);

while ($row = mysqli_fetch_array($editResult)) {

    $editName = $row['fullname'];
    $editEmail = $row['email'];
    $editPassword = $row['password'];
}

if (isset($_POST['update'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Query = "UPDATE users SET fullname='$name', email='$email', password ='$password' WHERE id='$id'";

    $result = $conn->query($Query);

    echo "User updated";
    header("location:login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update User</title>
</head>

<body>

    <header>
        <h1>Sound Vibes</h1>
        <h3>Quality music without ads</h3>
    </header>

    <form action="update.php?id=<?php echo $id ?>" method="POST">

        <label for="">Name</label><br>
        <input type="text" name="name" value="<?php echo $editName ?>"><br><br>

        <label for="">Email</label><br>
        <input type="email" name="email" value="<?php echo $editEmail ?>"><br><br>

        <label for="">Password</label><br>
        <input type="password" name="password" value="<?php echo $editPassword ?>"><br><br>

        <input type="submit" name="update" value="Update">

    </form>
    <footer>Copyright &#169; 2022 Sound Vibes</footer>
</body>

</html>
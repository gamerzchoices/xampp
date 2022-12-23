<?php

include 'connection.php';


if (isset($_POST['register'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Query = "INSERT INTO users(fullname,email,password) VALUE('$fullname','$email','$password')";
    $result = $conn->query($Query);

    if ($result == TRUE) {
        header("location:login.php");
    } else {
        echo "Fill details properly";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header>
        <h1>Welcome to Official Website of Prabesh Gupta</h1>
        <p>Designer and Digital Marketer</p>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="interest.php">Interest</a>
        <a href="qualification.php">Qualification</a>
        <a href="gallery.php">Gallery</a>
        <a href="contact.php">Contact</a>
        <div class="nav-right">
            <a href="register.php">Register</a>
            <a href="login.php">Login</a>
        </div>
    </nav>

    <h2 style="padding: 10px;">Register a new account</h2>

    <div class="register">
        <form action="register.php" method="POST">

            <label>Full Name</label><br>
            <input type="text" name="fullname" require><br>

            <label>Email</label><br>
            <input type="email" name="email" require><br>

            <label>Password</label><br>
            <input type="password" name="password" require><br>
            <label>Confirm Password</label><br>
            <input type="password" name="password" require><br>

            <input type="submit" value="Register" name="register">
                
            
        </form>
    </div><br>

    <div class="member"><p><h4>Already a member? <a href="login.php">Login</a></h4></p></div>

    <footer>
        <p>Copyright &copy;2022 Prabesh Gupta</p>
    </footer>

</body>

</html>
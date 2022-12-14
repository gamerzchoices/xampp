<?php

include 'connection.php';

if (isset($_POST['signup'])) {

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $Query = "INSERT INTO users(fullname,email,password) VALUE('$fullname','$email','$password')";

    $result = $conn->query($Query);

    if ($result == TRUE) {
        header("location:dashboard.php");
    } else {
        echo "Fill the form";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>

<body>

    <header>
        <h1>Sound Vibes</h1>
        <h3>Quality music without ads</h3>
    </header>

    <div class="soundvibes">
        <form action="signup.php" method="POST">
            <fieldset>
                <legend>Signup</legend><br>

                <label for="name">Full Name</label><br>
                <input type="text" name="fullname" id="fullname" required><br><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" id="pasword" required><br><br>

                <label for="password">Confirm Password</label><br>
                <input type="password" name="password" id="pasword" required><br><br>

                <input type="submit" name="signup" value="Sign Up">

            </fieldset>

        </form>
    </div>

    <div class="already">
        <p><em>Already have an account? </em><a href="login.php"><big>Login</big></a></p>
    </div>

    <footer>Copyright &#169; 2022 Sound Vibes</footer>


</body>

</html>
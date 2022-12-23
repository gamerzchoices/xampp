<?php

include 'connection.php';

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $Query = "SELECT * FROM users WHERE email='$email' AND password='$password' ";

    $result = $conn->query($Query);

    if (mysqli_num_rows($result) === 1) {
        $check = mysqli_fetch_assoc($result);


        if ($check['email'] === $email && $check['password'] === $password) {
            $_SESSION['email'] = $email;
            header("location:dashboard.php");
        }
    } else {
        echo ("Wrong email or password");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

    <header>
        <h1>Sound Vibes</h1>
        <h3>Quality music without ads</h3>
    </header>

    <div class="soundvibes">
        <form action="login.php" method="POST">
            <fieldset>
                <legend>Login</legend><br>

                <label for="email">Email</label><br>
                <input type="email" name="email" id="email" required><br><br>

                <label for="password">Password</label><br>
                <input type="password" name="password" id="pasword" required><br><br>


                <input type="submit" name="login" value="Login">

            </fieldset>

        </form>
    </div>

    <div class="no">
        <p><em>Don't have an account? </em><a href="signup.php"><big>Sign up</big></a></p>
    </div>

    <footer>Copyright &#169; 2022 Sound Vibes</footer>


</body>

</html>
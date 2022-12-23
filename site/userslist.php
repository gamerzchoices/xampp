<?php

include 'connection.php';

if (!$_SESSION['email']) {
    header("location:login.php");
}

$Query = "SELECT * FROM users";
$result =  $conn->query($Query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>

<body>

    <header>
        <h1>Sound Vibes</h1>
        <h3>Quality music without ads</h3>
    </header>

    <div class="usersList">
        <table border="4">
            <thead>
                <tr>
                    <th>Sn</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>


            <tbody>

                <?php
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_array($result)) {

                ?>
                        <tr>
                            <td><?php echo "$row[id]" ?></td>
                            <td><?php echo "$row[fullname]" ?></td>
                            <td><?php echo "$row[email]" ?></td>
                            <td><?php echo "$row[subscription]" ?></td>
                            <td><a style="color: blue;" href="update.php?id=<?php echo "$row[id]" ?>">Edit</a>
                                <a style="color: red;" href="delete.php?id=<?php echo "$row[id]" ?>">Delete</a>
                            </td>

                        </tr>


            </tbody>

    <?php }
                } ?>

        </table>

    </div>


    <footer>Copyright &#169; 2022 Sound Vibes</footer>


</body>

</html>
<?php

include 'connection.php';

$Query = "SELECT * FROM users";

$result= mysqli_query($conn,$Query);

$i =1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
    <link rel="stylesheet" href="change.css">
</head>
<body>

<center><h2>Gamerz Choices Users</h2></center>

<table>
    <tr>
        <th>SN</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Method</th>
    </tr>

    <?php while($row = mysqli_fetch_array($result)) { ?>
    <tr>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row['fullName']; ?></td>
        <td><?php echo $row['emailAddress']; ?></td>
        <td><?php echo $row['status']; ?></td>
        <td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
    <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
    </tr>

    <?php } ?>
</table>
    
</body>
</html>
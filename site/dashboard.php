<?php
include 'connection.php';

if (!$_SESSION['email']) {
    header("location:login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sound Vibes</title>
</head>

<body>

    <header>
        <h1>Sound Vibes</h1>
        <h3>Quality music without ads</h3>
    </header>

    <section>
        <div class="english songs">

            <p style="color: #0E971F;"><b>English Songs</b></p>

            <a href="https://www.youtube.com/watch?v=eVTXPUF4Oz4"><img src="https://is2-ssl.mzstatic.com/image/thumb/Music124/v4/b5/96/44/b59644e7-35ed-534f-e5d5-0b1be469ad20/4680960922220.jpg/400x400cc.jpg" alt="I tried so hard" height=200px" width="200px"></a>

            <a href="https://www.youtube.com/watch?v=LPgN4EfzUrU"><img src="https://cdn.dribbble.com/users/2407274/screenshots/9647549/15_calm_down_4x.jpg" alt="Calm down" height="200px" width="200px"></a>

            <a href="https://www.youtube.com/watch?v=-j0dlcfekqw"><img src="https://cdns-images.dzcdn.net/images/artist/53b12da5bd0c860cea563a47c7710925/200x200.jpg" alt="Billionera" height="200px" width="200px"></a>

        </div>
    </section>


    <footer>Copyright &#169; 2022 Sound Vibes</footer>

</body>

</html>
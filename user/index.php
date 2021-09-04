<?php

session_start();

include("../pack/config/config.php");

if (!$_SESSION['status']) {
        ?>
        <script>
                window.location.replace("../");
        </script>
        <?php
}

$id = $_SESSION['id'];

$get_user = "SELECT * FROM `people` WHERE `id` = '$id'";
$get_result = mysqli_query($connection, $get_user);
$user = mysqli_fetch_assoc($get_result);

?>

<!doctype html>
<html lang="en">
<head>
        <title>پنل کاربر</title>

        <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>

        <link href="../pack/css/dark.css" rel="stylesheet" type="text/css">
        <link href="../pack/css/light.css" rel="stylesheet" type="text/css">
        <link href="../pack/css/main.css" rel="stylesheet" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        </head>
        <body>
                <div class="app">
                        <div class="user">
                                <p>
                                        خوش آمدید 
                                        <b><?php echo $user['name']; ?></b>
                                </p>
                                <hr>
                        </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                        crossorigin="anonymous"></script>
        </body>
</html>
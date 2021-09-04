<?php
session_start();

if ($_SESSION['status']) {
        ?>
        <script>
                window.location.replace("user");
        </script>
        <?php
}

?>

<!doctype html>
<html lang="en">
<head>
        <title>اپلیکیشن مدریت تسک های ناربن</title>

        <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>

        <link href="pack/css/dark.css" rel="stylesheet" type="text/css">
        <link href="pack/css/light.css" rel="stylesheet" type="text/css">
        <link href="pack/css/main.css" rel="stylesheet" type="text/css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        </head>
        <body>
                <div class="app">
                        <div class="welcome">
                                <h1>
                                        به اپلیکیشن
                                        <br>
                                        <br>
                                        مدریت تسک های ناربن
                                        <br>
                                        <br>
                                        خوش آمدید
                                </h1>
                                <br>
                                <hr>
                                <p>
                                        <span class="right">
                                                <a href="auth" class="welink">
                                                        <i class="fa fa-sign-in"></i>
                                                        ورود به حساب کاربری
                                                </a>
                                        </span>
                                        <!-- <span class="left">
                                                <a href="auth" class="welink">
                                                        <i class="fa fa-plus"></i>
                                                        ساخت حساب کاربری جدید
                                                </a>
                                        </span> -->
                                </p>
                        </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                        crossorigin="anonymous"></script>
        </body>
</html>
<?php
session_start();

if ($_SESSION['status']) {
        ?>
        <script>
                window.location.replace("user");
        </script>
        <?php
}

include("auth/core.php");

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
                                        <a href="auth" data-bs-toggle="modal" data-bs-target="#loginuser" class="welink">
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

<form method="post" action="index.php">
    <div class="modal fade form" id="loginuser" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">ورود کاربر</h5>
                </div>
                <div class="modal-body center">
                    <label class="form-label" for="email">ایمیل</label>
                    <input type="text" id="email" placeholder="ایمیل" name="email" class="form-control">
                    <br>
                    <label class="form-label" for="password">رمز ورود</label>
                    <input type="password" id="password" placeholder="رمز ورود" name="password" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">خروج</button>
                    <button type="submit" name="login" class="btn btn-dark">ورود</button>
                </div>
            </div>
        </div>
    </div>
</form>
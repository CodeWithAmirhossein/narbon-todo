<?php
session_start();

if ($_SESSION['status']) {
        ?>
        <script>
                window.location.replace("../user");
        </script>
        <?php
}

?>

<!doctype html>
<html lang="en">
<head>
    <title>ورود به حساب کاربری</title>

    <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>

    <link href="../pack/css/dark.css" rel="stylesheet" type="text/css">
    <link href="../pack/css/light.css" rel="stylesheet" type="text/css">
    <link href="../pack/css/main.css" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
    <div class="app">
        <div class="form">
            <div class="row">
                <div class="col-md-4">
                    <div class="formdialog">
                        <form action="index.php" method="post">
                            <label for="email" class="form-label">ایمیل</label>
                            <input name="email" type="text" class="form-control" id="email" placeholder="ایمیل">
                            <br>
                            <label for="password" class="form-label">رمز ورود</label>
                            <input name="password" text="password" class="form-control" id="password" placeholder="رمز ورود">
                            <br>
                            <button class="btn btn-dark">ورود به حساب</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
            crossorigin="anonymous"></script>
</body>
</html>
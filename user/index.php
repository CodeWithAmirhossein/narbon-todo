<?php

session_start();

include("../pack/config/config.php");
include("core.php");

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
                                        <span class="right">
                                                خوش آمدید 
                                                <b><?php echo $user['name']; ?></b>
                                        </span>
                                        <span class="left">
                                                <i data-bs-toggle="modal" data-bs-target="#addnew" class="fa fa-plus addnew"></i>

                                                <a href="../auth/logout.php" class="logout">
                                                        <i class="fa fa-sign-out"></i>
                                                </a>
                                        </span>
                                </p>
                                <br>
                                <hr>
                                <div class="row">
                                        <div class="col-md-12">
                                                <table class="table">
                                                        <thead>
                                                                <tr class="tblhd">
                                                                        <th scope="col">کد</td>
                                                                        <th scope="col">نام</td>
                                                                        <th scope="col">تاریخ ثبت</td>
                                                                        <th scope="col">وضعیت</td>
                                                                        <th scope="col">تغییر وضعیت</td>
                                                                </tr>
                                                        </thead>
                                                        <tbody>
                                                                <?php
                                                                if (mysqli_num_rows($get_tasks_result) < 0) {
                                                                        echo "در حال حاضر شما تسکی را ثبت نکرده اید";
                                                                }
                                                                else {
                                                                        while ($task_row = mysqli_fetch_assoc($get_tasks_result)) {
                                                                                ?>
                                                                                <tr class="tblrow">
                                                                                        <td><?php echo $task_row["taskid"]; ?></td>
                                                                                        <td><?php echo $task_row["name"]; ?></td>
                                                                                        <td><?php echo $task_row["date"]; ?></td>
                                                                                        <td>
                                                                                                <?php
                                                                                                        if ($task_row["status"] == "pending") {
                                                                                                                echo "<i class='fa fa-clock-o'></i>";
                                                                                                        }
                                                                                                ?>
                                                                                        </td>
                                                                                        <td>
                                                                                                <i class="fa fa-check"></i>
                                                                                                <i class="fa fa-times"></i>
                                                                                                <i class="fa fa-trash"></i>
                                                                                        </td>
                                                                                </tr>
                                                                                <?php
                                                                        }
                                                                }
                                                                ?>
                                                        </tbody>
                                                </table>
                                        </div>
                                </div>
                        </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
                        crossorigin="anonymous"></script>
        </body>
</html>

<form method="post" action="index.php">
    <div class="modal fade form" id="addnew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اضافه کردن تسک جدید</h5>
                </div>
                <div class="modal-body center">
                        <label class="form-label" for="task">نام تسک</label>
                        <input type="text" name="task" id="task" class="form-control" placeholder="نام تسک">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">خروج</button>
                    <button class="btn btn-sm btn-dark" trype="submit" name="addtask">اضافه کردن</button>
                </div>
            </div>
        </div>
    </div>
</form>
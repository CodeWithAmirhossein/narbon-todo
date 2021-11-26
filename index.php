<?php

include('pack/config/config.php');

?>

<!doctype html>
<html lang="en">

<head>
        <title>Donit</title>
        <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link href="pack/css/style.css" rel="stylesheet" type="text/css">
        <script src="pack/js/tabs.js"></script>
</head>

<body class="main">
        <p>
                <span class="text-primary"><i class="fa fa-plus"></i> Add</span>
                &nbsp;
                <span class="text-dark"><i class="fa fa-home"></i> Home</span>
                &nbsp;
                <span class="text-success"><i class="fa fa-check"></i> Done</span>
                &nbsp;
                <span class="text-danger right"><i class="fa fa-trash"></i> Trash</span>
        </p>
        <hr>

        <!-- Start Trash -->
        <div id="home" style="display: none;">
                <?php
                $query = mysqli_query($connection, "SELECT * FROM tasks WHERE `status` = 'home'");
                if (mysqli_num_rows($query) != 0) {
                        while ($task = mysqli_fetch_assoc($query)) {
                                echo $task['name'];
                        }
                } else {
                        echo "<p>Nothing added.</p>";
                }
                ?>
        </div>
        <!-- End Trash -->

        <!-- Start Trash -->
        <div id="done" style="display: none;">
                <?php
                $query = mysqli_query($connection, "SELECT * FROM tasks WHERE `status` = 'done'");
                if (mysqli_num_rows($query) != 0) {
                        while ($task = mysqli_fetch_assoc($query)) {
                                echo $task['name'];
                        }
                } else {
                        echo "<p>Nothing added.</p>";
                }
                ?>
        </div>
        <!-- End Trash -->

        <!-- Start Trash -->
        <div id="trash" style="display: none;">
                <?php
                $query = mysqli_query($connection, "SELECT * FROM tasks WHERE `status` = 'trash'");
                if (mysqli_num_rows($query) != 0) {
                        while ($task = mysqli_fetch_assoc($query)) {
                                echo $task['name'];
                        }
                } else {
                        echo "<p>Nothing added.</p>";
                }
                ?>
        </div>
        <!-- End Trash -->

        <!-- Start Add -->
        <div id="add" style="display: block;">
                <form action="index.php" method="post">
                        <input placeholder="Task name" name="task" class="form-control border border-primary text-primary">
                        <br>
                        <button name="add" class="btn btn-primary" type="submit">Add</button>
                </form>
        </div>
        <!-- End Add -->
</body>

</html>
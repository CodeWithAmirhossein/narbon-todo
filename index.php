<?php

define('server', 'localhost');
define('user', 'amir');
define('password', 'amir');
define('database', 'donit');

$connection = mysqli_connect(server, user, password, database);

if (isset($_POST['add'])) {
        $task = $_POST['task'];
        $date = date("F j, Y, g:i a");
        $id = rand(111111111, 999999999);

        if (mysqli_query($connection, "INSERT INTO tasks(`name`, `id`, `status`, `date`) VALUES ('$task', '$id', 'home', '$date')")) {
?>
                <script>
                        window.alert('Added');
                        window.location.replace('.');
                </script>
        <?php
        } else {
        ?>
                <script>
                        window.alert(<?php echo mysqli_error($connection); ?>);
                        window.location.replace('.');
                </script>
<?php
        }
}

if (isset($_GET['home'])) {
        $id = $_GET['home'];

        mysqli_query($connection, "UPDATE tasks SET `status` = 'home' WHERE `id` = '$id'");
}

if (isset($_GET['done'])) {
        $id = $_GET['done'];

        mysqli_query($connection, "UPDATE tasks SET `status` = 'done' WHERE `id` = '$id'");
}

if (isset($_GET['trash'])) {
        $id = $_GET['trash'];

        mysqli_query($connection, "UPDATE tasks SET `status` = 'trash' WHERE `id` = '$id'");
}

?>

<!doctype html>
<html lang="en">

<head>
        <title>Donit</title>
        <script src="https://kit.fontawesome.com/4a679d8ec0.js" crossorigin="anonymous"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <style>
                .main {
                        padding: 5%;
                        background-color: #f1f1f1;
                }

                .item {
                        background-color: white;
                        padding: 1%;
                        border-radius: 5px;
                }

                .navigator {
                        background-color: white;
                        padding: 1%;
                }

                .right {
                        float: right;
                }

                .navitem {
                        cursor: pointer;
                }
        </style>
        <script>
                function changeTab(show) {
                        if (show == 'home') {
                                document.getElementById('home').style.display = 'block';
                                document.getElementById('add').style.display = 'none';
                                document.getElementById('done').style.display = 'none';
                                document.getElementById('trash').style.display = 'none';
                                return false;
                        } else if (show == 'add') {
                                document.getElementById('add').style.display = 'block';
                                document.getElementById('home').style.display = 'none';
                                document.getElementById('done').style.display = 'none';
                                document.getElementById('trash').style.display = 'none';
                                return false;
                        } else if (show == 'trash') {
                                document.getElementById('trash').style.display = 'block';
                                document.getElementById('home').style.display = 'none';
                                document.getElementById('done').style.display = 'none';
                                document.getElementById('add').style.display = 'none';
                                return false;
                        } else if (show == 'done') {
                                document.getElementById('done').style.display = 'block';
                                document.getElementById('home').style.display = 'none';
                                document.getElementById('add').style.display = 'none';
                                document.getElementById('trash').style.display = 'none';
                                return false;
                        }
                }
        </script>
</head>

<body class="main">
        <p>
                <span onclick="return changeTab('add');" class="navitem text-primary"><i class="fa fa-plus"></i> Add</span>
                &nbsp;
                <span onclick="return changeTab('home');" class="navitem text-dark"><i class="fa fa-home"></i> Home</span>
                &nbsp;
                <span onclick="return changeTab('done');" class="navitem text-success"><i class="fa fa-check"></i> Done</span>
                &nbsp;
                <span onclick="return changeTab('trash');" class="navitem text-danger right"><i class="fa fa-trash"></i> Trash</span>
        </p>
        <hr>

        <!-- Start Trash -->
        <div id="home" style="display: block;">
                <?php
                $query = mysqli_query($connection, "SELECT * FROM tasks WHERE `status` = 'home'");
                if (mysqli_num_rows($query) != 0) {
                        while ($task = mysqli_fetch_assoc($query)) {
                ?>
                                <div class="item border border-dark">
                                        <span>
                                                <span class="text-dark"><?php echo $task['name']; ?></span>
                                                <span class="right">
                                                        <span class="text-success">
                                                                <a class="text-success" href="?done=<?php echo $task['id']; ?>"><i class="fa fa-check"></i></a>
                                                        </span>
                                                        &nbsp;
                                                        <span class="text-danger">
                                                                <a class="text-danger" href="?trash=<?php echo $task['id']; ?>"><i class="fa fa-trash"></i></a>
                                                        </span>
                                                </span>
                                        </span>
                                </div>
                                <br>
                <?php
                        }
                } else {
                        echo "<p class='text-dark'>Nothing added.</p>";
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
                ?>
                                <div class="item border border-success">
                                        <span>
                                                <span class="text-success"><?php echo $task['name']; ?></span>
                                                <span class="right">
                                                        <span class="text-dark">
                                                                <a class="text-dark" href="?home=<?php echo $task['id']; ?>"><i class="fa fa-home"></i></a>
                                                        </span>
                                                        &nbsp;
                                                        <span class="text-danger">
                                                                <a class="text-danger" href="?trash=<?php echo $task['id']; ?>"><i class="fa fa-trash"></i></a>
                                                        </span>
                                                </span>
                                        </span>
                                </div>
                                <br>
                <?php
                        }
                } else {
                        echo "<p class='text-success'>Nothing added.</p>";
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
                ?>
                                <div class="item border border-danger">
                                        <span>
                                                <span class="text-danger"><?php echo $task['name']; ?></span>
                                                <span class="right">
                                                        <span class="text-success">
                                                                <a class="text-success" href="?done=<?php echo $task['id']; ?>"><i class="fa fa-clock"></i></a>
                                                        </span>
                                                        &nbsp;
                                                        <span class="text-danger">
                                                                <a class="text-danger" href="?trash=<?php echo $task['id']; ?>"><i class="fa fa-trash"></i></a>
                                                        </span>
                                                </span>
                                        </span>
                                </div>
                                <br>
                <?php
                        }
                } else {
                        echo "<p class='text-danger'>Nothing added.</p>";
                }
                ?>
        </div>
        <!-- End Trash -->

        <!-- Start Add -->
        <div id="add" style="display: none;">
                <form action="index.php" method="post">
                        <input placeholder="Task name" name="task" class="form-control border border-primary text-primary" required>
                        <br>
                        <button name="add" class="btn btn-primary" type="submit">Add</button>
                </form>
        </div>
        <!-- End Add -->
</body>

</html>

<!-- DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks`
(
    `row`      int(11) NOT NULL AUTO_INCREMENT,
    `name`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `id`     text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `status`    text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    `date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
    PRIMARY KEY (`row`)
); -->
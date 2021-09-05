<?php

if (!$_SESSION['status']) {
    ?>
    <script>
            window.location.replace("../");
    </script>
    <?php
}

$errors = array();

$id = $_SESSION['id'];

$get_user_query = "SELECT * FROM `people` WHERE `id` = '$id'";
$get_user_result = mysqli_query($connection, $get_user_query);
$user = mysqli_fetch_assoc($get_user_result);

$get_tasks_query = "SELECT * FROM `tasks` WHERE `userid` = '$id'";
$get_tasks_result = mysqli_query($connection, $get_tasks_query);

date_default_timezone_set('Iran');

if (isset($_POST["addtask"])) {
    $task = mysqli_real_escape_string($connection, $_POST['task']);

    if (empty($task)) {
        array_push($errors, "نام تسک را وارد کنید.");
    }

    if (count($errors) == 0) {
        $datetime = date("M d, Y H:i:s");
        $taskid = rand(111111, 999999);
        
        $add = "INSERT INTO `tasks` (`taskid`, `userid`, `name`, `date`, `status`) VALUES ('$taskid', '$id', '$task', '$datetime', 'pending')";

        if (mysqli_query($connection, $add)) {
            ?>
                <script>
                    window.alert("تسک اضافه شد.");
                    window.location.replace(".");
                </script>
            <?php
        }
        else {
            ?>
                <script>
                    window.alert("<?php echo mysqli_error($connection   ); ?>");
                    window.location.replace(".");
                </script>
            <?php
        }
    }
}
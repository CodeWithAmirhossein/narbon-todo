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

$get_user = "SELECT * FROM `people` WHERE `id` = '$id'";
$get_result = mysqli_query($connection, $get_user);
$user = mysqli_fetch_assoc($get_result);

date_default_timezone_set('Iran');

if (isset($_POST["addtask"])) {
    $task = mysqli_real_escape_string($connection, $_POST['task']);

    if (empty($task)) {
        array_push($errors, "نام تسک را وارد کنید.");
    }

    if (count($errors) == 0) {
        $datetime = date();
        $taskid = rand(111111, 999999);
        
        $add = "INSERT INTO `tasks` (`taskid`, `userid`, `name`, `date`, `status`) VALUES ('$taskid', `$id`, `$task`, `$datetime`, `pending`)";
    }
}
<?php

include("pack/config/config.php");

$errors = array();

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    if (empty($email)) {
        array_push($errors, "ایمیل الزامیست.");
    }
    if (empty($password)) {
        array_push($errors, "رمز الزامیست.");
    }

    if (count($errors) == 0) {
        $login_query = "SELECT * FROM `people` WHERE `email` = '$email' AND `password` = '$password'";
        if (mysqli_query($connection, $login_query)) {
            ?>
                <script>
                    window.location.replace("user");
                </script>
            <?php
        }
        else {
            ?>
                <script>
                    window.alert("<?php echo mysqli_error($connection); ?>");
                </script>
            <?php
        }
    }
}
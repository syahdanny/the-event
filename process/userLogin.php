<?php
include 'conSQL.php';
session_start();
$error = '';

if(!empty($_POST["username"]) || !empty($_POST["password"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";

    $result = mysqli_query($con, $query);

    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $level = $row["level"];

        if($level == 1) {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../admin.php");
        } else {
            $_SESSION["username"] = $username;
            $_SESSION["level"] = $level;
            header("Location: ../dasbor.php");
        }
    } else {
        $error = urlencode("Username atau password salah!");
        header("Location: ../index.php?pesan=$error");
    }

    mysqli_close($con);

} else {
    echo "masuk";
    die();
    $error = urlencode("Username atau password kosong!");
    header("Location: ../index.php?pesan=$error");
}
?>